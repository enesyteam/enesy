<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html class="js cors svg" lang="{{ config('app.locale') }}" xmlns="http://www.w3.org/1999/html">
<!--<![endif]-->
     <head>
        <meta charset="utf-8" />
        <title> {{ $meta_title }} </title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="{{ $meta_des }}" name="description" />
        <meta content="Enesy.vn" name="author" />
        <link href="{{asset('frontend/css/normalize.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('frontend/css/layout.css')}}" rel="stylesheet" type="text/css" />
        @yield('head.css')
        <link href="{{asset('frontend/user/assets/css/components.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('frontend/user/assets/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('frontend/css/custom.css')}}" rel="stylesheet" type="text/css" />
        <!--Page Loader-->
        <script type="text/javascript" src="{{asset('frontend/user/assets/js/plugins/loaders/pace.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/user/assets/js/core/libraries/jquery.min.js')}}"></script>
        <!--/Page Loader-->
        <!--JqueryModal-->
        <script src="{{asset('frontend/vender/jquery-modal/jquery.modal.js')}}" type="text/javascript" charset="utf-8"></script>
        <script src="{{asset('frontend/js/main.js')}}" type="text/javascript" charset="utf-8"></script>
        <script src="{{asset('frontend/vender/jquery-modal/highlight/highlight.pack.js')}}" type="text/javascript" charset="utf-8"></script>
        <script type="text/javascript" charset="utf-8"> hljs.initHighlightingOnLoad(); </script>
        <!--/JqueryModal-->
     </head>
<body>
    @yield('body')
    <div class="query-log is-hidden" style="margin-top: 30px">
        <pre>
        <?php              
            print_r(\DB::getQueryLog()); 
        ?>
        </pre>
    </div>
<script type="text/javascript">
//this is demo by cong, need to rewrite by code team
$(document).ready(function() {
var showLogButton         = $(".show-log-button");

$(showLogButton).click(function(e){
  e.preventDefault();
      $('.query-log').toggleClass("is-hidden");
});
});
</script>
</body>
</html>