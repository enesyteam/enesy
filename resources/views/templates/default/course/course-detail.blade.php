@extends ('templates.default.master.course-master')
@section ('head.title')
Enesy | Khóa học lập trình AutoCAD với C# trình độ cơ bản
@stop
@section ('head.css')
<link href="{{'templates/default/assets/css/course.css'}}" rel="stylesheet" type="text/css" />
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
               Khóa học lập trình AutoCAD với C# - trình độ cơ bản
            </h1>
            <h1 class="t-heading -color-inherit -size-xs h-m0 is-hidden-tablet-and-above">
               Khóa học lập trình AutoCAD với C# - trình độ cơ bản
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
            <li><a class="t-link -decoration-none" href="#">Hỗ trợ</a></li>
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
                  <option data-url="#">Hỗ trợ</option>
               </select>
            </div>
         </div>
      </div>
   </div>
</div>
<!--#Context Header-->
<div class="content-main" id="content">
   <div class="grid-container">
      <link itemprop="thumbnailUrl" href="https://0.s3.envato.com/files/213029039/Thumbnail.jpg">
      <div class="content-s">
         <div class="box--no-padding">
            <div class="item-preview -preview-live">
               <a target="_blank" href="">
                  <img alt="EduLearn - Education, School &amp; Courses HTML Template - Business Corporate" itemprop="image" src="{{url('templates/default/assets/images/courses/preview-images/course-preview-image.jpg')}}">
                  <div class="" ng-show="showPlaceholderPlayButton" style="">
                     <div class="play-button play-button--initially-visible" data-purpose="video-play-button-initial"></div>
                  </div>
               </a>
               <div class="item-preview__actions">
                  <div id="fullscreen" class="item-preview__preview-buttons">
                     <a data-view="crossDomainGoogleAnalyticsLink" href="#" role="button" class="btn-icon live-preview" target="_blank" rel="nofollow">2,000 học viên</a><a data-view="screenshotGallery" href="" role="button" class="btn-icon screenshots" target="_blank">48 giờ học</a>
                  </div>
                  <div class="item-preview__preview-buttons--social" data-view="socialButtons">
                     <div class="btn-group">
                        <div class="btn btn--label btn--group-item">Chia sẻ</div>
                        <a class="btn btn--group-item" data-social-network-link="" href=""><i class="e-icon -icon-facebook -size-medium -line-height-small"><span class="e-icon__alt">Facebook</span></i></a>
                        <a class="btn btn--group-item" data-social-network-link="" href="https://plus.google.com/share?url=https%3A%2F%2Fthemeforest.net%2Fitem%2Fedulearn-education-school-courses-html-template%2F17695406%3Futm_source%3Dsharegp"><i class="e-icon -icon-google-plus -size-medium -line-height-small"><span class="e-icon__alt">Google Plus</span></i></a>
                        <a class="btn btn--group-item" data-social-network-link="" href="https://twitter.com/intent/tweet?text=Check+out+%27EduLearn+-+Education%2C+School+%26+Courses+HTML+Template%27+on+%23EnvatoMarket+by+%40cowthemes+%23themeforest&amp;url=https%3A%2F%2Fthemeforest.net%2Fitem%2Fedulearn-education-school-courses-html-template%2F17695406%3Futm_source%3Dsharetw"><i class="e-icon -icon-twitter -size-medium -line-height-small"><span class="e-icon__alt">Twitter</span></i></a>
                        <a class="btn btn--group-item" data-social-network-link="" href="http://pinterest.com/pin/create/button?description=EduLearn+-+Education%2C+School+%26+Courses+HTML+Template&amp;media=http%3A%2F%2F0.s3.envato.com%2Ffiles%2F208388954%2FTheme%2520Preview%2F01-theme-preview.__large_preview.jpg&amp;url=https%3A%2F%2Fthemeforest.net%2Fitem%2Fedulearn-education-school-courses-html-template%2F17695406%3Futm_source%3Dsharepi"><i class="e-icon -icon-pinterest -size-medium -line-height-small"><span class="e-icon__alt">Pinterest</span></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div data-view="toggleItemDescription">
            <div class="js-item-description item-description has-toggle" itemprop="description">
               <div class="user-html">
                  <div id="curriculum" class="top-space-for-scroll clearfix" data-purpose="course-curriculum">
                     <h1>
                        Curriculum
                     </h1>
                     <div class="table-responsive b0-xs">
                        <table class="cur-list table table-hover" curriculum-loader="" course-id="21323" has-more-to-load="1" num-displayed-items="100" is-seo-traffic="0">
                           <tbody>
                              <tr class="cur-list-title">
                                 <th colspan="4" class="w30 tal hm">
                                    Section 1: Introduction
                                 </th>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-1">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-file-o"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-1">
                                    Lecture 1
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-1">
                                          Working Files - Download These First
                                       </div>
                                       <a open-modal="" data-template-url="/new-lecture/231183/popup/" data-course-id="21323" data-lecture-id="231183" data-purpose="lecture-preview-btn-1" class="btn btn-sm ud-courseimpressiontracker preview-btn ml15
                                          btn-primary
                                          " data-tracking-type="lecture-preview">
                                       Preview
                                       </a>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    00:01
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc  on" data-purpose="lecture-row-2">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-2">
                                    Lecture 2
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-2">
                                          What This Course Covers
                                       </div>
                                       <a open-modal="" data-template-url="/new-lecture/102817/popup/" data-course-id="21323" data-lecture-id="102817" data-purpose="lecture-preview-btn-2" class="btn btn-sm ud-courseimpressiontracker preview-btn ml15
                                          btn-primary
                                          " data-tracking-type="lecture-preview">
                                       Preview
                                       </a>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    03:34
                                 </td>
                              </tr>
                              <tr class="cur-list-title">
                                 <th colspan="4" class="w30 tal hm">
                                    Section 2: Installing Python
                                 </th>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-3">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-3">
                                    Lecture 3
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-3">
                                          Installing Python In  Windows
                                       </div>
                                       <a open-modal="" data-template-url="/new-lecture/103078/popup/" data-course-id="21323" data-lecture-id="103078" data-purpose="lecture-preview-btn-3" class="btn btn-sm ud-courseimpressiontracker preview-btn ml15
                                          btn-primary
                                          " data-tracking-type="lecture-preview">
                                       Preview
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
                                    Lecture 4
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-4">
                                          Installing Python On A   Mac
                                       </div>
                                       <a open-modal="" data-template-url="/new-lecture/102818/popup/" data-course-id="21323" data-lecture-id="102818" data-purpose="lecture-preview-btn-4" class="btn btn-sm ud-courseimpressiontracker preview-btn ml15
                                          btn-primary
                                          " data-tracking-type="lecture-preview">
                                       Preview
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
                                       <a open-modal="" data-template-url="/new-lecture/102820/popup/" data-course-id="21323" data-lecture-id="102820" data-purpose="lecture-preview-btn-5" class="btn btn-sm ud-courseimpressiontracker preview-btn ml15
                                          btn-primary
                                          " data-tracking-type="lecture-preview">
                                       Preview
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
                              <tr class="cur-list-title">
                                 <th colspan="4" class="w30 tal hm">
                                    Section 5: Python Input/Output
                                 </th>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-17">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-17">
                                    Lecture 17
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-17">
                                          Using The Print Function   - Part 1
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    04:39
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-18">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-18">
                                    Lecture 18
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-18">
                                          Using The Print Function   - Part 2
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    03:46
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-19">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-19">
                                    Lecture 19
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-19">
                                          Getting Input From The   User
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    03:51
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-20">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-20">
                                    Lecture 20
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-20">
                                          Exercise 1
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    03:06
                                 </td>
                              </tr>
                              <tr class="cur-list-title">
                                 <th colspan="4" class="w30 tal hm">
                                    Section 6: Making Decisions - if   Statements
                                 </th>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-21">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-21">
                                    Lecture 21
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-21">
                                          The Relational Operators
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    03:19
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-22">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-22">
                                    Lecture 22
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-22">
                                          The Logical Operators
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    04:50
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-23">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-23">
                                    Lecture 23
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-23">
                                          Simple if Statement
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    04:19
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-24">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-24">
                                    Lecture 24
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-24">
                                          if-else Statement
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    03:12
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-25">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-25">
                                    Lecture 25
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-25">
                                          if-elif Statement
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    05:15
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-26">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-26">
                                    Lecture 26
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-26">
                                          Exercise 1
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    03:13
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-27">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-27">
                                    Lecture 27
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-27">
                                          Exercise 2
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    02:59
                                 </td>
                              </tr>
                              <tr class="cur-list-title">
                                 <th colspan="4" class="w30 tal hm">
                                    Section 7: while Loops
                                 </th>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-28">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-28">
                                    Lecture 28
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-28">
                                          Introduction To while   Loops
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    04:46
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-29">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-29">
                                    Lecture 29
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-29">
                                          Count-Controlled while   Loops
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    05:34
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-30">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-30">
                                    Lecture 30
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-30">
                                          Event-Controlled while   Loops
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    04:49
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-31">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-31">
                                    Lecture 31
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-31">
                                          Using continue
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    04:09
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-32">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-32">
                                    Lecture 32
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-32">
                                          Using break
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    04:46
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-33">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-33">
                                    Lecture 33
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-33">
                                          Working With Files -   Part 1
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    05:52
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-34">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-34">
                                    Lecture 34
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-34">
                                          Working With Files -   Part 2
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    05:05
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-35">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-35">
                                    Lecture 35
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-35">
                                          Exercise 1
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    04:10
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-36">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-36">
                                    Lecture 36
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-36">
                                          Exercise 2
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    04:57
                                 </td>
                              </tr>
                              <tr class="cur-list-title">
                                 <th colspan="4" class="w30 tal hm">
                                    Section 8: for Loops
                                 </th>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-37">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-37">
                                    Lecture 37
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-37">
                                          Introduction To for   Loops - Part 1
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    04:25
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-38">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-38">
                                    Lecture 38
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-38">
                                          Introduction To for   Loops - Part 2
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    04:54
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-39">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-39">
                                    Lecture 39
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-39">
                                          for Loops With Lists
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    03:45
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-40">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-40">
                                    Lecture 40
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-40">
                                          for Loops With Tuples
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    04:13
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-41">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-41">
                                    Lecture 41
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-41">
                                          for Loops With   Dictionaries
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    03:23
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-42">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-42">
                                    Lecture 42
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-42">
                                          for Loops With Files
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    04:23
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-43">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-43">
                                    Lecture 43
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-43">
                                          Exercise 1
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    02:57
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-44">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-44">
                                    Lecture 44
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-44">
                                          Exercise 2
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    02:51
                                 </td>
                              </tr>
                              <tr class="cur-list-title">
                                 <th colspan="4" class="w30 tal hm">
                                    Section 9: Iterators
                                 </th>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-45">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-45">
                                    Lecture 45
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-45">
                                          Understanding Iterators
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    02:17
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-46">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-46">
                                    Lecture 46
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-46">
                                          Using iter And next
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    05:03
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-47">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-47">
                                    Lecture 47
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-47">
                                          Iterators And   Dictionaries
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    02:44
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-48">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-48">
                                    Lecture 48
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-48">
                                          Other Iterators
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    04:27
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-49">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-49">
                                    Lecture 49
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-49">
                                          Exercise 1
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    02:48
                                 </td>
                              </tr>
                              <tr class="cur-list-title">
                                 <th colspan="4" class="w30 tal hm">
                                    Section 10: List Comprehensions
                                 </th>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-50">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-50">
                                    Lecture 50
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-50">
                                          Introduction To List  Comprehensions 
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    04:52
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-51">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-51">
                                    Lecture 51
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-51">
                                          Using List Comprehensions With Files
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    03:24
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-52">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-52">
                                    Lecture 52
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-52">
                                          Exercise 1
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    03:02
                                 </td>
                              </tr>
                              <tr class="cur-list-title">
                                 <th colspan="4" class="w30 tal hm">
                                    Section 11: Functions
                                 </th>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-53">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-53">
                                    Lecture 53
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-53">
                                          Introduction To Functions - Why
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    04:36
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-54">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-54">
                                    Lecture 54
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-54">
                                          Defining Functions
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    05:09
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-55">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-55">
                                    Lecture 55
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-55">
                                          Calling Functions
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    06:16
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-56">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-56">
                                    Lecture 56
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-56">
                                          Functions With Multiple   Arguments
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    04:24
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-57">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-57">
                                    Lecture 57
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-57">
                                          Predicate Functions
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    03:07
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-58">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-58">
                                    Lecture 58
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-58">
                                          Exercise 1
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    04:35
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-59">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-59">
                                    Lecture 59
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-59">
                                          Exercise 2
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    02:59
                                 </td>
                              </tr>
                              <tr class="cur-list-title">
                                 <th colspan="4" class="w30 tal hm">
                                    Section 12: More On Functions
                                 </th>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-60">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-60">
                                    Lecture 60
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-60">
                                          Recursive Functions -   Part 1
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    04:57
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-61">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-61">
                                    Lecture 61
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-61">
                                          Recursive Functions -   Part 2
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    04:38
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-62">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-62">
                                    Lecture 62
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-62">
                                          Function Objects
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    04:45
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-63">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-63">
                                    Lecture 63
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-63">
                                          Anonymous Functions
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    04:32
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-64">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-64">
                                    Lecture 64
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-64">
                                          Higher-Order Functions
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    05:21
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-65">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-65">
                                    Lecture 65
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-65">
                                          Exercise 1
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    02:50
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-66">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-66">
                                    Lecture 66
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-66">
                                          Exercise 2 
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    03:48
                                 </td>
                              </tr>
                              <tr class="cur-list-title">
                                 <th colspan="4" class="w30 tal hm">
                                    Section 13: Scope
                                 </th>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-67">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-67">
                                    Lecture 67
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-67">
                                          Global Scope
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    03:12
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-68">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-68">
                                    Lecture 68
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-68">
                                          Local Scope
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    03:02
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-69">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-69">
                                    Lecture 69
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-69">
                                          Nested Scope
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    02:57
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-70">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-70">
                                    Lecture 70
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-70">
                                          Exercise 1 - Part 1
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    04:14
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-71">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-71">
                                    Lecture 71
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-71">
                                          Exercise 1 - Part 2
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    03:10
                                 </td>
                              </tr>
                              <tr class="cur-list-title">
                                 <th colspan="4" class="w30 tal hm">
                                    Section 14: Modules
                                 </th>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-72">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-72">
                                    Lecture 72
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-72">
                                          Using Built-In Modules
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    03:57
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-73">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-73">
                                    Lecture 73
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-73">
                                          User-Defined Modules -   Part 1
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    03:53
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-74">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-74">
                                    Lecture 74
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-74">
                                          User-Defined Modules -   Part 2
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    03:23
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-75">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-75">
                                    Lecture 75
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-75">
                                          Module Namespaces
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    04:15
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-76">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-76">
                                    Lecture 76
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-76">
                                          Exercise 1
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    03:50
                                 </td>
                              </tr>
                              <tr class="cur-list-title">
                                 <th colspan="4" class="w30 tal hm">
                                    Section 15: Object-Oriented Programming - Part 1
                                 </th>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-77">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-77">
                                    Lecture 77
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-77">
                                          Abstract Data Types
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    04:05
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-78">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-78">
                                    Lecture 78
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-78">
                                          Designing A Class, Fields And Constructors
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    04:11
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-79">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-79">
                                    Lecture 79
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-79">
                                          Designing A Class, Methods
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    04:28
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-80">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-80">
                                    Lecture 80
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-80">
                                          Data Structure For Fields
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    04:14
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-81">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-81">
                                    Lecture 81
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-81">
                                          Exercise 1
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    04:18
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-82">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-82">
                                    Lecture 82
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-82">
                                          Exercise 2
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    04:34
                                 </td>
                              </tr>
                              <tr class="cur-list-title">
                                 <th colspan="4" class="w30 tal hm">
                                    Section 16: Object-Oriented Programming - Part 2
                                 </th>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-83">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-83">
                                    Lecture 83
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-83">
                                          Creating A Derived Class - Part 1
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    06:59
                                 </td>
                              </tr>
                              <tr class="cur-list-row cur-list-row-wo-desc " data-purpose="lecture-row-84">
                                 <td class="lec-icon tac hm cur-icon wa-force-xs">
                                    <i class="udi udi-play-circle"></i>
                                 </td>
                                 <td class="count wa-force-xs" data-purpose="lecture-name-84">
                                    Lecture 84
                                 </td>
                                 <td class="lec-title-and-preview">
                                    <div class="lec-title-and-preview-inner dif aic fxjsa-xs pr10-xs fxac-ie">
                                       <div class="lec-title fx" data-purpose="lecture-title-84">
                                          Creating A Derived Class - Part 2
                                       </div>
                                    </div>
                                 </td>
                                 <td class="tar lec-det">
                                    07:05
                                 </td>
                              </tr>
                              <tr class="cur-list-row js-load-more load-more ud-discover-tracker" data-action="full-curriculum-read" data-course-id="A0IYc10=" data-user-id="" data-target-selector-class="load-full-curriculum" style="padding: 10px;">
                                 <td colspan="4" class="border-bottom-none">
                                    <a href="javascript:void(0)" class="load-full-curriculum" data-purpose="full-curriculum-link">
                                    Full Curriculum
                                    </a>
                                    <div class="ajax-loader-stick" style="display:none; position: relative; margin-top: 10px; margin-bottom: 10px;">
                                    </div>
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
               <span>Show More <i class="e-icon -icon-chevron-down"></i></span>
               <span class="item-description-toggle__less">Show Less <i class="e-icon -icon-chevron-down -rotate-180"></i></span>
               </a>        
            </div>
         </div>
         <section data-view="recommendedItems" data-url="/item/edulearn-education-school-courses-html-template/17695406/recommended_items" id="recommended_items"></section>
         <section class="related-by-author h-my2 h-pb1">
            <h1 class="t-heading -size-xs -weight-normal">Các khóa học khác từ giảng viên Đỗ Trường Quân</h1>
            <div class="related-by-author__list h-py1" data-view="productList">
               <ul class="item-thumbnail-carousel--item-page overthrow">
                  <li class="item-thumbnail-container">
                     <div class="item-thumbnail__image">
                        <a class="js-google-analytics__list-event-trigger" href="https://themeforest.net/item/architecture-interior-design-decor-architecture-template/19321225"><img border="0" alt="Architecture - Interior Design, Decor &amp; Architecture Template - ThemeForest Item for Sale" title="Architecture - Interior Design, Decor &amp; Architecture Template" height="80" width="80" class="landscape-image-magnifier preload no_preview" data-preview-width="" data-preview-height="" data-item-name="Architecture - Interior Design, Decor &amp; Architecture Template" data-item-author="cowthemes" data-item-id="19321225" data-item-category="Site Templates / Corporate / Business" data-item-cost="20" data-google-analytics-payload="{&quot;actionData&quot;:null,&quot;productsArray&quot;:[{&quot;id&quot;:19321225,&quot;name&quot;:&quot;Architecture - Interior Design, Decor \u0026 Architecture Template&quot;,&quot;brand&quot;:&quot;cowthemes&quot;,&quot;category&quot;:&quot;themeforest.net/category/site-templates/corporate/business&quot;,&quot;position&quot;:1,&quot;list&quot;:&quot;Item page: More items by this author&quot;}],&quot;timestamp&quot;:1486520806}" data-preview-url="https://preview-tf.s3.envato.com/files/219966830/Theme%20Preview/01_Theme_Preview.__large_preview.jpg" src="https://thumb-tf.s3.envato.com/files/220489054/Thumbnail.jpg"></a>
                     </div>
                  </li>
                  <li class="item-thumbnail-container">
                     <div class="item-thumbnail__image">
                        <a class="js-google-analytics__list-event-trigger" href="https://themeforest.net/item/digital-industry-industrial-business-joomla-template/19268979"><img border="0" alt="Digital Industry - Industrial Business Joomla Template - ThemeForest Item for Sale" title="Digital Industry - Industrial Business Joomla Template" height="80" width="80" class="landscape-image-magnifier preload no_preview" data-preview-width="" data-preview-height="" data-item-name="Digital Industry - Industrial Business Joomla Template" data-item-author="cowthemes" data-item-id="19268979" data-item-category="CMS Themes / Joomla / Corporate / Business" data-item-cost="49" data-google-analytics-payload="{&quot;actionData&quot;:null,&quot;productsArray&quot;:[{&quot;id&quot;:19268979,&quot;name&quot;:&quot;Digital Industry - Industrial Business Joomla Template&quot;,&quot;brand&quot;:&quot;cowthemes&quot;,&quot;category&quot;:&quot;themeforest.net/category/cms-themes/joomla/corporate/business&quot;,&quot;position&quot;:2,&quot;list&quot;:&quot;Item page: More items by this author&quot;}],&quot;timestamp&quot;:1486520806}" data-preview-url="https://preview-tf.s3.envato.com/files/219461945/preview.__large_preview.jpg" src="https://thumb-tf.s3.envato.com/files/219461937/Thumbnail.jpg"></a>
                     </div>
                  </li>
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
                     <input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" value="">
                     <div itemprop="offers" itemscope="" itemtype="">
                        <meta itemprop="price" content="20.00">
                        <meta itemprop="priceCurrency" content="USD">
                        <meta itemprop="availability" content="instock">
                        <div data-view="itemVariantSelector">
                           <div class="purchase-form__selection">
                              <span class="purchase-form__license-type">
                              <span data-view="flyout" class="flyout">
                              <span class="js-license-selector__chosen-license">Bạn sẽ học gì?</span>
                              </span>
                              </span>
                              <div class="js-purchase-heading purchase-form__price t-heading -size-xxl">
                                 <b class="t-currency"><span class="js-purchase-price">k699</span></b>
                              </div>
                           </div>
                           <div class="purchase-form__license js-purchase-license is-active" data-license="regular">
                              <input type="hidden" name="size_regular" id="size_regular" value="source" class="js-purchase-hidden-license is-active" data-size="source" data-price-prepaid="$20" data-license="regular" data-price-prepaid-upgrade="$26" data-support-upgrade-price="$6" data-support-upgrade-saving="$8" data-support-extension-price="$10" data-support-extension-saving="$4">
                           </div>
                           <div class="purchase-form__license js-purchase-license" data-license="extended">
                              <input type="hidden" name="size_extended" id="size_extended" value="source" class="js-purchase-hidden-license" data-size="source" data-price-prepaid="$800" data-license="extended" data-price-prepaid-upgrade="$1025" data-support-upgrade-price="$225" data-support-upgrade-saving="$300" data-support-extension-price="$375" data-support-extension-saving="$150">
                           </div>
                           <div class="purchase-form__support">
                              <ul class="t-icon-list -font-size-s -icon-size-s -offset-flush">
                                 <li class="t-icon-list__item -icon-ok">
                                    <span class="is-visually-hidden">Included:</span>
                                    Lập trình với AutoCAD thành thạo
                                 </li>
                                 <li class="t-icon-list__item -icon-ok">
                                    <span class="is-visually-hidden">Included:</span>
                                    Tự viết các ứng dụng cơ bản
                                 </li>
                                 <li class="t-icon-list__item -icon-ok">
                                    <span class="is-visually-hidden">Included:</span>
                                    Hỗ trợ ....
                                 </li>
                                 <li class="t-icon-list__item -icon-ok">
                                    <span class="is-visually-hidden">Included:</span>
                                    Hỗ trợ ....
                                 </li>
                                 <li class="t-icon-list__item -icon-ok">
                                    <span class="is-visually-hidden">Included:</span>
                                    Hỗ trợ ....
                                 </li>
                                 <li class="t-icon-list__item -icon-ok">
                                    <span class="is-visually-hidden">Included:</span>
                                    Hỗ trợ ....
                                 </li>
                                 <li class="t-icon-list__item -icon-ok">
                                    <span class="is-visually-hidden">Included:</span>
                                    Hỗ trợ ....
                                 </li>
                                 <li class="t-icon-list__item -icon-ok">
                                    <span class="is-visually-hidden">Included:</span>
                                    Hỗ trợ ....
                                 </li>
                                 <li class="t-icon-list__item -icon-ok">
                                    <span class="is-visually-hidden">Included:</span>
                                    Hỗ trợ ....
                                 </li>
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
         <div class="box -radius-all">
            <div class="media">
               <div class="media__item">
                  <div class="avatar-wrapper tooltip-advanced">
                     <a class="avatar" title="cowthemes" href="">
                     <img width="80" height="80" alt="cowthemes" src="{{url('templates/default/assets/images/authors/default-user-thumb.png')}}">
                     </a>
                  </div>
               </div>
               <div class="media__body">
                  <h2 class="t-heading -size-s">
                     <a rel="author" class="t-link -color-dark -decoration-none" href="">Đỗ Trường Quân</a>
                  </h2>
                  <div class="author-desc">
                     Kỹ sư cầu đường với 05 năm kinh nghiệm thiết kế các dự án lớn như: Hầm đường bộ qua Đèo Cả, mở rộng hầm hải Vân. Chuyên gia lập trình AutoCAD .NET với hơn 8 năm làm việc với các ngôn ngữ lập trình AutoCAD như: AutoLISP, VBA, C#, C++
                  </div>
               </div>
            </div>
            <div class="h-mt1">
               <a class="e-btn--3d -color-light -width-full" href="">Xem hồ sơ giảng viên</a>
            </div>
         </div>
         <div class="t-body -size-s h-text-align-center h-mt2">
            © Đỗ Trường Quân và Enesy giữ bản quyền khóa học này
            <br>
            <a href="#">Liên hệ bản quyền tại đây</a>
         </div>
      </div>
   </div>
</div>
@stop