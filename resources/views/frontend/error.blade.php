@extends('frontend.layouts.dashboard')
@section('top-header')
<!--Top Header-->
@include('frontend.partials.top-header-message')
<!--#Top Header-->
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
@section('section')
<!--Content-->
<div class="content-container">
	<div class="content-main--basic">
  		<div>
	     	<div class="grid-container">
	            <div class="content-l -size-scale-tablet content-right">
	               	<div>
		               	<h2 class="t-heading -weight-light -size-xs h-mb1 ml-5">Thôi xong - 404 rồi!</h2>  
		               	<p>Xin lỗi, chúng tôi không tìm thấy yêu cầu của bạn!</p>
						<p>(Có thể người ngoài hành tinh đang cố gắng khai thác nó để làm hại Trái Đất).</p>           
	            	</div>
	         	</div>
	      	</div>
	   </div>
	</div>
</div>
<!--#Content-->
 @stop