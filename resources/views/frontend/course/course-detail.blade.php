@extends ('frontend.master.course-master')
@section ('head.title')
Enesy | Khóa học lập trình AutoCAD với C# trình độ cơ bản
@stop
@section ('head.css')
<link href="{{asset('frontend/css/course.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('frontend/css/icon.css')}}" rel="stylesheet" type="text/css" />
@stop

@section('head.js')
<!--JqueryModal-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="{{asset('frontend/vender/jquery-modal/jquery.modal.js')}}" type="text/javascript" charset="utf-8"></script>
<script src="{{asset('frontend/vender/jquery-modal/highlight/highlight.pack.js')}}" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8"> hljs.initHighlightingOnLoad(); </script>
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

@section ('body.content')
<div class="context-header ">
   <div class="grid-container ">
      <nav class="breadcrumbs h-text-truncate ">
         <a href="{{route('home')}}">Trang chủ</a>
         <a href="{{route('courses.index')}}">Khóa học</a>
         <a href="#">CNTT &amp; Phần mềm</a>
         <a href="#">AutoCAD</a>
      </nav>
      <div class="item-header" data-view="itemHeader">
         <div class="item-header__title">
            <h1 class="t-heading -color-inherit -size-l h-m0 is-hidden-phone" itemprop="name">
               {{$course_detail->title}}
            </h1>
            <h1 class="t-heading -color-inherit -size-xs h-m0 is-hidden-tablet-and-above">
               {{$course_detail->title}}
            </h1>
         </div>
         <div class="item-header__price">
            <a class="js-item-header__cart-button e-btn--3d -color-primary -size-m" rel="nofollow" title="Add to Cart" data-view="modalAjax" href="">
            <span class="item-header__cart-button-icon">
            <i class="e-icon -icon-cart -margin-right"></i>
            </span>
            <span class="t-heading -size-m -color-light -margin-none">
            <b class="t-currency"><span class="js-item-header__price">699<sup>k</sup></span></b>
            </span>
            </a>          
         </div>
      </div>
      <!-- Desktop Item Navigation -->
      <div class="is-hidden-tablet-and-below page-tabs">
         <ul>
            <li class="selected"><a class="t-link -decoration-none" href="#">Thông tin khóa học</a></li>
            <li><a class="t-link -decoration-none" href="#">Đánh giá</a></li>
            <li><a class="t-link -decoration-none" href="#">Bình luận</a></li>
            <li><a class="t-link -decoration-none" href="#">Hỗ trợ khóa học</a></li>
         </ul>
      </div>
      <!-- Table or below Item Navigation -->
      <div class="page-tabs--dropdown" data-view="replaceItemNavsWithRemote" data-target=".js-remote">
         <div class="page-tabs--dropdown__slt-custom-wlabel">
            <div class="slt-custom-wlabel--page-tabs--dropdown">
               <label>
               <span class="js-label">
               Thông tin khóa học
               </span>
               <span class="slt-custom-wlabel__arrow">
               <i class="e-icon -icon-arrow-fill-down"></i>
               </span>
               </label>
               <select class="js-remote">
                  <option selected="selected" data-url="#">Thông tin khóa học</option>
                  <option data-url="#">Đánh giá</option>
                  <option data-url="#">Bình luận</option>
                  <option data-url="#">Hỗ trợ khóa học</option>
               </select>
            </div>
         </div>
      </div>
   </div>
