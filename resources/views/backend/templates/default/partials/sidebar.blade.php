<div class="sidebar sidebar-main">
  <div class="sidebar-content">
    <!-- User menu -->
    <div class="sidebar-user">
      <div class="category-content">
        <div class="media">
          <a href="#" class="media-left">
            <img src="{{asset('frontend/images/user-no-avatar.png')}}" class="img-circle img-sm" alt="">
          </a>
          <div class="media-body">
            <span class="media-heading text-semibold">{{ Auth::user()->username }}
            </span>
            <div class="text-size-mini text-muted">
              <i class="icon-pin text-size-small">
              </i> &nbsp;Hà Nội, Việt Nam
            </div>
          </div>
          <div class="media-right media-middle">
            <ul class="icons-list">
              <li>
                <a href="#">
                  <i class="icon-cog3">
                  </i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- /user menu -->
    <!-- Main navigation -->
    <div class="sidebar-category sidebar-category-visible">
      <div class="category-content no-padding">
        <ul class="navigation navigation-main navigation-accordion">
          <!-- Main -->
          <li class="navigation-header">
            <span>Main
            </span> 
            <i class="icon-menu" title="" data-original-title="Main pages">
            </i>
          </li>
          <li>
            <a href="#">
              <i class="icon-home4">
              </i> 
              <span>Dashboard
                <span class="label label-flat border-grey text-grey-600">Comming soon
                </span>
              </span>
            </a>
          </li>
          <!-- /main -->
          <!-- Courses -->
          <li class="navigation-header">
            <span>Courses
            </span> 
            <i class="icon-menu" title="" data-original-title="Courses">
            </i>
          </li>
          <li class="{{ Route::is('allCategory') ? "active" : "" }}">
            <a href="{{route('allCategory')}}">
              <i class="icon-tree5">
              </i>
              <span>Category
              </span>
            </a>
          </li>
          <li class="">
            <a href="#" class="has-ul">
              <i class="icon-video-camera3">
              </i> 
              <span>Lessons
                <span class="label label-flat border-grey text-grey-600">Comming soon
                </span>
              </span>
            </a>
            <ul style="" class="hidden-ul">
              <li class="">
                <a href="">All Lessons
                </a>
              </li>
              <li class="">
                <a href="">New Lesson
                </a>
              </li>
            </ul>
          </li>
          <li class="{{Request::is('admin/course') || Request::is('admin/course/*')? "active" : ""}}">
            <a href="#" class="has-ul">
              <i class="icon-book-play">
              </i> 
              <span>Courses
              </span>
            </a>
            <ul style="{{Request::is('admin/course') ? "display:block;" : "display:none;"}}" class="hidden-ul">
              <li class="">
                <a href="{{route('course')}}">All Courses
                </a>
              </li>
              <li class="">
                <a href="">New Course
                </a>
              </li>
            </ul>
          </li>
          <!-- /Courses -->
          <!-- User & member -->
          <li class="navigation-header">
            <span>User
            </span> 
            <i class="icon-menu" title="" data-original-title="User page">
            </i>
          </li>
          <li class="{{Request::is('admin/member/*')? "active" : ""}}">
            <a href="#">
              <i class="icon-users">
              </i> 
              <span>Users
              </span>
            </a>
            <ul style="{{Request::is('admin/member') || Request::is('admin/adminManager')? "display:block;" : "display:none;"}}" class="hidden-ul">
              <li class="{{ Route::is('memberIndex') ? "active" : "" }}">
                <a href="{{route('memberIndex')}}">Members
                </a>
              </li>
              <li class="{{ Route::is('admin.list-admin') ? "active" : "" }}">
                <a href="{{route('admin.list-admin')}}">Administrators
                </a>
              </li>
              <li class="">
                <a href="">Teachers
                  <span class="label label-flat border-grey text-grey-600">Comming soon
                  </span>
                </a>
              </li>
              <li class="">
                <a href="">Enrollers
                  <span class="label label-flat border-grey text-grey-600">Comming soon
                  </span>
                </a>
              </li>
            </ul>
          </li>
          <!-- /User & member -->
        </ul>
      </div>
    </div>
    <!-- /main navigation -->
  </div>
</div>
