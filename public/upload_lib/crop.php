<?php
    require_once("config_.php");
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

    $small_w =630;     
    $small_h =352; 
    $mini_w  =205;
    $mini_h  =115; 
    
      
    
    $is_local=0;
	$http_host = isset($_SERVER["HTTP_HOST"])? $_SERVER["HTTP_HOST"]:""; 
    if($http_host=="localhost"){
        $is_local=1;
    }else {
		$is_local=2;
	}     
   
    define('DIR_UPLOAD',$file_location);
    $url_image=$url_doc;
   
	 

    /**/ 
    $uploaddir = DIR_UPLOAD;
    $filename = isset($_POST['ad_img'])? $_POST['ad_img']:''; 

    $x_ads = isset($_POST['x_ads'])? $_POST['x_ads']:0;
    $y_ads = isset($_POST['y_ads'])? $_POST['y_ads']:0;
    $w_ads = isset($_POST['w_ads'])? $_POST['w_ads']:0;
    $h_ads = isset($_POST['h_ads'])? $_POST['h_ads']:0;
    $folder_path = isset($_POST['folder_path'])? $_POST['folder_path']:'';
    
    $targ_w = $w_ads;
    $targ_h = $h_ads;
    $jpeg_quality = 90;
    $file_read = str_replace($folder_path,"",$filename);

    $filename_org   = $filename;
    $filename_small = $folder_path.$small_w.'x'.$small_h.'_crop/'.$file_read;
    $filename_mini  = $folder_path.$mini_w.'x'.$mini_h.'_crop/'.$file_read;
    
    $url_image .=$filename_small;
    $src = DIR_UPLOAD.$filename_org;
    if (!file_exists($src)){
        $array_result =  array('status'=>0,'message'=>'Không tồn tại ảnh gốc');
        echo json_encode($array_result);
        exit();        
    }
    $pathinfo = pathinfo($src); 
    if(isset($pathinfo["extension"])&&$pathinfo["extension"]=="png"){
        $img_r = imagecreatefrompng($src);
       // imagealphablending($img_r, true); // setting alpha blending on
       // imagesavealpha($img_r, true); // save alphablending setting (important)
    } else {
      $img_r = imagecreatefromjpeg($src);       
    }
     // 
    $dst_r = ImageCreateTrueColor($targ_w,$targ_h );

    imagecopyresampled($dst_r,$img_r,0,0,$x_ads,$y_ads,$targ_w,$targ_h,$w_ads,$h_ads);
    $src = DIR_UPLOAD.$filename;
    $src_small = DIR_UPLOAD.$filename_small; 
    imagejpeg($dst_r,$src_small,$jpeg_quality); 

    // resize ảnh

    $image = new SimpleImage();
    $image->load($src_small);
    
    $image->resize($small_w,$small_h);
    $image->save($src_small);    
        
    $image->resize($mini_w,$mini_h);
    $image->save(DIR_UPLOAD.$filename_mini);

    $array_result =  array('status'=>1,'message'=>'Cắt ảnh thành công!'.$filename_mini,"url_image"=>$url_image);
    echo json_encode($array_result);
    exit(); 

?>
