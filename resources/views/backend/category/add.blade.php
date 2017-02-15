@extends('backend.layouts.dashboard')
@section('page_heading','Add new category')
@section('section')
    <div class="col-sm-12">
        @section ('table_panel_title','&nbsp;')
        @section ('table_panel_body')

       
          <form role="form" action="{{ URL::route('executeAddCategory') }}" method="POST" enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-8">
              <div class="form-group">
                <label>Name:</label>
                <input class="form-control" name="title" required="">
                <div class="form-group has-error">
                    <label lass="control-label" for="inputError" style="color:red;" >{{ $errors->first('title') }}</label>
                </div>              
              </div>
              <div class="form-group">
                  <label>Parent:</label>
                   <select name="parent_id">
                   <option value="0"></option>
                     @foreach($parents as $value)
                     <option value="{{$value->id}}">{{$value->title}}</option>
                     @endforeach
                   </select>       
              </div>       
              <div class="form-group">
                  <label>Description:</label>
                   <textarea class="form-control" rows="3" name="description"></textarea>            
              </div>
              
               
               <div class="form-group">
                  <label>Active:</label>
                   <input type="checkbox" name="status" value="1">            
              </div>
             
           
            <div class="form-group">
              <input type="submit" name="" value="Add New Category" class="btn btn-primary">
              <a href="{{URL::route('allCategory')}}" class="btn btn-danger">Back</a>
            </div>
            </div>
             <div class="col-md-4">
              <div class="form-group">
                  <label>Picrute:</label>                
                  <input type="file" accept="image/*" name="mediaFile" id="mediaFile" onchange="previewFile()" />     
                 </div>   
                <div class="form-group">
                <img src="{{  Config::get('params.url_upload').'/default/img_default.png'}}" width="200px" height="200px" id="picture" alt="No picture">   
                </div>    
                      
            </div>
          </div>
          	

            
        </form>
            <script type="text/javascript">               
                   
                function previewFile() {
                  var preview = document.getElementById('picture');
                  var file    = document.querySelector('input[type=file]').files[0];
                  var reader  = new FileReader();

                  reader.addEventListener("load", function () {
                    preview.src = reader.result;
                  }, false);

                  if (file) {
                    reader.readAsDataURL(file);
                  }
                }
            </script>
        @endsection
        @include('backend.widgets.panel', array('header'=>true, 'as'=>'table'))
    </div>
    
@stop
