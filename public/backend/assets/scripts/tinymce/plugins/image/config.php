<?php

    @session_start();

    $time_upload= date("Y/md/");
    if(isset($_SESSION['user_id_th'])){
        $time_upload.=$_SESSION['user_id_th']."/";

    }    

    if(isset($_SERVER["HTTP_HOST"]) && $_SERVER["HTTP_HOST"]=="localhost"){
        /** Full path to the folder that images will be used as library and upload. Include trailing slash */
        define('LIBRARY_FOLDER_PATH','E:/wamp/www/hdc/tinh_hinh/version1.0/code/upload/content_img/'.$time_upload);
        /** Full URL to the folder that images will be used as library and upload. Include trailing slash and protocol (i.e. http://) */
        define('LIBRARY_FOLDER_URL','http://localhost/nh/congly/upload/content_img/'.$time_upload);
    } 
  

    else {

        define('LIBRARY_FOLDER_PATH','/data/website/congly/images.congly.com.vn/content_img/'.$time_upload);
        define('LIBRARY_FOLDER_URL','http://images.congly.com.vn/content_img/'.$time_upload);        

    }
    if(@chdir(LIBRARY_FOLDER_PATH) == false) mkdir(LIBRARY_FOLDER_PATH, 0777, true);

    /** The extensions for to use in validation */
    define('ALLOWED_IMG_EXTENSIONS', 'gif,jpg,jpeg,png,jpe');

    /**  Use these 3 functions to check cookies and sessions for permission. 
    Simply write your code and return true or false */


    function CanAcessLibrary(){
        return true;
    }

    function CanAcessUploadForm(){
        return true;
    }

    function CanAcessAllRecent(){
        return true;
    }

    function CanCreateFolders(){
        return false;
    }

    function CanDeleteFiles(){
        return false;
    }

    function CanDeleteFolder(){
        return false;
    }

    function CanRenameFiles(){
        return true;
    }

    function CanRenameFolder(){
        return false;
    }
