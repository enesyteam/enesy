@extends('backend.templates.default.layouts.dashboard')
@section('page_heading','Edit category')
@section('body.content')
<div class="row">
	<!-- Add Category -->
	<div class="col-lg-6">
		{!! Form::model($category,[
		'route'  => [ 'executeEditCategory',$category->id ],
		'method'	=>	'POST',
		'id'		=>	'editCategoryForm',
		'class'		=>	'form-vertical',
		'enctype'	=>	'multipart/form-data',
		'files'		=>	true
		]) !!}
		<div class="panel panel-flat">
			<div class="panel-heading">
				<h6 class="panel-title"><i class="icon-pencil7 position-left"></i>Edit category<a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
				<div class="heading-elements">
					<ul class="icons-list">
                		<li><a data-action="reload"></a></li>
                		<li><a data-action="collapse" class=""></a></li>
                	</ul>
				</div>

			</div>
			<div class="panel-body">
			<div class="row">
				<div class="col-lg-12">
				<input class="form-control" type="hidden" name="id" value="{{ $category->id }}">   
					<div class="form-group">
					{!! Form::label('title','Category Name:',['class'=>'control-label text-semibold'])!!}

					{!! Form::text('title',null,['id'=>'title','class'=>'form-control','required'=>'true']) !!}

				</div>
				<div class="form-group">
					{!! Form::label('parent','Parent category:',['class'=>'control-label text-semibold'])!!}

						<select name="parent_id" class="form-control">
		                 <option value="0"></option>
		                   @foreach($parents as $value)
		                   <option <?php if ($value->id == $category->parent_id ) { ?> selected <?php }?> value="{{$value->id}}">{{$value->title}}</option>
		                   @endforeach
		                 </select> 

				</div>
              	<div class="form-group">
                	{!! Form::label('description','Category Description:',['class'=>'control-label text-semibold'])!!}

                		{!! Form::textarea('description',null,['id'=>'description','class'=>'form-control','rows'=>'5','required'=>'true']) !!}    
  
              	</div>
              	<div class="form-group">
              		{!! Form::label('isActive','Active:',['class'=>'control-label text-semibold'])!!}
              			{!! Form::checkbox('status',1, null,['id'=>'status','class'=>'form-control checker']) !!}
              	</div>
				</div>
				
			</div>

			<div class="row">
			<div class="col-lg-12">
				<div class="form-group">
                  {!! Form::label('description','Category Picture:',['class'=>'control-label text-semibold'])!!}
        
                  <input type="file" accept="image/*" name="mediaFile" id="mediaFile" onchange="previewFile()" />   

                  <small class="help-block">JPEG 200x160px</small>
                 </div>   
                <div class="form-group">
                	<img src="<?php 
                    if(empty($category->picture)) {
                      echo Config::get('params.url_upload').'/default/img_default.png';
                    } else {
                      echo Config::get('params.url_upload').$category->picture;
                    }
                ?>" width="300px" height="auto" id="showPicture">   
				</div>
			</div>
			</div>
			<div class="row">
			<div class="col-lg-12">
				<div class="pull-right">
              		{!! Form::submit('Update Category',['class'=>'btn btn-primary']) !!}
    			</div>
			</div>
			</div>
		</div>
		</div>
		{!! Form::close() !!}
	</div>
	<!-- /Add Category -->

</div>
@stop
@section('body.scripts')
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
@stop