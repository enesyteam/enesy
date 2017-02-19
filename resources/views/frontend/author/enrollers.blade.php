@extends('frontend.author.master.author-master') @section('author-body.content') <!-- Content area -->
 @section('author-body.content') <!-- Content area -->

@section('custom-navbar')
<div class="header-categories__search">
  <form id="search" data-view="searchField" action="#" accept-charset="UTF-8" method="get"><input name="utf8" type="hidden" value="">
    <div class="search-field -border-light">
      <div class="search-field__input">
        <input id="term" name="term" class="js-term search-field__input-field" type="search" placeholder="Tìm kiếm học viên" vk_19588="subscribed">
      </div>
      <button class="search-field__button" type="submit">
        <i class="e-icon -icon-search"><span class="e-icon__alt">Search</span></i>
      </button>
    </div>
</form></div>
@stop

<div class="row">
  <div class="col-md-12  mr--10">
    <!--Row for users-->
    <div class="row">
      <!--User-->
      <div class="col-lg-3 col-md-4">
        <div class="thumbnail">
          <div class="thumb thumb-slide">
            <img alt="" src="{{asset('frontend/images/user-no-avatar.png')}}">
            <div class="caption">
              <span><a class="btn bg-success-400 btn-xs" href="#">Nhắn tin</a></span>
            </div>
          </div>
          <div class="caption text-center">
            <h6 class="text-semibold no-margin"><a href="#">Đức Nguyễn</a><small class="display-block">ducnva@gmail.com</small></h6>
          </div>
        </div>
      </div><!--/User-->
      <!--User-->
      <div class="col-lg-3 col-md-4">
        <div class="thumbnail">
          <div class="thumb thumb-slide">
            <img alt="" src="{{asset('frontend/images/user-no-avatar.png')}}">
            <div class="caption">
              <span><a class="btn bg-success-400 btn-xs" href="#">Nhắn tin</a></span>
            </div>
          </div>
          <div class="caption text-center">
            <h6 class="text-semibold no-margin"><a href="#">Cá Cơm</a><small class="display-block">congnvc@gmail.com</small></h6>
          </div>
        </div>
      </div><!--/User-->
      <!--User-->
      <div class="col-lg-3 col-md-4">
        <div class="thumbnail">
          <div class="thumb thumb-slide">
            <img alt="" src="{{asset('frontend/images/user-no-avatar.png')}}">
            <div class="caption">
              <span><a class="btn bg-success-400 btn-xs" href="#">Nhắn tin</a></span>
            </div>
          </div>
          <div class="caption text-center">
            <h6 class="text-semibold no-margin"><a href="#">congcd4</a><small class="display-block">ducnva@gmail.com</small></h6>
          </div>
        </div>
      </div><!--/User-->
      <!--User-->
      <div class="col-lg-3 col-md-4">
        <div class="thumbnail">
          <div class="thumb thumb-slide">
            <img alt="" src="{{asset('frontend/images/user-no-avatar.png')}}">
            <div class="caption">
              <span><a class="btn bg-success-400 btn-xs" href="#">Nhắn tin</a></span>
            </div>
          </div>
          <div class="caption text-center">
            <h6 class="text-semibold no-margin"><a href="#">Đức Nguyễn</a><small class="display-block">ducnva@gmail.com</small></h6>
          </div>
        </div>
      </div><!--/User-->

    </div><!-- /Row for users -->
    <!--Row for users-->
    <div class="row">
      <!--User-->
      <div class="col-lg-3 col-md-4">
        <div class="thumbnail">
          <div class="thumb thumb-slide">
            <img alt="" src="{{asset('frontend/images/user-no-avatar.png')}}">
            <div class="caption">
              <span><a class="btn bg-success-400 btn-xs" href="#">Nhắn tin</a></span>
            </div>
          </div>
          <div class="caption text-center">
            <h6 class="text-semibold no-margin"><a href="#">Đức Nguyễn</a><small class="display-block">ducnva@gmail.com</small></h6>
          </div>
        </div>
      </div><!--/User-->
      <!--User-->
      <div class="col-lg-3 col-md-4">
        <div class="thumbnail">
          <div class="thumb thumb-slide">
            <img alt="" src="{{asset('frontend/images/user-no-avatar.png')}}">
            <div class="caption">
              <span><a class="btn bg-success-400 btn-xs" href="#">Nhắn tin</a></span>
            </div>
          </div>
          <div class="caption text-center">
            <h6 class="text-semibold no-margin"><a href="#">Cá Cơm</a><small class="display-block">congnvc@gmail.com</small></h6>
          </div>
        </div>
      </div><!--/User-->
      <!--User-->
      <div class="col-lg-3 col-md-4">
        <div class="thumbnail">
          <div class="thumb thumb-slide">
            <img alt="" src="{{asset('frontend/images/user-no-avatar.png')}}">
            <div class="caption">
              <span><a class="btn bg-success-400 btn-xs" href="#">Nhắn tin</a></span>
            </div>
          </div>
          <div class="caption text-center">
            <h6 class="text-semibold no-margin"><a href="#">congcd4</a><small class="display-block">ducnva@gmail.com</small></h6>
          </div>
        </div>
      </div><!--/User-->
      <!--User-->
      <div class="col-lg-3 col-md-4">
        <div class="thumbnail">
          <div class="thumb thumb-slide">
            <img alt="" src="{{asset('frontend/images/user-no-avatar.png')}}">
            <div class="caption">
              <span><a class="btn bg-success-400 btn-xs" href="#">Nhắn tin</a></span>
            </div>
          </div>
          <div class="caption text-center">
            <h6 class="text-semibold no-margin"><a href="#">Đức Nguyễn</a><small class="display-block">ducnva@gmail.com</small></h6>
          </div>
        </div>
      </div><!--/User-->

    </div><!-- /Row for users -->
    <!--Row for users-->
    <div class="row">
      <!--User-->
      <div class="col-lg-3 col-md-4">
        <div class="thumbnail">
          <div class="thumb thumb-slide">
            <img alt="" src="{{asset('frontend/images/user-no-avatar.png')}}">
            <div class="caption">
              <span><a class="btn bg-success-400 btn-xs" href="#">Nhắn tin</a></span>
            </div>
          </div>
          <div class="caption text-center">
            <h6 class="text-semibold no-margin"><a href="#">Đức Nguyễn</a><small class="display-block">ducnva@gmail.com</small></h6>
          </div>
        </div>
      </div><!--/User-->
      <!--User-->
      <div class="col-lg-3 col-md-4">
        <div class="thumbnail">
          <div class="thumb thumb-slide">
            <img alt="" src="{{asset('frontend/images/user-no-avatar.png')}}">
            <div class="caption">
              <span><a class="btn bg-success-400 btn-xs" href="#">Nhắn tin</a></span>
            </div>
          </div>
          <div class="caption text-center">
            <h6 class="text-semibold no-margin"><a href="#">Cá Cơm</a><small class="display-block">congnvc@gmail.com</small></h6>
          </div>
        </div>
      </div><!--/User-->
      <!--User-->
      <div class="col-lg-3 col-md-4">
        <div class="thumbnail">
          <div class="thumb thumb-slide">
            <img alt="" src="{{asset('frontend/images/user-no-avatar.png')}}">
            <div class="caption">
              <span><a class="btn bg-success-400 btn-xs" href="#">Nhắn tin</a></span>
            </div>
          </div>
          <div class="caption text-center">
            <h6 class="text-semibold no-margin"><a href="#">congcd4</a><small class="display-block">ducnva@gmail.com</small></h6>
          </div>
        </div>
      </div><!--/User-->
      <!--User-->
      <div class="col-lg-3 col-md-4">
        <div class="thumbnail">
          <div class="thumb thumb-slide">
            <img alt="" src="{{asset('frontend/images/user-no-avatar.png')}}">
            <div class="caption">
              <span><a class="btn bg-success-400 btn-xs" href="#">Nhắn tin</a></span>
            </div>
          </div>
          <div class="caption text-center">
            <h6 class="text-semibold no-margin"><a href="#">Đức Nguyễn</a><small class="display-block">ducnva@gmail.com</small></h6>
          </div>
        </div>
      </div><!--/User-->

    </div><!-- /Row for users -->
    <!--Row for users-->
    <div class="row">
      <!--User-->
      <div class="col-lg-3 col-md-4">
        <div class="thumbnail">
          <div class="thumb thumb-slide">
            <img alt="" src="{{asset('frontend/images/user-no-avatar.png')}}">
            <div class="caption">
              <span><a class="btn bg-success-400 btn-xs" href="#">Nhắn tin</a></span>
            </div>
          </div>
          <div class="caption text-center">
            <h6 class="text-semibold no-margin"><a href="#">Đức Nguyễn</a><small class="display-block">ducnva@gmail.com</small></h6>
          </div>
        </div>
      </div><!--/User-->
      <!--User-->
      <div class="col-lg-3 col-md-4">
        <div class="thumbnail">
          <div class="thumb thumb-slide">
            <img alt="" src="{{asset('frontend/images/user-no-avatar.png')}}">
            <div class="caption">
              <span><a class="btn bg-success-400 btn-xs" href="#">Nhắn tin</a></span>
            </div>
          </div>
          <div class="caption text-center">
            <h6 class="text-semibold no-margin"><a href="#">Cá Cơm</a><small class="display-block">congnvc@gmail.com</small></h6>
          </div>
        </div>
      </div><!--/User-->
      <!--User-->
      <div class="col-lg-3 col-md-4">
        <div class="thumbnail">
          <div class="thumb thumb-slide">
            <img alt="" src="{{asset('frontend/images/user-no-avatar.png')}}">
            <div class="caption">
              <span><a class="btn bg-success-400 btn-xs" href="#">Nhắn tin</a></span>
            </div>
          </div>
          <div class="caption text-center">
            <h6 class="text-semibold no-margin"><a href="#">congcd4</a><small class="display-block">ducnva@gmail.com</small></h6>
          </div>
        </div>
      </div><!--/User-->
      <!--User-->
      <div class="col-lg-3 col-md-4">
        <div class="thumbnail">
          <div class="thumb thumb-slide">
            <img alt="" src="{{asset('frontend/images/user-no-avatar.png')}}">
            <div class="caption">
              <span><a class="btn bg-success-400 btn-xs" href="#">Nhắn tin</a></span>
            </div>
          </div>
          <div class="caption text-center">
            <h6 class="text-semibold no-margin"><a href="#">Đức Nguyễn</a><small class="display-block">ducnva@gmail.com</small></h6>
          </div>
        </div>
      </div><!--/User-->

    </div><!-- /Row for users -->
    <!-- Pagination -->
    <ul class="pagination pagination-flat">
      <li><a href="#">‹</a></li>
      <li class="active"><a href="#">1</a></li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li class="disabled"><a href="#">4</a></li>
      <li><a href="#">5</a></li>
      <li><a href="#">›</a></li>
    </ul>
    <!-- /Pagination -->
  </div>
</div><!-- /content area -->
@stop