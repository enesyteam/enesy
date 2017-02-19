@extends('frontend.layouts.dashboard') @section('head.css')
<link href="{{asset('frontend/css/author.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('frontend/user/assets/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('frontend/user/assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('frontend/user/assets/css/core.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('frontend/user/assets/css/colors.css')}}" rel="stylesheet" type="text/css">
@stop @section('top-header') <!--Top Header-->
<!--@include('frontend.partials.top-header-message')-->
<!--#Top Header-->
@stop @section('section') <!--Search-->
<!--#search-->
<!--Content-->
<div class="content-container">
   <div class="content-main--basic">
      <div class="faceted-search js-faceted-search" data-view="pjaxFacetedSearch">
         <div class="grid-container">
            <div class="page-container">
               <div class="page-content">
                  <!-- Sidebar -->
                  <div class="sidebar sidebar-main">
                     <div class="sidebar-content">
                        <div class="sidebar-category sidebar-category-visible">
                           <!-- Search -->
                           <div class="sidebar-search">
                             <form id="search" data-view="searchField" action="#" accept-charset="UTF-8" method="get"><input name="utf8" type="hidden" value="">
                               <div class="search-field -border-light">
                                 <div class="search-field__input">
                                   <input id="term" name="term" class="js-term search-field__input-field" type="search" placeholder="Tìm khóa học" vk_19588="subscribed">
                                 </div>
                                 <button class="search-field__button" type="submit">
                                   <i class="e-icon -icon-search"><span class="e-icon__alt">Search</span></i>
                                 </button>
                               </div>
                           </form>
                           </div>
                           <!-- /Search -->
                           <div class="category-content no-padding">
                              <ul class="navigation navigation-main navigation-accordion">
                                 <li class=""><span>Bộ lọc</span> <i class="icon-menu" data-original-title="Main pages" title=""></i></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div><!-- /Sidebar -->
                  <!-- Content -->
                  <div class="content-wrapper">
                     <div class="content mr--20">
                        <div class="panel panel-body">
                           <p class="text-muted text-size-small">Tìm thấy 150 khóa học liên quan đến từ khóa <strong>"ABC"</strong></p>
                           <hr>
                           <ul class="media-list search-results-list content-group">
                              <!-- Course -->
                              <li class="media stack-media-on-mobile">
                                 <div class="media-left">
                                    <div class="thumb">
                                       <a href="#"><img alt="" class="img-responsive img-rounded media-preview" src="{{asset('frontend/images/placeholder.jpg')}}"> <span class="zoom-image"><i class="icon-play3"></i></span></a>
                                    </div>
                                 </div>
                                 <div class="media-body">
                                    <h6 class="media-heading"><a href="#">Lập trình PHP trong 7 ngày</a></h6>
                                    <ul class="list-inline list-inline-separate text-muted">
                                       <li><i class="icon-book-play position-left"></i> Khóa học online</li>
                                       <li>140 giờ</li>
                                       <li>750,000đ</li>
                                    </ul>Đây là khóa học lập trình PHP trong vòng 7 ngày với chuyên gia Đức PHP nổi tiếng khắp Vịnh Bắc Bộ. Anh là một trong những lập trình viên hàng đầu của Việt Nam.
                                 </div>
                              </li>
                              <!-- /Course -->
                              <!-- Course -->
                              <li class="media stack-media-on-mobile">
                                 <div class="media-left">
                                    <div class="thumb">
                                       <a href="#"><img alt="" class="img-responsive img-rounded media-preview" src="{{asset('frontend/images/placeholder.jpg')}}"> <span class="zoom-image"><i class="icon-play3"></i></span></a>
                                    </div>
                                 </div>
                                 <div class="media-body">
                                    <h6 class="media-heading"><a href="#">Lập trình PHP trong 7 ngày</a></h6>
                                    <ul class="list-inline list-inline-separate text-muted">
                                       <li><i class="icon-book-play position-left"></i> Khóa học online</li>
                                       <li>140 giờ</li>
                                       <li>750,000đ</li>
                                    </ul>Đây là khóa học lập trình PHP trong vòng 7 ngày với chuyên gia Đức PHP nổi tiếng khắp Vịnh Bắc Bộ. Anh là một trong những lập trình viên hàng đầu của Việt Nam.
                                 </div>
                              </li>
                              <!-- /Course -->
                              <!-- Course -->
                              <li class="media stack-media-on-mobile">
                                 <div class="media-left">
                                    <div class="thumb">
                                       <a href="#"><img alt="" class="img-responsive img-rounded media-preview" src="{{asset('frontend/images/placeholder.jpg')}}"> <span class="zoom-image"><i class="icon-play3"></i></span></a>
                                    </div>
                                 </div>
                                 <div class="media-body">
                                    <h6 class="media-heading"><a href="#">Lập trình PHP trong 7 ngày</a></h6>
                                    <ul class="list-inline list-inline-separate text-muted">
                                       <li><i class="icon-book-play position-left"></i> Khóa học online</li>
                                       <li>140 giờ</li>
                                       <li>750,000đ</li>
                                    </ul>Đây là khóa học lập trình PHP trong vòng 7 ngày với chuyên gia Đức PHP nổi tiếng khắp Vịnh Bắc Bộ. Anh là một trong những lập trình viên hàng đầu của Việt Nam.
                                 </div>
                              </li>
                              <!-- /Course -->
                              <!-- Course -->
                              <li class="media stack-media-on-mobile">
                                 <div class="media-left">
                                    <div class="thumb">
                                       <a href="#"><img alt="" class="img-responsive img-rounded media-preview" src="{{asset('frontend/images/placeholder.jpg')}}"> <span class="zoom-image"><i class="icon-play3"></i></span></a>
                                    </div>
                                 </div>
                                 <div class="media-body">
                                    <h6 class="media-heading"><a href="#">Lập trình PHP trong 7 ngày</a></h6>
                                    <ul class="list-inline list-inline-separate text-muted">
                                       <li><i class="icon-book-play position-left"></i> Khóa học online</li>
                                       <li>140 giờ</li>
                                       <li>750,000đ</li>
                                    </ul>Đây là khóa học lập trình PHP trong vòng 7 ngày với chuyên gia Đức PHP nổi tiếng khắp Vịnh Bắc Bộ. Anh là một trong những lập trình viên hàng đầu của Việt Nam.
                                 </div>
                              </li>
                              <!-- /Course -->
                              <!-- Course -->
                              <li class="media stack-media-on-mobile">
                                 <div class="media-left">
                                    <div class="thumb">
                                       <a href="#"><img alt="" class="img-responsive img-rounded media-preview" src="{{asset('frontend/images/placeholder.jpg')}}"> <span class="zoom-image"><i class="icon-play3"></i></span></a>
                                    </div>
                                 </div>
                                 <div class="media-body">
                                    <h6 class="media-heading"><a href="#">Lập trình PHP trong 7 ngày</a></h6>
                                    <ul class="list-inline list-inline-separate text-muted">
                                       <li><i class="icon-book-play position-left"></i> Khóa học online</li>
                                       <li>140 giờ</li>
                                       <li>750,000đ</li>
                                    </ul>Đây là khóa học lập trình PHP trong vòng 7 ngày với chuyên gia Đức PHP nổi tiếng khắp Vịnh Bắc Bộ. Anh là một trong những lập trình viên hàng đầu của Việt Nam.
                                 </div>
                              </li>
                              <!-- /Course -->
                              <!-- Course -->
                              <li class="media stack-media-on-mobile">
                                 <div class="media-left">
                                    <div class="thumb">
                                       <a href="#"><img alt="" class="img-responsive img-rounded media-preview" src="{{asset('frontend/images/placeholder.jpg')}}"> <span class="zoom-image"><i class="icon-play3"></i></span></a>
                                    </div>
                                 </div>
                                 <div class="media-body">
                                    <h6 class="media-heading"><a href="#">Lập trình PHP trong 7 ngày</a></h6>
                                    <ul class="list-inline list-inline-separate text-muted">
                                       <li><i class="icon-book-play position-left"></i> Khóa học online</li>
                                       <li>140 giờ</li>
                                       <li>750,000đ</li>
                                    </ul>Đây là khóa học lập trình PHP trong vòng 7 ngày với chuyên gia Đức PHP nổi tiếng khắp Vịnh Bắc Bộ. Anh là một trong những lập trình viên hàng đầu của Việt Nam.
                                 </div>
                              </li>
                              <!-- /Course -->
                              <!-- Course -->
                              <li class="media stack-media-on-mobile">
                                 <div class="media-left">
                                    <div class="thumb">
                                       <a href="#"><img alt="" class="img-responsive img-rounded media-preview" src="{{asset('frontend/images/placeholder.jpg')}}"> <span class="zoom-image"><i class="icon-play3"></i></span></a>
                                    </div>
                                 </div>
                                 <div class="media-body">
                                    <h6 class="media-heading"><a href="#">Lập trình PHP trong 7 ngày</a></h6>
                                    <ul class="list-inline list-inline-separate text-muted">
                                       <li><i class="icon-book-play position-left"></i> Khóa học online</li>
                                       <li>140 giờ</li>
                                       <li>750,000đ</li>
                                    </ul>Đây là khóa học lập trình PHP trong vòng 7 ngày với chuyên gia Đức PHP nổi tiếng khắp Vịnh Bắc Bộ. Anh là một trong những lập trình viên hàng đầu của Việt Nam.
                                 </div>
                              </li>
                              <!-- /Course -->
                              
                           </ul>
                           <div class="text-center pt-10 pb-10">
                              <ul class="pagination pagination-flat">
                                 <li class="disabled">
                                    <a href="#">←</a>
                                 </li>
                                 <li class="active">
                                    <a href="#">1</a>
                                 </li>
                                 <li>
                                    <a href="#">2</a>
                                 </li>
                                 <li>
                                    <a href="#">3</a>
                                 </li>
                                 <li>
                                    <a href="#">4</a>
                                 </li>
                                 <li><span>...</span></li>
                                 <li>
                                    <a href="#">58</a>
                                 </li>
                                 <li>
                                    <a href="#">59</a>
                                 </li>
                                 <li>
                                    <a href="#">→</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div><!-- /Content -->
               </div>
            </div>
         </div>
      </div>
   </div>
</div><!--#Content-->
@stop