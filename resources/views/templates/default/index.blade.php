<!DOCTYPE html>
<!--[if IE 8]> 
<html lang="en" class="ie8 no-js">
   <![endif]-->
   <!--[if IE 9]> 
   <html lang="en" class="ie9 no-js">
      <![endif]-->
      <!--[if !IE]><!-->
      <html class="js cors svg" lang="{{ config('app.locale') }}">
         <!--<![endif]-->
         <!-- HEAD -->
         <head>
            <meta charset="utf-8" />
            <title>Enesy | Đào tạo Kỹ sư chuyên nghiệp</title>
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
            <meta content="width=device-width, initial-scale=1" name="viewport" />
            <meta content="Đào tạo Kỹ sư chuyên nghiệp"
               name="description" />
            <meta content="" name="author" />
            <link href="{{'templates/default/assets/css/normalize.css'}}" rel="stylesheet" type="text/css" />
            <link href="{{'templates/default/assets/css/style.css'}}" rel="stylesheet" type="text/css" />
            <link href="{{'templates/default/assets/css/custom.css'}}" rel="stylesheet" type="text/css" />
            <link href="{{'templates/default/assets/css/layout.css'}}" rel="stylesheet" type="text/css" />
         </head>
         <!-- #HEAD -->
         <body>
            <div class="page">
               <div class="page__canvas">
                  <div class="canvas">
                     <div class="canvas__header">
                        <div class="site-header">
                           <div class="site-header__mini is-hidden-desktop">
                              <div class="header-mini">
                                 <div class="header-mini__button--account">
                                    <a class="btn btn--square" href="#account">
                                    <i class="e-icon -icon-person"></i>
                                    <span class="is-hidden">Account</span>
                                    </a>  
                                 </div>
                                 <div class="header-mini__button--categories">
                                    <a class="btn btn--square" href="#categories">
                                    <i class="e-icon -icon-hamburger"></i>
                                    <span class="is-hidden">Sites, Search &amp; Categories</span>
                                    </a>    
                                 </div>
                                 <div data-loading="1" style="display: none;"></div>
                                 <div data-variant="0" style="">
                                    <div class="header-mini__logo">
                                       <a class="header-mini__logo--enesy" href="#">Enesy</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!--Main Header-->
                           @include('templates.default.partials.header')
                           <!--#Main Header-->
                           <!--Sub header-->
                           @include('templates.default.partials.navbar')
                           <!--#Sub header-->
                        </div>
                        <!--#site_header-->
                     </div>
                     <!--#Canvas header-->
                     <!--Canvas body-->
                     <div class="js-canvas__body canvas__body">
                        <div class="grid-container">
                        </div>
                        <!--#grid container-->
                        <!--Search-->
                        @include('templates.default.partials.searchheader')
                        <!--#search-->
                        <!--Content-->
                        <div class="content-container">
                           <div class="content-main--basic">
                              <div class="faceted-search js-faceted-search" data-view="pjaxFacetedSearch">
                                 <div class="grid-container">
                                    <div data-view="guestSurveyBanner">
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
                                    </div>
                                    <div class="content-l -size-scale-tablet content-right">
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
                                       <div>
                                          <ul class="course-list">
                                             <!--Course-->
                                             <li class="js-google-analytics__list-event-container">
                                                <div class="course-list__columns-container">
                                                   <div class="course-list__column-detail">
                                                      <div class="course-list__item-thumbnail">
                                                         <div class="item-thumbnail">
                                                            <div class="item-thumbnail__image">
                                                               <a class="js-google-analytics__list-event-trigger" href="course-detail.html">
                                                               <img src="{{'templates/default/assets/images/courses/cad/csharp-thumb.jpg'}}" border="0" height="80" width="150" alt="Moti App PSD Landing Page PSD Template - ThemeForest Item for Sale" title="" class="preload no_preview landscape-image-magnifier" data-tooltip="Moti App PSD Landing Page PSD Template">
                                                               </a>
                                                               <div class="item-thumbnail__preview">
                                                                  <a target="_blank" href="course-detail.html">Xem giới thiệu</a>
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
                                                               <a class="t-link -color-default -decoration-reversed" href="course-detail.html">Đỗ Trường Quân</a>
                                                            </div>
                                                            <div class="course__info-author">Thời lượng: 100 giờ 30 phút
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="h-clear">
                                                         <div class="course-list__item-thumbnail-actions">
                                                            <div class="item-thumbnail-actions -width-full">
                                                               <div class="userBadge-stats">
                                                                  <div aria-label="User stats" class="userStats">
                                                                     <ul class="sc-ministats-group">
                                                                        <li title="330 học viên" class="sc-ministats-item">
                                                                           <a href="course-detail.html" rel="nofollow" class="sc-ministats sc-ministats-small sc-ministats-followers">
                                                                           <span class="sc-visuallyhidden">330 học viên</span><span aria-hidden="true">330</span>
                                                                           </a>
                                                                        </li>
                                                                        <li title="7 tracks" class="sc-ministats-item">
                                                                           <a href="course-detail.html" rel="nofollow" class="sc-ministats sc-ministats-small sc-ministats-sounds">
                                                                           <span class="sc-visuallyhidden">550 quan tâm</span><span aria-hidden="true">550</span>
                                                                           </a>
                                                                        </li>
                                                                     </ul>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
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
                                                               <a class="js-google-analytics__list-event-trigger" href="course-detail.html">
                                                               <img src="{{'templates/default/assets/images/courses/cad/csharp2-thumb.jpg'}}" border="0" height="80" width="150" alt="Moti App PSD Landing Page PSD Template - ThemeForest Item for Sale" title="" class="preload no_preview landscape-image-magnifier" data-tooltip="Moti App PSD Landing Page PSD Template">
                                                               </a>
                                                               <div class="item-thumbnail__preview">
                                                                  <a target="_blank" href="course-detail.html">Xem giới thiệu</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="course-list__adjacent-thumbnail">
                                                         <h3 class="course-list__heading">
                                                            <a class="js-google-analytics__list-event-trigger t-link -color-inherit -decoration-reversed" href="course-detail.html">Khóa học lập trình AutoCAD với C# - trình độ nâng cao</a>
                                                         </h3>
                                                         <div class="course-list__price">
                                                            <p class="t-body -size-m -color-inherit -weight-bold h-m0">$10</p>
                                                         </div>
                                                         <div class="course-list__info">
                                                            <div class="course__info-author">Giảng viên:
                                                               <a class="t-link -color-default -decoration-reversed" href="course-detail.html">Đỗ Trường Quân</a>
                                                            </div>
                                                            <div class="course__info-author">Thời lượng: 100 giờ 30 phút
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="h-clear">
                                                         <div class="course-list__item-thumbnail-actions">
                                                            <div class="item-thumbnail-actions -width-full">
                                                               <div class="userBadge-stats">
                                                                  <div aria-label="User stats" class="userStats">
                                                                     <ul class="sc-ministats-group">
                                                                        <li title="330 học viên" class="sc-ministats-item">
                                                                           <a href="course-detail.html" rel="nofollow" class="sc-ministats sc-ministats-small sc-ministats-followers">
                                                                           <span class="sc-visuallyhidden">330 học viên</span><span aria-hidden="true">330</span>
                                                                           </a>
                                                                        </li>
                                                                        <li title="7 tracks" class="sc-ministats-item">
                                                                           <a href="course-detail.html" rel="nofollow" class="sc-ministats sc-ministats-small sc-ministats-sounds">
                                                                           <span class="sc-visuallyhidden">550 quan tâm</span><span aria-hidden="true">550</span>
                                                                           </a>
                                                                        </li>
                                                                     </ul>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
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
                                                               <a class="js-google-analytics__list-event-trigger" href="course-detail.html">
                                                               <img src="{{'templates/default/assets/images/thumb.jpg'}}" border="0" height="80" width="150" alt="Moti App PSD Landing Page PSD Template - ThemeForest Item for Sale" title="" class="preload no_preview landscape-image-magnifier" data-tooltip="Moti App PSD Landing Page PSD Template">
                                                               </a>
                                                               <div class="item-thumbnail__preview">
                                                                  <a target="_blank" href="course-detail.html">Xem giới thiệu</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="course-list__adjacent-thumbnail">
                                                         <h3 class="course-list__heading">
                                                            <a class="js-google-analytics__list-event-trigger t-link -color-inherit -decoration-reversed" href="course-detail.html">Tính toán và thiết kế mố trụ cầu</a>
                                                         </h3>
                                                         <div class="course-list__price">
                                                            <p class="t-body -size-m -color-inherit -weight-bold h-m0">$10</p>
                                                         </div>
                                                         <div class="course-list__info">
                                                            <div class="course__info-author">Giảng viên:
                                                               <a class="t-link -color-default -decoration-reversed" href="course-detail.html">Trần Anh Tuấn</a>
                                                            </div>
                                                            <div class="course__info-author">Thời lượng: 100 giờ 30 phút
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="h-clear">
                                                         <div class="course-list__item-thumbnail-actions">
                                                            <div class="item-thumbnail-actions -width-full">
                                                               <div class="userBadge-stats">
                                                                  <div aria-label="User stats" class="userStats">
                                                                     <ul class="sc-ministats-group">
                                                                        <li title="330 học viên" class="sc-ministats-item">
                                                                           <a href="course-detail.html" rel="nofollow" class="sc-ministats sc-ministats-small sc-ministats-followers">
                                                                           <span class="sc-visuallyhidden">330 học viên</span><span aria-hidden="true">330</span>
                                                                           </a>
                                                                        </li>
                                                                        <li title="7 tracks" class="sc-ministats-item">
                                                                           <a href="course-detail.html" rel="nofollow" class="sc-ministats sc-ministats-small sc-ministats-sounds">
                                                                           <span class="sc-visuallyhidden">550 quan tâm</span><span aria-hidden="true">550</span>
                                                                           </a>
                                                                        </li>
                                                                     </ul>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
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
                                                               <a class="js-google-analytics__list-event-trigger" href="course-detail.html">
                                                               <img src="{{'templates/default/assets/images/thumb.jpg'}}" border="0" height="80" width="150" alt="Moti App PSD Landing Page PSD Template - ThemeForest Item for Sale" title="" class="preload no_preview landscape-image-magnifier" data-tooltip="Moti App PSD Landing Page PSD Template">
                                                               </a>
                                                               <div class="item-thumbnail__preview">
                                                                  <a target="_blank" href="course-detail.html">Xem giới thiệu</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="course-list__adjacent-thumbnail">
                                                         <h3 class="course-list__heading">
                                                            <a class="js-google-analytics__list-event-trigger t-link -color-inherit -decoration-reversed" href="course-detail.html">Tính toán và thiết kế cầu BTCT DƯL - Dầm giản đơn</a>
                                                         </h3>
                                                         <div class="course-list__price">
                                                            <p class="t-body -size-m -color-inherit -weight-bold h-m0">$10</p>
                                                         </div>
                                                         <div class="course-list__info">
                                                            <div class="course__info-author">Giảng viên:
                                                               <a class="t-link -color-default -decoration-reversed" href="course-detail.html">Nguyễn Xuân Lam</a>
                                                            </div>
                                                            <div class="course__info-author">Thời lượng: 100 giờ 30 phút
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="h-clear">
                                                         <div class="course-list__item-thumbnail-actions">
                                                            <div class="item-thumbnail-actions -width-full">
                                                               <div class="userBadge-stats">
                                                                  <div aria-label="User stats" class="userStats">
                                                                     <ul class="sc-ministats-group">
                                                                        <li title="330 học viên" class="sc-ministats-item">
                                                                           <a href="course-detail.html" rel="nofollow" class="sc-ministats sc-ministats-small sc-ministats-followers">
                                                                           <span class="sc-visuallyhidden">330 học viên</span><span aria-hidden="true">330</span>
                                                                           </a>
                                                                        </li>
                                                                        <li title="7 tracks" class="sc-ministats-item">
                                                                           <a href="course-detail.html" rel="nofollow" class="sc-ministats sc-ministats-small sc-ministats-sounds">
                                                                           <span class="sc-visuallyhidden">550 quan tâm</span><span aria-hidden="true">550</span>
                                                                           </a>
                                                                        </li>
                                                                     </ul>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
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
                                                               <a class="js-google-analytics__list-event-trigger" href="course-detail.html">
                                                               <img src="{{'templates/default/assets/images/thumb.jpg'}}" border="0" height="80" width="150" alt="Moti App PSD Landing Page PSD Template - ThemeForest Item for Sale" title="" class="preload no_preview landscape-image-magnifier" data-tooltip="Moti App PSD Landing Page PSD Template">
                                                               </a>
                                                               <div class="item-thumbnail__preview">
                                                                  <a target="_blank" href="course-detail.html">Xem giới thiệu</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="course-list__adjacent-thumbnail">
                                                         <h3 class="course-list__heading">
                                                            <a class="js-google-analytics__list-event-trigger t-link -color-inherit -decoration-reversed" href="course-detail.html">Sử dụng VnRoad trong thiết kế đường</a>
                                                         </h3>
                                                         <div class="course-list__price">
                                                            <p class="t-body -size-m -color-inherit -weight-bold h-m0">$10</p>
                                                         </div>
                                                         <div class="course-list__info">
                                                            <div class="course__info-author">Giảng viên:
                                                               <a class="t-link -color-default -decoration-reversed" href="course-detail.html">Bùi Minh Hoàng</a>
                                                            </div>
                                                            <div class="course__info-author">Thời lượng: 100 giờ 30 phút
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="h-clear">
                                                         <div class="course-list__item-thumbnail-actions">
                                                            <div class="item-thumbnail-actions -width-full">
                                                               <div class="userBadge-stats">
                                                                  <div aria-label="User stats" class="userStats">
                                                                     <ul class="sc-ministats-group">
                                                                        <li title="330 học viên" class="sc-ministats-item">
                                                                           <a href="course-detail.html" rel="nofollow" class="sc-ministats sc-ministats-small sc-ministats-followers">
                                                                           <span class="sc-visuallyhidden">330 học viên</span><span aria-hidden="true">330</span>
                                                                           </a>
                                                                        </li>
                                                                        <li title="7 tracks" class="sc-ministats-item">
                                                                           <a href="course-detail.html" rel="nofollow" class="sc-ministats sc-ministats-small sc-ministats-sounds">
                                                                           <span class="sc-visuallyhidden">550 quan tâm</span><span aria-hidden="true">550</span>
                                                                           </a>
                                                                        </li>
                                                                     </ul>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
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
                                                               <a class="js-google-analytics__list-event-trigger" href="course-detail.html">
                                                               <img src="{{'templates/default/assets/images/thumb.jpg'}}" border="0" height="80" width="150" alt="Moti App PSD Landing Page PSD Template - ThemeForest Item for Sale" title="" class="preload no_preview landscape-image-magnifier" data-tooltip="Moti App PSD Landing Page PSD Template">
                                                               </a>
                                                               <div class="item-thumbnail__preview">
                                                                  <a target="_blank" href="course-detail.html">Xem giới thiệu</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="course-list__adjacent-thumbnail">
                                                         <h3 class="course-list__heading">
                                                            <a class="js-google-analytics__list-event-trigger t-link -color-inherit -decoration-reversed" href="course-detail.html">Kiểm toán đất yếu bằng GEO Slope</a>
                                                         </h3>
                                                         <div class="course-list__price">
                                                            <p class="t-body -size-m -color-inherit -weight-bold h-m0">$10</p>
                                                         </div>
                                                         <div class="course-list__info">
                                                            <div class="course__info-author">Giảng viên:
                                                               <a class="t-link -color-default -decoration-reversed" href="course-detail.html">Nguyễn Văn Linh</a>
                                                            </div>
                                                            <div class="course__info-author">Thời lượng: 100 giờ 30 phút
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="h-clear">
                                                         <div class="course-list__item-thumbnail-actions">
                                                            <div class="item-thumbnail-actions -width-full">
                                                               <div class="userBadge-stats">
                                                                  <div aria-label="User stats" class="userStats">
                                                                     <ul class="sc-ministats-group">
                                                                        <li title="330 học viên" class="sc-ministats-item">
                                                                           <a href="course-detail.html" rel="nofollow" class="sc-ministats sc-ministats-small sc-ministats-followers">
                                                                           <span class="sc-visuallyhidden">330 học viên</span><span aria-hidden="true">330</span>
                                                                           </a>
                                                                        </li>
                                                                        <li title="7 tracks" class="sc-ministats-item">
                                                                           <a href="course-detail.html" rel="nofollow" class="sc-ministats sc-ministats-small sc-ministats-sounds">
                                                                           <span class="sc-visuallyhidden">550 quan tâm</span><span aria-hidden="true">550</span>
                                                                           </a>
                                                                        </li>
                                                                     </ul>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
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
                                                               <a class="js-google-analytics__list-event-trigger" href="course-detail.html">
                                                               <img src="{{'templates/default/assets/images/thumb.jpg'}}" border="0" height="80" width="150" alt="Moti App PSD Landing Page PSD Template - ThemeForest Item for Sale" title="" class="preload no_preview landscape-image-magnifier" data-tooltip="Moti App PSD Landing Page PSD Template">
                                                               </a>
                                                               <div class="item-thumbnail__preview">
                                                                  <a target="_blank" href="course-detail.html">Xem giới thiệu</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="course-list__adjacent-thumbnail">
                                                         <h3 class="course-list__heading">
                                                            <a class="js-google-analytics__list-event-trigger t-link -color-inherit -decoration-reversed" href="course-detail.html">Khóa học lập trình AutoCAD với C# - trình độ cơ bản</a>
                                                         </h3>
                                                         <div class="course-list__price">
                                                            <p class="t-body -size-m -color-inherit -weight-bold h-m0">$10</p>
                                                         </div>
                                                         <div class="course-list__info">
                                                            <div class="course__info-author">Giảng viên:
                                                               <a class="t-link -color-default -decoration-reversed" href="course-detail.html">Đỗ Trường Quân</a>
                                                            </div>
                                                            <div class="course__info-author">Thời lượng: 100 giờ 30 phút
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="h-clear">
                                                         <div class="course-list__item-thumbnail-actions">
                                                            <div class="item-thumbnail-actions -width-full">
                                                               <div class="userBadge-stats">
                                                                  <div aria-label="User stats" class="userStats">
                                                                     <ul class="sc-ministats-group">
                                                                        <li title="330 học viên" class="sc-ministats-item">
                                                                           <a href="course-detail.html" rel="nofollow" class="sc-ministats sc-ministats-small sc-ministats-followers">
                                                                           <span class="sc-visuallyhidden">330 học viên</span><span aria-hidden="true">330</span>
                                                                           </a>
                                                                        </li>
                                                                        <li title="7 tracks" class="sc-ministats-item">
                                                                           <a href="course-detail.html" rel="nofollow" class="sc-ministats sc-ministats-small sc-ministats-sounds">
                                                                           <span class="sc-visuallyhidden">550 quan tâm</span><span aria-hidden="true">550</span>
                                                                           </a>
                                                                        </li>
                                                                     </ul>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
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
                                                               <a class="js-google-analytics__list-event-trigger" href="course-detail.html">
                                                               <img src="{{'templates/default/assets/images/thumb.jpg'}}" border="0" height="80" width="150" alt="Moti App PSD Landing Page PSD Template - ThemeForest Item for Sale" title="" class="preload no_preview landscape-image-magnifier" data-tooltip="Moti App PSD Landing Page PSD Template">
                                                               </a>
                                                               <div class="item-thumbnail__preview">
                                                                  <a target="_blank" href="course-detail.html">Xem giới thiệu</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="course-list__adjacent-thumbnail">
                                                         <h3 class="course-list__heading">
                                                            <a class="js-google-analytics__list-event-trigger t-link -color-inherit -decoration-reversed" href="course-detail.html">Khóa học lập trình AutoCAD với C# - trình độ cơ bản</a>
                                                         </h3>
                                                         <div class="course-list__price">
                                                            <p class="t-body -size-m -color-inherit -weight-bold h-m0">$10</p>
                                                         </div>
                                                         <div class="course-list__info">
                                                            <div class="course__info-author">Giảng viên:
                                                               <a class="t-link -color-default -decoration-reversed" href="course-detail.html">Đỗ Trường Quân</a>
                                                            </div>
                                                            <div class="course__info-author">Thời lượng: 100 giờ 30 phút
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="h-clear">
                                                         <div class="course-list__item-thumbnail-actions">
                                                            <div class="item-thumbnail-actions -width-full">
                                                               <div class="userBadge-stats">
                                                                  <div aria-label="User stats" class="userStats">
                                                                     <ul class="sc-ministats-group">
                                                                        <li title="330 học viên" class="sc-ministats-item">
                                                                           <a href="course-detail.html" rel="nofollow" class="sc-ministats sc-ministats-small sc-ministats-followers">
                                                                           <span class="sc-visuallyhidden">330 học viên</span><span aria-hidden="true">330</span>
                                                                           </a>
                                                                        </li>
                                                                        <li title="7 tracks" class="sc-ministats-item">
                                                                           <a href="course-detail.html" rel="nofollow" class="sc-ministats sc-ministats-small sc-ministats-sounds">
                                                                           <span class="sc-visuallyhidden">550 quan tâm</span><span aria-hidden="true">550</span>
                                                                           </a>
                                                                        </li>
                                                                     </ul>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
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
                                                               <a class="js-google-analytics__list-event-trigger" href="course-detail.html">
                                                               <img src="{{'templates/default/assets/images/thumb.jpg'}}" border="0" height="80" width="150" alt="Moti App PSD Landing Page PSD Template - ThemeForest Item for Sale" title="" class="preload no_preview landscape-image-magnifier" data-tooltip="Moti App PSD Landing Page PSD Template">
                                                               </a>
                                                               <div class="item-thumbnail__preview">
                                                                  <a target="_blank" href="course-detail.html">Xem giới thiệu</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="course-list__adjacent-thumbnail">
                                                         <h3 class="course-list__heading">
                                                            <a class="js-google-analytics__list-event-trigger t-link -color-inherit -decoration-reversed" href="course-detail.html">Khóa học lập trình AutoCAD với C# - trình độ cơ bản</a>
                                                         </h3>
                                                         <div class="course-list__price">
                                                            <p class="t-body -size-m -color-inherit -weight-bold h-m0">$10</p>
                                                         </div>
                                                         <div class="course-list__info">
                                                            <div class="course__info-author">Giảng viên:
                                                               <a class="t-link -color-default -decoration-reversed" href="course-detail.html">Đỗ Trường Quân</a>
                                                            </div>
                                                            <div class="course__info-author">Thời lượng: 100 giờ 30 phút
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="h-clear">
                                                         <div class="course-list__item-thumbnail-actions">
                                                            <div class="item-thumbnail-actions -width-full">
                                                               <div class="userBadge-stats">
                                                                  <div aria-label="User stats" class="userStats">
                                                                     <ul class="sc-ministats-group">
                                                                        <li title="330 học viên" class="sc-ministats-item">
                                                                           <a href="course-detail.html" rel="nofollow" class="sc-ministats sc-ministats-small sc-ministats-followers">
                                                                           <span class="sc-visuallyhidden">330 học viên</span><span aria-hidden="true">330</span>
                                                                           </a>
                                                                        </li>
                                                                        <li title="7 tracks" class="sc-ministats-item">
                                                                           <a href="course-detail.html" rel="nofollow" class="sc-ministats sc-ministats-small sc-ministats-sounds">
                                                                           <span class="sc-visuallyhidden">550 quan tâm</span><span aria-hidden="true">550</span>
                                                                           </a>
                                                                        </li>
                                                                     </ul>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
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
                                                               <a class="js-google-analytics__list-event-trigger" href="course-detail.html">
                                                               <img src="{{'templates/default/assets/images/thumb.jpg'}}" border="0" height="80" width="150" alt="Moti App PSD Landing Page PSD Template - ThemeForest Item for Sale" title="" class="preload no_preview landscape-image-magnifier" data-tooltip="Moti App PSD Landing Page PSD Template">
                                                               </a>
                                                               <div class="item-thumbnail__preview">
                                                                  <a target="_blank" href="course-detail.html">Xem giới thiệu</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="course-list__adjacent-thumbnail">
                                                         <h3 class="course-list__heading">
                                                            <a class="js-google-analytics__list-event-trigger t-link -color-inherit -decoration-reversed" href="course-detail.html">Khóa học lập trình AutoCAD với C# - trình độ cơ bản</a>
                                                         </h3>
                                                         <div class="course-list__price">
                                                            <p class="t-body -size-m -color-inherit -weight-bold h-m0">$10</p>
                                                         </div>
                                                         <div class="course-list__info">
                                                            <div class="course__info-author">Giảng viên:
                                                               <a class="t-link -color-default -decoration-reversed" href="course-detail.html">Đỗ Trường Quân</a>
                                                            </div>
                                                            <div class="course__info-author">Thời lượng: 100 giờ 30 phút
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="h-clear">
                                                         <div class="course-list__item-thumbnail-actions">
                                                            <div class="item-thumbnail-actions -width-full">
                                                               <div class="userBadge-stats">
                                                                  <div aria-label="User stats" class="userStats">
                                                                     <ul class="sc-ministats-group">
                                                                        <li title="330 học viên" class="sc-ministats-item">
                                                                           <a href="course-detail.html" rel="nofollow" class="sc-ministats sc-ministats-small sc-ministats-followers">
                                                                           <span class="sc-visuallyhidden">330 học viên</span><span aria-hidden="true">330</span>
                                                                           </a>
                                                                        </li>
                                                                        <li title="7 tracks" class="sc-ministats-item">
                                                                           <a href="course-detail.html" rel="nofollow" class="sc-ministats sc-ministats-small sc-ministats-sounds">
                                                                           <span class="sc-visuallyhidden">550 quan tâm</span><span aria-hidden="true">550</span>
                                                                           </a>
                                                                        </li>
                                                                     </ul>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
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
                                                               <a class="js-google-analytics__list-event-trigger" href="course-detail.html">
                                                               <img src="{{'templates/default/assets/images/thumb.jpg'}}" border="0" height="80" width="150" alt="Moti App PSD Landing Page PSD Template - ThemeForest Item for Sale" title="" class="preload no_preview landscape-image-magnifier" data-tooltip="Moti App PSD Landing Page PSD Template">
                                                               </a>
                                                               <div class="item-thumbnail__preview">
                                                                  <a target="_blank" href="course-detail.html">Xem giới thiệu</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="course-list__adjacent-thumbnail">
                                                         <h3 class="course-list__heading">
                                                            <a class="js-google-analytics__list-event-trigger t-link -color-inherit -decoration-reversed" href="course-detail.html">Khóa học lập trình AutoCAD với C# - trình độ cơ bản</a>
                                                         </h3>
                                                         <div class="course-list__price">
                                                            <p class="t-body -size-m -color-inherit -weight-bold h-m0">$10</p>
                                                         </div>
                                                         <div class="course-list__info">
                                                            <div class="course__info-author">Giảng viên:
                                                               <a class="t-link -color-default -decoration-reversed" href="course-detail.html">Đỗ Trường Quân</a>
                                                            </div>
                                                            <div class="course__info-author">Thời lượng: 100 giờ 30 phút
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="h-clear">
                                                         <div class="course-list__item-thumbnail-actions">
                                                            <div class="item-thumbnail-actions -width-full">
                                                               <div class="userBadge-stats">
                                                                  <div aria-label="User stats" class="userStats">
                                                                     <ul class="sc-ministats-group">
                                                                        <li title="330 học viên" class="sc-ministats-item">
                                                                           <a href="course-detail.html" rel="nofollow" class="sc-ministats sc-ministats-small sc-ministats-followers">
                                                                           <span class="sc-visuallyhidden">330 học viên</span><span aria-hidden="true">330</span>
                                                                           </a>
                                                                        </li>
                                                                        <li title="7 tracks" class="sc-ministats-item">
                                                                           <a href="course-detail.html" rel="nofollow" class="sc-ministats sc-ministats-small sc-ministats-sounds">
                                                                           <span class="sc-visuallyhidden">550 quan tâm</span><span aria-hidden="true">550</span>
                                                                           </a>
                                                                        </li>
                                                                     </ul>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
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
                                                               <a class="js-google-analytics__list-event-trigger" href="course-detail.html">
                                                               <img src="{{'templates/default/assets/images/thumb.jpg'}}" border="0" height="80" width="150" alt="Moti App PSD Landing Page PSD Template - ThemeForest Item for Sale" title="" class="preload no_preview landscape-image-magnifier" data-tooltip="Moti App PSD Landing Page PSD Template">
                                                               </a>
                                                               <div class="item-thumbnail__preview">
                                                                  <a target="_blank" href="course-detail.html">Xem giới thiệu</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="course-list__adjacent-thumbnail">
                                                         <h3 class="course-list__heading">
                                                            <a class="js-google-analytics__list-event-trigger t-link -color-inherit -decoration-reversed" href="course-detail.html">Khóa học lập trình AutoCAD với C# - trình độ cơ bản</a>
                                                         </h3>
                                                         <div class="course-list__price">
                                                            <p class="t-body -size-m -color-inherit -weight-bold h-m0">$10</p>
                                                         </div>
                                                         <div class="course-list__info">
                                                            <div class="course__info-author">Giảng viên:
                                                               <a class="t-link -color-default -decoration-reversed" href="course-detail.html">Đỗ Trường Quân</a>
                                                            </div>
                                                            <div class="course__info-author">Thời lượng: 100 giờ 30 phút
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="h-clear">
                                                         <div class="course-list__item-thumbnail-actions">
                                                            <div class="item-thumbnail-actions -width-full">
                                                               <div class="userBadge-stats">
                                                                  <div aria-label="User stats" class="userStats">
                                                                     <ul class="sc-ministats-group">
                                                                        <li title="330 học viên" class="sc-ministats-item">
                                                                           <a href="course-detail.html" rel="nofollow" class="sc-ministats sc-ministats-small sc-ministats-followers">
                                                                           <span class="sc-visuallyhidden">330 học viên</span><span aria-hidden="true">330</span>
                                                                           </a>
                                                                        </li>
                                                                        <li title="7 tracks" class="sc-ministats-item">
                                                                           <a href="course-detail.html" rel="nofollow" class="sc-ministats sc-ministats-small sc-ministats-sounds">
                                                                           <span class="sc-visuallyhidden">550 quan tâm</span><span aria-hidden="true">550</span>
                                                                           </a>
                                                                        </li>
                                                                     </ul>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
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
                                                               <a class="js-google-analytics__list-event-trigger" href="course-detail.html">
                                                               <img src="{{'templates/default/assets/images/thumb.jpg'}}" border="0" height="80" width="150" alt="Moti App PSD Landing Page PSD Template - ThemeForest Item for Sale" title="" class="preload no_preview landscape-image-magnifier" data-tooltip="Moti App PSD Landing Page PSD Template">
                                                               </a>
                                                               <div class="item-thumbnail__preview">
                                                                  <a target="_blank" href="course-detail.html">Xem giới thiệu</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="course-list__adjacent-thumbnail">
                                                         <h3 class="course-list__heading">
                                                            <a class="js-google-analytics__list-event-trigger t-link -color-inherit -decoration-reversed" href="course-detail.html">Khóa học lập trình AutoCAD với C# - trình độ cơ bản</a>
                                                         </h3>
                                                         <div class="course-list__price">
                                                            <p class="t-body -size-m -color-inherit -weight-bold h-m0">$10</p>
                                                         </div>
                                                         <div class="course-list__info">
                                                            <div class="course__info-author">Giảng viên:
                                                               <a class="t-link -color-default -decoration-reversed" href="course-detail.html">Đỗ Trường Quân</a>
                                                            </div>
                                                            <div class="course__info-author">Thời lượng: 100 giờ 30 phút
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="h-clear">
                                                         <div class="course-list__item-thumbnail-actions">
                                                            <div class="item-thumbnail-actions -width-full">
                                                               <div class="userBadge-stats">
                                                                  <div aria-label="User stats" class="userStats">
                                                                     <ul class="sc-ministats-group">
                                                                        <li title="330 học viên" class="sc-ministats-item">
                                                                           <a href="course-detail.html" rel="nofollow" class="sc-ministats sc-ministats-small sc-ministats-followers">
                                                                           <span class="sc-visuallyhidden">330 học viên</span><span aria-hidden="true">330</span>
                                                                           </a>
                                                                        </li>
                                                                        <li title="7 tracks" class="sc-ministats-item">
                                                                           <a href="course-detail.html" rel="nofollow" class="sc-ministats sc-ministats-small sc-ministats-sounds">
                                                                           <span class="sc-visuallyhidden">550 quan tâm</span><span aria-hidden="true">550</span>
                                                                           </a>
                                                                        </li>
                                                                     </ul>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
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
                                                               <a class="js-google-analytics__list-event-trigger" href="course-detail.html">
                                                               <img src="{{'templates/default/assets/images/thumb.jpg'}}" border="0" height="80" width="150" alt="Moti App PSD Landing Page PSD Template - ThemeForest Item for Sale" title="" class="preload no_preview landscape-image-magnifier" data-tooltip="Moti App PSD Landing Page PSD Template">
                                                               </a>
                                                               <div class="item-thumbnail__preview">
                                                                  <a target="_blank" href="course-detail.html">Xem giới thiệu</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="course-list__adjacent-thumbnail">
                                                         <h3 class="course-list__heading">
                                                            <a class="js-google-analytics__list-event-trigger t-link -color-inherit -decoration-reversed" href="course-detail.html">Khóa học lập trình AutoCAD với C# - trình độ cơ bản</a>
                                                         </h3>
                                                         <div class="course-list__price">
                                                            <p class="t-body -size-m -color-inherit -weight-bold h-m0">$10</p>
                                                         </div>
                                                         <div class="course-list__info">
                                                            <div class="course__info-author">Giảng viên:
                                                               <a class="t-link -color-default -decoration-reversed" href="course-detail.html">Đỗ Trường Quân</a>
                                                            </div>
                                                            <div class="course__info-author">Thời lượng: 100 giờ 30 phút
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="h-clear">
                                                         <div class="course-list__item-thumbnail-actions">
                                                            <div class="item-thumbnail-actions -width-full">
                                                               <div class="userBadge-stats">
                                                                  <div aria-label="User stats" class="userStats">
                                                                     <ul class="sc-ministats-group">
                                                                        <li title="330 học viên" class="sc-ministats-item">
                                                                           <a href="course-detail.html" rel="nofollow" class="sc-ministats sc-ministats-small sc-ministats-followers">
                                                                           <span class="sc-visuallyhidden">330 học viên</span><span aria-hidden="true">330</span>
                                                                           </a>
                                                                        </li>
                                                                        <li title="7 tracks" class="sc-ministats-item">
                                                                           <a href="course-detail.html" rel="nofollow" class="sc-ministats sc-ministats-small sc-ministats-sounds">
                                                                           <span class="sc-visuallyhidden">550 quan tâm</span><span aria-hidden="true">550</span>
                                                                           </a>
                                                                        </li>
                                                                     </ul>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
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
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!--#Content-->
                        <!--Footer-->
                        @include('templates.default.partials.footer')
                        <!--#Footer-->
                     </div>
                     <!--#canvas body-->
                  </div>
                  <!--#canvas-->
               </div>
               <!--#page__canvas-->
            </div>
            <!--#page-->
         </body>
      </html>