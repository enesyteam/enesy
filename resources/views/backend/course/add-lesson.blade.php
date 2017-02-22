@extends('backend.layouts.dashboard')
@section('page_heading','Add new lesson')
@section('section')
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
                //allowedExtensions: ['mp4','flv','avi','mov','dv','qt','mpeg','3gp','asf','wmv','mpg','dat','vob','mkv'],
                multiple: true,
                uploadButtonText: 'Upload Doc',
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
                         // html += '<input placeholder="Tiêu đề file video" type="text" name="title_file" id="title_file'+i+'" value="" style="width:500px">';                
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
           
    <div class="col-sm-12">
         @section ('table_panel_title','&nbsp;')
         @section ('table_panel_body')  
          <form role="form" action="" method="POST" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-8">
                  <div class="col-md-12 form-group">
                      <div class="col-md-2">
                          <label>Title:</label>
                      </div>
                      <div class="col-md-6">  
                          <input class="form-control" name="title" required="">
                          <div class="form-group has-error">
                              <label lass="control-label" for="inputError" style="color:red;" >{{ $errors->first('title') }}</label>
                          </div>   
                       </div>            
                  </div>
             
                <div class="col-md-12 form-group">
                           <div class="col-md-2">
                               <label>Category:</label>
                          </div>
                          <div class="col-md-6">
                              <select name="category" id='category' class="form-control">
                                  @foreach($all_category as $category)        
                                            <option value='{{ $category['id'] }}'>{{ $category['title'] }}</option>
                                  @endforeach                              
                              </select>
                          </div>
                 </div>
                 <div class="col-md-12 form-group" id="list_answer">
                        <div class="input_fields_wrap col-md-12" style="min-height: 200px">
                          <div id="upload_doc"></div>
                          <input type="hidden" id="file"      name="file"/>
                          <input type="hidden" id="file_size" name="file_size"/>
                          <input type="hidden" id="file_type" name="file_type"/>
                          <table id="view_doc" name="view_video" width="100%" border="0" cellspacing="0" cellpadding="0" class="form1 magt20">

                          </table>
                      </div>
                  </div>
             
              <div class="col-md-8 form-group">
                <input type="submit" name="" value="Add" class="btn btn-primary">
                <a href="{{URL::route('course/list-lesson', array('eId' => $exam->id))}}" class="btn btn-danger">Back</a>
              </div>
              </div>
            </div>                      
        </form>


        @endsection
        @include('backend.widgets.panel', array('header'=>true, 'as'=>'table'))
    </div>   
@stop
