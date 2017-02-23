@extends('frontend.layouts.dashboard')
@section('top-header')
<!--Top Header-->
<!--@include('frontend.partials.top-header-message')-->
<!--#Top Header-->
@stop

@section('head.css')
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
               <div>
               <ul class="course-list">
                  @foreach($listCourse as $item)

                  <?php  
                    $link_detail  = route('course.detail',['alias'=>$item->alias,'id'=>$item->id]);
                    $link_preview = route('course.preview',['id'=>$item->id]);
                    ?>
                  <!--Course-->
                  <li class="js-google-analytics__list-event-container">
                     <div class="course-list__columns-container">
                        <div class="course-list__column-detail">
                           <div class="course-list__item-thumbnail">
                              <div class="item-thumbnail">
                                 <div class="item-thumbnail__image">
                                    <a title="{{$item->title}}" class="js-google-analytics__list-event-trigger" href="{{$link_detail}}">
                                    <img src="<?php  echo Helper::getPic($item->picture); ?>" border="0" height="80" width="150" alt="{{$item->title}}" title="{{$item->title}}" class="preload no_preview landscape-image-magnifier" data-tooltip="{{$item->title}}">
                                    </a>
                                    <div class="item-thumbnail__preview">
                                       <a target="_blank" href="{{$link_preview}}" rel="modal:open">
                                       <div class="" ng-show="showPlaceholderPlayButton" style="">
                                          <div class="play-button play-button--initially-visible" data-purpose="video-play-button-initial"></div>
                                       </div>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="ml--20 mt-10">
                                       @include ('frontend.course.partials.course-list-actions-bar', array('item'=>$item,'link_detail'=>$link_detail))
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
                           
                        </div>
                        <div class="course-list__column-category">
                           <p class="t-body -size-s h-m0">
                              <span class="meta-categories -no-slash">
                              lĩnh vực 
                              <b itemprop="genre"><a href="{{route('course.listByCat',['id'=>$item->parent_cat_id,'alias'=>$item->cat_alias2])}}">{{$item->cat_title1}}</a></b>
                              <b itemprop="genre">{{$item->cat_title2}}</b>
                              </span>
                              <br>
                              {{$item->introtext}}
                           </p>
                        </div>
                        <div class="course-list__column-price">
                              @if($item->price > 0)
                                 <p class="course-list__price-desktop-free">
                                    {{number_format($item->price)}}<sup>k</sup>
                                 </p>
                              @else
                                 <p class="course-list__price-free" style="background-color: #4CAF50; border-color: #4CAF50; color: #fff; padding: 2px; border-radius: 3px;">
                                    Miễn phí
                                 </p>
                              @endif
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
               @if($sort != '')
                  {{$listCourse->appends(['sort' => $sort])->render()}}
               @else
               <nav class="js-pagination pagination">
                  {{$listCourse->render()}}
               </nav>
               @endif
               <!--#Pagination-->                                       
               <!--#Courses List-->
            </div>
         </div>
      </div>
   </div>
</div>
<!--#Content-->
 @stop