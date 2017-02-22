@extends('backend.templates.default.layouts.plane')
@section('body')
	<!-- Main navbar -->
	@include('backend.templates.default.partials.navbar')
	<!-- /Main navbar -->
	<!-- Page Container -->
	<div class="page-container" style="min-height:324.39999771118164px">
		<!-- Page Content -->
		<div class="page-content">
			<!-- Main Sidebar -->
			@include('backend.templates.default.partials.sidebar')
			<!-- /Main Sidebar -->
			<!-- Main Content -->
			<div class="content-wrapper">
				<!-- Page Header -->
				@include('backend.templates.default.partials.page-header')
				<!-- /Page Header -->
				<!-- Conten area -->
				<div class="content">
					@yield('body.content')
				</div>
				<!-- /Content area -->
			</div>
			<!-- /Main Content -->
		</div>
		<!--- /Page Content -->
	</div>
	<!-- /Page Container -->
@stop