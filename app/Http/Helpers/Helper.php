<?php
    namespace App\Http\Helpers;
    use Config;

    class Helper{
       
        public static function generateSlug($string)
        {
            $string = Helper::change($string);
            $string = preg_replace("/(^|&\S+;)|(<[^>]*>)/U","",$string);
            $string = strtolower(preg_replace('/[\s\-]+/','-',trim(preg_replace('/[^\w\s\-]/','',$string))));
            $slug = preg_replace("/[^A-Za-z0-9\-]/","",$string);
            return $slug;
        }

        public static function change($text) {
            $chars = array("a","A","e","E","o","O","u","U","i","I","d","D","y","Y");
            $uni[0] = array("á","à","ạ","ả","ã","â","ấ","ầ","ậ","ẩ","ẫ","ă","ắ","ằ","ặ","ẳ","ẵ","� �");
            $uni[1] = array("Á","À","Ạ","Ả","Ã","Â","Ấ","Ầ","Ậ","Ẩ","Ẫ","Ă","Ắ","Ằ","Ặ","Ẳ","Ẵ","� �");
            $uni[2] = array("é","è","ẹ","ẻ","ẽ","ê","ế","ề","ệ","ể","ễ");
            $uni[3] = array("É","È","Ẹ","Ẻ","Ẽ","Ê","Ế","Ề","Ệ","Ể","Ễ");
            $uni[4] = array("ó","ò","ọ","ỏ","õ","ô","ố","ồ","ộ","ổ","ỗ","ơ","ớ","ờ","ợ","ở","ỡ","� �");
            $uni[5] = array("Ó","Ò","Ọ","Ỏ","Õ","Ô","Ố","Ồ","Ộ","Ổ","Ỗ","Ơ","Ớ","Ờ","Ợ","Ở","Ỡ","� �");
            $uni[6] = array("ú","ù","ụ","ủ","ũ","ư","ứ","ừ","ự","ử","ữ");
            $uni[7] = array("Ú","Ù","Ụ","Ủ","Ũ","Ư","Ứ","Ừ","Ự","Ử","Ữ");
            $uni[8] = array("í","ì","ị","ỉ","ĩ");
            $uni[9] = array("Í","Ì","Ị","Ỉ","Ĩ");
            $uni[10] = array("đ");
            $uni[11] = array("Đ");
            $uni[12] = array("ý","ỳ","ỵ","ỷ","ỹ");
            $uni[13] = array("Ý","Ỳ","Ỵ","Ỷ","Ỹ");

            for($i=0; $i<=13; $i++) {
                $text = str_replace($uni[$i],$chars[$i],$text);
            }
            return $text;
        }
        public static function getDocs($name_doc,$type='',$folder='')
            {
                if($type!='')
                {
                    $type=$type.'_';
                    $name_doc=str_replace($type,'small_',$name_doc);
                }
                return Config::get('params.url_upload').$folder.$name_doc;
            }

    }
?>
