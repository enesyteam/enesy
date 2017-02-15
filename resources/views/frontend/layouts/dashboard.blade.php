@extends('frontend.layouts.plane')

@section('body')
             <div class="page">
               <div class="page__canvas">
                  <div class="canvas">
                     <div class="canvas__header">
                        <div class="site-header">
                           <!--Main Header-->
                           @include('frontend.partials.header')
                           <!--#Main Header-->
                           <!--Sub header-->
                           @include('frontend.partials.navbar')
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
                        @include('frontend.partials.searchheader')
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
                                       <!--Courses List-->
                                       @yield('section')
                                       <!--#Courses List-->
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!--#Content-->
                        <!--Footer-->
                        @include('frontend.partials.footer')
                        <!--#Footer-->
                     </div>
                     <!--#canvas body-->
                  </div>
                  <!--#canvas-->
               </div>
               <!--#page__canvas-->
            </div>
@stop

