@extends('frontend.layouts.plane')

@section('body')
             <div class="page">
               <div class="page__canvas">
                  <div class="canvas">
                     <div class="canvas__header">
                        <div class="site-header">
                           @yield('top-header')
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
                        @yield('section')
                        <!--#grid container-->
                        
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

