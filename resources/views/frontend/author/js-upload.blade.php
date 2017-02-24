  <?php $last_vesion = 1.0; ?>

  <script rel="text/javascript" src="{{ asset('backend/assets/scripts/ajax_upload_file/fileuploader.js') }}?v=<?php echo $last_vesion; ?>" ></script>
  <link rel="stylesheet" href="{{ asset('backend/assets/scripts/ajax_upload_file/fileuploader.css') }}?v=<?php echo $last_vesion; ?>" type="text/css" /> 

  <script rel="text/javascript" src="{{ asset('backend/assets/scripts/Jcrop/jquery.Jcrop.min.js') }}?v=<?php echo $last_vesion; ?>" ></script>
  <link rel="stylesheet" href="{{ asset('backend/assets/scripts/Jcrop/jquery.Jcrop.css') }}?v=<?php echo $last_vesion; ?>" type="text/css" />

  <script rel="text/javascript" src="{{ asset('backend/assets/scripts/colorbox/jquery.colorbox-min.js') }}?v=<?php echo $last_vesion; ?>" ></script>
  <link rel="stylesheet" href="{{ asset('backend/assets/scripts/colorbox/colorbox.css') }}?v=<?php echo $last_vesion; ?>" type="text/css" />


<script>
    var i = 0;
    function uploadImg(){
        var uploader_img = new qq.FileUploader({
            element: document.getElementById('upload_img'),
            action: "{{ URL::to('/upload_lib/upload_pic_video.php') }}",       
            allowedExtensions: ['jpg', 'png', 'gif','jpeg'],
            multiple: false,
            uploadButtonText: 'Upload ảnh',
            cancelButtonText: 'Cancel',
            failUploadText: 'Upload thất bại',
            onComplete: function(id, fileName, responseJSON){   
                if(responseJSON.success==true){
                    $("#picture").val(responseJSON.full_path);
                    
                    $("#path_small").val(responseJSON.path_small); 
                    $("#path_mini").val(responseJSON.path_mini);                       
                    $("#folder_path").val(responseJSON.folder_path);
                    
                    $( "#view_img").html('<img class="img-responsive" src="<?php echo Config::get('params.url_upload');?>'+responseJSON.full_path+'">');
                    var is_cut = responseJSON.is_cut; 
                    var is_cut = 1;
                    $('img#cropbox').attr("src",'<?php echo Config::get('params.url_upload');?>'+responseJSON.full_path);  
                    if(is_cut==1){
                        $('#frm_crop_img').show();

                        $('#cropbox').Jcrop({
                            onSelect: updateCoordsAds,
                            onChange: updateCoordsAds,
                            aspectRatio: 630/352,
                            allowResize: true,
                            setSelect: [0,0,630,352],
                            allowSelect: false,
                            minSize: [ 630, 352 ],
                            },function(){
                                // Use the API to get the real image size
                                var bounds = this.getBounds();
                                boundx = bounds[0];
                                boundy = bounds[1];
                                // Store the API in the jcrop_api variable
                                jcrop_api = this;
                        }); 
                        $.colorbox({inline:true, width:"70%",height:"100%",href:"#frm_crop_img",
                            onClosed:function(){ 
                                closeCutImage();
                            }
                        });  
                    }
                } else {
                    alert(responseJSON.msg);
                }
            }
        });
    }    
    function createUploader(){  
        var uploader = new qq.FileUploader({
            element: document.getElementById('upload_video'),
            action: "{{ URL::to('/upload_lib/upload_video.php') }}",  
            allowedExtensions: ['mp4','flv','avi','mov','dv','qt','mpeg','3gp','asf','wmv','mpg','dat','vob','mkv'],
            multiple: false,
            uploadButtonText: 'Upload video',
            cancelButtonText: 'Cancel',
            failUploadText: 'Upload thất bại',
            onComplete: function(id, fileName, responseJSON){
                if(responseJSON.success){        
                    var file      =  responseJSON.full_path;
                    var file_type =  responseJSON.fileType ;
                    var file_size =  responseJSON.fileSize ;
                    $("#file").val(file);
                    $("#file_type").val(file_type);
                    $("#file_size").val(file_size);
                    var link_video = ''+responseJSON.full_path;
                    
                   // var html_video = showEmbedCodeNew(400,200,link_embed);

                    var html = '';
                    html += '<tr>';   
                    html += '<td><ul class="form2 bottom20">';        
                    html += '<li class="magb5 clearfix"><div class="filltext">';     
                    html += '<video controls="" width="640" height="480">';

                    html += '<source src="<?php echo Config::get('params.url_upload');?>'+responseJSON.full_path+'" type="video/'+file_type+'">';
                    html += '</video>';          
               
                    html += '</li>';      

                    html += '</ul></td></tr>'; 

                    $( "#view_video" ).html(html);
                    uploadImg();
                    //i++;
                }
            }
        });           
    }         

    $( document ).ready(function() {   
      uploadImg();     

     $("#type_video input[name=type]").click(function(){
            if($(this).val()==1){
                $("#th_author_alias").show();
                $("#th_original_link").hide();
            } else {
                $("#th_author_alias").hide();               
                $("#th_original_link").show();                
            }
        });   
        $('#btn_crop').click(function(){
            var url_ajax = "{{ URL::to('/upload_lib/crop.php') }}";
            if(!checkCoordsAds()) {
                return false;
            }
            $.ajax({
                type:'POST',
                url : url_ajax,
                data: ({
                    x_ads             : $('#x_ads').val(),
                    y_ads             : $('#y_ads').val(), 
                    w_ads             : $('#w_ads').val(), 
                    h_ads             : $('#h_ads').val(),
                    folder_path       : $('#folder_path').val(),              
                    ad_img            : $('#picture').val()
                }),
                beforeSend: function(){  
                },                        
                success: function(dt){
                    var obj = eval( "(" + dt + ")" ); 
                    if(obj.status==1){
                        $('#frm_crop_img').hide();
                        $('#cropbox').hide();             
                        $('#view_img').html('<img src="'+obj.url_image+'" />');
                        $.colorbox.close();
                    }
                    else {
                        alert(obj.message); 
                    } 
                }
            });   
            JcropAPI = $('#cropbox').data('Jcrop');
            JcropAPI.destroy();   


        });       
    });  
        
     function closeCutImage(){
        $.colorbox.close(); 
        $('#frm_crop_img').hide();
        $('#cropbox').hide();         
        JcropAPI = $('#cropbox').data('Jcrop');
        JcropAPI.destroy();         
        return false;
    }
    function checkCoordsAds()
    {
        if (parseInt($('#w_ads').val())) return true;
        alert('Vui lòng chọn vùng ảnh gốc cần lưu.');
        return false;
    };
    function updateCoordsAds(c)
    {           
        $('#x_ads').val(c.x);
        $('#y_ads').val(c.y);
        $('#w_ads').val(c.w);
        $('#h_ads').val(c.h);

    }; 
     
    function createUploadLesson(){  
            var uploader = new qq.FileUploader({
                element: document.getElementById('upload_lesson'),
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
                          html += '<div class="form-group"><input placeholder="Thời gian học (số phút)" type="text" name="duration[]"  value="" class="form-control"></div>';                           
                          html += '<textarea placeholder="Miêu tả bài học"  name="file_introtext[]" class="form-control"></textarea>'; 
                          html += '<input type="hidden" name="file_path[]"  value="'+file_path+'" >';   
                          html += '<input type="hidden" name="file_type[]"  value="'+file_type+'" >';  
                          html += '<input type="hidden" name="file_size[]"  value="'+file_size+'" >';               
                          html += '</div>';                  

                          html += '</td></tr>'; 

                          $( "#view_lesson" ).append(html);
                          uploadImg(i);
                          i++;
                      }
                  }
            });           
        }        
        $(window).load(function() {
            createUploader();
            createUploadLesson();
        });

    /*$(document).on('click', '.title-section', function() {
        $(this).replaceWith( "<input name=''" + $( this ).text() + ">" );
    });*/
</script> 