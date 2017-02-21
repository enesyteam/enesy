@extends('frontend.layouts.dashboard')
@section('top-header')
<!--Top Header-->
<!--@include('frontend.partials.top-header-message')-->
<!--#Top Header-->
@stop

@section('head.css')
<link href="{{asset('frontend/user/assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('frontend/user/assets/css/core.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('frontend/user/assets/css/colors.css')}}" rel="stylesheet" type="text/css">
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
            <div class="is-hidden--no-js search-facet-horizontal-form">
               <div class="inline-select-wrapper">
                  <div class="search-facet-header--horizontal">
                     <h2><i class="e-icon -icon-sort -margin-right"></i><span class="e-icon__alt">Sắp xếp</span></h2>
                  </div>
                  <div class="-border-top-none -border-radius-none inline-select">
                     <label class="is-visually-hidden" for="sort_horizontal">Sắp xếp</label>
                     <select name="sort_horizontal" id="sort_horizontal" class="js-search-facet-sort-by" data-pjax="">
                        <option value="id" @if($sort != "" && $sort == "id") selected @endif>Sắp xếp: Mới nhất</option>
                        <option value="trending" @if($sort != "" && $sort == "trending") selected @endif>Khóa học xu thế</option>
                        <option value="num_of_learn" @if($sort != "" && $sort == "num_of_learn") selected @endif>Học nhiều nhất</option>
                        <option value="love" @if($sort != "" && $sort == "love") selected @endif>Khóa học tốt nhất</option>
                        <option value="price-asc" @if($sort != "" && $sort == "price-asc") selected @endif>Giá: từ thấp đến cao</option>
                        <option value="price-desc" @if($sort != "" && $sort == "price-desc") selected @endif>Giá: từ cao đến thấp</option>
                     </select>
                  </div>
               </div>
               <div class="search-facet-layout-switcher js-search-facet-layout-switcher">
                     <div class="btn-group">
                        <a class="{{ Route::is('home') ? "btn btn--group-item btn--color-transparent is-active" : "btn btn--group-item btn--color-transparent" }}" 
                          data-layout-switch="list" href="{{route('home')}}">
                           <i class="e-icon -icon-list"><span class="e-icon__alt">List</span></i>
                        </a>        
                        <a class="{{ Route::is('home.gridview') ? "btn btn--group-item btn--color-transparent is-active" : "btn btn--group-item btn--color-transparent" }}" 
                                   data-layout-switch="list" href="{{route('home.gridview')}}">
                           <i class="e-icon -icon-grid"><span class="e-icon__alt">Grid</span></i>
                        </a>
                     </div>
               </div>
            </div>
            <!--#Filter bar-->

            <!-- Detached content -->
            <div class="container-detached">
               <div class="content-detached">
                  <!-- Grid -->
                  <div class="row">
                     @foreach($listCourse as $item)
                     @php ($link_detail = route('course.detail',['alias'=>$item->alias,'id'=>$item->id]))
                     <!-- Course item -->
                     <div class="col-lg-3 col-md-4 col-sm-3">
                        <div class="thumbnail course-thumbnail">
                           <div class="thumb">
                              <a href="#course_preview" data-toggle="modal">
                                 <img src="<?php if($item->picture != '') echo $item->picture; else echo asset('frontend/images/img_default.png'); ?>" class="img-responsive img-rounded" alt="">
                                 <span class="zoom-image"><i class="icon-play3"></i></span>
                              </a>
                           </div>

                           <div class="caption">
                              <div class="media">
                                 <div class="media-body">
                                    <h6 class="text-semibold course-title no-margin"><a href="{{$link_detail}}" class="text-default">{{$item->title}}</a></h6>
                                    <small class="text-muted">by <a href="#">{{$item->last_name.' '.$item->middle_name.' '.$item->first_name}}</a></small>
                                 </div>

                                 <h6 class="text-success media-right no-margin-bottom text-semibold">{{number_format($item->price)}}</h6>
                              </div>
                              <div class="course-intro">
                                 <span>{{
                                       substr($item->introtext, 0, 100)
                                 }}</span> <a href="{{$link_detail}}">[...]</a>
                              </div>
                           </div>

                           <div class="panel-footer panel-footer-transparent"><a class="heading-elements-toggle"><i class="icon-more"></i></a>
                              <div class="heading-elements">
                              @include ('frontend.course.partials.course-list-actions-bar', array('item'=>$item,'link_detail'=>$link_detail))
                                 <!-- Rating -->
                                 <!--<span class="heading-text pull-right">
                                    <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                    <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                    <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                    <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                    <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                    <span class="text-muted position-right">(49)</span>
                                 </span>-->
                                 <!-- /Rating -->
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- /Course Item -->
                     @endforeach
                  </div>
                  <!-- /Grid -->
                  <!-- Pagination -->
                  @if($sort != '')
                     {{$listCourse->appends(['sort' => $sort])->render()}}
                  @else
                  <nav class="js-pagination pagination">
                     {{$listCourse->render()}}
                  </nav>
                  @endif
                  <!-- /pagination -->
               </div>
            </div>                                    
            <!--#Courses List-->
         </div>
      </div>
   </div>
</div>
</div>
<!--#Content-->
@stop