@extends('frontend.layouts.plane')
@section('head.css')
<link href="{{'frontend/css/become-instructor.css'}}" rel="stylesheet" type="text/css" />
@stop
@section('body')
<div class="page">
   <div class="page__canvas">
      <div class="canvas">
         <div class="js-canvas__body canvas__body">
            <div class="grid-container">
            </div>
            <div class="canvas__header">
               <div class="site-header">
                  <div id="header-wrap" class="clearheader">
                     <header id="header" class="grid-container">
                        <a id="logo" class="columns three" href="{{route('home.become_instructor')}}">
                        <img src="{{'frontend/images/logo_teach.png'}}" class="scale-with-grid">
                        </a>
                        <nav id="navigation" class="columns thirteen">
                           <div class="menu-global-container">
                              <ul id="menu-global" class="nav clearfix">
                                 <li id="menu-item-11978" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11978"><a href=""><span>???</span></a></li>
                                 <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8117"><a href="#"><span>Bảo mật khóa học</span></a></li>
                                 <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1254"><a href="#"><span>Quảng bá khóa học</span></a></li>
                                 <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1250"><a href="#"><span>Tạo khóa học</span></a></li>
                              </ul>
                           </div>
                        </nav>
                        <!-- /navigation -->
                        <!--        <div class="columns two"> </div>-->
                     </header>
                     <!-- /header -->
                  </div>
               </div>
               <!--/site header-->
            </div>
            <!--/canvas header-->
            <div class="js-canvas__body canvas__body">
            <div class="grid-container">
                        </div>
               <div class="content-container">
               <div class="faceted-search js-faceted-search">
                  <div class="content-main--basic">
                     <span style="color: red">content
                     ád
                     fas
                     df
                     ádf
                     ádf
</span>
                  </div>
                  </div>
               </div>
               @include('frontend.partials.footer')
            </div>
            <!--/canvas body-->
         </div>
      </div>
   </div>
</div>
@stop