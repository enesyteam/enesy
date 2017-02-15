@extends('frontend.layouts.dashboard')
@section('section')
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
   <!--Course-->
   <li class="js-google-analytics__list-event-container">
      <div class="course-list__columns-container">
         <div class="course-list__column-detail">
            <div class="course-list__item-thumbnail">
               <div class="item-thumbnail">
                  <div class="item-thumbnail__image">
                     <a class="js-google-analytics__list-event-trigger" href="{{route('course.detail')}}">
                     <img src="{{'frontend/images/courses/cad/csharp-thumb.jpg'}}" border="0" height="80" width="150" alt="Moti App PSD Landing Page PSD Template - ThemeForest Item for Sale" title="" class="preload no_preview landscape-image-magnifier" data-tooltip="Moti App PSD Landing Page PSD Template">
                     </a>
                     <div class="item-thumbnail__preview">
                        <a target="_blank" href="{{route('course.preview')}}" rel="modal:open">
                        <div class="" ng-show="showPlaceholderPlayButton" style="">
                           <div class="play-button play-button--initially-visible" data-purpose="video-play-button-initial"></div>
                        </div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="course-list__adjacent-thumbnail">
               <h3 class="course-list__heading">
                  <a class="js-google-analytics__list-event-trigger t-link -color-inherit -decoration-reversed" href="{{route('course.detail')}}">Khóa học lập trình AutoCAD với C# - trình độ cơ bản</a>
               </h3>
               <div class="course-list__price">
                  <p class="t-body -size-m -color-inherit -weight-bold h-m0">$10</p>
               </div>
               <div class="course-list__info">
                  <div class="course__info-author">Giảng viên:
                     <a class="t-link -color-default -decoration-reversed" href="{{route('course.detail')}}">Đỗ Trường Quân</a>
                  </div>
                  <div class="course__info-author">Thời lượng: 100 giờ 30 phút
                  </div>
               </div>
            </div>
            @include ('frontend.course.partials.course-list-actions-bar')
         </div>
         <div class="course-list__column-category">
            <p class="t-body -size-s h-m0">
               <span class="meta-categories -no-slash">
               lĩnh vực 
               <b itemprop="genre"><a href="#">CNTT &amp; Phần mềm</a></b>
               <b itemprop="genre">AutoCAD</b>
               </span>
               <br>
               Lập trình AutoCAD là một trong những kỹ năng nâng cao nhất của người sử dụng AutoCAD. Lập trình AutoCAD là một trong những kỹ năng nâng cao nhất của người sử dụng AutoCAD. Lập trình AutoCAD là một trong những kỹ năng nâng cao nhất của người sử dụng AutoCAD. Lập trình AutoCAD là một trong những kỹ năng nâng cao nhất của người sử dụng AutoCAD. 
            </p>
         </div>
         <div class="course-list__column-price">
            <p class="course-list__price-desktop">699<sup>k</sup></p>
            <div class="course-list__info-desktop">
               <div class="course-list__sales-desktop">
               </div>
            </div>
         </div>
      </div>
   </li>
   <!--#Course-->
   <!--Course-->
   <li class="js-google-analytics__list-event-container">
      <div class="course-list__columns-container">
         <div class="course-list__column-detail">
            <div class="course-list__item-thumbnail">
               <div class="item-thumbnail">
                  <div class="item-thumbnail__image">
                     <a class="js-google-analytics__list-event-trigger" href="{{route('course.detail')}}">
                     <img src="{{'frontend/images/courses/cad/csharp2-thumb.jpg'}}" border="0" height="80" width="150" alt="Moti App PSD Landing Page PSD Template - ThemeForest Item for Sale" title="" class="preload no_preview landscape-image-magnifier" data-tooltip="Moti App PSD Landing Page PSD Template">
                     </a>
                     <div class="item-thumbnail__preview">
                        <a target="_blank" href="{{route('course.preview')}}" rel="modal:open">
                        <div class="" ng-show="showPlaceholderPlayButton" style="">
                           <div class="play-button play-button--initially-visible" data-purpose="video-play-button-initial"></div>
                        </div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="course-list__adjacent-thumbnail">
               <h3 class="course-list__heading">
                  <a class="js-google-analytics__list-event-trigger t-link -color-inherit -decoration-reversed" href="{{route('course.detail')}}">Khóa học lập trình AutoCAD với C# - trình độ nâng cao</a>
               </h3>
               <div class="course-list__price">
                  <p class="t-body -size-m -color-inherit -weight-bold h-m0">$10</p>
               </div>
               <div class="course-list__info">
                  <div class="course__info-author">Giảng viên:
                     <a class="t-link -color-default -decoration-reversed" href="{{route('course.detail')}}">Đỗ Trường Quân</a>
                  </div>
                  <div class="course__info-author">Thời lượng: 100 giờ 30 phút
                  </div>
               </div>
            </div>
            @include ('frontend.course.partials.course-list-actions-bar')
         </div>
         <div class="course-list__column-category">
            <p class="t-body -size-s h-m0">
               <span class="meta-categories -no-slash">
               lĩnh vực 
               <b itemprop="genre"><a href="#">CNTT &amp; Phần mềm</a></b>
               <b itemprop="genre">AutoCAD</b>
               </span>
               <br>
               Lập trình AutoCAD là một trong những kỹ năng nâng cao nhất của người sử dụng AutoCAD. Lập trình AutoCAD là một trong những kỹ năng nâng cao nhất của người sử dụng AutoCAD. Lập trình AutoCAD là một trong những kỹ năng nâng cao nhất của người sử dụng AutoCAD. Lập trình AutoCAD là một trong những kỹ năng nâng cao nhất của người sử dụng AutoCAD. 
            </p>
         </div>
         <div class="course-list__column-price">
            <p class="course-list__price-desktop">750<sup>k</sup></p>
            <div class="course-list__info-desktop">
               <div class="course-list__sales-desktop">
               </div>
            </div>
         </div>
      </div>
   </li>
   <!--#Course--><!--Course-->
   <li class="js-google-analytics__list-event-container">
      <div class="course-list__columns-container">
         <div class="course-list__column-detail">
            <div class="course-list__item-thumbnail">
               <div class="item-thumbnail">
                  <div class="item-thumbnail__image">
                     <a class="js-google-analytics__list-event-trigger" href="{{route('course.detail')}}">
                     <img src="{{'frontend/images/thumb.jpg'}}" border="0" height="80" width="150" alt="Moti App PSD Landing Page PSD Template - ThemeForest Item for Sale" title="" class="preload no_preview landscape-image-magnifier" data-tooltip="Moti App PSD Landing Page PSD Template">
                     </a>
                     <div class="item-thumbnail__preview">
                        <a target="_blank" href="{{route('course.preview')}}" rel="modal:open">
                        <div class="" ng-show="showPlaceholderPlayButton" style="">
                           <div class="play-button play-button--initially-visible" data-purpose="video-play-button-initial"></div>
                        </div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="course-list__adjacent-thumbnail">
               <h3 class="course-list__heading">
                  <a class="js-google-analytics__list-event-trigger t-link -color-inherit -decoration-reversed" href="{{route('course.detail')}}">Tính toán và thiết kế mố trụ cầu</a>
               </h3>
               <div class="course-list__price">
                  <p class="t-body -size-m -color-inherit -weight-bold h-m0">$10</p>
               </div>
               <div class="course-list__info">
                  <div class="course__info-author">Giảng viên:
                     <a class="t-link -color-default -decoration-reversed" href="{{route('course.detail')}}">Trần Anh Tuấn</a>
                  </div>
                  <div class="course__info-author">Thời lượng: 100 giờ 30 phút
                  </div>
               </div>
            </div>
            @include ('frontend.course.partials.course-list-actions-bar')
         </div>
         <div class="course-list__column-category">
            <p class="t-body -size-s h-m0">
               <span class="meta-categories -no-slash">
               lĩnh vực 
               <b itemprop="genre"><a href="#">Cầu đường</a></b>
               <b itemprop="genre">Thiết kế cầu</b>
               </span>
               <br>
               Lập trình AutoCAD là một trong những kỹ năng nâng cao nhất của người sử dụng AutoCAD. Lập trình AutoCAD là một trong những kỹ năng nâng cao nhất của người sử dụng AutoCAD. Lập trình AutoCAD là một trong những kỹ năng nâng cao nhất của người sử dụng AutoCAD. Lập trình AutoCAD là một trong những kỹ năng nâng cao nhất của người sử dụng AutoCAD. 
            </p>
         </div>
         <div class="course-list__column-price">
            <p class="course-list__price-desktop">850<sup>k</sup></p>
            <div class="course-list__info-desktop">
               <div class="course-list__sales-desktop">
               </div>
            </div>
         </div>
      </div>
   </li>
   <!--#Course--><!--Course-->
   <li class="js-google-analytics__list-event-container">
      <div class="course-list__columns-container">
         <div class="course-list__column-detail">
            <div class="course-list__item-thumbnail">
               <div class="item-thumbnail">
                  <div class="item-thumbnail__image">
                     <a class="js-google-analytics__list-event-trigger" href="{{route('course.detail')}}">
                     <img src="{{'frontend/images/thumb.jpg'}}" border="0" height="80" width="150" alt="Moti App PSD Landing Page PSD Template - ThemeForest Item for Sale" title="" class="preload no_preview landscape-image-magnifier" data-tooltip="Moti App PSD Landing Page PSD Template">
                     </a>
                     <div class="item-thumbnail__preview">
                        <a target="_blank" href="{{route('course.preview')}}" rel="modal:open">
                        <div class="" ng-show="showPlaceholderPlayButton" style="">
                           <div class="play-button play-button--initially-visible" data-purpose="video-play-button-initial"></div>
                        </div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="course-list__adjacent-thumbnail">
               <h3 class="course-list__heading">
                  <a class="js-google-analytics__list-event-trigger t-link -color-inherit -decoration-reversed" href="{{route('course.detail')}}">Tính toán và thiết kế cầu BTCT DƯL - Dầm giản đơn</a>
               </h3>
               <div class="course-list__price">
                  <p class="t-body -size-m -color-inherit -weight-bold h-m0">$10</p>
               </div>
               <div class="course-list__info">
                  <div class="course__info-author">Giảng viên:
                     <a class="t-link -color-default -decoration-reversed" href="{{route('course.detail')}}">Nguyễn Xuân Lam</a>
                  </div>
                  <div class="course__info-author">Thời lượng: 100 giờ 30 phút
                  </div>
               </div>
            </div>
            @include ('frontend.course.partials.course-list-actions-bar')
         </div>
         <div class="course-list__column-category">
            <p class="t-body -size-s h-m0">
               <span class="meta-categories -no-slash">
               lĩnh vực 
               <b itemprop="genre"><a href="#">Cầu đường</a></b>
               <b itemprop="genre">Thiết kế cầu</b>
               </span>
               <br>
               Lập trình AutoCAD là một trong những kỹ năng nâng cao nhất của người sử dụng AutoCAD. Lập trình AutoCAD là một trong những kỹ năng nâng cao nhất của người sử dụng AutoCAD. Lập trình AutoCAD là một trong những kỹ năng nâng cao nhất của người sử dụng AutoCAD. Lập trình AutoCAD là một trong những kỹ năng nâng cao nhất của người sử dụng AutoCAD. 
            </p>
         </div>
         <div class="course-list__column-price">
            <p class="course-list__price-desktop">699<sup>k</sup></p>
            <div class="course-list__info-desktop">
               <div class="course-list__sales-desktop">
               </div>
            </div>
         </div>
      </div>
   </li>
   <!--#Course--><!--Course-->
   <li class="js-google-analytics__list-event-container">
      <div class="course-list__columns-container">
         <div class="course-list__column-detail">
            <div class="course-list__item-thumbnail">
               <div class="item-thumbnail">
                  <div class="item-thumbnail__image">
                     <a class="js-google-analytics__list-event-trigger" href="{{route('course.detail')}}">
                     <img src="{{'frontend/images/thumb.jpg'}}" border="0" height="80" width="150" alt="Moti App PSD Landing Page PSD Template - ThemeForest Item for Sale" title="" class="preload no_preview landscape-image-magnifier" data-tooltip="Moti App PSD Landing Page PSD Template">
                     </a>
                     <div class="item-thumbnail__preview">
                        <a target="_blank" href="{{route('course.preview')}}" rel="modal:open">
                        <div class="" ng-show="showPlaceholderPlayButton" style="">
                           <div class="play-button play-button--initially-visible" data-purpose="video-play-button-initial"></div>
                        </div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="course-list__adjacent-thumbnail">
               <h3 class="course-list__heading">
                  <a class="js-google-analytics__list-event-trigger t-link -color-inherit -decoration-reversed" href="{{route('course.detail')}}">Sử dụng VnRoad trong thiết kế đường</a>
               </h3>
               <div class="course-list__price">
                  <p class="t-body -size-m -color-inherit -weight-bold h-m0">$10</p>
               </div>
               <div class="course-list__info">
                  <div class="course__info-author">Giảng viên:
                     <a class="t-link -color-default -decoration-reversed" href="{{route('course.detail')}}">Bùi Minh Hoàng</a>
                  </div>
                  <div class="course__info-author">Thời lượng: 100 giờ 30 phút
                  </div>
               </div>
            </div>
            @include ('frontend.course.partials.course-list-actions-bar')
         </div>
         <div class="course-list__column-category">
            <p class="t-body -size-s h-m0">
               <span class="meta-categories -no-slash">
               lĩnh vực 
               <b itemprop="genre"><a href="#">CNTT &amp; Phần mềm</a></b>
               <b itemprop="genre">VnRoad</b>
               </span>
               <br>
               Lập trình AutoCAD là một trong những kỹ năng nâng cao nhất của người sử dụng AutoCAD. Lập trình AutoCAD là một trong những kỹ năng nâng cao nhất của người sử dụng AutoCAD. Lập trình AutoCAD là một trong những kỹ năng nâng cao nhất của người sử dụng AutoCAD. Lập trình AutoCAD là một trong những kỹ năng nâng cao nhất của người sử dụng AutoCAD. 
            </p>
         </div>
         <div class="course-list__column-price">
            <p class="course-list__price-desktop">699<sup>k</sup></p>
            <div class="course-list__info-desktop">
               <div class="course-list__sales-desktop">
               </div>
            </div>
         </div>
      </div>
   </li>
   <!--#Course--><!--Course-->
   <li class="js-google-analytics__list-event-container">
      <div class="course-list__columns-container">
         <div class="course-list__column-detail">
            <div class="course-list__item-thumbnail">
               <div class="item-thumbnail">
                  <div class="item-thumbnail__image">
                     <a class="js-google-analytics__list-event-trigger" href="{{route('course.detail')}}">
                     <img src="{{'frontend/images/thumb.jpg'}}" border="0" height="80" width="150" alt="Moti App PSD Landing Page PSD Template - ThemeForest Item for Sale" title="" class="preload no_preview landscape-image-magnifier" data-tooltip="Moti App PSD Landing Page PSD Template">
                     </a>
                     <div class="item-thumbnail__preview">
                        <a target="_blank" href="{{route('course.preview')}}" rel="modal:open">
                        <div class="" ng-show="showPlaceholderPlayButton" style="">
                           <div class="play-button play-button--initially-visible" data-purpose="video-play-button-initial"></div>
                        </div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="course-list__adjacent-thumbnail">
               <h3 class="course-list__heading">
                  <a class="js-google-analytics__list-event-trigger t-link -color-inherit -decoration-reversed" href="{{route('course.detail')}}">Kiểm toán đất yếu bằng GEO Slope</a>
               </h3>
               <div class="course-list__price">
                  <p class="t-body -size-m -color-inherit -weight-bold h-m0">$10</p>
               </div>
               <div class="course-list__info">
                  <div class="course__info-author">Giảng viên:
                     <a class="t-link -color-default -decoration-reversed" href="{{route('course.detail')}}">Nguyễn Văn Linh</a>
                  </div>
                  <div class="course__info-author">Thời lượng: 100 giờ 30 phút
                  </div>
               </div>
            </div>
            @include ('frontend.course.partials.course-list-actions-bar')
         </div>
         <div class="course-list__column-category">
            <p class="t-body -size-s h-m0">
               <span class="meta-categories -no-slash">
               lĩnh vực 
               <b itemprop="genre"><a href="#">CNTT &amp; Phần mềm</a></b>
               <b itemprop="genre">Geo Slope</b>
               </span>
               <br>
               Lập trình AutoCAD là một trong những kỹ năng nâng cao nhất của người sử dụng AutoCAD. Lập trình AutoCAD là một trong những kỹ năng nâng cao nhất của người sử dụng AutoCAD. Lập trình AutoCAD là một trong những kỹ năng nâng cao nhất của người sử dụng AutoCAD. Lập trình AutoCAD là một trong những kỹ năng nâng cao nhất của người sử dụng AutoCAD. 
            </p>
         </div>
         <div class="course-list__column-price">
            <p class="course-list__price-desktop">699<sup>k</sup></p>
            <div class="course-list__info-desktop">
               <div class="course-list__sales-desktop">
               </div>
            </div>
         </div>
      </div>
   </li>
   <!--#Course--><!--Course-->
   <li class="js-google-analytics__list-event-container">
      <div class="course-list__columns-container">
         <div class="course-list__column-detail">
            <div class="course-list__item-thumbnail">
               <div class="item-thumbnail">
                  <div class="item-thumbnail__image">
                     <a class="js-google-analytics__list-event-trigger" href="{{route('course.detail')}}">
                     <img src="{{'frontend/images/thumb.jpg'}}" border="0" height="80" width="150" alt="Moti App PSD Landing Page PSD Template - ThemeForest Item for Sale" title="" class="preload no_preview landscape-image-magnifier" data-tooltip="Moti App PSD Landing Page PSD Template">
                     </a>
                     <div class="item-thumbnail__preview">
                        <a target="_blank" href="{{route('course.preview')}}" rel="modal:open">
                        <div class="" ng-show="showPlaceholderPlayButton" style="">
                           <div class="play-button play-button--initially-visible" data-purpose="video-play-button-initial"></div>
                        </div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="course-list__adjacent-thumbnail">
               <h3 class="course-list__heading">
                  <a class="js-google-analytics__list-event-trigger t-link -color-inherit -decoration-reversed" href="{{route('course.detail')}}">Khóa học lập trình AutoCAD với C# - trình độ cơ bản</a>
               </h3>
               <div class="course-list__price">
                  <p class="t-body -size-m -color-inherit -weight-bold h-m0">$10</p>
               </div>
               <div class="course-list__info">
                  <div class="course__info-author">Giảng viên:
                     <a class="t-link -color-default -decoration-reversed" href="{{route('course.detail')}}">Đỗ Trường Quân</a>
                  </div>
                  <div class="course__info-author">Thời lượng: 100 giờ 30 phút
                  </div>
               </div>
            </div>
            @include ('frontend.course.partials.course-list-actions-bar')
         </div>
         <div class="course-list__column-category">
            <p class="t-body -size-s h-m0">
               <span class="meta-categories -no-slash">
               lĩnh vực 
               <b itemprop="genre"><a href="#">CNTT &amp; Phần mềm</a></b>
               <b itemprop="genre">AutoCAD</b>
               </span>
               <br>
               Lập trình AutoCAD là một trong những kỹ năng nâng cao nhất của người sử dụng AutoCAD. Lập trình AutoCAD là một trong những kỹ năng nâng cao nhất của người sử dụng AutoCAD. Lập trình AutoCAD là một trong những kỹ năng nâng cao nhất của người sử dụng AutoCAD. Lập trình AutoCAD là một trong những kỹ năng nâng cao nhất của người sử dụng AutoCAD. 
            </p>
         </div>
         <div class="course-list__column-price">
            <p class="course-list__price-desktop">699<sup>k</sup></p>
            <div class="course-list__info-desktop">
               <div class="course-list__sales-desktop">
               </div>
            </div>
         </div>
      </div>
   </li>
   <!--#Course--><!--Course-->
   <li class="js-google-analytics__list-event-container">
      <div class="course-list__columns-container">
         <div class="course-list__column-detail">
            <div class="course-list__item-thumbnail">
               <div class="item-thumbnail">
                  <div class="item-thumbnail__image">
                     <a class="js-google-analytics__list-event-trigger" href="{{route('course.detail')}}">
                     <img src="{{'frontend/images/thumb.jpg'}}" border="0" height="80" width="150" alt="Moti App PSD Landing Page PSD Template - ThemeForest Item for Sale" title="" class="preload no_preview landscape-image-magnifier" data-tooltip="Moti App PSD Landing Page PSD Template">
                     </a>
                     <div class="item-thumbnail__preview">
                        <a target="_blank" href="{{route('course.preview')}}" rel="modal:open">
                        <div class="" ng-show="showPlaceholderPlayButton" style="">
                           <div class="play-button play-button--initially-visible" data-purpose="video-play-button-initial"></div>
                        </div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="course-list__adjacent-thumbnail">
               <h3 class="course-list__heading">
                  <a class="js-google-analytics__list-event-trigger t-link -color-inherit -decoration-reversed" href="{{route('course.detail')}}">Khóa học lập trình AutoCAD với C# - trình độ cơ bản</a>
               </h3>
               <div class="course-list__price">
                  <p class="t-body -size-m -color-inherit -weight-bold h-m0">$10</p>
               </div>
               <div class="course-list__info">
                  <div class="course__info-author">Giảng viên:
                     <a class="t-link -color-default -decoration-reversed" href="{{route('course.detail')}}">Đỗ Trường Quân</a>
                  </div>
                  <div class="course__info-author">Thời lượng: 100 giờ 30 phút
                  </div>
               </div>
            </div>
            @include ('frontend.course.partials.course-list-actions-bar')
         </div>
         <div class="course-list__column-category">
            <p class="t-body -size-s h-m0">
               <span class="meta-categories -no-slash">
               lĩnh vực 
               <b itemprop="genre"><a href="#">CNTT &amp; Phần mềm</a></b>
               <b itemprop="genre">AutoCAD</b>
               </span>
               <br>
               Lập trình AutoCAD là một trong những kỹ năng nâng cao nhất của người sử dụng AutoCAD. Lập trình AutoCAD là một trong những kỹ năng nâng cao nhất của người sử dụng AutoCAD. Lập trình AutoCAD là một trong những kỹ năng nâng cao nhất của người sử dụng AutoCAD. Lập trình AutoCAD là một trong những kỹ năng nâng cao nhất của người sử dụng AutoCAD. 
            </p>
         </div>
         <div class="course-list__column-price">
            <p class="course-list__price-desktop">699<sup>k</sup></p>
            <div class="course-list__info-desktop">
               <div class="course-list__sales-desktop">
               </div>
            </div>
         </div>
      </div>
   </li>
   <!--#Course--><!--Course-->
   <li class="js-google-analytics__list-event-container">
      <div class="course-list__columns-container">
         <div class="course-list__column-detail">
            <div class="course-list__item-thumbnail">
               <div class="item-thumbnail">
                  <div class="item-thumbnail__image">
                     <a class="js-google-analytics__list-event-trigger" href="{{route('course.detail')}}">
                     <img src="{{'frontend/images/thumb.jpg'}}" border="0" height="80" width="150" alt="Moti App PSD Landing Page PSD Template - ThemeForest Item for Sale" title="" class="preload no_preview landscape-image-magnifier" data-tooltip="Moti App PSD Landing Page PSD Template">
                     </a>
                     <div class="item-thumbnail__preview">
                        <a target="_blank" href="{{route('course.preview')}}" rel="modal:open">
                        <div class="" ng-show="showPlaceholderPlayButton" style="">
                           <div class="play-button play-button--initially-visible" data-purpose="video-play-button-initial"></div>
                        </div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="course-list__adjacent-thumbnail">
               <h3 class="course-list__heading">
                  <a class="js-google-analytics__list-event-trigger t-link -color-inherit -decoration-reversed" href="{{route('course.detail')}}">Khóa học lập trình AutoCAD với C# - trình độ cơ bản</a>
               </h3>
               <div class="course-list__price">
                  <p class="t-body -size-m -color-inherit -weight-bold h-m0">$10</p>
               </div>
               <div class="course-list__info">
                  <div class="course__info-author">Giảng viên:
                     <a class="t-link -color-default -decoration-reversed" href="{{route('course.detail')}}">Đỗ Trường Quân</a>
                  </div>
                  <div class="course__info-author">Thời lượng: 100 giờ 30 phút
                  </div>
               </div>
            </div>
            @include ('frontend.course.partials.course-list-actions-bar')
         </div>
         <div class="course-list__column-category">
            <p class="t-body -size-s h-m0">
               <span class="meta-categories -no-slash">
               lĩnh vực 
               <b itemprop="genre"><a href="#">CNTT &amp; Phần mềm</a></b>
               <b itemprop="genre">AutoCAD</b>
               </span>
               <br>
               Lập trình AutoCAD là một trong những kỹ năng nâng cao nhất của người sử dụng AutoCAD. Lập trình AutoCAD là một trong những kỹ năng nâng cao nhất của người sử dụng AutoCAD. Lập trình AutoCAD là một trong những kỹ năng nâng cao nhất của người sử dụng AutoCAD. Lập trình AutoCAD là một trong những kỹ năng nâng cao nhất của người sử dụng AutoCAD. 
            </p>
         </div>
         <div class="course-list__column-price">
            <p class="course-list__price-desktop">699<sup>k</sup></p>
            <div class="course-list__info-desktop">
               <div class="course-list__sales-desktop">
               </div>
            </div>
         </div>
      </div>
   </li>
   <!--#Course--><!--Course-->
   <li class="js-google-analytics__list-event-container">
      <div class="course-list__columns-container">
         <div class="course-list__column-detail">
            <div class="course-list__item-thumbnail">
               <div class="item-thumbnail">
                  <div class="item-thumbnail__image">
                     <a class="js-google-analytics__list-event-trigger" href="{{route('course.detail')}}">
                     <img src="{{'frontend/images/thumb.jpg'}}" border="0" height="80" width="150" alt="Moti App PSD Landing Page PSD Template - ThemeForest Item for Sale" title="" class="preload no_preview landscape-image-magnifier" data-tooltip="Moti App PSD Landing Page PSD Template">
                     </a>
                     <div class="item-thumbnail__preview">
                        <a target="_blank" href="{{route('course.preview')}}" rel="modal:open">
                        <div class="" ng-show="showPlaceholderPlayButton" style="">
                           <div class="play-button play-button--initially-visible" data-purpose="video-play-button-initial"></div>
                        </div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="course-list__adjacent-thumbnail">
               <h3 class="course-list__heading">
                  <a class="js-google-analytics__list-event-trigger t-link -color-inherit -decoration-reversed" href="{{route('course.detail')}}">Khóa học lập trình AutoCAD với C# - trình độ cơ bản</a>
               </h3>
               <div class="course-list__price">
                  <p class="t-body -size-m -color-inherit -weight-bold h-m0">$10</p>
               </div>
               <div class="course-list__info">
                  <div class="course__info-author">Giảng viên:
                     <a class="t-link -color-default -decoration-reversed" href="{{route('course.detail')}}">Đỗ Trường Quân</a>
                  </div>
                  <div class="course__info-author">Thời lượng: 100 giờ 30 phút
                  </div>
               </div>
            </div>
            @include ('frontend.course.partials.course-list-actions-bar')
         </div>
         <div class="course-list__column-category">
            <p class="t-body -size-s h-m0">
               <span class="meta-categories -no-slash">
               lĩnh vực 
               <b itemprop="genre"><a href="#">CNTT &amp; Phần mềm</a></b>
               <b itemprop="genre">AutoCAD</b>
               </span>
               <br>
               Lập trình AutoCAD là một trong những kỹ năng nâng cao nhất của người sử dụng AutoCAD. Lập trình AutoCAD là một trong những kỹ năng nâng cao nhất của người sử dụng AutoCAD. Lập trình AutoCAD là một trong những kỹ năng nâng cao nhất của người sử dụng AutoCAD. Lập trình AutoCAD là một trong những kỹ năng nâng cao nhất của người sử dụng AutoCAD. 
            </p>
         </div>
         <div class="course-list__column-price">
            <p class="course-list__price-desktop">699<sup>k</sup></p>
            <div class="course-list__info-desktop">
               <div class="course-list__sales-desktop">
               </div>
            </div>
         </div>
      </div>
   </li>
   <!--#Course--><!--Course-->
   <li class="js-google-analytics__list-event-container">
      <div class="course-list__columns-container">
         <div class="course-list__column-detail">
            <div class="course-list__item-thumbnail">
               <div class="item-thumbnail">
                  <div class="item-thumbnail__image">
                     <a class="js-google-analytics__list-event-trigger" href="{{route('course.detail')}}">
                     <img src="{{'frontend/images/thumb.jpg'}}" border="0" height="80" width="150" alt="Moti App PSD Landing Page PSD Template - ThemeForest Item for Sale" title="" class="preload no_preview landscape-image-magnifier" data-tooltip="Moti App PSD Landing Page PSD Template">
                     </a>
                     <div class="item-thumbnail__preview">
                        <a target="_blank" href="{{route('course.preview')}}" rel="modal:open">
                        <div class="" ng-show="showPlaceholderPlayButton" style="">
                           <div class="play-button play-button--initially-visible" data-purpose="video-play-button-initial"></div>
                        </div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="course-list__adjacent-thumbnail">
               <h3 class="course-list__heading">
                  <a class="js-google-analytics__list-event-trigger t-link -color-inherit -decoration-reversed" href="{{route('course.detail')}}">Khóa học lập trình AutoCAD với C# - trình độ cơ bản</a>
               </h3>
               <div class="course-list__price">
                  <p class="t-body -size-m -color-inherit -weight-bold h-m0">$10</p>
               </div>
               <div class="course-list__info">
                  <div class="course__info-author">Giảng viên:
                     <a class="t-link -color-default -decoration-reversed" href="{{route('course.detail')}}">Đỗ Trường Quân</a>
                  </div>
                  <div class="course__info-author">Thời lượng: 100 giờ 30 phút
                  </div>
               </div>
            </div>
            @include ('frontend.course.partials.course-list-actions-bar')
         </div>
         <div class="course-list__column-category">
            <p class="t-body -size-s h-m0">
               <span class="meta-categories -no-slash">
               lĩnh vực 
               <b itemprop="genre"><a href="#">CNTT &amp; Phần mềm</a></b>
               <b itemprop="genre">AutoCAD</b>
               </span>
               <br>
               Lập trình AutoCAD là một trong những kỹ năng nâng cao nhất của người sử dụng AutoCAD. Lập trình AutoCAD là một trong những kỹ năng nâng cao nhất của người sử dụng AutoCAD. Lập trình AutoCAD là một trong những kỹ năng nâng cao nhất của người sử dụng AutoCAD. Lập trình AutoCAD là một trong những kỹ năng nâng cao nhất của người sử dụng AutoCAD. 
            </p>
         </div>
         <div class="course-list__column-price">
            <p class="course-list__price-desktop">699<sup>k</sup></p>
            <div class="course-list__info-desktop">
               <div class="course-list__sales-desktop">
               </div>
            </div>
         </div>
      </div>
   </li>
   <!--#Course--><!--Course-->
   <li class="js-google-analytics__list-event-container">
      <div class="course-list__columns-container">
         <div class="course-list__column-detail">
            <div class="course-list__item-thumbnail">
               <div class="item-thumbnail">
                  <div class="item-thumbnail__image">
                     <a class="js-google-analytics__list-event-trigger" href="{{route('course.detail')}}">
                     <img src="{{'frontend/images/thumb.jpg'}}" border="0" height="80" width="150" alt="Moti App PSD Landing Page PSD Template - ThemeForest Item for Sale" title="" class="preload no_preview landscape-image-magnifier" data-tooltip="Moti App PSD Landing Page PSD Template">
                     </a>
                     <div class="item-thumbnail__preview">
                        <a target="_blank" href="{{route('course.preview')}}" rel="modal:open">
                        <div class="" ng-show="showPlaceholderPlayButton" style="">
                           <div class="play-button play-button--initially-visible" data-purpose="video-play-button-initial"></div>
                        </div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="course-list__adjacent-thumbnail">
               <h3 class="course-list__heading">
                  <a class="js-google-analytics__list-event-trigger t-link -color-inherit -decoration-reversed" href="{{route('course.detail')}}">Khóa học lập trình AutoCAD với C# - trình độ cơ bản</a>
               </h3>
               <div class="course-list__price">
                  <p class="t-body -size-m -color-inherit -weight-bold h-m0">$10</p>
               </div>
               <div class="course-list__info">
                  <div class="course__info-author">Giảng viên:
                     <a class="t-link -color-default -decoration-reversed" href="{{route('course.detail')}}">Đỗ Trường Quân</a>
                  </div>
                  <div class="course__info-author">Thời lượng: 100 giờ 30 phút
                  </div>
               </div>
            </div>
            @include ('frontend.course.partials.course-list-actions-bar')
         </div>
         <div class="course-list__column-category">
            <p class="t-body -size-s h-m0">
               <span class="meta-categories -no-slash">
               lĩnh vực 
               <b itemprop="genre"><a href="#">CNTT &amp; Phần mềm</a></b>
               <b itemprop="genre">AutoCAD</b>
               </span>
               <br>
               Lập trình AutoCAD là một trong những kỹ năng nâng cao nhất của người sử dụng AutoCAD. Lập trình AutoCAD là một trong những kỹ năng nâng cao nhất của người sử dụng AutoCAD. Lập trình AutoCAD là một trong những kỹ năng nâng cao nhất của người sử dụng AutoCAD. Lập trình AutoCAD là một trong những kỹ năng nâng cao nhất của người sử dụng AutoCAD. 
            </p>
         </div>
         <div class="course-list__column-price">
            <p class="course-list__price-desktop">699<sup>k</sup></p>
            <div class="course-list__info-desktop">
               <div class="course-list__sales-desktop">
               </div>
            </div>
         </div>
      </div>
   </li>
   <!--#Course--><!--Course-->
   <li class="js-google-analytics__list-event-container">
      <div class="course-list__columns-container">
         <div class="course-list__column-detail">
            <div class="course-list__item-thumbnail">
               <div class="item-thumbnail">
                  <div class="item-thumbnail__image">
                     <a class="js-google-analytics__list-event-trigger" href="{{route('course.detail')}}">
                     <img src="{{'frontend/images/thumb.jpg'}}" border="0" height="80" width="150" alt="Moti App PSD Landing Page PSD Template - ThemeForest Item for Sale" title="" class="preload no_preview landscape-image-magnifier" data-tooltip="Moti App PSD Landing Page PSD Template">
                     </a>
                     <div class="item-thumbnail__preview">
                        <a target="_blank" href="{{route('course.preview')}}" rel="modal:open">
                        <div class="" ng-show="showPlaceholderPlayButton" style="">
                           <div class="play-button play-button--initially-visible" data-purpose="video-play-button-initial"></div>
                        </div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="course-list__adjacent-thumbnail">
               <h3 class="course-list__heading">
                  <a class="js-google-analytics__list-event-trigger t-link -color-inherit -decoration-reversed" href="{{route('course.detail')}}">Khóa học lập trình AutoCAD với C# - trình độ cơ bản</a>
               </h3>
               <div class="course-list__price">
                  <p class="t-body -size-m -color-inherit -weight-bold h-m0">$10</p>
               </div>
               <div class="course-list__info">
                  <div class="course__info-author">Giảng viên:
                     <a class="t-link -color-default -decoration-reversed" href="{{route('course.detail')}}">Đỗ Trường Quân</a>
                  </div>
                  <div class="course__info-author">Thời lượng: 100 giờ 30 phút
                  </div>
               </div>
            </div>
            @include ('frontend.course.partials.course-list-actions-bar')
         </div>
         <div class="course-list__column-category">
            <p class="t-body -size-s h-m0">
               <span class="meta-categories -no-slash">
               lĩnh vực 
               <b itemprop="genre"><a href="#">CNTT &amp; Phần mềm</a></b>
               <b itemprop="genre">AutoCAD</b>
               </span>
               <br>
               Lập trình AutoCAD là một trong những kỹ năng nâng cao nhất của người sử dụng AutoCAD. Lập trình AutoCAD là một trong những kỹ năng nâng cao nhất của người sử dụng AutoCAD. Lập trình AutoCAD là một trong những kỹ năng nâng cao nhất của người sử dụng AutoCAD. Lập trình AutoCAD là một trong những kỹ năng nâng cao nhất của người sử dụng AutoCAD. 
            </p>
         </div>
         <div class="course-list__column-price">
            <p class="course-list__price-desktop">699<sup>k</sup></p>
            <div class="course-list__info-desktop">
               <div class="course-list__sales-desktop">
               </div>
            </div>
         </div>
      </div>
   </li>
   <!--#Course--><!--Course-->
   <li class="js-google-analytics__list-event-container">
      <div class="course-list__columns-container">
         <div class="course-list__column-detail">
            <div class="course-list__item-thumbnail">
               <div class="item-thumbnail">
                  <div class="item-thumbnail__image">
                     <a class="js-google-analytics__list-event-trigger" href="{{route('course.detail')}}">
                     <img src="{{'frontend/images/thumb.jpg'}}" border="0" height="80" width="150" alt="Moti App PSD Landing Page PSD Template - ThemeForest Item for Sale" title="" class="preload no_preview landscape-image-magnifier" data-tooltip="Moti App PSD Landing Page PSD Template">
                     </a>
                     <div class="item-thumbnail__preview">
                        <a target="_blank" href="{{route('course.preview')}}" rel="modal:open">
                        <div class="" ng-show="showPlaceholderPlayButton" style="">
                           <div class="play-button play-button--initially-visible" data-purpose="video-play-button-initial"></div>
                        </div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="course-list__adjacent-thumbnail">
               <h3 class="course-list__heading">
                  <a class="js-google-analytics__list-event-trigger t-link -color-inherit -decoration-reversed" href="{{route('course.detail')}}">Khóa học lập trình AutoCAD với C# - trình độ cơ bản</a>
               </h3>
               <div class="course-list__price">
                  <p class="t-body -size-m -color-inherit -weight-bold h-m0">$10</p>
               </div>
               <div class="course-list__info">
                  <div class="course__info-author">Giảng viên:
                     <a class="t-link -color-default -decoration-reversed" href="{{route('course.detail')}}">Đỗ Trường Quân</a>
                  </div>
                  <div class="course__info-author">Thời lượng: 100 giờ 30 phút
                  </div>
               </div>
            </div>
            @include ('frontend.course.partials.course-list-actions-bar')
         </div>
         <div class="course-list__column-category">
            <p class="t-body -size-s h-m0">
               <span class="meta-categories -no-slash">
               lĩnh vực 
               <b itemprop="genre"><a href="#">CNTT &amp; Phần mềm</a></b>
               <b itemprop="genre">AutoCAD</b>
               </span>
               <br>
               Lập trình AutoCAD là một trong những kỹ năng nâng cao nhất của người sử dụng AutoCAD. Lập trình AutoCAD là một trong những kỹ năng nâng cao nhất của người sử dụng AutoCAD. Lập trình AutoCAD là một trong những kỹ năng nâng cao nhất của người sử dụng AutoCAD. Lập trình AutoCAD là một trong những kỹ năng nâng cao nhất của người sử dụng AutoCAD. 
            </p>
         </div>
         <div class="course-list__column-price">
            <p class="course-list__price-desktop">699<sup>k</sup></p>
            <div class="course-list__info-desktop">
               <div class="course-list__sales-desktop">
               </div>
            </div>
         </div>
      </div>
   </li>
   <!--#Course-->
</ul>
 </div>
<!--Pagination-->
<nav class="js-pagination pagination">
   <ul class="pagination__list">
      <li><span class="pagination__previous--disabled js-pagination-previous "><b>Trang trước</b></span></li>
      <li><span class="pagination__summary">Trang 1 trong tổng số 60 trang</span></li>
      <li><span class="pagination__page--current">1</span></li>
      <li><a rel="next" class="pagination__page" href="#">2</a></li>
      <li><a class="pagination__page" href="#">3</a></li>
      <li><a class="pagination__page" href="#">4</a></li>
      <li><a class="pagination__page" href="#">5</a></li>
      <li><span class="pagination__gap">…</span></li>
      <li><a class="pagination__page" href="#">60</a></li>
      <li><a class="pagination__next js-pagination-next" rel="next" href="#"><b>Trang sau</b></a></li>
   </ul>
</nav>
<!--#Pagination-->
 @stop