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
				<h3 class="content-banner__title nolinks">Khóa học</h3>
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
					{{-- Test --}}
					@foreach($listCourse as $item)
					<?php $link_detail  = route('course.detail',['alias'=>$item->alias,'id'=>$item->id]);
						$link_preview = route('course.preview',['id'=>$item->id]);?>
					<li class="post__container">
						<div class="iris_p_infinite__item">
							<div class="iris_video-vital iris_video-vital--browse iris_video-vital--reveal">
								{{-- Thumb and title (for link) --}}
								<a class="iris_video-vital__overlay iris_link-box iris_chip-box" href="{{$link_detail}}">
									{{-- Thumbnail --}}
									<div class="iris_thumbnail iris_thumbnail iris_thumbnail-explore iris_thumbnail--16-9">
										{{-- For thumb --}}
										<?php  if($item->picture): ?>
											<div>
												<img src="<?php echo Helper::getPic($item->picture); ?>" srcset="<?php echo Helper::getPic($item->picture); ?> 2x" class="" data-pin-nopin="false" alt="{{$item->title}}" data-tooltip="{{$item->title}}">
											</div>
										<?php endif ?>
										{{-- For price --}}
										<div class="iris_video-vital__chips">
											<div class="iris_annotation__duration iris_chip">
												255<sup>k</sup>
											</div>
										</div/>
										{{-- For like, share button --}}
										<div class="iris_video-vital__chips--right">
											<div class="iris_chip iris_chip-icon iris_chip--watch  iris_chip--browse iris_chip--right" title="Add to Watch Later" data-custom="{&quot;clip_id&quot;:205209634,&quot;title&quot;:&quot;Cream&quot;,&quot;active&quot;:false}"><svg class="iris_ic is--32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 378.94 378.94">
											<path d="M348.151,54.514c-19.883-19.884-46.315-30.826-74.435-30.826c-28.124,0-54.559,10.942-74.449,30.826l-9.798,9.8l-9.798-9.8   c-19.884-19.884-46.325-30.826-74.443-30.826c-28.117,0-54.56,10.942-74.442,30.826c-41.049,41.053-41.049,107.848,0,148.885   l147.09,147.091c2.405,2.414,5.399,3.892,8.527,4.461c1.049,0.207,2.104,0.303,3.161,0.303c4.161,0,8.329-1.587,11.498-4.764   l147.09-147.091C389.203,162.362,389.203,95.567,348.151,54.514z M325.155,180.404L189.47,316.091L53.782,180.404   c-28.368-28.364-28.368-74.514,0-102.893c13.741-13.739,32.017-21.296,51.446-21.296c19.431,0,37.702,7.557,51.438,21.296   l21.305,21.312c6.107,6.098,16.897,6.098,23.003,0l21.297-21.312c13.737-13.739,32.009-21.296,51.446-21.296   c19.431,0,37.701,7.557,51.438,21.296C353.526,105.89,353.526,152.039,325.155,180.404z"/>
											</svg></div>
										</div>
										{{-- For player anotation button --}}
										<div class="iris-annotation-layer iris_annotation iris_annotation--videovitals iris_annotation--sm"><div class="iris_annotation__content"><div class="iris_chip iris_chip-playbutton iris_playbutton" title="Play" data-custom="{}" data-fatal-attraction="container:explore_standard_multi_1|component:thumbnail_play|position:0-0|keyword:205209634|page:0"><svg class="iris_ic is--undefined" viewBox="0 0 232.153 232.153">
										<path style="fill-rule:evenodd;clip-rule:evenodd;" d="M203.791,99.628L49.307,2.294c-4.567-2.719-10.238-2.266-14.521-2.266
										c-17.132,0-17.056,13.227-17.056,16.578v198.94c0,2.833-0.075,16.579,17.056,16.579c4.283,0,9.955,0.451,14.521-2.267
										l154.483-97.333c12.68-7.545,10.489-16.449,10.489-16.449S216.471,107.172,203.791,99.628z"/>
										</svg></div><span class="iris_annotation__duration iris_chip">04:47</span></div></div>
									</div>
									{{-- For Course title --}}
									<div class="iris_video-vital__title"><h5 class="l-ellipsis"><span class="iris_link iris_link--gray-2">{{$item->title}}</span></h5><div class="iris_video-vital__title-attributes"><!-- react-empty: 365 --></div></div>
								</a>
								{{-- Course description --}}
								<div class="course_description_panel">
									<span style="font-size: 12px">
										<?php if (strlen($item->introtext) > 80) echo substr($item->introtext, 0, 80).'...'; else echo $item->introtext;  ?>
									</span>
								</div>
								{{-- Attribute panel --}}
								<div class="iris_attribution_panel iris_attribution_panel--browse l-text-left">
								  <div class="iris_uservital iris_uservital--browse l-float-left">
								    <a class="iris_portrait is-circle iris_portrait--xxsm iris_video-vital__portrait" href="/theanimationworkshop">
								      <img src="{{asset('frontend/themes/default/assets/images/user-no-avatar.png')}}" srcset="{{asset('frontend/themes/default/assets/images/user-no-avatar.png')}} 1x, {{asset('frontend/themes/default/assets/images/user-no-avatar.png')}} 2x" alt="{{$item->last_name.' '.$item->middle_name.' '.$item->first_name}}">
								    </a>
								    <div class="iris_uservital-content">
								      <a href="/theanimationworkshop" class="iris_userinfo user-vital-item iris_link iris_link--gray-4">
								        <span>{{$item->last_name.' '.$item->middle_name.' '.$item->first_name}}</span>
								      </a>
								      <!-- react-empty: 373 -->
								      <span class="user-vital-item">
								        <span class="">
								          <span class="">442 plays
								          </span>
								        </span>
								      </span>
								    </div>
								  </div> 
								</div>
								

							</div>
						</div>
					</li>
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
