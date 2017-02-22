@extends('backend.templates.default.layouts.dashboard')
@section('page_heading','Edit member')
@section('body.content')
<div class="row">
  <div class="col-lg-8">
    {!! Form::model($member,[
    'route' => [ 'executeAddMember' ],
    'method'  =>  'POST',
    'id'    =>  'editMemberForm',
    'class'   =>  'form-vertical',
    'enctype' =>  'multipart/form-data',
    'files'   =>  true
    ]) !!}
    <div class="panel panel-flat">
      <div class="panel-heading">
        <h6 class="panel-title">
          <i class="icon-pencil7 position-left">
          </i>Edit member
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
          <div class="col-lg-6">
            <div class="form-group">
              {!! Form::label('title','Username:',['class'=>'control-label text-semibold'])!!}
              {!! Form::text('username',null,['id'=>'title','class'=>'form-control','required'=>'true']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('email','Email:',['class'=>'control-label text-semibold'])!!}
              {!! Form::text('email',null,['id'=>'title','class'=>'form-control','required'=>'true']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('title','Password:',['class'=>'control-label text-semibold'])!!}
              {!! Form::text('password',null,['id'=>'title','class'=>'form-control','required'=>'true']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('status','Status:',['class'=>'control-label text-semibold'])!!}
              <select class="form-control" name="status" >
                @foreach($status as $key => $st)
                <option value="{{$key}}" "<?php if ($key == $member->status) echo ' selected '; ?>">{{$st}}
                </option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              {!! Form::label('first_name','First Name:',['class'=>'control-label text-semibold'])!!}
              {!! Form::text('first_name',null,['id'=>'first_name','class'=>'form-control']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('middle_name','Middle Name:',['class'=>'control-label text-semibold'])!!}
              {!! Form::text('middle_name',null,['id'=>'middle_name','class'=>'form-control']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('last_name','Last Name:',['class'=>'control-label text-semibold'])!!}
              {!! Form::text('last_name',null,['id'=>'last_name','class'=>'form-control']) !!}
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="pull-right">
              <input type="submit" name="" value="Update" class="btn btn-primary">
            </div>
          </div>
        </div>
      </div>
    </div>
    {!! Form::close() !!}
  </div>
  <div class="col-lg-4">
  </div>
</div>
@stop