</div>
<!--#Context Header-->
<div class="content-main" id="content">
   <div class="grid-container">
      
      <div class="content-s">
         <div class="box--no-padding no-border">
            <div class="item-preview -preview-live">
               <video width="100%"  controls>
              <source src="<?php echo Helper::getDocs($course_detail->video); ?>" type="video/mp4">
            Your browser does not support the video tag.
            </video>
               <div class="item-preview__actions">
                  <div id="fullscreen" class="item-preview__preview-buttons">
                     <a data-view="crossDomainGoogleAnalyticsLink" role="button" class="btn-icon live-preview" target="_blank" rel="nofollow">{{$course_detail->num_of_learn}}</a>
                     <a data-view="crossDomainGoogleAnalyticsLink" href="#" role="button" class="btn-icon like" target="_blank" rel="nofollow">{{$course_detail->love}}</a>
                     <a target="_blank" href="{{route('course.share')}}" rel="modal:open" role="button" class="btn-icon share" target="_blank">Chia sẻ</a>
                     <a data-view="crossDomainGoogleAnalyticsLink"  role="button" class="btn-icon list" target="_blank" rel="nofollow">{{$course_hit->view}}</a>
                     <a data-view="crossDomainGoogleAnalyticsLink"  role="button" class="btn-icon time" target="_blank" rel="nofollow">{{$course_detail->time_learn}}h</a>
                  </div>
               </div>
            </div>
         </div>
         <div data-view="toggleItemDescription">
            <div class="js-item-description item-description has-toggle" itemprop="description">
               <div class="course-detail">
               <h4 class="tab-title">
                Mô tả khóa học
               </h4>
               <p style=""><?php echo $course_detail->content;?></p>
               <h4 class="tab-title">
                Các yêu cầu của khóa học
               </h4>
               <ul class="regular-list">
               <?php 
                 foreach ($course_requirement as $key => $value) {  
               ?>
                
                    <li>{{$value->title}}</li>
                
                <?php }?>
                
               </ul>
               <h4 class="tab-title">
                Lợi ích từ khóa học
               </h4>
               <ul class="regular-list">
               <?php 
                 foreach ($course_benefit as $key => $value) {  
               ?>
                
                    <li>{{$value->title}}</li>
                
                <?php }?>
                
               </ul>
                  <div id="curriculum" class="top-space-for-scroll clearfix" data-purpose="course-curriculum">
                     <h2>
                        Nội dung
                     </h2>
                     <div class="table-responsive b0-xs">
                        <table class="cur-list table table-hover" curriculum-loader="" course-id="21323" has-more-to-load="1" num-displayed-items="100" is-seo-traffic="0">
                           <tbody>
                              <tr class="cur-list-title">
                                 <th colspan="4" class="w30 tal hm">
                                    Phần 1: Giới thiệu khóa học
                                 </th>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-1">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-1">
                                    Bài số 1.1
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-1">
                                          Giới thiệu khóa học Lập trình AutoCAD với C# - Trình độ cơ bản
                                       </div>
                                       <a class="btn btn-sm ud-courseimpressiontracker preview-btn ml15 btn-primary
                                          " target="_blank" href="{{route('course.preview',['id'=>$course_detail->id])}}" rel="modal:open">
                                       Xem trước
                                       </a>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    10:01
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc  on" data-purpose="lecture-row-2">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-2">
                                    Bài số 1.2
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-2">
                                          Sử dụng các tập tin của khóa học
                                       </div>
                                       <a class="btn btn-sm ud-courseimpressiontracker preview-btn ml15 btn-primary
                                          " target="_blank" href="{{route('course.preview',['id'=>$course_detail->id])}}" rel="modal:open">
                                       Xem trước
                                       </a>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    03:34
                                 </td>
                              </tr>
                              <tr class="cur-list-title">
                                 <th colspan="4" class="w30 tal hm">
                                    Phần 2: Tìm hiểu về môi trường lập trình AutoCAD .NET API
                                 </th>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-3">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-3">
                                    Bài số 2.1
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-3">
                                          Làm quen với AutoCAD .NET API
                                       </div>
                                       <a class="btn btn-sm ud-courseimpressiontracker preview-btn ml15 btn-primary
                                          " target="_blank" href="{{route('course.preview',['id'=>$course_detail->id])}}" rel="modal:open">
                                       Xem trước
                                       </a>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    03:19
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-4">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-4">
                                    Bài số 2.2
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-4">
                                          Cài đặt Template
                                       </div>
                                       <a class="btn btn-sm ud-courseimpressiontracker preview-btn ml15 btn-primary
                                          " target="_blank" href="{{route('course.preview',['id'=>$course_detail->id])}}" rel="modal:open">
                                       Xem trước
                                       </a>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    01:30
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-4">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-4">
                                    Bài số 2.3
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-4">
                                          Cấu trúc một dự án C#
                                       </div>
                                       <a class="btn btn-sm ud-courseimpressiontracker preview-btn ml15 btn-primary
                                          " target="_blank" href="{{route('course.preview',['id'=>$course_detail->id])}}" rel="modal:open">
                                       Xem trước
                                       </a>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    01:30
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-4">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-4">
                                    Bài số 2.4
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-4">
                                          Netload và Debug
                                       </div>
                                       <a class="btn btn-sm ud-courseimpressiontracker preview-btn ml15 btn-primary
                                          " target="_blank" href="{{route('course.preview',['id'=>$course_detail->id])}}" rel="modal:open">
                                       Xem trước
                                       </a>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    01:30
                                 </td>
                              </tr>
                              <tr class="cur-list-title">
                                 <th colspan="4" class="w30 tal hm">
                                    Section 3: Writing Your First Program -   Hello, World!
                                 </th>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-5">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-5">
                                    Lecture 5
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-5">
                                          Entering And Running A   Program In Windows
                                       </div>
                                       <a class="btn btn-sm ud-courseimpressiontracker preview-btn ml15 btn-primary
                                          " target="_blank" href="{{route('course.preview',['id'=>$course_detail->id])}}" rel="modal:open">
                                       Xem trước
                                       </a>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    05:10
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc" data-purpose="lecture-row-6">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-6">
                                    Lecture 6
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-6">
                                          Entering And Running A  Program On A Mac
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    01:38
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-7">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-7">
                                    Lecture 7
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-7">
                                          Exercise 1
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    03:27
                                 </td>
                              </tr>
                              <tr class="cur-list-title">
                                 <th colspan="4" class="w30 tal hm">
                                    Section 4: Python Basic Data Types And   Variables
                                 </th>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-8">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-8">
                                    Lecture 8
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-8">
                                          Expressions, Statements,   Variables
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    05:11
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-9">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-9">
                                    Lecture 9
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-9">
                                          Working With Numbers
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    03:42
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-10">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-10">
                                    Lecture 10
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-10">
                                          Working With Strings
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    04:25
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-11">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-11">
                                    Lecture 11
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-11">
                                          Working With Booleans
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    02:12
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-12">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-12">
                                    Lecture 12
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-12">
                                          Working With Lists
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    03:04
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-13">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-13">
                                    Lecture 13
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-13">
                                          Working With  Dictionaries
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    02:00
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-14">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-14">
                                    Lecture 14
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-14">
                                          Working With Tuples
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    02:26
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-15">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-15">
                                    Lecture 15
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-15">
                                          Exercise 1
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    03:47
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-16">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-16">
                                    Lecture 16
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-16">
                                          Exercise 2
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    03:28
                                 </td>
                              </tr>
                              

                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
            <div class="js-item-description-toggle item-description-toggle">
               <a class="item-description-toggle__link" href="#">
               <span>Xem thêm <i class="e-icon -icon-chevron-down"></i></span>
               <span class="item-description-toggle__less">Ẩn <i class="e-icon -icon-chevron-down -rotate-180"></i></span>
               </a>        
            </div>
         </div>
         <section data-view="recommendedItems" data-url="/item/edulearn-education-school-courses-html-template/17695406/recommended_items" id="recommended_items"></section>
         <section class="related-by-author h-my2 h-pb1">
            <h1 class="t-heading -size-xs -weight-normal">Các khóa học khác từ giảng viên {{$mentor->first_name}} {{$mentor->middle_name}} {{$mentor->last_name}}</h1>
            <div class="related-by-author__list h-py1" data-view="productList">
               <ul class="item-thumbnail-carousel--item-page overthrow">
                  <?php foreach ($course_of_mentor as $key => $item) {
                    $link_detail  = route('course.detail',['alias'=>$item->alias,'id'=>$item->id]);
                    $link_preview = route('course.preview',['id'=>$item->id]);
                      ?>
                  <li class="item-thumbnail-container">
                     <div class="item-thumbnail__image">
                        <a class="js-google-analytics__list-event-trigger" href="{{$link_detail}}">
                        <img border="0" alt="{{$item->title}}" title="{{$item->title}}" height="80" width="80" class="landscape-image-magnifier preload no_preview"  src="<?php echo Helper::getPic($item->picture); ?>"></a>
                     </div>
                  </li>
                  <?php }?>
               </ul>
            </div>
            <div>
               <p class="t-body -size-m">
                  <a class="t-link-decoration-reversed" href="#">Xem hồ sơ giảng viên</a>
               </p>
            </div>
         </section>
      </div>
      <div class="sidebar-l sidebar-right hentry">
         <div class="js-pricebox__regular pricebox-container" itemscope="itemscope" itemtype="http://schema.org/Product">
            <meta itemprop="name" content="EduLearn - Education, School &amp; Courses HTML Template">
            <div class="purchase-panel">
               <div id="purchase-form" class="purchase-form">
                  <form action="" accept-charset="UTF-8" method="post">
                     <div itemprop="offers" itemscope="" itemtype="">
 
                        <div data-view="itemVariantSelector">
                           <div class="purchase-form__selection">
                              <span class="purchase-form__license-type">
                              <span data-view="flyout" class="flyout">
                              <span class="js-license-selector__chosen-license">Các lợi ích từ khóa học</span>
                              </span>
                              </span>
                              <div class="js-purchase-heading purchase-form__price t-heading -size-xxl">
                                 <b class="t-currency"><span class="js-purchase-price">k{{$course_detail->price}}</span></b>
                              </div>
                           </div>
                           
                           
                           <div class="purchase-form__support">
                              <ul class="t-icon-list -font-size-s -icon-size-s -offset-flush">
                                 <?php 
                                   foreach ($course_benefit as $key => $value) {  
                                 ?>
                                      <li class="t-icon-list__item -icon-ok">{{$value->title}}</li>
                                  
                                  <?php }?>
                                 
                                 
                              </ul>
                           </div>
                        </div>
                        <div class="purchase-form__button">
                           <button name="button" type="submit" class="js-purchase__add-to-cart e-btn--3d -color-primary -size-m -width-full">
                           <i class="e-icon -icon-cart -margin-right"></i> <strong>Mua khóa học</strong>
                           </button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
         <div class="box">
            <div class="media">
               <div class="media__item">
                  <div class="avatar-wrapper tooltip-advanced">
                     <a class="avatar" title="cowthemes" href="">
                     <img width="80" height="80" alt="cowthemes" src="<?php echo Helper::getPic($mentor->avatar); ?>">
                     </a>
                  </div>
               </div>
               <div class="media__body">
                  <h2 class="t-heading -size-s">
                     <a rel="author" class="t-link -color-dark -decoration-none" href="">{{$mentor->first_name}} {{$mentor->middle_name}} {{$mentor->last_name}}</a>
                  </h2>
                  <div class="author-desc">
                     {{$mentor->info}} 
                  </div>
               </div>
            </div>
            <div class="h-mt1">
               <a class="e-btn--3d -color-light -width-full" href="">Xem hồ sơ giảng viên</a>
            </div>
         </div>
         <div class="t-body -size-s h-text-align-center h-mt2">
            © {{$mentor->first_name}} {{$mentor->middle_name}} {{$mentor->last_name}} và Enesy giữ bản quyền khóa học này
            <br>
            <a href="#">Liên hệ bản quyền tại đây</a>
         </div>
      </div>
   </div>
</div>
@stop