<?php  
    require_once("config_.php");
	
    require_once("lib/qqUploaded.php");

    $arr_extension = array("php","PHP","jsp","JSP","js","JS","cs","CS","java","JAVA","sh","SH","h","H");
    $upload = New qqUploadedFileXhr();
    if(isset($_GET['qqfile'])){
        $fileName = $_GET['qqfile'];  
        $baseName = reset(explode(".",$fileName));
        $fileType = end(explode(".",$fileName));
        if(in_array($fileType,$arr_extension)){
            die ('{error: "server-error extension"}'); 
        }
        $fileName = generate_slug($baseName).'.'.$fileType;
        $fileSize = $upload->getSize();
        
    } 
    else {
        die ('{error: "server-error file not passed"}');
    }
	
    if (count($_GET)){    
        //
        $is_cut=0; 
        $folder = date("Y/md/");
        $path   = $file_location_video.$folder;
        if(@chdir($path) == false) mkdir($path, 0777, true);
        // folder small
        $path_small   = $path.$small_w.'x'.$small_h.'_crop/';
        if(@chdir($path_small) == false) mkdir($path_small, 0777, true);       
        // folder mini
        $path_mini   = $path.$mini_w.'x'.$mini_h.'_crop/';    
        if(@chdir($path_mini) == false) mkdir($path_mini, 0777, true);
        // fulll name       
        
        $fileName = time().rand(0,100).'_'.$fileName;
        $full_path = '/'.$folder.$fileName;
        $full_path_small = '/'.$folder.$small_w.'x'.$small_h.'_crop/'.$fileName; 
        $full_path_mini = '/'.$folder.$mini_w.'x'.$mini_h.'_crop/'.$fileName; 
        $path .= $fileName;
        $upload->save($path);
        
        $path_small.=$fileName;   
        $path_mini.=$fileName;
        
        $image_info = getimagesize($path);  
        $width_r  = isset($image_info[0])?$image_info[0]:0;
        $height_r = isset($image_info[1])?$image_info[1]:0;
        
        if($width_r<$small_w){
            $message = "Bạn vui lòng chọn ảnh có chiều rộng lớn hơn ".$small_w; 
            array_merge($_GET, array('fileName'=>$fileName));
            $response = array_merge($_GET, array('success'=>false,'msg'=>$message,'folder_path'=>'/'.$folder, 'fileType'=>$fileType,'fileSize'=>$fileSize,'fileName'=>$fileName,'full_path'=>$full_path,'is_cut'=>$is_cut));
            // to pass data through iframe you will need to encode all html tags        
            echo htmlspecialchars(json_encode($response), ENT_NOQUOTES);  
            exit();                                
        } 
        if($height_r<$small_h){
            $message = "Bạn vui lòng chọn ảnh có chiều cao lớn hơn ".$small_h;
            array_merge($_GET, array('fileName'=>$fileName));
            $response = array_merge($_GET, array('success'=>false,'msg'=>$message,'folder_path'=>'/'.$folder, 'fileType'=>$fileType,'fileSize'=>$fileSize,'fileName'=>$fileName,'full_path'=>$full_path,'is_cut'=>$is_cut));
           // to pass data through iframe you will need to encode all html tags        
           echo htmlspecialchars(json_encode($response), ENT_NOQUOTES); 
           exit(); 
        }
        $scale_orig  = floatval($width_r/$height_r);
        $scale_need = floatval($small_w/$small_h);
        if($scale_orig<$scale_need){
                $is_cut = 1; 
            }
        $image_dta = new SimpleImage();
        $image_dta->load($path);
        
        $image_dta->resize($small_w,$small_h);
        $image_dta->save($path_small);
        
        $image_dta->resize($mini_w,$mini_h);
        $image_dta->save($path_mini);
        
        array_merge($_GET, array('fileName'=>$fileName));
        $response = array_merge($_GET, array('success'=>true,'msg'=>'Success full','folder_path'=>'/'.$folder, 'fileType'=>$fileType,'fileSize'=>$fileSize,'fileName'=>$fileName,'full_path'=>$full_path,'path_small'=>$full_path_small,'path_mini'=>$full_path_mini,'is_cut'=>$is_cut));
        // to pass data through iframe you will need to encode all html tags        
        echo htmlspecialchars(json_encode($response), ENT_NOQUOTES);    
    } else {
        die ('{error: "server-error  query params not passed"}');
    }    

?>
