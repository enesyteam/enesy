<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Enesy - Addministrator</title>

	<!-- Global stylesheets -->
	<link href="{{asset('backend/templates/default/assets/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('backend/templates/default/assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('backend/templates/default/assets/css/core.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('backend/templates/default/assets/css/components.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('backend/templates/default/assets/css/colors.css')}}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->
	<!-- Theme stylesheets -->
	@yield('head.css')
	<!-- /Theme stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="{{asset('frontend/user/assets/js/plugins/loaders/pace.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('frontend/user/assets/js/core/libraries/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('frontend/user/assets/js/core/libraries/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('frontend/user/assets/js/plugins/loaders/blockui.min.js')}}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="{{asset('frontend/user/assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('frontend/user/assets/js/core/app.js')}}"></script>
	@yield('head.js')
	<!-- /theme JS files -->
</head>
<body class="navbar-top @yield('body_class')">
	@yield('body')

	@yield('body.scripts')
</body>
</html>