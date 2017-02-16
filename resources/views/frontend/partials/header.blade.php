<!----Mobile header-->
<div class="site-header__mini is-hidden-desktop">
   <div class="header-mini">
      <div class="header-mini__button--account">
         <a class="btn btn--square" href="#account">
         <i class="e-icon -icon-person"></i>
         <span class="is-hidden">Account</span>
         </a>  
      </div>
      <div class="header-mini__button--categories">
         <a class="btn btn--square" href="#categories">
         <i class="e-icon -icon-hamburger"></i>
         <span class="is-hidden">Sites, Search &amp; Categories</span>
         </a>    
      </div>
      <div data-loading="1" style="display: none;"></div>
      <div data-variant="0" style="">
         <div class="header-mini__logo">
            <a class="header-mini__logo--enesy" href="#">Enesy</a>
         </div>
      </div>
   </div>
</div>
<!----Mobile header-->
<div class="site-header__logo-and-account is-hidden-tablet-and-below">
   <div class="header-logo-account">
      <div class="grid-container">
         <div class="header-logo-account__container">
            <a class="header-logo-account__logo" href="{{route('home')}}">
            <span>Enesy</span>
            </a>
            <nav class="header-logo-account__right">
               <ul class="header-logo-account__sundry">
                  <!-- <li class="header-logo-account__sundry-item">
                     <a class="header-logo-account__sundry-main-link--brand-color -rounded-corners" target="_blank" href="https://elements.envato.com/?utm_campaign=elements_mkt-headernav_beta-launch_01AUG2016&amp;utm_content=tf_headernav&amp;utm_medium=promos&amp;utm_source=#">Envato Elements</a>
                     </li>
                     <li class="header-logo-account__sundry-item">
                     <a class="header-logo-account__sundry-main-link -rounded-corners" target="_self" href="//#/become-an-author">Start selling</a>
                     </li>
                     <li class="header-logo-account__sundry-item">
                     <a class="header-logo-account__sundry-main-link" data-view="touchOnlyDropdown" data-dropdown-target=".js-sundry-2-dropdown" href="https://forums.envato.com">Forums</a>
                     <div class="header-logo-account__sundry-dropdown js-sundry-2-dropdown">
                        <ul class="hub-header-dropdown">
                           <li>
                              <a class="header-logo-account__sundry-sub-link" href="https://forums.envato.com">All forums</a>
                           </li>
                           <li>
                              <a class="header-logo-account__sundry-sub-link" href="https://forums.envato.com/c/authoring-on-envato">Authoring on Envato</a>
                           </li>
                           <li>
                              <a class="header-logo-account__sundry-sub-link" href="https://forums.envato.com/c/project-making">Project making</a>
                           </li>
                        </ul>
                     </div>
                     </li>-->
                  <li class="header-logo-account__sundry-item">
                     <a class="header-logo-account__sundry-main-link" href="{{route('home.about')}}">Giới thiệu</a>
                  </li>
                  <li class="header-logo-account__sundry-item">
                     <strong>
                     <a class="header-logo-account__sundry-main-link" href="{{route('home.become_instructor')}}">Hợp tác giảng dạy</a>
                     </strong>
                  </li>
                  <li class="header-logo-account__sundry-item">
                     <a class="header-logo-account__sundry-main-link" href="#">Trợ giúp</a>
                  </li>
               </ul>
               <div class="header-logo-account__user-nav">
                  @if(!Auth::guard('frontend')->check())
                  <div class="header-logo-account__user-nav-item">
                     <strong>
                     <a class="header-logo-account__user-nav-main-link--alpha" href="{{route('user.register')}}"><span>Đăng ký thành viên</span></a>
                     </strong>
                  </div>
                  @else
                  <div class="header-logo-account__user-nav-item">
                     <a class="header-logo-account__user-nav-main-link--alpha-with-dropdown" data-view="touchOnlyDropdown" data-dropdown-target="#user-nav-dropdown" href="">
                     <span id="user_username">congcd4</span>
                     </a>
                     <div class="header-logo-account__user-nav-dropdown" id="user-nav-dropdown">
                        <ul class="hub-header-dropdown">
                           <li>
                              <a href="#">
                              Tài khoản
                              <i class="e-icon -icon-person"></i>
                              </a>          
                           </li>
                           <li>
                              <a href="#">
                              Khóa học của bạn
                              <i class="e-icon "></i>
                              </a>          
                           </li>
                           <li>
                              <a href="#">
                              XXX
                              <i class="e-icon "></i>
                              </a>          
                           </li>
                           <li>
                              <a href="#">
                              Thiết lập
                              <i class="e-icon -icon-cog"></i>
                              </a>          
                           </li>
                        </ul>
                     </div>
                  </div>
                  @endif
                  <div class="header-logo-account__user-nav-item">
                     <a class="header-logo-account__user-nav-main-link--cart" rel="nofollow" href="//#/cart">
                        <div class="shopping-cart-summary is-empty" data-view="cartCount">
                           <i class="e-icon -icon-cart"></i>
                           <span class="js-cart-summary-count shopping-cart-summary__count">0</span>
                        </div>
                     </a>
                  </div>
                  <div class="header-logo-account__user-nav-item">
                     @if(Auth::guard('frontend')->check())
                     <a class="header-logo-account__user-nav-main-link--omega" href="{{route('user.logout')}}">Thoát</a>
                     @else
                     <a class="header-logo-account__user-nav-main-link--omega" href="{{route('user.login')}}" >Đăng nhập</a>
                     @endif
                  </div>
               </div>
            </nav>
         </div>
      </div>
   </div>
</div>