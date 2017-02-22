@extends('backend.templates.default.layouts.dashboard')
@section('head.js')
<script rel="text/javascript" src="{{ asset('backend/assets/scripts/fileinput.min.js') }}" >
</script>
<link rel="stylesheet" href="{{ asset("backend/assets/stylesheets/fileinput.min.css") }}" />
@stop
@section('page_heading','Edit Admin')
@section('body.content')
<div class="row">
  <div class="col-lg-8">
    {!! Form::model($user,[
    'url' => '/admin/editUser?id='.$user->id,
    'method'  =>  'POST',
    'id'    =>  'editAdminForm',
    'class'   =>  'form-vertical',
    'enctype' =>  'multipart/form-data',
    'files'   =>  true
    ]) !!}
    <div class="panel panel-flat">
      <div class="panel-heading">
        <h6 class="panel-title">
          <i class="icon-pencil7 position-left">
          </i>Edit admin
          <a class="heading-elements-toggle">
            <i class="icon-more">
            </i>
          </a>
        </h6>
        <div class="heading-elements">
          <ul class="icons-list">
            <li>
              <a data-action="reload">
              </a>
            </li>
            <li>
              <a data-action="collapse" class="">
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-lg-12">
            <div class="form-group">
              {!! Form::label('title','Username:',['class'=>'control-label text-semibold'])!!}
              {!! Form::text('username',null,['id'=>'username','class'=>'form-control','required'=>'true','placeholder'=>'User Name']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('email','Email:',['class'=>'control-label text-semibold'])!!}
              {!! Form::text('email',null,['id'=>'email','class'=>'form-control','required'=>'true','placeholder'=>'Email']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('title','Password:',['class'=>'control-label text-semibold'])!!}
              {!! Form::text('password','',['id'=>'password','class'=>'form-control','required'=>'true','placeholder'=>'Password']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('title','Confirm Password:',['class'=>'control-label text-semibold'])!!}
              {!! Form::text('password_confirmation',null,['id'=>'password_confirmation','class'=>'form-control','required'=>'true','placeholder'=>'Retype Password']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('title','Full Name:',['class'=>'control-label text-semibold'])!!}
              {!! Form::text('full_name',null,['id'=>'full_name','class'=>'form-control','placeholder'=>'Full Name']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('info','Information:',['class'=>'control-label text-semibold'])!!}
              {!! Form::textarea('info',null,['id'=>'info','class'=>'form-control','rows'=>'5']) !!}    
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="pull-right">
              {!! Form::submit('Update Admin',['class'=>'btn btn-primary']) !!}
            </div>
          </div>
        </div>
      </div>
    </div>
    {!! Form::close() !!}
  </div>
</div>
<!-- Add member -->
<div class="col-lg-4">
</div>
<!-- /Add member -->
</div>
@stop
