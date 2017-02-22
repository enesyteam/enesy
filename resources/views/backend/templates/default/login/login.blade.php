@extends('backend.templates.default.layouts.plane')
@section('head.js')
<script type="text/javascript" src="{{asset('frontend/user/assets/js/pages/login.js')}}">
</script>
<script type=text/javascript>
  $(document).ready(function () {
    $(".btn-success").click(function () {
      $("#loginForm").submit();
    }
                           );
  }
                   );
</script>
@stop
@section('body_class', 'login-container')
@section('body')
<!-- Main navbar -->
<!-- /Main navbar -->
<!-- Page container -->
<div class="page-container">
  <!-- Page content -->
  <div class="page-content">
    <!-- Main content -->
    <div class="content-wrapper">
      <!-- Content area -->
      <div class="content">
        <!-- Simple login form -->
        {!! Form::open([
        'route'	=> [ 'admin.login' ],
        'method'	=>	'POST',
        'id'		=>	'loginForm',
        ]) !!}
        <div class="panel panel-body login-form">
          <div class="text-center">
            <div class="h-image-svg h-text-align-center" width="130px" height="25px">
              <a href="{{route('home')}}">
                <img alt="Enesy" width="130" class="is-hidden--no-svg is-hidden--no-js" src="{{asset('backend/image/enesy-logo-dark.png')}}">
              </a>
            </div>
            <h5 class="content-group">Administrator
              <small class="display-block">Enter your credentials below
              </small>
            </h5>
          </div>
          <div class="form-group has-feedback has-feedback-left">
            {!! Form::text('email','',['id'=>'email','class'=>'form-control','required'=>'true',
            'value'=>old('email'),
            'placeholder'=>'Email',
            'type'=>'email',
            'autofocus'=>'true']) !!}
            <div class="form-control-feedback">
              <i class="icon-envelop5 text-muted">
              </i>
            </div>
          </div>
          <div class="form-group has-feedback has-feedback-left">
            {!! Form::password('password',['id'=>'password','class'=>'form-control','required'=>'true',
            'placeholder'=>'Password',
            'type'=>'password']) !!}
            <div class="form-control-feedback">
              <i class="icon-lock2 text-muted">
              </i>
            </div>
          </div>
          <!-- Login Option -->
          <div class="form-group login-options">
            <div class="row">
              <div class="col-sm-6">
                <label class="checkbox-inline">
                  <span class="checked">
                    <input type="checkbox" class="styled" checked="checked">
                  </span>
                  Remember
                </label>
              </div>
              <div class="col-sm-6 text-right">
                <a href="#">Forgot password?
                </a>
              </div>
            </div>
          </div>
          <!-- /Login Option -->
          <div class="form-group">
            {{Form::button('Sign in
            <i class="icon-circle-right2 position-right">
            </i>', array('type' => 'submit', 'class' => 'btn btn-primary btn-block'))}}
          </div>
          <!-- Login Errors -->
          @if (count($errors))
          <div class="alert alert-danger alert-bordered">
            <button type="button" class="close" data-dismiss="alert">
              <span>×
              </span>
              <span class="sr-only">Close
              </span>
            </button>
            <ul>
              @foreach($errors->all() as $error)
              <li>{{ $error }}
              </li>
              @endforeach
            </ul>
          </div>
          @endif
          @if (isset($message))
          <div class="alert alert-danger alert-bordered">
            <button type="button" class="close" data-dismiss="alert">
              <span>×
              </span>
              <span class="sr-only">Close
              </span>
            </button>
            <span class="text-semibold">{{ $message }}
            </span>
          </div>
          @endif
          <!-- /Login Errors -->
        </div>
        {!! Form::close() !!}
        <!-- /simple login form -->
        <!-- Footer -->
        <div class="footer text-muted text-center">
          &copy; 2017. 
          <a href="#">Enesy
          </a> by 
          <a href="#" target="_blank">Enesy Team
          </a>
        </div>
        <!-- /footer -->
      </div>
      <!-- /content area -->
    </div>
    <!-- /Main content -->
  </div>
  <!-- /page content -->
</div>
<!-- /Page container -->
@stop
