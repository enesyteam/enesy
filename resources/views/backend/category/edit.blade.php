@extends('backend.layouts.dashboard')
@section('page_heading','Edit category')
@section('section')
    <div class="col-sm-12">
        @section ('table_panel_title','&nbsp;')
        @section ('table_panel_body')
       
           <form role="form" action="{{ URL::to('/admin/category/edit/'.$category->id.'/execute') }}" method="POST" enctype="multipart/form-data">
          	 <div class="row">
                <div class="col-md-8">
                    <input class="form-control" type="hidden" name="id" value="{{ $category->id }}">   
            <div class="form-group">
                <label>Name:</label>
                <input class="form-control" name="title" value="{{ $category->title }}">              
            </div>
           
           
            <div class="form-group">
                <label>Description:</label>
                 <textarea class="form-control" rows="3" name="description" >{{ $category->description }}</textarea>            
            </div>
             
             <div class="form-group">
                <label>Active:</label>
                 <input type="checkbox" name="status" value="1" {{ $category->status == 1 ? ' checked' : ''}}>            
            </div>
            <div class="form-group">
              <input type="submit" name="" value="Update" class="btn btn-primary     ">
               <a href="{{URL::route('allCategory')}}" class="btn btn-danger">Back</a>
            </div>

                </div> 
                <div class="col-md-4">
                     <div class="form-group">
                <label>Picrute:</label>                
                <input type="file" name="mediaFile" accept="image/*" onchange="previewFile()" />     
            </div>          
           
                
            
            <div class="form-group">
                <img src="<?php 
                    if(empty($category->picture)) {
                      echo Config::get('params.url_upload').'/default/img_default.png';
                    } else {
                      echo Config::get('params.url_upload').$category->picture;
                    }
                ?>" width="200px" height="200px" id="showPicture">   
            </div>      
                </div>
             </div>
            
        </form>
           <script type="text/javascript">
                function previewFile() {
                 //   alert('ok');
                  var preview = document.getElementById('showPicture');
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
