  <div class="sidebar sidebar-main">
    <div class="sidebar-content">
      <!-- User menu -->
      <div class="sidebar-user">
        <div class="category-content">
          <div class="media">
            <a class="media-left" href="#"><img alt="" class="img-circle img-sm" src="{{asset('frontend/images/user-no-avatar.png')}}"></a>
            <div class="media-body">
              <span class="media-heading text-semibold">Công Nguyễn</span>
              <div class="text-size-mini text-muted">
                <i class="icon-pin text-size-small"></i> &nbsp;Hà Nội
              </div>
            </div>
            <div class="media-right media-middle">
              <ul class="icons-list">
                <li>
                  <a href="#"><i class="icon-cog3"></i></a>
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
              <a class="has-ul" href="{{route('user.author_courses')}}"><i class="icon-tree5"></i> <span>Khóa học</span></a>
              <ul>
                <li class="{{ Route::is('user.author_courses') ? "active" : "" }}">
                  <a href="{{route('user.author_courses')}}" id="list1"><i class="icon-list-unordered"></i>Danh sách<span class="label bg-warning-400">28</span></a>
                </li>
                <li class="{{ Route::is('user.author_courses_create') ? "active" : "" }}">
                  <a href="{{route('user.author_courses_create')}}" id="create1"><i class="icon-plus22"></i>Tạo mới</a>
                </li>
              </ul>
            </li>
            <li class="{{ Route::is('user.author_enrollers') ? "active" : "" }}">
              <a href="{{route('user.author_enrollers')}}"><i class="icon-people"></i> <span>Học viên <span class="label bg-blue-400">1,500</span></span>
              </a>
            </li>
            <!--Thanh toán-->
            <!-- Main -->
            <li class="navigation-header"><span>Thu nhập &amp; Thanh toán</span> <i class="icon-menu" data-original-title="Main pages" title=""></i></li>
            <li class="">
              <a href="#"><i class="icon-cash"></i> <span>Yêu cầu thanh toán</span></a>
            </li>
            <li class="">
              <a href="#"><i class="icon-cart-remove"></i> <span>Thu nhập</span></a>
            </li>
          </ul>
        </div>
      </div><!-- /main navigation -->
    </div>
  </div>