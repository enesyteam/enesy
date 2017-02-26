@extends('frontend.themes.default.layout.dashboard')

{{-- SEO tags --}}
@section('page_title', 'Đào tạo Kỹ sư chuyên nghiệp | Enesy')
{{-- /SEO tags --}}

{{-- Body class --}}
@section('body.class', 'home-page')
{{-- /Body class --}}

@section('body.content')
	<main class="container">
		{{-- Maybe need to show a banner on top of content --}}
		<div class="content-banner"></div>

		{{-- Content Title --}}
		<h2>Chuyển đến trang <a href="{{route('courses.index')}}">Khóa học</a></h2>
		{{-- /Content Title --}}
		
	</main>
@stop