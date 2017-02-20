  @extends('frontend.master.course-master') @section('head.title') Enesy | Trang giảng viên @stop 
  @section('head.css')
  <link href="{{asset('frontend/css/author.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('frontend/user/assets/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('frontend/user/assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('frontend/user/assets/css/core.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('frontend/user/assets/css/components.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('frontend/user/assets/css/colors.css')}}" rel="stylesheet" type="text/css">
  @stop 
  @section('head.js')
    <!-- Core JS files -->
  <script type="text/javascript" src="{{asset('frontend/user/assets/js/plugins/loaders/pace.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('frontend/user/assets/js/core/libraries/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('frontend/user/assets/js/core/libraries/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('frontend/user/assets/js/plugins/loaders/blockui.min.js')}}"></script>
  <!-- /core JS files -->

  <!-- Theme JS files -->
  <script type="text/javascript" src="{{asset('frontend/user/assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('frontend/user/assets/js/plugins/forms/styling/switch.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('frontend/user/assets/js/plugins/forms/styling/switchery.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('frontend/user/assets/js/core/app.js')}}"></script>
  <!-- /theme JS files -->
  @stop 
  @section('body.content')
  <div class="content-main--basic" id="content">
    <div class="mt-10 mb-10">
      <!--Dashboard-->
      <div class="grid-container">
        <div class="page-container" style="min-height:275.39999771118164px">
          <!-- Page content -->
          <div class="page-content">
            <!-- Main sidebar -->
            @include('frontend.author.partials.author-sidebar') <!-- /main sidebar -->
             <!-- Main content -->
            <div class="content-wrapper">
              <!-- Content area -->
              <div class="content mr--20">
                @yield('author-body.content')
              </div><!-- /content area -->
            </div><!-- /main content -->
          </div><!-- /page content -->
        </div>
      </div><!--/Dashboard-->
    </div>
  </div>@stop
  @yield('scripts')