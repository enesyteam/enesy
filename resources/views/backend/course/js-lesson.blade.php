  <?php $last_vesion = 1.0; ?>

  <script rel="text/javascript" src="{{ asset('backend/assets/scripts/function.js') }}" ></script>
  <script rel="text/javascript" src="{{ asset('backend/assets/scripts/ajax_upload_file/fileuploader.js') }}" ></script>
  <link rel="stylesheet" href="{{ asset('backend/assets/scripts/ajax_upload_file/fileuploader.css') }}" type="text/css" /> 
  <script>      
     var i = 0;
   function uploadImg(stt){
          var uploader_img = new qq.FileUploader({
              element: document.getElementById('upload_img'+stt),
              action: "{{ URL::to('/upload_lib/upload_pic_doc.php') }}",   
              allowedExtensions: ['jpg', 'png', 'gif','jpeg'],
              multiple: false,
              uploadButtonText: 'Upload ảnh',
              cancelButtonText: 'Cancel',
              failUploadText: 'Upload thất bại',
              onComplete: function(id, fileName, responseJSON){   
                  if(responseJSON.success==true){
                      $("#picture"+stt).val(responseJSON.full_path);
                      $( "#view_img"+stt).html('<img width="120" src="'+responseJSON.full_path+'">');
                  }
              }
          });
      }           
     function createUploader(){  
            var uploader = new qq.FileUploader({
                element: document.getElementById('upload_doc'),
                action: "{{ URL::to('/upload_lib/upload_doc.php') }}",   
                allowedExtensions: ['mp4','flv','avi','mov','dv','qt','mpeg','3gp','asf','wmv','mpg','dat','vob','mkv'],
                multiple: true,
                uploadButtonText: 'Upload video',
                cancelButtonText: 'Cancel',
                failUploadText: 'Error upload',
                onComplete: function(id, fileName, responseJSON){
                      if(responseJSON.success){        
                          var file_path = responseJSON.full_path;
                          var file_type = responseJSON.fileType ;
                          var file_size = responseJSON.fileSize ;

                          var html_video = '';
                          html_video += '<video controls="" width="300" height="200" >';

                          html_video += '<source src="<?php echo Config::get('params.url_upload');?>'+responseJSON.full_path+'" type="video/'+responseJSON.fileType+'">';
                          html_video += '</video>';                          
                          var html = '';
                          html += '<tr>';
                          html += '<td width="30%"><div style="float:left">'+html_video+'</div></td>';
                          html += '<td>';        
                          html += '<div class="filltext">';            
                          html += '<div class="form-group"><input placeholder="Tiêu đề bài học" type="text" name="file_title[]"  value="" class="form-control"></div>';  
                          html += '<textarea placeholder="Miêu tả bài học"  name="file_introtext[]" class="form-control"></textarea>'; 
                          html += '<input type="hidden" name="file_path[]"  value="'+file_path+'" >';   
                          html += '<input type="hidden" name="file_type[]"  value="'+file_type+'" >';  
                          html += '<input type="hidden" name="file_size[]"  value="'+file_size+'" >';               
                          html += '</div>';                  

                          html += '</td></tr>'; 

                          $( "#view_doc" ).append(html);
                          uploadImg(i);
                          i++;
                      }
                  }
            });           
        }        
        window.onload = createUploader;  
    </script>  