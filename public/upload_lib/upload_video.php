<?php   
    set_time_limit(0);          
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
        $fileName =  time().rand(0,100).'vd_'.generate_slug($baseName).'.'.$fileType;
        $fileSize = $upload->getSize();
    } 
    else {
        die ('{error: "server-error file not passed"}');
    }

    if (count($_GET)){    

        $folder = date("Y/md/");
        $path   = $file_location_video.$folder;
        
        if(@chdir($path) == false) mkdir($path, 0777, true);
        $full_path = '/'.$folder.$fileName;
        $path .= $fileName;
        $upload->save($path);

        array_merge($_GET, array('fileName'=>$fileName));
        $response = array_merge($_GET, array('success'=>true, 'fileType'=>$fileType,'fileSize'=>$fileSize,'fileName'=>$fileName,'full_path'=>$full_path));
        // to pass data through iframe you will need to encode all html tags        
        echo htmlspecialchars(json_encode($response), ENT_NOQUOTES);    
    } else {
        die ('{error: "server-error  query params not passed"}');
    }    

?>
