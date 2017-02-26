@extends('frontend.themes.default.layout.dashboard')

{{-- Page stylesheets --}}
@section('page.css')
{{ Html::style(asset('frontend/themes/default/assets/css/pages/course.min.css')) }}
@stop
{{-- /Page stylesheets --}}

{{-- SEO tags --}}
@section('page_title', 'Khóa học đào tạo Kỹ sư chuyên nghiệp | Enesy')
{{-- /SEO tags --}}

{{-- Body class --}}
@section('body.class', 'courses-page')
{{-- /Body class --}}

{{-- Body content --}}
@section('body.content')
	<main class="container">
		{{-- Maybe need to show a banner on top of content --}}
		<div class="content-banner"></div>

		{{-- Content Title --}}
		<div class="content-title">
			<div class="content-banner__body">
				<h2 class="content-banner__title nolinks">Các khóa học đào tạo Kỹ sư chuyên nghiệp</h2>
			</div>
			<section class="layout__content-full-width">
				<div class="section-header view view--loaded">
					<div class="section-header__navigation">
					  <ul class="section-header__nav-links">
					    <li class="section-header__nav-link">
					      <div class="courses-index-header__filter-group courses-index-header__filter-group--difficulty">
					        <ul class="courses-index-header__button-list">
					          <li class="courses-index-header__filtering-button-item courses-index-header__filtering-button-item-active">
					            <a class="courses-difficulty__button-active" href="#">Tất cả</a>
					          </li>
					          <li class="courses-index-header__filtering-button-item courses-index-header__filtering-button-item-inactive">
					            <a class="courses-difficulty__button-active" href="#">Nổi bật</a>
					          </li>
					          <li class="courses-index-header__filtering-button-item courses-index-header__filtering-button-item-inactive">
					            <a class="courses-difficulty__button-active" href="#">Miễn phí</a>
					          </li>
					        </ul>
					      </div>
					    </li>
					    <li class="section-header__nav-link">
					      <div class="courses-index-header__filter-group courses-index-header__filter-group--cost">
					        <ul class="courses-index-header__button-list">
					          <li class="courses-index-header__filtering-button-item courses-index-header__filtering-button-item-active">
					            <a class="courses-filtering__button-active" href="#"><i class="icon-grid2 icon-medium"></i></a>
					          </li>
					          <li class="courses-index-header__filtering-button-item courses-index-header__filtering-button-item-inactive">
					            <a class="courses-filtering__button-active" href="#"><i class="icon-list2 icon-medium"></i></a>
					          </li>
					        </ul>
					      </div>
					    </li>
					    <li class="section-header__nav-link section-header__nav-link--secondary">
					      <a href="#"><i class="icon-comment-discussion icon-medium section-header__nav-link-image"></i> Đề xuất khóa học</a>
					    </li>
					  </ul>
					</div>
				</div>
			</section>
		</div>
		{{-- /Content Title --}}
		
	</main>
@stop
{{-- /Body content --}}
