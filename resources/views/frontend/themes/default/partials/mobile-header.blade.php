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
        <a href="{{route('user.logout')}}"> / Thoát</a>
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