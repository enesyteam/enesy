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
					    {{-- <li class="section-header__nav-link">
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
					    </li> --}}
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
						<div class="e_c_p_infinite__item">
							<div class="e_c_video-vital e_c_video-vital--browse e_c_video-vital--reveal">
								{{-- Thumb and title (for link) --}}
								<a class="e_c_video-vital__overlay e_c_link-box e_c_chip-box" href="{{$link_detail}}">
									{{-- Thumbnail --}}
									<div class="e_c_thumbnail e_c_thumbnail e_c_thumbnail-explore e_c_thumbnail--16-9">
										{{-- For thumb --}}
										<?php  if($item->picture): ?>
											<div>
												<img src="<?php echo Helper::getPic($item->picture); ?>" srcset="<?php echo Helper::getPic($item->picture); ?> 2x" class="" data-pin-nopin="false" alt="{{$item->title}}" data-tooltip="{{$item->title}}">
											</div>
										<?php endif ?>
										{{-- For price --}}
										<div class="e_c_video-vital__chips">
											<div class="e_c_annotation__duration e_c_chip">
												255<sup>k</sup>
											</div>
										</div/>
										{{-- For like, share button --}}
										<div class="e_c_video-vital__chips--right">
											{{-- Like button --}}
											<div class="box">
												{{-- Tooltip --}}
												<label class="rounded-box like-label invisible hidden" role="presentation"><span>Like</span></label>
												<div class="e_c_chip e_c_chip-icon e_c_chip--watch  e_c_chip--browse e_c_chip--right" title="Thích khóa học này" data-custom="{&quot;clip_id&quot;:205209634,&quot;title&quot;:&quot;Cream&quot;,&quot;active&quot;:false}">
													{{-- Draw a svg path for like button --}}
													<svg class="e_c_ic is--32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
														<path d="M10.805 3C8.785 3 8 5.345 8 5.345S7.214 3 5.197 3C3.494 3 1.748 4.096 2.03 6.514c.344 2.953 5.725 6.48 5.963 6.487.238.01 5.738-3.72 5.988-6.5.208-2.3-1.473-3.5-3.175-3.5z" fill-rule="evenodd"/>
													</svg>
												</div>
											</div>
											{{-- Share button --}}
											<div class="box">
												<div class="e_c_chip e_c_chip-icon e_c_chip--watch  e_c_chip--browse e_c_chip--right" title="Chia sẻ khóa học" data-custom="{&quot;clip_id&quot;:205209634,&quot;title&quot;:&quot;Cream&quot;,&quot;active&quot;:false}">
													{{-- Draw a svg path for like button --}}
													<svg class="e_c_ic is--32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
														<path d="M2 6v5c0 1.105.902 2 2.01 2h6.986H10l-2-2H4V6h-.5H6L3 3 0 6h2zm4-3h-.996 6.987C13.1 3 14 3.895 14 5v5h-2V5H8L6 3zm10 7h-6l3 3 3-3z" fill-rule="evenodd"/>
													</svg>
												</div>
											</div>
										</div>
										{{-- For player anotation button --}}
										<div class="iris-annotation-layer e_c_annotation e_c_annotation--videovitals e_c_annotation--sm">
											<div class="e_c_annotation__content">
												<div class="e_c_chip e_c_chip-playbutton e_c_playbutton" title="Xem giới thiệu khóa học">
												{{-- Draw a svg path --}}
													<svg class="e_c_ic is--undefined" viewBox="0 0 232.153 232.153">
														<path style="fill-rule:evenodd;clip-rule:evenodd;" d="M203.791,99.628L49.307,2.294c-4.567-2.719-10.238-2.266-14.521-2.266
														c-17.132,0-17.056,13.227-17.056,16.578v198.94c0,2.833-0.075,16.579,17.056,16.579c4.283,0,9.955,0.451,14.521-2.267
														l154.483-97.333c12.68-7.545,10.489-16.449,10.489-16.449S216.471,107.172,203.791,99.628z"/>
													</svg>
												</div>
												<span class="e_c_annotation__duration e_c_chip" title="Thời lượng khóa học">
												24 giờ
												</span>
											</div>
										</div>
									</div>
									{{-- For Course title --}}
									<div class="e_c_video-vital__title"><h5 class="l-ellipsis"><span class="e_c_link e_c_link--gray-2" title="{{$item->title}}">{{$item->title}}</span></h5>
									<div class="e_c_video-vital__title-attributes"><!-- empty --></div></div>
									{{-- Course description --}}
									<div class="course_description_panel">
										<span style="font-size: 12px">
											<?php if (strlen($item->introtext) > 80) echo substr($item->introtext, 0, 80).'...'; else echo $item->introtext;  ?>
										</span>
									</div>
								</a>
								
								{{-- Attribute panel --}}
								<div class="e_c_attribution_panel e_c_attribution_panel--browse l-text-left">
								  <div class="e_c_uservital e_c_uservital--browse l-float-left">
								    <a class="e_c_portrait is-circle e_c_portrait--xxsm e_c_video-vital__portrait" href="#">
								      <img src="{{asset('frontend/themes/default/assets/images/user-no-avatar.png')}}" srcset="{{asset('frontend/themes/default/assets/images/user-no-avatar.png')}} 1x, {{asset('frontend/themes/default/assets/images/user-no-avatar.png')}} 2x" alt="{{$item->last_name.' '.$item->middle_name.' '.$item->first_name}}">
								    </a>
								    <div class="e_c_uservital-content">
								      <a href="#" class="e_c_userinfo user-vital-item e_c_link e_c_link--gray-4">
								        <span>{{$item->last_name.' '.$item->middle_name.' '.$item->first_name}}</span>
								      </a>
								      <!-- react-empty: 373 -->
								      <span class="user-vital-item e_c_link--gray-4">
								        <span class="">
								        	<svg class="e_c_ic is--32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 36">
												<path fill="rgba(153, 153, 153, 0.5)" d="M18.4 18.5l2.5 5 .2.5H28l-2.1-4.3-4.1-1.5v-2.5c1.2-1.1 1.8-3.2 1.8-5.1 0-2.1-2-3.6-3.5-3.6s-3.5 1.6-3.5 3.6c0 1.9.5 4 1.8 5.1v2.5h-.1l.1.3z"/>
												<path fill="#999" d="M17.5 19l-5-1.8v-3c1.4-1.2 2-3.8 2-5.9 0-2.4-2.3-4.3-4-4.3-1.7 0-4 1.8-4 4.3 0 2.2.6 4.7 2 5.9v3l-5 1.8L1 24h19l-2.5-5z"/>
											</svg>
								          	<span class="">2,500</span>
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
