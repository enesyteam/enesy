<div class="global-nav__header">
  <div class="global-nav__header-content">
    <div class="global-nav__header-top">
      <a class="global-nav__header-tuts-logo-link" href="{{route('home')}}">
        <img alt="Enesy" class="global-nav__header-tuts-logo-image" src="">
      </a>
      <div class="global-nav__header-right">
        <ul class="global-nav__header-list">
          <li class="global-nav__header-item">
            <a class="global-nav__header-item--envato-link" href="#">Giới thiệu
            </a>
          </li>
          <li class="global-nav__header-item">
            <a class="global-nav__header-item--envato-link" href="#">Hợp tác giảng dạy
            </a>
          </li>
          <li class="global-nav__header-item">
            <a class="global-nav__header-item--envato-link" href="#">Trợ giúp
            </a>
          </li>
        </ul>
        <ul class="global-nav__header-buttons">
          @if(Auth::guard('frontend')->check())
            <!-- logged in -->
            <li class="global-nav__header-item global-nav__user-menu">
              <a class="global-nav__user-menu-link global-nav__header-link " href="javascript:">
                <img src="{{asset('frontend/themes/default/assets/images/user-no-avatar.png')}}" alt="">
                <i class="icon-arrow-down12">
                </i>
              </a>
              <ul class="global-nav__user-menu-items">
                <li class="global-nav__user-menu-item">
                  <a class="global-nav__user-menu-item-link" href="#">Khóa học của tôi
                  </a>
                </li>
                <li class="global-nav__user-menu-item">
                  <a class="global-nav__user-menu-item-link" href="#">Học viên của tôi
                  </a>
                </li>
                <li class="global-nav__user-menu-item">
                  <a class="global-nav__user-menu-item-link" rel="nofollow" data-method="delete" href="{{route('user.logout')}}">Thoát (<strong> {{Auth::guard('frontend')->user()->username}} </strong>)
                  </a>
                </li>
              </ul>
            </li>
            @else
            <!-- Not logged in -->
            <li class="global-nav__header-item"><a class="global-nav__header-item--internal-link global-nav__header-item--free-account-button" rel="nofollow" href="#">Đăng ký miễn phí</a></li>
            <li class="global-nav__header-item"><a class="global-nav__header-item--sign-in-button global-nav__header-item--internal-link" rel="nofollow" href="{{route('user.login')}}">Đăng nhập</a></li>
            @endif


        </ul>
      </div>
    </div>
    <div class="global-nav__header-bottom">
      <ul class="global-nav__header-list">
          <?php foreach($list_cat_parent as $p=>$p_value){ 
            $child = isset($list_cat_child[$p_value->id]) ? $list_cat_child[$p_value->id]: array();
            $url_pcat = route('course.listByCat',['id'=>$p_value->id,'alias'=>$p_value->alias]);
          ?>
            <li class="global-nav__header-item">
              <nav class="courses-menu view" data-toggle=".courses-menu__dropdown-toggle">
                <a class="courses-menu__dropdown-toggle global-nav__header-link global-nav__header-link--primary " href="">{{$p_value->title}}
                  <i class="icon-arrow-down12">
                  </i>
                </a>
                <ul class="courses-menu__topics">
                  <?php foreach($child as $p=>$c_value){ 
                        $url_ccat = route('course.listByCat',['id'=>$c_value->id,'alias'=>$c_value->alias]);
                  ?>
                    <li class="courses-menu__topic">
                      <a class="courses-menu__topic-link topic-design" href="{{$url_ccat}}">{{$c_value->title}}
                      </a>
                    </li>
                  <?php }?>
                </ul>
              </nav>
            </li>
          <?php }?>
      </ul>
      <div class="global-nav__header-right">
        <div class="global-nav__search search-box view view--loaded">
            {!! Form::open([
            'method'            =>  'GET',
            'class'             =>  'global-nav__search-form',
            'accept-charset'    =>  'UTF-8'
            ]) !!}
            <span class="twitter-typeahead" style="position: relative; display: inline-block; direction: ltr;">
              {!! Form::input('search','search[terms]', null,['class'=>'global-nav__search-terms tt-input','autocomplete'=>'off', 'spellcheck'=>'false', 'style'=>'position: relative; vertical-align: top; background-color: transparent;    padding-right: 35px;', 'placeholder'=>'Tìm trong 1,500 khóa học']) !!}
                <span class="tt-dropdown-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none; width: 300px; right: auto;">
                  <div class="tt-dataset-search">
                    <strong class="search-header" style="margin-left: 15px; padding: 20px 0;top:20px;">Kết quả tìm kiếm</strong>
                    <ul class="search-items">
                    </ul>
                  </div>
                </span>
            </span>
                {!! Form::button('<i class="icon-search4 icon-medium"></i>',['name'=>'button','type'=>'submit', 'class'=>'global-nav__search-button']) !!}
            {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
</div>
