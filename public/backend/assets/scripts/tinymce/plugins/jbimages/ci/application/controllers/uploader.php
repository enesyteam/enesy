<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Uploader extends CI_Controller {

        /* Constructor */

        public function __construct()
        {
            parent::__construct();
            $this->load->helper(array('jbimages','language'));

            // is_allowed is a helper function which is supposed to return False if upload operation is forbidden
            // [See jbimages/is_alllowed.php] 

            if (is_allowed() === FALSE)
            {
                exit;
            }

            // User configured settings
            $this->config->load('uploader_settings', TRUE);
        }

        /* Language set */

        private function _lang_set($lang)
        {
            // We accept any language set as lang_id in **_dlg.js
            // Therefore an error will occur if language file doesn't exist

            $this->config->set_item('language', $lang);
            $this->lang->load('jbstrings', $lang);
        }

        /* Default upload routine */

        public function upload($lang='english')
        {
            $this->_lang_set($lang);

            $conf['img_path'] = $this->config->item('img_path', 'uploader_settings');
            $conf['allow_resize'] = $this->config->item('allow_resize', 'uploader_settings');
            $conf['url_img_return'] = $this->config->item('url_img_return', 'uploader_settings');

            //$conf['latinize_name'] = $this->config->item('latinize_name', 'uploader_settings'); //not used

            $config['allowed_types'] = $this->config->item('allowed_types', 'uploader_settings');
            $config['max_size'] = $this->config->item('max_size', 'uploader_settings');
            $config['encrypt_name'] = $this->config->item('encrypt_name', 'uploader_settings');
            $config['overwrite'] = $this->config->item('overwrite', 'uploader_settings');


            $config['upload_path'] = $this->config->item('upload_path', 'uploader_settings');

            if (!$conf['allow_resize'])
            {
                $config['max_width'] = $this->config->item('max_width', 'uploader_settings');
                $config['max_height'] = $this->config->item('max_height', 'uploader_settings');
            }
            else
            {
                $conf['max_width'] = $this->config->item('max_width', 'uploader_settings');
                $conf['max_height'] = $this->config->item('max_height', 'uploader_settings');

                if ($conf['max_width'] == 0 and $conf['max_height'] == 0)
                {
                    $conf['allow_resize'] = FALSE;
                }
            }

            $this->load->library('upload', $config);

            if ($this->upload->do_upload())
            {
                $result = $this->upload->data();

                $path_wm = './system/fonts/wm_801_1000px.png';

                if($result['image_width']<300){
                    $path_wm = './system/fonts/wm_300-down.png';  
                } 
                else if($result['image_width']<410) {
                   $path_wm = './system/fonts/wm_301_410px.png';   
                }
                else if($result['image_width']<600) {
                   $path_wm = './system/fonts/wm_411_600px.png';   
                }
                else if($result['image_width']<800) {
                   $path_wm = './system/fonts/wm_601_800px.png';   
                }                                

                $max_height= $result['image_height']*1000/$result['image_width'];
                $thParams = array
                (
                    'source_image'=>$result['full_path'],
                    'new_image'=>$result['full_path'],
                    'width'=>1000,
                    'height'=>$max_height,
                    'full_src_path'=>$result['full_path'],
                    'image_type'=>2,
                    'wm_overlay_path'=>$path_wm,
                    'wm_type'=>'overlay',
                    'wm_vrt_alignment'=>'B',//T M B
                    'wm_hor_alignment'=>'R', //L R C 
                    'wm_text'=>'Congly.com.vn'
                );                

                if($result['image_width'] > 1000)
                {                

                    $this->load->library('image_lib', $thParams);
                    $this->image_lib->resize();
                }              

                // ducnv
                if(isset($result['th_watermark']) && $result['th_watermark']==1){
                    $this->load->library('image_lib', $thParams);
                    if(!$this->image_lib->watermark()){
                        echo $this->image_lib->display_errors();  
                    }

                }    
                // end ducnv
                /* //The old resize routine DEPRECATED

                if ($conf['allow_resize'] and (($result['image_width'] > $conf['max_width'] and $conf['max_width'] > 0) or ($result['image_height'] > $conf['max_height'] and $conf['max_height'] > 0)))
                {
                if ($conf['max_height'] == 0)
                {                
                $aspect_ratio = $result['image_width'] / $result['image_height'];
                $new_width = $conf['max_width'];
                $new_height = floor($new_width / $aspect_ratio);
                }
                elseif ($conf['max_width'] == 0)
                {                
                $aspect_ratio = $result['image_height'] / $result['image_width'];
                $new_height = $conf['max_height'];
                $new_width = floor($new_height / $aspect_ratio);
                }
                else
                {
                $new_width = $conf['max_width'];
                $new_height = $conf['max_height'];
                }

                $resizeParams = array
                (
                'source_image'=>$result['full_path'],
                'width'=>$new_width,
                'height'=>$new_height
                );
                $this->load->library('image_lib', $resizeParams);
                $this->image_lib->resize();
                }*/

                $result['result'] = "file_uploaded";
                $result['resultcode'] = 'ok';

                $result['file_name'] = $conf['url_img_return'].$result['file_name'];
                $this->load->view('ajax_upload_result', $result);
            }
            else
            {
                $result['result'] = $this->upload->display_errors(' ', '<br />');
                $result['resultcode'] = 'failed';
                $this->load->view('ajax_upload_result', $result);
            }
        }

        /* Blank Page (default source for iframe) */

        public function blank($lang='english')
        {
            $this->_lang_set($lang);
            $this->load->view('blank');
        }

        public function index($lang='english')
        {
            $this->blank($lang);
        }
    }

    /* End of file uploader.php */
    /* Location: ./application/controllers/uploader.php */
