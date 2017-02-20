  <div class="sidebar sidebar-main">
    <div class="sidebar-content">
      <!-- User menu -->
      <div class="sidebar-user">
        <div class="category-content">
          <div class="media">
            <a class="media-left" href="{{route('user.author_public_profile')}}"><img alt="" class="img-circle img-sm" src="{{asset('frontend/images/user-no-avatar.png')}}" data-popup="tooltip" title="" data-placement="bottom" data-original-title="Sửa"></a>
            <div class="media-body">
              <span class="media-heading text-semibold">{{ Auth::guard('frontend')->user()->username }}</span>
              <div class="text-size-mini text-muted">
                <i class="icon-pin text-size-small"></i> &nbsp;Hà Nội
              </div>
            </div>
            <div class="media-right media-middle">
              <ul class="icons-list">
                <li>
                  <a href="{{route('user.author_public_profile')}}"><i class="icon-cog3"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div><!-- /user menu -->
      <!-- Main navigation -->
      <div class="sidebar-category sidebar-category-visible">
        <div class="category-content no-padding">
          <ul class="navigation navigation-main navigation-accordion">
            <!-- Main -->
            <li class="navigation-header"><span>Main</span> <i class="icon-menu" data-original-title="Main pages" title=""></i></li>
            <li class="{{ Route::is('user.author') ?  "active" : "" }}">
              <a href="{{route('user.author')}}"><i class="icon-home4"></i> <span>Bảng điều khiển</span></a>
            </li>
            <li class="{{ Route::is('user.author_courses') ?  "active" : "" }}">
              <a class="has-ul" href="{{route('user.author_courses')}}"><i class="icon-book-play"></i> <span>Khóa học</span></a>
              <ul>
                <li class="{{ Route::is('user.author_courses') ? "active" : "" }}">
                  <a href="{{route('user.author_courses')}}" id="list1"><i class="icon-list-unordered"></i>Danh sách<span class="badge badge-primary">28</span></a>
                </li>
                <li class="{{ Route::is('user.author_courses_create') ? "active" : "" }}">
                  <a href="{{route('user.author_courses_create')}}" id="create1"><i class="icon-plus22"></i>Tạo mới</a>
                </li>
              </ul>
            </li>
            <li class="{{ Route::is('user.author_enrollers') ? "active" : "" }}">
              <a href="{{route('user.author_enrollers')}}"><i class="icon-users2"></i> <span>Học viên <span class="badge badge-primary">1,500</span></span>
              </a>
            </li>
            <!--Profile-->
            <li class="navigation-header"><span>Trang cá nhân</span> <i class="icon-menu" data-original-title="Main pages" title=""></i>
            </li>
            <li class="{{ Route::is('user.author_notifications') ? "active" : "" }}">
              <a href="{{route('user.author_notifications')}}"><i class="icon-bell2"></i><span>Trung tâm thông báo
              <span class="badge badge-danger">20</span></span></a>
            </li>
            <li class="{{ Route::is('user.author_public_profile') ? "active" : "" }}">
              <a href="{{route('user.author_public_profile')}}"><i class="icon-user"></i>Thông tin cá nhân</a>
            </li>
            <li class="{{ Route::is('user.author_account') ? "active" : "" }}">
              <a href="{{route('user.author_account')}}"><i class="icon-cog3"></i>Thiết lập tài khoản</a>
            </li>
            <li class="{{ Route::is('user.author_email') ? "active" : "" }}">
              <a href="{{route('user.author_email')}}"><i class="icon-envelope"></i>Email</a>
            </li>
            <li class="{{ Route::is('user.author_bill') ? "active" : "" }}">
              <a href="{{route('user.author_bill')}}"><i class="icon-cash"></i> <span>Thanh toán</span></a>
            </li>
          </ul>
        </div>
      </div><!-- /main navigation -->
    </div>
  </div>