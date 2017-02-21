@extends('frontend.author.master.author-master') @section('author-body.content') <!-- Content area -->
 @section('author-body.content') <!-- Content area -->

@section('custom-navbar')
<div class="header-categories__search">
  <form id="search" data-view="searchField" action="{{route('course.search_result')}}" accept-charset="UTF-8" method="get"><input name="utf8" type="hidden" value="">
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

<div class="search-facet-layout-switcher js-search-facet-layout-switcher">
                     <div class="btn-group">
                        <a class="{{ Route::is('user.author_enrollers_list') ? "btn btn--group-item btn--color-transparent is-active" : "btn btn--group-item btn--color-transparent" }}" 
                          data-layout-switch="list" href="{{route('user.author_enrollers_list')}}">
                           <i class="e-icon -icon-list"><span class="e-icon__alt">List</span></i>
                        </a>        
                        <a class="{{ Route::is('user.author_enrollers') ? "btn btn--group-item btn--color-transparent is-active" : "btn btn--group-item btn--color-transparent" }}" 
                                   data-layout-switch="list" href="{{route('user.author_enrollers')}}">
                           <i class="e-icon -icon-grid"><span class="e-icon__alt">Grid</span></i>
                        </a>
                     </div>
               </div>

<div class="row">
  <div class="col-md-12  mr--10">
    <!--Row for users-->
    <div class="row">
    @foreach($enrollers as $enroller)
      <div class="col-lg-3 col-md-4 col-sm-4">
        <div class="thumbnail">
          <div class="thumb thumb-slide">
            <img alt="" src="{{asset('frontend/images/user-no-avatar.png')}}">
            <div class="caption">
              <span><a class="btn bg-success-400 btn-xs" href="#">Nhắn tin</a></span>
            </div>
          </div>
          <div class="caption text-center">
            <h6 class="text-semibold no-margin"><a href="#">{{$enroller->username}}</a><small class="display-block">{{$enroller->email}}</small></h6>
          </div>
        </div>
      </div><!--/User-->
    @endforeach
    </div><!-- /Row for users -->
    <!-- Pagination -->
        {{$enrollers->render()}}
    <!-- /Pagination -->
  </div>
</div><!-- /content area -->
@stop