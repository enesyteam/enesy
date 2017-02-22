@extends('backend.templates.default.layouts.dashboard')
@section('head.js')
<script rel="text/javascript" src="{{ asset('backend/assets/scripts/tooltip.js') }}" >
</script>
<script rel="text/javascript" src="{{ asset('backend/assets/scripts/bootstrap-confirmation.js') }}" >
</script>
<script rel="text/javascript" src="{{ asset('backend/assets/scripts/adminuser/adminuser.js') }}" >
</script>
@stop
@section('page_heading','Admin list')
@section('body.content')
<div class="row">
  <div class="col-lg-8">
    <div class="panel panel-flat">
      <div class="panel-heading">
        <h6 class="panel-title">
          <i class="icon-list-unordered position-left">
          </i>All admins
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
      </div>
      <!-- New table -->
      <div class="table-responsive">
        <table class="table table-striped" style="font-size: 13px;width: 100%">
          <thead>
            <tr>
              <th style="width: 10px;">
                <input type="checkbox" name="checkAll" id="checkAll" onclick="checkAll(this)">
              </th>
              <th style="width: 10px;">Id
              </th>
              <th>Username
              </th>
              <th>Email
              </th>
              <th>Full Name
              </th>
              <th>Active
              </th>
              <th>Info
              </th>
              <th>Role
              </th>
              <th>Action
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach($listAdmin as $item)
            <tr >  
              <td>
                <label>
                  <input type="checkbox" value="{{ $item['id']  }}">
                </label>
              </td>
              <td>{{ $item['id']  }}
              </td>
              <td>{{ $item['username']  }}
              </td>  
              <td>{{ $item['email']  }}
              </td>                       
              <td>{{ $item['full_name']  }}
              </td>
              <td>
                @if ( $item['active'] === 0 )
                <span class="statusActive">Delete
                </span>
                @elseif( $item['active'] === 1 )
                <span class="statusActive">Non-Active
                </span>
                @elseif( $item['active'] === 2 )
                <span class="statusActive">Active
                </span>
                @endif
                <input type="checkbox"
                       class="checkActive" data-id="{{ $item['id'] }}"
                       value-id ="{{ $item['active'] }}"
                       {{ $item['active'] == 2 ? "checked" : "" }}>
              </td>
              <td>
                {{ $item['info']  }}
              </td>
              <td>
                {{ $item['type_admin']  }}
              </td>
              <td>
                <a href="" class="glyphicon glyphicon-pencil">
                </a>&nbsp;&nbsp;|&nbsp;&nbsp;
                <a href="" class="glyphicon glyphicon-trash">
                </a>
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
      <div class="col-md-4">
        <ul class="pagination" >
          <li>
            <a onclick="deleteAll()" style="cursor:pointer;">
              <i class="glyphicon glyphicon-remove-circle">
              </i>&nbsp;Delete all
            </a>
          </li>
        </ul>
      </div>
      <div class="col-md-8">
        <div class="pull-right">
          {!!  $listAdmin->render() !!}
        </div>
      </div>
    </div>
  </div>
  <!-- Add member -->
  <div class="col-lg-4">
    {!! Form::open([
    'route' => [ 'excuteAddNewAdmin' ],
    'method'  =>  'POST',
    'id'    =>  'addAdminForm',
    'class'   =>  'form-vertical',
    'enctype' =>  'multipart/form-data',
    'files'   =>  true
    ]) !!}
    <div class="panel panel-flat">
      <div class="panel-heading">
        <h6 class="panel-title">
          <i class="icon-user-plus position-left">
          </i>Add new admin
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
              {!! Form::text('username','',['id'=>'username','class'=>'form-control','required'=>'true','placeholder'=>'User Name']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('email','Email:',['class'=>'control-label text-semibold'])!!}
              {!! Form::text('email','',['id'=>'email','class'=>'form-control','required'=>'true','placeholder'=>'Email']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('title','Password:',['class'=>'control-label text-semibold'])!!}
              {!! Form::text('password','',['id'=>'password','class'=>'form-control','required'=>'true','placeholder'=>'Password']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('title','Confirm Password:',['class'=>'control-label text-semibold'])!!}
              {!! Form::text('password_confirmation','',['id'=>'password_confirmation','class'=>'form-control','required'=>'true','placeholder'=>'Retype Password']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('title','Full Name:',['class'=>'control-label text-semibold'])!!}
              {!! Form::text('full_name','',['id'=>'full_name','class'=>'form-control','placeholder'=>'Full Name']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('info','Information:',['class'=>'control-label text-semibold'])!!}
              {!! Form::textarea('info','',['id'=>'info','class'=>'form-control','rows'=>'5']) !!}    
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="pull-right">
              <button type="submit" class="btn btn-primary">Create Admin
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    {!! Form::close() !!}
  </div>
  <!-- /Add member -->
</div>
@stop
