<?php

    function Dirtree($path, $name = "Upload to: Home", $prefix = "") {
        if(isset($_SESSION["tinymce_upload_directory"]) AND $_SESSION["tinymce_upload_directory"] == $path){
            $list = '<option value="'.$path.'" selected="selected">'.$prefix.''.$name.'</option>';
        }else{
            $list = '<option value="'.$path.'">'.$prefix.''.$name.'</option>';
        }

        $dircont = scandir($path);
        if(count($dircont) > 0){
            foreach($dircont as $file){
                if(is_file($path . $file)){
                    //do nothing
                }elseif($file !== '.' && $file !== '..'){
                    $list .= Dirtree($path . $file . '/', $file, $prefix . '&hellip; ');
                }
            }
        }
        return $list;
    }


    function startsWith($haystack,$needle,$case=true) {
        if($case){return (strcmp(substr($haystack, 0, strlen($needle)),$needle)===0);}
        return (strcasecmp(substr($haystack, 0, strlen($needle)),$needle)===0);
    }

    function lc_delete($targ) {
        if(is_dir($targ)){
            $files = glob($targ . '*', GLOB_MARK); //GLOB_MARK adds a slash to directories returned
            foreach($files as $file){
                lc_delete($file);
            }
            rmdir($targ);
        }else{
            unlink($targ);
        }
    }

    function scandirSorted($path) {
        $sortedData = array();
        $dircont = scandir($path);
        if(count($dircont) > 0){
            foreach($dircont as $file){
                if(is_file($path . $file)){
                    if(ValidFileExtension($file)){
                        array_push($sortedData, array('is_file'=>true, 'name'=>$file, 'path'=>PathToUrl($path) . $file, 'p'=>$path . $file, 's'=> filesize($path . $file)));
                    }
                }elseif($file !== '.' && $file !== '..'){
                    $count = count(scandirSorted($path . $file . '/'));
                    array_unshift($sortedData,  array('is_file'=>false, 'name'=>$file, 'path'=>$path . $file . '/', 'i'=>$count));
                }
            }
        }
        return $sortedData;
    }

    function SearchFiles($path){
        $sortedData = array();
        $dircont = scandir($path);
        if(count($dircont) > 0){
            foreach($dircont as $file){
                if(is_file($path . $file)){
                    if(ValidFileExtension($file)){
                        $sortedData[] = array(0=>PathToUrl($path) . $file, 1=>$file);
                    }
                }elseif($file !== '.' && $file !== '..'){
                    array_merge($sortedData,  SearchFiles($path . $file . '/'));
                }
            }
        }
        return $sortedData;
    }

    function PathToUrl($path){
        if($path == LIBRARY_FOLDER_PATH){
            return LIBRARY_FOLDER_URL;
        }else{
            $url = str_replace(LIBRARY_FOLDER_PATH,"",$path);
            //array_shift($url);// Remove root of lib

            if($url != ""){
                return LIBRARY_FOLDER_URL . $url;
            }else{
                return LIBRARY_FOLDER_URL;
            }
        }
    }

    function ValidFileExtension($name){
        $allowed_extensions = explode(',', ALLOWED_IMG_EXTENSIONS);
        $extension = strtolower(GetExtension($name));
        if (in_array($extension, $allowed_extensions, TRUE)){
            return true;
        } else {
            return false;
        }
    }

    function GetExtension($filename){
        $x = explode('.', $filename);
        return end($x);
    }

    function clean($str) {
        if(is_array($str)){
            $return = array();
            foreach($str as $k=>$v){
                $return[clean($k)] = clean($v);
            }
            return $return;
        }else{
            $str = @trim($str);
            return $str;
        }
    }

    function set_filename($path, $filename){
        $filename = clean_file_name($filename);
        $file_ext = GetExtension($filename);
        if ( ! file_exists($path.$filename)){
            return $filename;
        }
        $new_filename = str_replace('.'.$file_ext, '', $filename);
        for ($i = 1; $i < 300; $i++){			
            if ( ! file_exists($path.$new_filename.'_'.$i.'.'.$file_ext)){
                $new_filename .= '_'.$i.'.'.$file_ext;
                break;
            }
        }
        return $new_filename;
    }

    function clean_file_name($filename){
        $invalid = array("<!--","-->","'","<",">",'"','&','$','=',';','?','/',"%20","%22","%3c","%253c","%3e","%0e","%28","%29","%2528","%26","%24","%3f","%3b", "%3d");		
        $filename = str_replace($invalid, '', $filename);
        $filename = preg_replace("/\s+/", "_", $filename);
        return stripslashes($filename);
    }

    function MBToBytes($number){
        return $number*pow(1024,2);
    }

    function DoUpload($field = 'userfile'){
        $th_watermark = isset($_REQUEST["th_watermark"])? $_REQUEST["th_watermark"]:0;
        $output = array();
        $output["success"] = true;

        if(isset($_SESSION["tinymce_upload_directory"]) AND $_SESSION["tinymce_upload_directory"] != ""){
            $current_folder = $_SESSION["tinymce_upload_directory"];
        }else{
            $current_folder = LIBRARY_FOLDER_PATH;
        }

        if(!CanAcessUploadForm()){
            $output["reason"] = "No permission to upload.";
            $output["success"] = false;
            return $output;
        }

        if(!isset($_FILES[$field])){
            $output["reason"] = "File not selected.";
            $output["success"] = false;
            return $output;
        }

        if(!is_uploaded_file($_FILES[$field]['tmp_name'])){
            $error = (!isset($_FILES[$field]['error'])) ? 4 : $_FILES[$field]['error'];
            $output["success"] = false;
            switch($error){
                case 1:	// UPLOAD_ERR_INI_SIZE
                    $output["reason"] = "File exceeds limit size.";
                    break;
                case 2: // UPLOAD_ERR_FORM_SIZE
                    $output["reason"] = "File exceeds limit size.";
                    break;
                case 3: // UPLOAD_ERR_PARTIAL
                    $output["reason"] = "File uploaded partially.";
                    break;
                case 4: // UPLOAD_ERR_NO_FILE
                    $output["reason"] = "File not selected.";
                    break;
                case 6: // UPLOAD_ERR_NO_TMP_DIR
                    $output["reason"] = "No temp directory.";
                    break;
                case 7: // UPLOAD_ERR_CANT_WRITE
                    $output["reason"] = "Unable to write the file.";
                    break;
                case 8: // UPLOAD_ERR_EXTENSION
                    $output["reason"] = "Invalid extension.";
                    break;
                default :   
                    $output["reason"] = "File not selected.";
                    break;
            }

            return $output;
        }

        if(!ValidFileExtension($_FILES[$field]['name'])){
            $output["reason"] = "Invalid extension.";
            $output["success"] = false;
            return $output;
        }

        $file_name = set_filename($current_folder, $_FILES[$field]['name']);

        if(!@copy($_FILES[$field]['tmp_name'], $current_folder.$file_name)){
            if(!@move_uploaded_file($_FILES[$field]['tmp_name'], $current_folder.$file_name)){
                $output["reason"] = "Could not move file.";
                $output["success"] = false;
                return $output;
            }
        }
        // resize
        $image = new SimpleImage();
        $image->load($current_folder.$file_name);

        $org_width = $image->getWidth();

        if($org_width>1000){
            $org_height = $image->getHeight(); 
            $max_height= $org_height*1000/$org_width;
            $image->resize(1000,$max_height);
            $image->save($current_folder.$file_name);  
        } 

        // đóng dấu    
        if($th_watermark==1){
            watermarkImage($current_folder.$file_name);
        }

        if(!isset($_SESSION['SimpleImageManager'])){
            $_SESSION['SimpleImageManager'] = array();
        }
        $_SESSION['SimpleImageManager'][] = PathToUrl($current_folder).$file_name;

        $output["file"] = PathToUrl($current_folder).$file_name;

        return $output;
    }
    //Watermark

    function watermarkImage($source_file) { 

        $im    = imagecreatefromjpeg($source_file);
        $save_watermark_photo_address = $source_file;

        // Set the margins for the stamp and get the height/width of the stamp image
        $width_org = imagesx($im);

        $path_wm = '/wm_801_1000px.png';

        if($width_org<300){
            $path_wm = '/wm_300-down.png';  
        } 
        else if($width_org<410) {
            $path_wm = '/wm_301_410px.png';   
        }
        else if($width_org<600) {
            $path_wm = '/wm_411_600px.png';   
        }
        else if($width_org<800) {
            $path_wm = '/wm_601_800px.png';   
        }  
        $stamp = imagecreatefrompng(dirname(__FILE__).$path_wm);         

        $marge_right = 10;
        $marge_bottom = 5;
        $sx = imagesx($stamp);
        $sy = imagesy($stamp);

        // Copy the stamp image onto our photo using the margin offsets and the photo 
        // width to calculate positioning of the stamp. 

        imagecopy($im, $stamp, imagesx($im) - $sx - $marge_right, imagesy($im) - $sy - $marge_bottom, 0, 0, imagesx($stamp), imagesy($stamp));
        // imagecopy($im, $stamp,  $marge_right, imagesy($im) - $sy - $marge_bottom, 0, 0, imagesx($stamp), imagesy($stamp));

        // Output and free memory
        // header('Content-type: image/png');

        imagejpeg($im, $save_watermark_photo_address, 80); 
        imagedestroy($im);
    };


    function is_url_exist($url){
        $ch = curl_init($url);    
        curl_setopt($ch, CURLOPT_NOBODY, true);
        curl_exec($ch);
        $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        if($code == 200){
            $status = true;
        }else{
            $status = false;
        }
        curl_close($ch);
        return $status;
    }

    function TrimText($input, $length) {
        $input = strip_tags($input);
        if (strlen($input) <= $length) {
            return $input;
        }
        $trimmed_text = substr($input, 0, $length);

        $trimmed_text .= ' &hellip;';

        return $trimmed_text;
    }

    function formatSizeUnits($bytes){
        if ($bytes >= 1073741824){
            $bytes = number_format($bytes / 1073741824, 2) . ' GB';
        }elseif($bytes >= 1048576){
            $bytes = number_format($bytes / 1048576, 2) . ' MB';
        }elseif($bytes >= 1024){
            $bytes = number_format($bytes / 1024, 2) . ' KB';
        }elseif($bytes > 1){
            $bytes = $bytes . ' bytes';
        }elseif($bytes == 1){
            $bytes = $bytes . ' byte';
        }else{
            $bytes = '0 bytes';
        }

        return $bytes;
    }

    // ducnv
    class SimpleImage {

        var $image;
        var $image_type;

        function load($filename) {

            $image_info = getimagesize($filename);
            $this->image_type = $image_info[2];
            if( $this->image_type == IMAGETYPE_JPEG ) {

                $this->image = imagecreatefromjpeg($filename);
            } elseif( $this->image_type == IMAGETYPE_GIF ) {

                $this->image = imagecreatefromgif($filename);
            } elseif( $this->image_type == IMAGETYPE_PNG ) {

                $this->image = imagecreatefrompng($filename);
            }
        }
        function save($filename, $image_type=IMAGETYPE_JPEG, $compression=75, $permissions=null) {

            if( $image_type == IMAGETYPE_JPEG ) {
                imagejpeg($this->image,$filename,$compression);
            } elseif( $image_type == IMAGETYPE_GIF ) {

                imagegif($this->image,$filename);
            } elseif( $image_type == IMAGETYPE_PNG ) {

                imagepng($this->image,$filename);
            }
            if( $permissions != null) {

                chmod($filename,$permissions);
            }
        }
        function output($image_type=IMAGETYPE_JPEG) {

            if( $image_type == IMAGETYPE_JPEG ) {
                imagejpeg($this->image);
            } elseif( $image_type == IMAGETYPE_GIF ) {

                imagegif($this->image);
            } elseif( $image_type == IMAGETYPE_PNG ) {

                imagepng($this->image);
            }
        }
        function getWidth() {

            return imagesx($this->image);
        }
        function getHeight() {

            return imagesy($this->image);
        }
        function resizeToHeight($height) {

            $ratio = $height / $this->getHeight();
            $width = $this->getWidth() * $ratio;
            $this->resize($width,$height);
        }

        function resizeToWidth($width) {
            $ratio = $width / $this->getWidth();
            $height = $this->getheight() * $ratio;
            $this->resize($width,$height);
        }

        function scale($scale) {
            $width = $this->getWidth() * $scale/100;
            $height = $this->getheight() * $scale/100;
            $this->resize($width,$height);
        }

        function resize($width,$height) {
            $new_image = imagecreatetruecolor($width, $height);
            imagecopyresampled($new_image, $this->image, 0, 0, 0, 0, $width, $height, $this->getWidth(), $this->getHeight());
            $this->image = $new_image;
        }      

    }    

