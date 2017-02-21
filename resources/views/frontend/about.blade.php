@extends('frontend.layouts.dashboard')
@section('head.css')
<link href="{{'frontend/css/about.css'}}" rel="stylesheet" type="text/css" />
@stop

@section('custom-navbar')
<div class="header-categories__search">
  <form id="search" data-view="searchField" action="{{route('course.search_result')}}" accept-charset="UTF-8" method="get"><input name="utf8" type="hidden" value="">
    <div class="search-field -border-light">
      <div class="search-field__input">
        <input id="term" name="term" class="js-term search-field__input-field" type="search" placeholder="Tìm khóa học" vk_19588="subscribed">
      </div>
      <button class="search-field__button" type="submit">
        <i class="e-icon -icon-search"><span class="e-icon__alt">Search</span></i>
      </button>
    </div>
</form></div>
@stop

@section('section')
   <section class="c_hero" style="background-image: url('frontend/images/hero__background1.jpg');">
      <div class="container grid-container">
         <ul id="menu-header-menu" class="c_nav c_nav--main">
            <li id="menu-item-5153" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-5136 current_page_item menu-item-5153"><a href="{{route('home.about')}}">Enesy</a></li>
            <li id="menu-item-5156" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5156"><a href="#">Chuyên gia</a></li>
            <li id="menu-item-148522" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-148522"><a href="#">???</a></li>
            <li id="menu-item-5154" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5154"><a href="#">Blog</a></li>
         </ul>
         <div class="vertical-align">
            <h2 class="c_hero__title">Nâng cao kỹ năng để thăng tiến trong nghề nghiệp</h2>
            <p class="c_hero__desc">...với rất nhiều khóa học thực tế từ những chuyên gia hàng đầu trong lĩnh vực của bạn.</p>
         </div>
      </div>
   </section>
<div class="container grid-container container--small">
   <section class="c_section">
      <div class="container grid-container container--small">
         <h2 class="c_section__title">Enesy là gì?</h2>
         <p class="p_home__desc container--xsmall">
            Enesy là viết tắt của cụm từ "ENgineering Education SYstem" - Một hệ thống đào tạo Kỹ sư chuyên nghiệp, với các khóa học được hợp tác sản xuất bởi các chuyên gia giỏi, nhiều kinh nghiệm. Tham gia các khóa học tại Enesy, bạn sẽ được học hỏi những kinh nghiệm quý báu từ các chuyên gia hàng đầu trong lĩnh vực của bạn. Ngoài ra, các khóa học tại Enesy đều gắn liền với các dự án thực tiễn, điều đó giúp bạn dễ dàng tiếp thu và ứng dụng hơn.    
         </p>
         <ul class="p_home__mosaic">
            <li style="background-image: url('frontend/images/about__section01.jpg');">
            </li>
            <li style="background-image: url('frontend/images/about__section01.jpg');">
            </li>
            <li style="background-image: url('frontend/images/about__section01.jpg');">
            </li>
            <li style="background-image: url('frontend/images/about__section01.jpg');">
            </li>
            <li style="background-image: url('frontend/images/about__section01.jpg');">
            </li>
         </ul>
      </div>
   </section>
</div>
@stop