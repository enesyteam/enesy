<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-header">
    <a class="navbar-brand" href="{{route('home.admin')}}">
      <img alt="" src="{{asset('frontend/images/logo.png')}}">
    </a>
    <ul class="nav navbar-nav visible-xs-block">
      <li>
        <a data-target="#navbar-mobile" data-toggle="collapse">
          <i class="icon-tree5">
          </i>
        </a>
      </li>
      <li>
        <a class="sidebar-mobile-main-toggle">
          <i class="icon-paragraph-justify3">
          </i>
        </a>
      </li>
    </ul>
  </div>
  <div class="navbar-collapse collapse" id="navbar-mobile">
    <ul class="nav navbar-nav">
      <li>
        <a class="sidebar-control sidebar-main-toggle hidden-xs">
          <i class="icon-paragraph-justify3">
          </i>
        </a>
      </li>
    </ul>
    <p class="navbar-text">
      <span class="label bg-success">Online
      </span>
    </p>
    <div class="navbar-right">
      <ul class="nav navbar-nav">
      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
            <i class="icon-bell2"></i>
            <span class="visible-xs-inline-block position-right">Git updates</span>
            <span class="badge badge-success">9</span>
          </a>
          
          <div class="dropdown-menu dropdown-content">
            <div class="dropdown-content-heading">
              Notifications
              <ul class="icons-list">
                <li><a href="#"><i class="icon-sync"></i></a></li>
              </ul>
            </div>

            <ul class="media-list dropdown-content-body width-350">
              <li class="media">
                <div class="media-left">
                  <a href="#" class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-pull-request"></i></a>
                </div>

                <div class="media-body">
                  Drop the IE <a href="#">specific hacks</a> for temporal inputs
                  <div class="media-annotation">4 minutes ago</div>
                </div>
              </li>

              <li class="media">
                <div class="media-left">
                  <a href="#" class="btn border-warning text-warning btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-commit"></i></a>
                </div>
                
                <div class="media-body">
                  Add full font overrides for popovers and tooltips
                  <div class="media-annotation">36 minutes ago</div>
                </div>
              </li>

              <li class="media">
                <div class="media-left">
                  <a href="#" class="btn border-info text-info btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-branch"></i></a>
                </div>
                
                <div class="media-body">
                  <a href="#">Chris Arney</a> created a new <span class="text-semibold">Design</span> branch
                  <div class="media-annotation">2 hours ago</div>
                </div>
              </li>

              <li class="media">
                <div class="media-left">
                  <a href="#" class="btn border-success text-success btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-merge"></i></a>
                </div>
                
                <div class="media-body">
                  <a href="#">Eugene Kopyov</a> merged <span class="text-semibold">Master</span> and <span class="text-semibold">Dev</span> branches
                  <div class="media-annotation">Dec 18, 18:36</div>
                </div>
              </li>

              <li class="media">
                <div class="media-left">
                  <a href="#" class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-pull-request"></i></a>
                </div>
                
                <div class="media-body">
                  Have Carousel ignore keyboard events
                  <div class="media-annotation">Dec 12, 05:46</div>
                </div>
              </li>
            </ul>

            <div class="dropdown-content-footer">
              <a href="#" data-popup="tooltip" title="" data-original-title="All activity"><i class="icon-menu display-block"></i></a>
            </div>
          </div>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class=" icon-envelop5">
            </i> 
            <span class="visible-xs-inline-block position-right">Messages
            </span> 
            <span class="badge badge-success">5
            </span>
          </a>
          <div class="dropdown-menu dropdown-content width-350">
            <div class="dropdown-content-heading">
              Messages
              <ul class="icons-list">
                <li>
                  <a href="#">
                    <i class="icon-compose">
                    </i>
                  </a>
                </li>
              </ul>
            </div>
            <ul class="media-list dropdown-content-body">
              <li class="media">
                <div class="media-left">
                  <img alt="" class="img-circle img-sm" src="{{asset('frontend/images/user-no-avatar.png')}}"> 
                  <span class="badge bg-danger-400 media-badge">5
                  </span>
                </div>
                <div class="media-body">
                  <a class="media-heading" href="#">
                    <span class="text-semibold">Công Nguyễn
                    </span> 
                    <span class="media-annotation pull-right">04:58
                    </span>
                  </a> 
                  <span class="text-muted">help me help me...
                  </span>
                </div>
              </li>
              <li class="media">
                <div class="media-left">
                  <img alt="" class="img-circle img-sm" src="{{asset('frontend/images/user-no-avatar.png')}}"> 
                  <span class="badge bg-danger-400 media-badge">4
                  </span>
                </div>
                <div class="media-body">
                  <a class="media-heading" href="#">
                    <span class="text-semibold">Công Nguyễn
                    </span> 
                    <span class="media-annotation pull-right">12:16
                    </span>
                  </a> 
                  <span class="text-muted">That was something he was unable to do because...
                  </span>
                </div>
              </li>
              <li class="media">
                <div class="media-left">
                  <img alt="" class="img-circle img-sm" src="{{asset('frontend/images/user-no-avatar.png')}}">
                </div>
                <div class="media-body">
                  <a class="media-heading" href="#">
                    <span class="text-semibold">Công Nguyễn
                    </span> 
                    <span class="media-annotation pull-right">22:48
                    </span>
                  </a> 
                  <span class="text-muted">But that would be extremely strained and suspicious...
                  </span>
                </div>
              </li>
              <li class="media">
                <div class="media-left">
                  <img alt="" class="img-circle img-sm" src="{{asset('frontend/images/user-no-avatar.png')}}">
                </div>
                <div class="media-body">
                  <a class="media-heading" href="#">
                    <span class="text-semibold">Công Nguyễn
                    </span> 
                    <span class="media-annotation pull-right">Tue
                    </span>
                  </a> 
                  <span class="text-muted">What a strenuous career it is that I've chosen...
                  </span>
                </div>
              </li>
              <li class="media">
                <div class="media-left">
                  <img alt="" class="img-circle img-sm" src="{{asset('frontend/images/user-no-avatar.png')}}">
                </div>
                <div class="media-body">
                  <a class="media-heading" href="#">
                    <span class="text-semibold">Công Nguyễn
                    </span> 
                    <span class="media-annotation pull-right">Mon
                    </span>
                  </a> 
                  <span class="text-muted">Other travelling salesmen live a life of luxury...
                  </span>
                </div>
              </li>
            </ul>
            <div class="dropdown-content-footer">
              <a data-original-title="All messages" data-popup="tooltip" href="#" title="">
                <i class="icon-menu display-block">
                </i>
              </a>
            </div>
          </div>
        </li>
        <li class="dropdown dropdown-user">
          <a aria-expanded="false" class="dropdown-toggle" data-toggle="dropdown">
            <img alt="" src="{{asset('frontend/images/user-no-avatar.png')}}"> 
            <span>{{ Auth::user()->username }}
            </span> 
            <i class="caret">
            </i>
          </a>
          <ul class="dropdown-menu dropdown-menu-right">
            <li>
              <a href="{{ URL::to('admin/userProfile?id='.Auth::user()->id) }}">
                <i class="icon-user-plus">
                </i> My profile
              </a>
            </li>
            <li>
              <a href="#">
                <span class="badge bg-blue pull-right">58
                </span> 
                <i class="icon-comment-discussion">
                </i> Messages
              </a>
            </li>
            <li class="divider">
            </li>
            <li>
              <a href="#">
                <i class="icon-cog5">
                </i> Account settings
              </a>
            </li>
            <li>
              <a href="{{ url ('admin/logout') }}">
                <i class="icon-switch2">
                </i> Logout
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>
