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
                  <li class="header-logo-account__sundry-item">
                     <a class="header-logo-account__sundry-main-link" href="{{route('home.about')}}">Giới thiệu</a>
                  </li>
                  <li class="header-logo-account__sundry-item">
                     <a class="header-logo-account__sundry-main-link" href="{{route('home.become_instructor')}}"><strong>Hợp tác giảng dạy</strong></a>
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
                     <a class="header-logo-account__user-nav-main-link--alpha-with-dropdown" data-view="touchOnlyDropdown" data-dropdown-target="#user-nav-dropdown" href="{{route('user.author')}}">
                     <span id="user_username">congcd4</span>
                     </a>
                     <div class="header-logo-account__user-nav-dropdown" id="user-nav-dropdown">
                        <ul class="hub-header-dropdown">
                           <li>
                              <a href="{{route('user.author')}}">
                              Bảng điều khiển
                              <i class="icon-home4 font-size-12"></i>
                              </a>          
                           </li>
                           <li>
                              <a href="{{route('user.author_courses')}}">
                              Khóa học của bạn
                              <i class="icon-book-play font-size-12"></i>
                              </a>          
                           </li>
                           <li>
                              <a href="{{route('user.author_enrollers')}}">
                              Học viên của bạn
                              <i class="icon-users2 font-size-12"></i>
                              </a>          
                           </li>
                           <li>
                              <a href="{{route('user.author_bill')}}">
                              Thanh toán
                              <i class="icon-cash font-size-12"></i>
                              </a>          
                           </li>
                           <li>
                              <a href="{{route('user.author_account')}}">
                              Thiết lập
                              <i class="icon-cog3 font-size-12"></i>
                              </a>          
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="header-logo-account__user-nav-item">
                     <a class="header-logo-account__user-nav-main-link--cart" rel="nofollow" href="#">
                        <div class="notify-summary" data-view="cartCount">
                           <i class="icon-bell2 font-size-12"></i>
                           <span class="js-cart-summary-count notify-summary__count">5</span>
                        </div>
                     </a>
                  </div>
                  @endif
                  
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