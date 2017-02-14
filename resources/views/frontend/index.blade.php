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
            <link href="{{'frontend/css/normalize.css'}}" rel="stylesheet" type="text/css" />
            <link href="{{'frontend/css/style.css'}}" rel="stylesheet" type="text/css" />
            <link href="{{'frontend/css/custom.css'}}" rel="stylesheet" type="text/css" />
            <link href="{{'frontend/css/layout.css'}}" rel="stylesheet" type="text/css" />
            <!--JqueryModal-->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
            <script src="{{'frontend/vender/jquery-modal/jquery.modal.js'}}" type="text/javascript" charset="utf-8"></script>
              <script src="{{'frontend/vender/jquery-modal/highlight/highlight.pack.js'}}" type="text/javascript" charset="utf-8"></script>
               <script type="text/javascript" charset="utf-8"> hljs.initHighlightingOnLoad(); </script>
         </head>
         <!-- #HEAD -->
         <body>
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
                                       @include('frontend.course.courses-list')
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
            <!--#page-->
         </body>
      </html>