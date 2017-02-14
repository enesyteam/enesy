@extends('backend.layouts.dashboard')
@section('page_heading','Member Edit')
@section('section')
    <div class="col-sm-12">
         @section ('table_panel_title','&nbsp;')
        @section ('table_panel_body')
        
        <form method="post" action="{{URL::route('postEditMember', array('id' => $member->id))}}" novalidate="">

           <div class="col-md-8 form-group">
            <div class="col-md-2">
              <label>ID</label>
            </div>
            <div class="col-md-6">
              <input type="text" name="userId" class="form-control" value="{{$member->id}}">
            </div>
                      
        </div>


        <div class="col-md-8 form-group">
            <div class="col-md-2">
              <label>User name</label>
            </div>
            <div class="col-md-6">
              <input type="text" name="userName" class="form-control" value="{{$member->username}}">
            </div>
                      
        </div>

        <!-- <div class="col-md-8 form-group">
            <div class="col-md-2">
              <label>Full name</label>
            </div>
            <div class="col-md-6">
              <input type="text" name="fullName" class="form-control" value="{{$member->full_name}}">
            </div>
                        
        </div> -->

         <div class="col-md-8 form-group">
            <div class="col-md-2">
              <label>Email</label>
            </div>
            <div class="col-md-6">
              <input type="email" name="email" class="form-control" value="{{$member->email}}">
            </div>
             <div class="form-group has-error">
                  <label lass="control-label" for="inputError" style="color:red;" >{{ $errors->first('userName') }}</label>
              </div>             
        </div>

         <div class="col-md-8 form-group">
            <div class="col-md-2">
              <label>Register date</label>
            </div>
            <div class="col-md-6">
              <p>
                 <?php if ($member->create_date > 0) echo date("d/m/Y",$member->create_date) ?>
              </p>
            </div>
                     
        </div>

         <div class="col-md-8 form-group">
            <div class="col-md-2">
              <label>Status</label>
            </div>
            <div class="col-md-6">
               <select class="form-control" name="status" >
                @foreach($status as $key => $st)
                  <option value="{{$key}}" "<?php if ($key == $member->status) echo ' selected '; ?>">{{$st}}</option>
                @endforeach
              </select>
            </div>
                     
        </div>









         
        <div class="col-md-8 form-group" style="align-content:center !important;">
          <input type="submit" name="" value="Save" class="btn btn-primary">
          <a href="{{URL::route('memberIndex')}}" class="btn btn-danger">Cancel</a>
        </div>
        </form>


        <script type="text/javascript">
          function previewFile() {
                  var preview = document.getElementById('avataPicture');
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
