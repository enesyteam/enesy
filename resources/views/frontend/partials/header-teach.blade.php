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
            <a class="header-teach-logo-account__logo" href="{{route('home.become_instructor')}}">
            <span>Enesy Teach</span>
            </a>
            <nav class="header-logo-account__right">
               <ul class="header-logo-account__sundry">
               <li class="header-logo-account__sundry-item">
                  <a class="header-logo-account__sundry-main-link--brand-color -rounded-corners" href="{{route('home')}}"><i class="icon-undo2" style="font-size: 12px;margin-right: 5px"></i>Enesy</a>
              </li>
                  <li class="header-logo-account__sundry-item">
                     <a class="header-logo-account__sundry-main-link" href="{{route('home.about')}}">Tạo khóa học</a>
                  </li>
                  <li class="header-logo-account__sundry-item">
                     <a class="header-logo-account__sundry-main-link" href="{{route('home.become_instructor')}}"><strong>Quảng bá khóa học</strong></a>
                  </li>
                  <li class="header-logo-account__sundry-item">
                     <a class="header-logo-account__sundry-main-link" href="#">Bảo mật khóa học</a>
                  </li>
               </ul>
            </nav>
         </div>
      </div>
   </div>
</div>