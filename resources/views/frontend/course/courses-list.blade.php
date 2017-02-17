@extends('frontend.layouts.dashboard')
@section('top-header')
<!--Top Header-->
                           @include('frontend.partials.top-header-message')
                           <!--#Top Header-->
@stop
@section('section')
<!--Search-->
@include('frontend.partials.searchheader')
<!--#search-->
<!--Content-->
<div class="content-container">
   <div class="content-main--basic">
      <div class="faceted-search js-faceted-search" data-view="pjaxFacetedSearch">
         <div class="grid-container">
            <!--<div data-view="guestSurveyBanner">
               <div class="js-system-banner-container">
                  <div class="js-system-banner__guest-survey">
                     <div class="e-alert-box -type-success">
                        <div class="e-alert-box__message">
                           <p class="t-body -size-m h-m0">
                              Thông báo thông báo thông báo Thông báo thông báo thông báo Thông báo thông báo thông báo
                           </p>
                        </div>
                        <a href="#" target="_blank" class="e-btn--3d -color-primary" id="guest-survey-link">Xem ngay!</a>
                        <div class="e-alert-box__dismiss">
                           <a href="#" class="js-e-alert-box__survey-banner-dismiss e-alert-box__dismiss-icon dismiss-banner">
                           <i class="e-icon -icon-cancel"></i>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>-->
            <div class="content-l -size-scale-tablet content-right">
               <!--Courses List-->
               
               <!--Filter bar-->
               <div class="is-hidden--no-js search-facet-horizontal-form -border-bottom">
                  <div class="inline-select-wrapper">
                     <div class="search-facet-header--horizontal">
                        <h2><i class="e-icon -icon-sort -margin-right"></i><span class="e-icon__alt">Sắp xếp</span></h2>
                     </div>
                     <div class="-border-top-none -border-radius-none inline-select">
                        <label class="is-visually-hidden" for="sort_horizontal">Sắp xếp</label>
                        <select name="sort_horizontal" id="sort_horizontal" class="js-search-facet-sort-by" data-pjax="">
                           <option value="" selected="selected">Sắp xếp: Mới nhất</option>
                           <option value="trending">Khóa học xu thế</option>
                           <option value="sales">Học nhiều nhất</option>
                           <option value="rating">Khóa học tốt nhất</option>
                           <option value="price-asc">Giá: từ thấp đến cao</option>
                           <option value="price-desc">Giá: từ cao đến thấp</option>
                        </select>
                     </div>
                  </div>
               </div>
               <!--#Filter bar-->
               <div>
               <ul class="course-list">
                  @foreach($listCourse as $item)
                  @php ($link_detail = route('course.detail',['id'=>$item->id]))
                  <!--Course-->
                  <li class="js-google-analytics__list-event-container">
                     <div class="course-list__columns-container">
                        <div class="course-list__column-detail">
                           <div class="course-list__item-thumbnail">
                              <div class="item-thumbnail">
                                 <div class="item-thumbnail__image">
                                    <a title="{{$item->title}}" class="js-google-analytics__list-event-trigger" href="{{$link_detail}}">
                                    <img src="<?php if($item->picture != '') echo $item->picture; else echo asset('frontend/images/img_default.png'); ?>" border="0" height="80" width="150" alt="Moti App PSD Landing Page PSD Template - ThemeForest Item for Sale" title="" class="preload no_preview landscape-image-magnifier" data-tooltip="Moti App PSD Landing Page PSD Template">
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
                                    <a class="t-link -color-default -decoration-reversed" href="{{route('course.detail')}}">
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
                              <b itemprop="genre"><a href="#">{{$item->cat_title1}}</a></b>
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