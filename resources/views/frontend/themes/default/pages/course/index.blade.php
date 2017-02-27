@extends('frontend.themes.default.layout.dashboard')

{{-- Page stylesheets --}}
@section('page.css')
{{ Html::style(asset('frontend/themes/default/assets/css/pages/course.min.css')) }}
@stop
{{-- /Page stylesheets --}}

{{-- Page js --}}
@section('page.js')
{{ Html::script(asset('frontend/themes/default/assets/js/course.js')) }}
@stop
{{-- /Page js --}}

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
		{{-- Courses grid --}}
		<div class="courses-grid-view">
			<ol class="posts posts--full-width nolinks">
	                 @foreach($listCourse as $item)
	                    <?php  
	                    $link_detail  = route('course.detail',['alias'=>$item->alias,'id'=>$item->id]);
	                    $link_preview = route('course.preview',['id'=>$item->id]);
	                    ?>
	                    {{-- Course Item --}}

	                    <li class="post__container">
						  <article class="posts__post">
						    <header>
						      <a class="posts__post-preview " href="{{$link_detail}}">
						        <img sizes="(max-width: 679px) 76px, 300px" class="posts__post-preview-image posts__post-preview-image--regular" srcset="https://cms-assets.tutsplus.com/uploads/users/71/courses/1033/preview_image/drupal-8-1.png 400w, https://thumbsplus.tutsplus.com/uploads/users/71/courses/1033/preview_image/drupal-8-1.png?height=380&amp;width=380 380w, https://thumbsplus.tutsplus.com/uploads/users/71/courses/1033/preview_image/drupal-8-1.png?height=300&amp;width=300 300w, https://thumbsplus.tutsplus.com/uploads/users/71/courses/1033/preview_image/drupal-8-1.png?height=190&amp;width=190 190w, https://thumbsplus.tutsplus.com/uploads/users/71/courses/1033/preview_image/drupal-8-1.png?height=152&amp;width=152 152w, https://thumbsplus.tutsplus.com/uploads/users/71/courses/1033/preview_image/drupal-8-1.png?height=76&amp;width=76 76w" src="https://thumbsplus.tutsplus.com/uploads/users/71/courses/1033/preview_image/drupal-8-1.png?height=300&amp;width=300" alt="Drupal 8 1">
						      </a>
						      <a class="posts__post-title " href="{{$link_detail}}">
						        <h1 class="nolinks">{{$item->title}}</h1>
						      </a>
						    </header>
						    <div class="posts__post-teaser">{{substr($item->introtext, 0, 100)}}
						    </div>
						    <footer class="posts__post-details">
						      <div class="posts__post-teaser-overlay">
						      </div>
						      <div class="posts__post-publication-meta">
						        <img sizes="76px" class="posts__post-author_photo" srcset="{{asset('frontend/themes/default/assets/images/user-no-avatar.png')}} 400w, {{asset('frontend/themes/default/assets/images/user-no-avatar.png')}}?height=380&amp;width=380 380w, {{asset('frontend/themes/default/assets/images/user-no-avatar.png')}}?height=300&amp;width=300 300w, {{asset('frontend/themes/default/assets/images/user-no-avatar.png')}}?height=190&amp;width=190 190w, {{asset('frontend/themes/default/assets/images/user-no-avatar.png')}}?height=152&amp;width=152 152w, {{asset('frontend/themes/default/assets/images/user-no-avatar.png')}}?height=76&amp;width=76 76w" alt="Derek Jensen" src="{{asset('frontend/themes/default/assets/images/user-no-avatar.png')}}?height=76&amp;width=76">
						        <div class="posts__post-details__info">
						          <address class="posts__post-author">
						            <a class="posts__post-author-link" href="#">{{$item->last_name.' '.$item->middle_name.' '.$item->first_name}}
						            </a>
						          </address>
						          <time class="posts__post-publication-date" datetime="2017-02-24T00:00:00Z" title="24 Feb 2017">26/02/2017
						          </time>
						        </div>
						      </div>
						      <div class="posts__post-primary-topic topic-code">
						        <a class="posts__post-primary-topic-link topic-code" href="{{route('course.listByCat',['id'=>$item->parent_cat_id,'alias'=>$item->cat_alias2])}}">{{$item->cat_title2}}
						        </a>
						      </div>
						      <span class="posts__post-extra-info">3.7 hours
						      </span>
						    </footer>
						  </article>
						</li>
	                    {{-- /Course Item --}}

	                 @endforeach
			</ol>
		</div>
		{{-- /Courses grid --}}

		{{-- Pagination --}}
		@if($sort != '')
		  {{$listCourse->appends(['sort' => $sort])->render()}}
		@else
		<nav class="pagination">
		  {{$listCourse->render()}}
		</nav>
		@endif
		{{-- /Pagination --}}
	</main>
@stop
{{-- /Body content --}}

@section('body.script')
<script type="text/javascript">

    jQuery(document).ready(function () {

        // first demo
        $('div.courses-grid-view').responsiveContainer({
            feature: 'min-width',
            value: '830px',
            className: 'course_grid_columns-4'
        });

        $('div.courses-grid-view').responsiveContainer({
            feature: 'max-width',
            value: '830px',
            className: 'course_grid_columns-3'
        });

        $('div.courses-grid-view').responsiveContainer({
            feature: 'max-width',
            value: '680px',
            className: 'course_grid_columns-2'
        });

        $('div.courses-grid-view').responsiveContainer({
            feature: 'max-width',
            value: '480px',
            className: 'course_grid_columns-1'
        });

    });
    
</script>
@stop
