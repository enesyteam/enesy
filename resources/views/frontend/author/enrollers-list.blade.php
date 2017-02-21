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
      <!-- User list -->
      <div class="panel panel-white">
                <div class="panel-heading">
                  <h6 class="panel-title text-semibold">Danh sách học viên</h6>
                </div>
                <ul class="media-list">
                @foreach($enrollers as $enroller)
                <!-- Enroller -->
                  <li class="media panel-body stack-media-on-mobile">
                    <div class="media-left">
                      <a href="#">
                        <img src="{{asset('frontend/images/user-no-avatar.png')}}" class="img-rounded img-lg" alt="">
                      </a>
                    </div>

                    <div class="media-body">
                      <h6 class="media-heading text-semibold">
                        <a href="#">{{$enroller->username}}</a>
                      </h6>

                      <ul class="list-inline list-inline-separate text-muted mb-10">
                        <li><a href="#" class="text-muted">{{$enroller->email}}</a></li>
                        <li>{{$enroller->username}}</li>
                      </ul>
                      Đoạn mô tả về bản thân ở đây, Đoạn mô tả về bản thân ở đây, Đoạn mô tả về bản thân ở đây, Đoạn mô tả về bản thân ở đây, Đoạn mô tả về bản thân ở đây, Đoạn mô tả về bản thân ở đây, .
                    </div>

                    <div class="media-right text-nowrap">
                      <span class="label bg-blue">Mới</span>
                    </div>
                  </li>
                  <!-- /Enroller -->
                  @endforeach
                </ul>
              </div>
      <!-- /User list -->
    </div><!-- /Row for users -->
    <!-- Pagination -->
        {{$enrollers->render()}}
    <!-- /Pagination -->
  </div>
</div><!-- /content area -->
@stop