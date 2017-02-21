@extends('frontend.layouts.dashboard')
@section('top-header')
<!--Top Header-->
@include('frontend.partials.top-header-message')
<!--#Top Header-->
@stop
@section('custom-navbar')
<div class="header-categories__search">
  <form id="search" data-view="searchField" action="{{route('course.search_result')}}" accept-charset="UTF-8" method="get"><input name="utf8" type="hidden" value="">
    <div class="search-field -border-light">
      <div class="search-field__input">
        <input id="term" name="term" class="js-term search-field__input-field" type="search" placeholder="Tìm khóa học" vk_19588="subscribed">
      </div>
      <button class="search-field__button" type="submit">
        <i class="e-icon -icon-search"><span class="e-icon__alt">Search</span></i>
      </button>
    </div>
</form></div>
@stop
@section('section')
<!--Content-->
<div class="content-container">
   <div class="content-main--basic">
      <div>
         <div class="grid-container">
            <div class="content-l -size-scale-tablet content-right">
               <!--Courses List-->
               <div>
               <!-- Add by Cong, need to revise by code team -->
               <h2 class="t-heading -weight-light -size-xs h-mb1 ml-5">
                Các khóa học <strong>XXX</strong> (100)
              </h2>
              <!-- Add by Cong, need to revise by code team -->
              <!-- Check if category has any course -->
              @if($listCourse->isEmpty())
               <span class="ml-10">Chưa có khóa học nào</span>
              @else
               <ul class="course-list">
                  @foreach($listCourse as $item)
                  @php ($link_detail = route('course.detail',['alias'=>$item->alias,'id'=>$item->id]))
                  <!--Course-->
                  <li class="js-google-analytics__list-event-container">
                     <div class="course-list__columns-container">
                        <div class="course-list__column-detail">
                           <div class="course-list__item-thumbnail">
                              <div class="item-thumbnail">
                                 <div class="item-thumbnail__image">
                                    <a title="{{$item->title}}" class="js-google-analytics__list-event-trigger" href="{{$link_detail}}">
                                    <img src="<?php if($item->picture != '') echo $item->picture; else echo asset('frontend/images/img_default.png'); ?>" border="0" height="80" width="150" alt="Enesy Course" title="" class="preload no_preview landscape-image-magnifier" data-tooltip="Enesy Course">
                                    </a>
                                    <!--<div class="item-thumbnail__preview">
                                       <a target="_blank" href="{{route('course.preview')}}" rel="modal:open">
                                       <div class="" ng-show="showPlaceholderPlayButton" style="">
                                          <div class="play-button play-button--initially-visible" data-purpose="video-play-button-initial"></div>
                                       </div>
                                       </a>
                                    </div>-->
                                 </div>
                              </div>
                           </div>
                           <div class="course-list__adjacent-thumbnail">
                              <h3 class="course-list__heading">
                                 <a title="{{$item->title}}" class="js-google-analytics__list-event-trigger t-link -color-inherit -decoration-reversed" href="{{$link_detail}}">{{$item->title}}</a>
                              </h3>
                              <div class="course-list__price">
                                 <p class="t-body -size-m -color-inherit -weight-bold h-m0">{{number_format($item->price)}}<sup>k</sup></p>
                              </div>
                              <div class="course-list__info">
                                 <div class="course__info-author">Giảng viên:
                                    <a class="t-link -color-default -decoration-reversed" href="#">
                                    {{$item->last_name.' '.$item->middle_name.' '.$item->first_name}}
                                    </a>
                                 </div>
                                 <div class="course__info-author">Thời lượng: {{$item->time_learn}} phút
                                 </div>
                              </div>
                           </div>
                           @include ('frontend.course.partials.course-list-actions-bar', array('item'=>$item,'link_detail'=>$link_detail))
                        </div>
                        <div class="course-list__column-category">
                           <p class="t-body -size-s h-m0">
                              <span class="meta-categories -no-slash">
                              lĩnh vực 
                              <b itemprop="genre"><a href="{{route('course.listByCat',['id'=>$item->parent_cat_id,'alias'=>$item->cat_alias1])}}">{{$item->cat_title1}}</a></b>
                              <b itemprop="genre">{{$item->cat_title2}}</b>
                              </span>
                              <br>
                              {{$item->introtext}}
                           </p>
                        </div>
                        <div class="course-list__column-price">
                           <p class="course-list__price-desktop">{{number_format($item->price)}}<sup>k</sup></p>
                           <div class="course-list__info-desktop">
                              <div class="course-list__sales-desktop">
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <!--#Course-->
                  @endforeach
                  
               </ul>

               @endif
                </div>
               <!--Pagination-->
               {{$listCourse->render()}}
               <!--#Pagination-->                                       
               <!--#Courses List-->
            </div>
         </div>
      </div>
   </div>
</div>
<!--#Content-->
 @stop