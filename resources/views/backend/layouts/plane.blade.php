<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js" xmlns="http://www.w3.org/1999/html">
<!--<![endif]-->
<head>
	<meta charset="utf-8"/>
	<title>{{ $meta_title or 'Quản lý hệ thống' }} </title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport"/>
	<meta content="" name="description"/>
	<meta content="" name="author"/>

	<link rel="icon" type="image/png" href="{{ asset("frontend/images/logo/logo-ghi.png") }}">

	<link rel="stylesheet" href="{{ asset("backend/assets/stylesheets/styles.css") }}" />
	<link rel="stylesheet" href="{{ asset("backend/assets/scripts/bootstrap-datepicker/css/bootstrap-datepicker.css") }}" />

    <script rel="text/javascript" src="{{ asset('backend/assets/scripts/jquery-2.2.3.js') }}" ></script>

</head>
<body>
	@yield('body')
	<script src="{{ asset("backend/assets/scripts/frontend.js") }}" type="text/javascript"></script>
	<script src="{{ asset('backend/assets/scripts/bootstrap-datepicker/js/bootstrap-datepicker.js') }}" rel="text/javascript" ></script>

</body>
</html>