@extends('frontend.master.teach-master')
@section('head.css')
<link href="{{'frontend/css/about.css'}}" rel="stylesheet" type="text/css" />
<link href="{{'frontend/css/become-instructor.css'}}" rel="stylesheet" type="text/css" />
@stop
@section('section')
<section class="c_hero" style="background-image: url('frontend/images/man_learning.jpg');">
   <div class="container grid-container">
      <div class="vertical-align">
         <h2 class="c_hero__title">Viết gì đây?</h2>
         <p class="c_hero__desc">...blah blah blah blah blah blah blah blah blah blah blah blah blah blah .</p>
      </div>
   </div>
</section>
<div class="container grid-container container--small">
   <section class="c_section">
      <div class="container">
         <article class="row w100">
            <h2 class="c_section__title">Thống kê nhanh Enesy</h2>
            <div class="intro_text"></div>
         </article>
         <div class="row content_number">
            <div class="number">
               <!--<img src="{{'frontend/images/icons/person.png'}}">-->
               <span class="number">200+</span>
               <span class="description">Giảng viên <br> &amp; Chuyên gia</span>
            </div>
            <div class="number">
               <!--<img src="{{'frontend/images/icons/person.png'}}">-->
               <span class="number">1,500+</span>
               <span class="description">Học viên<br>hàng tháng</span>
            </div>
            <div class="number">
               <!--<img src="{{'frontend/images/icons/person.png'}}">-->
               <span class="number">350+ </span>
               <span class="description">Khóa học <br> chuyên nghiệp</span>
            </div>
            <div class="number">
               <!--<img src="{{'frontend/images/icons/person.png'}}">-->
               <span class="number">8tr+</span>
               <span class="description">Thu nhập trung bình<br> /giảng viên/tháng</span>
            </div>
         </div>
      </div>
   </section>
</div>
<!--Section-->
<section class="c_section bg-e9">
   <div class="container">
      <article class="row w100">
         <h2 class="c_section__title">Quy trình dành cho giảng viên</h2>
         <div class="intro_text"></div>
      </article>
   </div>
</section>
<!--/Section-->
<!--Section-->
<section class="c_section">
   <div class="container">
      <article class="row w100">
         <h2 class="c_section__title">Section gì đây?</h2>
         <div class="intro_text"></div>
      </article>
   </div>
</section>
<!--/Section-->
<!--Section-->
<section class="c_section bg-e9">
   <div class="container">
      <article class="row w100">
         <h2 class="c_section__title">Giảng viên nói gì về Enesy?</h2>
         <div class="intro_text"></div>
      </article>
   </div>
</section>
<!--/Section-->
<!--Section-->
<section class="c_section bg-highlight">
   <div class="container">
      <article class="row w100">
         <h2 class="c_section__title color-white">Sẵn sàng tạo khóa học của chính bạn?</h2>
         <div class="intro_text color-white">
            <p>Đừng lo, bạn chỉ cần nêu ý tưởng, chúng tôi sẽ liên lạc lại ngay!</p>
         </div>
      </article>
      <article class="row w100">
         <form action="#" class="create-course-form" method="get">
            <input name="title" type="text" class="middle create-course__input" placeholder="Nhập tiêu đề khóa học" maxlength="60" required="required" vk_1307e="subscribed">
            <button type="submit" class="middle create_course button">Bắt đầu tạo khóa học</button>
         </form>
      </article>
   </div>
</section>
<!--/Section-->
@stop