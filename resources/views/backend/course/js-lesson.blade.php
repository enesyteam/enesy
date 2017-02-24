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
                debug:true,
                failUploadText: 'Error upload',
                onComplete: function(id, fileName, responseJSON){
                      if(responseJSON.success){        
                          var file      = $("#file").val() + responseJSON.full_path + ";";
                          var file_type = $("#file_type").val() + responseJSON.fileType + ";";
                          var file_size = $("#file_size").val() + responseJSON.fileSize + ";";
                          $("#file").val(file);
                          $("#file_type").val(file_type);
                          $("#file_size").val(file_size);
            
                          var html_video = responseJSON.full_path;
                          var html = '';
                          html += '<tr>';
                          html += '<td width="90%"><div>'+html_video+'</div></td>';
                          html += '<td width="10%">';        
                          html += '<div class="filltext">';            
                          html += '<input placeholder="Tiêu đề file video" type="text" name="title_file" id="title_file'+i+'" value="" style="width:500px">'                
                          html += '</div>';   

                          /*
                          html += '<li class="magb5 clearfix"><div class="filltext">';            
                          html += '<div class="clearfix">';                
                          html += '<div id="upload_img'+i+'"></div>'; 
                          html += '<input type="hidden" value="" id="picture'+i+'" name="picture"/>';               
                          html += '<div id="view_img'+i+'" name="view_img'+i+'"></div>';                
                          html += '</div>';                
                          html += '</div></li>';  
                          */                 

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