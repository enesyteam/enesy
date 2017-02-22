@extends('backend.templates.default.layouts.dashboard')
@section('page_heading','All category')
@section('body.content')
<div class="row">
	<div class="col-lg-8">
		<div class="panel panel-flat">
			<div class="panel-heading">
				<h6 class="panel-title"><i class="icon-list-unordered position-left"></i>All course category<a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
				<div class="heading-elements">
					<ul class="icons-list">
                		<li><a data-action="reload"></a></li>
                		<li><a data-action="collapse" class=""></a></li>
                	</ul>
				</div>
			</div>
			<div class="panel-body">
			</div>
			<!-- New table -->
			<div class="table-responsive">
				<table class="table table-striped text-nowrap" style="font-size: 13px;">
					<thead>
						<tr>
							<th style="width: 30px;"><input type="checkbox" name="checkAll" id="checkAll" onclick="checkAll(this)"></th>
							<th style="width: 30px;">Id</th>
							<th>Title</th>
							<th>Description</th>
							<th>Creator</th>
							<th style="width: 50px;">Active</th>
							<th style="width: 50px;">Actions</th>
						</tr>
					</thead>
					<tbody>
						@foreach($all_category as $value)
                     <tr >
                     <td><input type="checkbox" onclick="rowCheck(this)"  name="rowCheck" value="{{ $value->id }}" ></td>
                      <td>{{ $value->id }}</td>  
                       <td>{{ $value->title }}</td>                       
                       <td><?php if (strlen($value->description) > 20) echo substr($value->description, 0, 20).'...'; else echo $value->description;  ?></td>
                     
                       <td>{{$value->create_user}}</td>
                       <td style="width: 30px"><input type="checkbox" onclick="changeStatus('{{ $value->id }}')"   value="{{ $value->status == 1 ? 1 : 0 }}" {{ $value->status == 1 ? 'checked' : '' }} ></td>
                       <td style="width: 30px">
                       <a href="{{ URL::route('editCategory', array('id' => $value->id)) }}" class="glyphicon glyphicon-pencil"></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                        <a href="{{ URL::route('deleteCategory', array('id' => $value->id)) }}" class="glyphicon glyphicon-trash"></a>
                       </td>
                       
                     </tr>

                @endforeach
					</tbody>
				</table>

			</div>
			<!-- /New Table -->
		</div>
									<!-- Footer -->
				<div class="row">
             <div class="col-md-6">
               <ul class="pagination" >
                 <li><a onclick="deleteAll()" style="cursor:pointer;"><i class="glyphicon glyphicon-remove-circle"></i>&nbsp;Delete all</a></li>
                  <li><a href="{{URL::route('addCategory')}}" style="cursor:pointer;"><i class="glyphicon glyphicon-plus-sign"></i>&nbsp;Add new category</a></li>
               </ul>
             </div>
             <div class="col-md-6">
                <div class="pull-right">
                 {{ $all_category->render()}}
               </div>

             </div>
           </div>
	</div>
	<!-- Add Category -->
	<div class="col-lg-4">
		{!! Form::open([
		'route'	=> [ 'executeAddCategory' ],
		'method'	=>	'POST',
		'id'		=>	'addCategoryForm',
		'class'		=>	'form-vertical',
		'enctype'	=>	'multipart/form-data',
		'files'		=>	true
		]) !!}
		<div class="panel panel-flat">
			<div class="panel-heading">
				<h6 class="panel-title"><i class="icon-plus-circle2 position-left"></i>Add new category<a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
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
					<div class="form-group">
					{!! Form::label('title','Category Name:',['class'=>'control-label text-semibold'])!!}
						{!! Form::text('title','',['id'=>'title','class'=>'form-control','required'=>'true','placeholder'=>'Category name']) !!}

				</div>
				<div class="form-group">
					{!! Form::label('parent','Parent category:',['class'=>'control-label text-semibold'])!!}

						<select name="parent_id" class="form-control">
	                   		<option value="0"></option>
	                     	@foreach($parents as $value)
	                     	<option value="{{$value->id}}">{{$value->title}}</option>
	                     	@endforeach
	                   </select> 

				</div>
              	<div class="form-group">
                	{!! Form::label('description','Category Description:',['class'=>'control-label text-semibold'])!!}
                		{!! Form::textarea('description','',['id'=>'description','class'=>'form-control','rows'=>'5','required'=>'true','placeholder'=>'Category description']) !!}    
  
              	</div>
              	<div class="form-group">
              		{!! Form::label('isActive','Active:',['class'=>'control-label text-semibold'])!!}
              			{!! Form::checkbox('status',1, true,['id'=>'status','class'=>'form-control checker']) !!}
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
                	<img src="{{  Config::get('params.url_upload').'/default/img_default.png'}}" width="100%" height="160px" id="picture" alt="No picture">   
				</div>
			</div>
			</div>
			<div class="row">
			<div class="col-lg-12">
				<div class="pull-right">
              		<input type="submit" name="" value="Add New Category" class="btn btn-primary">
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
<script type="text/javascript">

            function checkAll(obj) {
             
              var isChecked = false;
              if (obj.checked) {
                  isChecked = true;                   
              } else {
                  isChecked = false;
              }
              var chks = document.getElementsByName('rowCheck');
               for(var i = 0; i < chks.length; i++) {
                chks[i].checked = isChecked;
              }
              

            }


            function rowCheck(obj) {
              
              var parentCheck = document.getElementById('checkAll');
              parentCheck.checked = false;
              //alert(obj.checked);
            }

            function deleteAll() {
              var params = [1 ];
              var chks = document.getElementsByName('rowCheck');
               for(var i = 0; i < chks.length; i++) {
                if (chks[i].checked) {                  
                  params.push(chks[i].value);
                }
              }
              
              if (confirm('Do you want to delete all?')) {
                $.ajax({
               url: "{{ URL::route('deleteAllCategory')}}",
              data: {'data': params},
                error: function(xhr, status, errorThrow) {
                      // alert(errorThrow);
                    },
                     success: function(data) {
                      // alert('ok ' + data.status);
                       location.reload();
                    }

              });
              }
            }
           

                function changeStatus(value) {
                  var params = {'id':value};
                  $.ajax({
                    url: "{{ URL::route('updateCategory') }}",
                    data: params,
                    error: function(xhr, status, errorThrow) {
                      //alert(errorThrow);
                    },
                     success: function(data) {
                      // alert('ok '  + data.status + " id = " + data.id );
                    }

                  });
                  

                }
                 $(document).ready(function(){

                    $('#btsearch').click(function(){
                      var link = "{{ URL::route('allCategory')}}";
                      link += "?search=true";
                     
                      if ($('#title').val().trim().length > 0)
                      link += "&title=" +  $('#title').val();
                      if ($('#createDate').val().trim().length > 0)
                      link +=  "&createDate=" + $('#createDate').val();
                      if ($('#endCreateDate').val().trim().length > 0)
                      link += "&endCreateDate=" +  $('#endCreateDate').val();
                      if ($('#status').val().trim().length > 0)
                      link +=  "&status=" + $('#status').val();
                      location.href = link;
                    });

                  });
                             

              
            </script>
            @stop