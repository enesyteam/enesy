<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="{{ config('app.locale') }}" lang="{{ config('app.locale') }}" prefix="og: http://ogp.me/ns#">
    <!--<![endif]-->
    <!-- HEAD -->
    <head>
        <meta charset="utf-8" />
        <title>@yield('page_title')</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="@yield('meta_desc')" name="description" />
        <meta content="@yield('meta_author')" name="author" />

        <!-- CORE CSS -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet" type="text/css" />
        {{ Html::style('https://fonts.googleapis.com/css?family=Roboto:400,500,700') }}
        {{ Html::style(asset('frontend/themes/default/assets/css/app.min.css')) }}
        <!-- /CORE CSS -->

        <!-- PAGE CSS -->
        <!-- Thêm các file css theo yêu cầu riêng của từng trang (nếu có) -->
        @yield('page.css')
        <!-- /PAGE CSS -->

        <!-- CORE JS -->
        {{ Html::script(asset('frontend/themes/default/assets/js/head.min.js')) }}
        {{ Html::script(asset('frontend/themes/default/assets/js/jquery.min.js')) }}
        {{ Html::script(asset('frontend/themes/default/assets/js/loader/pace.min.js')) }} <!-- For Page Loader -->
        <!-- /CORE JS -->

        <!-- PAGE JS -->
        <!-- Thêm các file js theo yêu cầu riêng của từng trang (nếu có) -->
        @yield('page.js')
        <!-- /PAGE JS -->

        <!-- EMBED JS -->
        <!-- Các đoạn Javascript nhúng theo yêu cầu riêng của từng trang -->
        @yield('head.js')
        <!-- /EMBED JS -->
    </head>
    <!-- /HEAD -->
    <body class="page-body @yield('body.class')">
        <!--[if lt IE 10]><div class="legacy-ie-banner"><h2 class="legacy-ie-banner__title">Trình duyệt không được hỗ trợ!</h2><p class="legacy-ie-banner__text">Website này đã được thiết kế cho các trình duyệt hiện đại và được kiểm tra với trình duyệt Internet Explorer phiên bản 10 trở lên. </p><p class="legacy-ie-banner__text">Website này có thể sẽ không hiển thị và làm việc tốt với trình duyệt hiện tại của bạn. </p></div><![endif]-->
        <nav class="global-nav view view--loaded">
            <div class="global-nav__mobile">
                <section class="global-nav__mobile-search search-box view view--loaded">
                    {!! Form::open([
                    'method'            =>  'GET',
                    'class'             =>  'global-nav__search-form',
                    'accept-charset'    =>  'UTF-8',
                    ]) !!}
                    {!! Form::input('search','search_terms', null,['class'=>'global-nav__mobile-search-terms','placeholder'=>'Tìm trong 1,500 khóa học']) !!}
                    {!! Form::button('<i class="icon-search4 icon-medium"></i>',['name'=>'button','type'=>'submit', 'class'=>'global-nav__mobile-search-button']) !!}
                    {!! Form::close() !!}
                </section>
                @if(Auth::guard('frontend')->check())
                <!-- Logged in -->
                <div class="global-nav__mobile-user-links">
                  <div class="global-nav__mobile-user-greeting">Xin chào,  
                    <span class="global-nav__mobile-user-greeting-name">
                    <!-- If user has not define Full Name then display username -->
                        <?php
                          if (Auth::guard('frontend')->user()->full_name == ""){
                            echo Auth::guard('frontend')->user()->username;
                          }
                          else{
                            echo Auth::guard('frontend')->user()->full_name;
                          }
                        ?>
                    </span>
                  </div>
                  <a class="global-nav__mobile-user-link" href="#">Khóa học của tôi</a>
                  <a class="global-nav__mobile-user-link" href="#">Subscription</a>
                </div>
                @else
                <!-- Not Logged in -->
                <div class="global-nav__mobile-user-links">
                    <a class="global-nav__mobile-user-link" rel="nofollow" href="#">Đăng ký miễn phí</a><a class="global-nav__mobile-user-link" href="#">Đăng nhập</a>
                </div>
                @endif
                <!-- Nav links -->
                <ul class="global-nav__mobile-top-level">

                    <?php foreach($list_cat_parent as $p=>$p_value){ 
                      $child = isset($list_cat_child[$p_value->id]) ? $list_cat_child[$p_value->id]: array();
                      $url_pcat = route('course.listByCat',['id'=>$p_value->id,'alias'=>$p_value->alias]);?>
                    <li class="global-nav__mobile-top-level-item">
                      <a class="global-nav__mobile-top-level-link global-nav__mobile-top-level-link-expandable" href="<?php echo $url_pcat; ?>">
                        <span class="global-nav__mobile-top-level-link-title">{{$p_value->title}}</span>
                      </a>
                      <a class="global-nav__mobile-top-level-link global-nav__mobile-top-level-expansion-link" href="#">
                        <span class="global-nav__mobile-top-level-expand-text">
                          <i class="icon-chevron-down icon-medium global-nav__mobile-top-level-link-icon"></i>
                        </span>
                        <span class="global-nav__mobile-top-level-collapse-text">
                          <i class="icon-chevron-up icon-medium global-nav__mobile-top-level-link-icon"></i>
                        </span>
                      </a>
                      <?php if($child){ ?>
                      <ul class="global-nav__mobile-second-level">
                        <?php foreach($child as $p=>$c_value){ 
                        $url_ccat = route('course.listByCat',['id'=>$c_value->id,'alias'=>$c_value->alias]);?>
                            <li class="global-nav__mobile-second-level-item">
                              <a class="global-nav__mobile-second-level-topic-link topic-design" href="{{$url_ccat}}">{{$c_value->title}}</a>
                            </li>
                        <?php }?>
                      </ul>
                      <?php }?>
                    </li>
                    <?php }?>
                </ul>

                <!-- Pages -->
                <ul class="global-nav-mobile__enesy-links">
                  <li class="global-nav__mobile-top-level-item">
                    <a class="global-mobile__header-item--enesy-link" href="#">Giới thiệu Enesy</a>
                  </li>
                  <li class="global-nav__mobile-top-level-item">
                    <a class="global-mobile__header-item--enesy-link" href="#">Hợp tác giảng dạy</a>
                  </li>
                  <li class="global-nav__mobile-top-level-item">
                    <a class="global-mobile__header-item--enesy-link" href="#">Trợ giúp</a>
                  </li>
                </ul>


            </div>
            <!-- Desktop header -->
            @include('frontend.themes.default.partials.desktop-header')
            <!-- /Desktop header -->
            <div class="global-nav__mobile-toggle">
                <a class="global-nav__mobile-toggle-link" href="javascript:">
                    <i class="icon-menu7 fa-reorder icon-2x"></i>
                    <i class="icon-x icon-2x close-nav-button"></i>
                </a>
            </div>
        </nav>
        <div class="global-page-overlay"></div>

        @yield('body.script')
    </body>
</html>
