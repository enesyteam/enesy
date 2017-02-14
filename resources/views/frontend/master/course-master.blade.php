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
            <title>@yield('head.title')</title>
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
            <meta content="width=device-width, initial-scale=1" name="viewport" />
            @yield('head.content')
            @yield('head.author')
            <link href="{{'frontend/templates/default/assets/css/normalize.css'}}" rel="stylesheet" type="text/css" />
            <link href="{{'frontend/templates/default/assets/css/style.css'}}" rel="stylesheet" type="text/css" />
            <link href="{{'frontend/templates/default/assets/css/custom.css'}}" rel="stylesheet" type="text/css" />
            <link href="{{'frontend/templates/default/assets/css/layout.css'}}" rel="stylesheet" type="text/css" />
            @yield('head.css')
            @yield('head.js')
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
                        <!--Content-->
                        @yield('body.content')
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