@extends('frontend.themes.default.pages.course.layout.course-plane')

{{-- SEO tags --}}
@section('page_title', 'Khóa học đào tạo Kỹ sư chuyên nghiệp | Enesy')
{{-- /SEO tags --}}

{{-- Body class --}}
@section('body.class', 'courses-page category')
{{-- /Body class --}}

{{-- Body content --}}
@section('hero-section')
<div class="explore_module explore_module-hero">
	<div class="hero-slide-wrapper">
		<div class="iris_p_content hero-slide__content">
			<div class="hero-slide__bg-wrapper">
				{{-- Slide content --}}
				<img class="iris_token__image iris_token__image--background" src="{{asset('frontend/themes/default/assets/images/man_learning.jpg')}}">
			</div>
			<div class="container">
				<div class="hero-slide__inner-wrapper">
				<div class="hero-slide__inner-content iris_p_content__main iris_p_content__main-20">
					<div class="iris_span_xxxlg-20--8of8 hero-slide__inner-metadata-wrapper">
						<div class="hero-slide__inner-metadata">
							<div class="">
								<div class="hero__token iris_token">
									<img class="iris_token__image iris_token__image--background" src="{{asset('frontend/themes/default/assets/images/man_learning.jpg')}}">
									<span class="iris_token__icon iris_ic">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
										<path d="M5 22c-.245 0-.483.024-.717.06l-.112.112L0 32l9.828-4.172.112-.112c.036-.233.06-.47.06-.716 0-2.76-2.24-5-5-5zM22 5c-.245 0-.483.024-.717.06L6.293 20.05c.23-.032.466-.05.707-.05 2.76 0 5 2.24 5 5 0 .24-.018.477-.05.708l14.99-14.99c.036-.235.06-.473.06-.718 0-2.76-2.24-5-5-5zM30.828 1.172c-1.562-1.562-4.095-1.562-5.657 0l-1.88 1.88c.233-.034.47-.052.71-.052 2.76 0 5 2.24 5 5 0 .24-.018.477-.05.708l1.88-1.88c1.56-1.562 1.56-4.094-.002-5.656z">
											
										</path>
										<g>
										<path d="M14.672 8.843L6.414.586c-.78-.78-2.047-.78-2.828 0l-3 3c-.78.78-.78 2.047 0 2.828l1.36 1.36 2.843-2.84 1.413 1.413L3.36 9.19l2.122 2.12 2.842-2.842 1.414 1.414-2.842 2.842 1.947 1.947 5.83-5.827zM31.414 25.586l-8.257-8.257-5.828 5.827 1.946 1.947 2.874-2.874 1.414 1.414-2.874 2.874 2.12 2.12 2.875-2.873L27.1 27.18l-2.875 2.873 1.36 1.36c.782.782 2.048.782 2.83 0l3-3c.78-.78.78-2.046 0-2.827z"></path>
										</g>
										</svg>
									</span>
								</div>
							</div>
							{{-- Cagegory title --}}
							<header class="hero__title" data-fatal-attraction="container:category_hero_0|component:headline|keyword:183377555|position:0">
								{{$cat->title}}
							</header>
							{{-- Category description --}}
							<p class="hero__description">{{$cat->description}} …</p>
							{{-- Actions --}}
							<div class="hero__action-items"><div class="hero__action-item"><a role="button" href="/202791609" class="iris_btn iris_btn--primary hero-play-btn" data-fatal-attraction="container:category_hero_0|component:cta_clip_watch|keyword:18|position:0"><div class="iris_ic is--16"><svg viewBox="298 388 16 16" fill="#fff"><path d="M298 404v-16l16 8"></path></svg></div><span class="iris_btn-content">Học thử</span></a></div></div>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
	
</div>
@stop

{{-- Metadata --}}
@section('metadata')
<div class="explore_module ">
  <div class="iris_metabar">
    <div class="container">
    	<div class="iris_p_content">
      <section class="iris_p_content__main iris_p_content__main-20">
        <div class="iris_span_xxxlg-20--8of8">
          <div class="iris_metabar__content">
            <div class="iris_metabar__meta iris_metabar__meta__breadcrumb">
              <a href="/watch" class="iris_metabar__breadcrumb iris_link iris_link--gray-2" data-fatal-attraction="container:category_metabar_1|component:breadcrumb">Tất cả chủ đề
              </a>
            </div>
            <div class="iris_metabar__meta">
              <a href="/categories/art/videos" class="iris_metabar__meta-item iris_link iris_link--gray-2 video-count">{{$listCourse->isEmpty() ? 0: $listCourse->total()}} khóa học
              </a>
              <span class="iris_metabar__meta-item ">25,000 học viên
              </span>
            </div>
            <div class="iris_metabar__actions">
              <button class="iris_btn iris_metabar__button iris_btn--sm iris_btn-utility" data-fatal-attraction="container:category_metabar_1|component:cta_share" type="button">
                <svg class="e_c_ic is--32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
					<path d="M2 6v5c0 1.105.902 2 2.01 2h6.986H10l-2-2H4V6h-.5H6L3 3 0 6h2zm4-3h-.996 6.987C13.1 3 14 3.895 14 5v5h-2V5H8L6 3zm10 7h-6l3 3 3-3z" fill-rule="evenodd"/>
				</svg>
                <span class="iris_btn-content">Chia sẻ
                </span>
              </button>
              <button type="button" class="iris_btn iris_btn--sm iris_metabar__button iris_btn-outline iris_btn-outline--primary" data-fatal-attraction="container:category_metabar_1|component:cta_follow">
                <svg class="iris_ic is--12" width="10" height="10" viewBox="0 0 6 6" xmlns="http://www.w3.org/2000/svg">
                  <path d="M2,2V0h2v2h2v2H4v2H2V4H0V2H2z"/>
                </svg>
                <span class="iris_btn-content">Theo dõi
                </span>
              </button>
            </div>
          </div>
        </div>
      </section>
    </div>
    </div>
  </div>
</div>

@stop

@section('page-content')
{{-- Header --}}
<div class="iris_p-header">
  <h1 class="iris_header grid_module__header">
    <a href="#" class="iris_link iris_link--gray-2" data-fatal-attraction="container:category_standard_multi_2|component:header">
      <span>
        <span class="grid_module__header-text--long">Nổi bật
        </span>
      </span>
      <!-- react-text: 104 --> 
      <!-- /react-text -->
      <svg class="iris_ic is--12 grid_module__header-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 8">
        <path d="M11.7 1.3l-1-1c-.4-.4-1-.4-1.4 0L6 3.6 2.7.3c-.4-.4-1-.4-1.4 0l-1 1c-.4.4-.4 1 0 1.4l5 5c.2.2.5.3.7.3s.5-.1.7-.3l5-5c.4-.4.4-1 0-1.4">
        </path>
      </svg>
    </a>
  </h1>
  <a class="grid_module__header-link iris_link iris_link--arrow" href="/categories/art/videos" data-fatal-attraction="container:category_standard_multi_2|component:view_more">Xem thêm
  </a>
</div>

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
@stop

@section('pagination')
		{{-- Pagination --}}
		<nav class="pagination">
		  {{$listCourse->render()}}
		</nav>
		{{-- /Pagination --}}
@stop

