@extends('frontend.layouts.dashboard')
@section('head.css')
	<link href="{{'frontend/css/about.css'}}" rel="stylesheet" type="text/css" />
@stop
@section('section')
            <div class="content-l -size-scale-tablet content-right">
	<section class="c_hero" style="background-image: url('frontend/images/hero__background1.jpg');">
    <div class="container grid-container">
        <ul id="menu-header-menu" class="c_nav c_nav--main"><li id="menu-item-5153" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-5136 current_page_item menu-item-5153"><a href="{{route('home.about')}}">Enesy</a></li>
<li id="menu-item-5156" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5156"><a href="#">Chuyên gia</a></li>
<li id="menu-item-148522" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-148522"><a href="#">???</a></li>
<li id="menu-item-5154" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5154"><a href="#">Blog</a></li>
</ul>        <div class="vertical-align">
            <h2 class="c_hero__title">Nâng cao kỹ năng để thăng tiến trong nghề nghiệp</h2>
                        <p class="c_hero__desc">...với rất nhiều khóa học thực tế từ những chuyên gia hàng đầu trong lĩnh vực của bạn.</p>
                    </div>
    </div>
</section>
<section class="c_section">
    <div class="container grid-container container--small">
        <h2 class="c_section__title">Section 2</h2>
        <p class="p_home__desc container--xsmall">
            This is section 2 This is section 2 This is section 2 This is section 2 This is section 2 This is section 2 This is section 2 This is section 2 This is section 2 This is section 2 This is section 2 This is section 2 This is section 2 This is section 2 This is section 2 .        </p>
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