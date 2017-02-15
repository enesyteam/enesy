@extends('frontend.master.course-master')
@section('head.title')
	Enesy | Trang giảng viên
@stop

@section('head.css')
	<link href="{{'frontend/css/author.css'}}" rel="stylesheet" type="text/css" />
@stop

@section('body.content')
	<div class="content-main--basic" id="content">
		<div class>
			<section class="page-section h-pt3 h-mb3 h-pb0 -border-bottom -color-grey-light">
  <div class="grid-container">
    <div class="user-info-header h-mb0">
      <div class="user-info-header__user-details">
    <img width="80" height="80" alt="congcd4" src="{{url('frontend/images/authors/default-user-thumb.png')}}">


  <div class="user-info-header__content h-ml2">
    <a class="t-link -decoration-none" href="/user/congcd4">
      <h2 class="t-heading h-display-inlineblock h-m0 h-p0 -size-m">congcd4</h2>
</a>

    <p class="t-body -size-m h-p0 h-mb0">
        Giảng viên, tham gia từ tháng 1/2017
    </p>

    <div class="user-info-header__cta-buttons">

    </div>
  </div>
</div>

        <div class="user-info-header__user-stats">
    
    <div class="user-info-header__stats-article h-mr0 h-ml2">
  <div class="user-info-header__stats-label">
    <span class="t-body">Khóa học đã bán</span>
    <meta itemprop="interactionCount" content="AuthorSales:100">
  </div>
  <div class="user-info-header__stats-content">
    <strong class="t-heading -size-m">
      100
    </strong>
  </div>
</div>

  </div>

    </div>
    @include('frontend.author.partials.author-navbar')

</div>
</section>
		</div>
	</div> 
@stop