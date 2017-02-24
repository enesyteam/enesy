<?php

    /*
    |--------------------------------------------------------------------------
    | Author: Ducnv
    |--------------------------------------------------------------------------
    |
    | Tao file cấu hình riêng cho dự án
    |
    */

return [
 
    /*
    |--------------------------------------------------------------------------
    | Application Folder Upload
    |--------------------------------------------------------------------------
    |
    | Cấu hình folder chứa ảnh / video....
    |
    */

    'folder_upload' => str_replace(DIRECTORY_SEPARATOR.'config', '', dirname(__FILE__)).DIRECTORY_SEPARATOR.'public'.DIRECTORY_SEPARATOR.'upload'.DIRECTORY_SEPARATOR.'image',

    'folder_upload_img' => str_replace(DIRECTORY_SEPARATOR.'config', '', dirname(__FILE__)).DIRECTORY_SEPARATOR.'public',

    'folder_upload_certificate' => str_replace(DIRECTORY_SEPARATOR.'config', '', dirname(__FILE__)).DIRECTORY_SEPARATOR.'public'.DIRECTORY_SEPARATOR.'certificate',

    
    /*
    |--------------------------------------------------------------------------
    | Application Folder Upload
    |--------------------------------------------------------------------------
    |
    | Cấu hình url chứa ảnh / video....
    |
    */

    'url_upload' => 'http://localhost/enesy.vn/public/upload/image',

    'url_upload_db' => 'upload/image',

    'url_upload_cer_db' => 'upload/certificate',

    'url_website' => 'http://localhost/enesy.vn/public',


    'status_user' => array(1 =>"Approved",2=>'Waiting Review',3=>'In Review',4=>'Rejected' ),
    'notification_type' => ['exam' => 'Exam', 'notice' => 'Notice'],
    'row_page' => 20,
    'course_status' => ['PUBLIC'=>1, 'COMMING_SOON'=>2, 'DRAFT'=>3]

];
