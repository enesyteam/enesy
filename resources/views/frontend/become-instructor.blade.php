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
      <section id="sliderCTA" class="clearfix">
            <div class="box_padding">
    <h3>Tạo khóa học của bạn</h3>
    <p>Nhập tiêu đề và bắt đầu lên ý tưởng cho khóa học</p>
    <form action="#" class="create-course-form" method="get">
                <input name="title" type="text" class="middle create-course__input" placeholder="Tiêu đề cho khóa học" maxlength="60" required="required" oninvalid="this.setCustomValidity('Vui lòng nhập tiêu đề khóa học')" oninput="setCustomValidity('')" vk_1ecd7="subscribed" vk_1ef21="subscribed">
        <button type="submit" class="middle create_course button">Tạo khóa học</button>
    </form>
</div>        </section>
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
         <ul class="home-section-marketing__item_list">
        <li class="home-section-marketing__item h-text-align-center">
          <div class="home-section-marketing__item-image">
            <img alt="All the themes you need" src="//public-assets.envato-static.com/assets/ingested_content/home/marketing/tf_support-807c98893a7e42e0b03721406f2447aa.png">
          </div>
          <p class="t-body"></p><p><h10 class="t-body -weight-bold">Title here here here!.</h10></p><p>Viết gì đây cho nó hay hay tí nhỉ? Viết gì đây cho nó hay hay tí nhỉ? Viết gì đây cho nó hay hay tí nhỉ? .</p><p></p>
        </li>
        <li class="home-section-marketing__item h-text-align-center">
          <div class="home-section-marketing__item-image">
            <img alt="Know your template" src="//public-assets.envato-static.com/assets/ingested_content/home/marketing/tf_everything-230c90dd918293a5a877eabf493f1af8.png">
          </div>
          <p class="t-body"></p><p><h10 class="t-body -weight-bold">Title here here here!.</h10></p><p>Viết gì đây cho nó hay hay tí nhỉ? Viết gì đây cho nó hay hay tí nhỉ? Viết gì đây cho nó hay hay tí nhỉ? .</p><p></p>
        </li>
        <li class="home-section-marketing__item h-text-align-center">
          <div class="home-section-marketing__item-image">
            <img alt="Everything you need in one place" src="//public-assets.envato-static.com/assets/ingested_content/home/marketing/tf_discover-71af82e66c09d29fd128aa10502b28fb.png">
          </div>
          <p class="t-body"></p><p><h10 class="t-body -weight-bold">Title here here here!.</h10></p><p>Viết gì đây cho nó hay hay tí nhỉ? Viết gì đây cho nó hay hay tí nhỉ? Viết gì đây cho nó hay hay tí nhỉ? .</p><p></p>
        </li>
        <li class="home-section-marketing__item h-text-align-center">
          <div class="home-section-marketing__item-image">
            <img alt="All the themes you need" src="//public-assets.envato-static.com/assets/ingested_content/home/marketing/tf_support-807c98893a7e42e0b03721406f2447aa.png">
          </div>
          <p class="t-body"></p><p><h10 class="t-body -weight-bold">Title here here here!.</h10></p><p>Viết gì đây cho nó hay hay tí nhỉ? Viết gì đây cho nó hay hay tí nhỉ? Viết gì đây cho nó hay hay tí nhỉ? .</p><p></p>
        </li>
        <li class="home-section-marketing__item h-text-align-center">
          <div class="home-section-marketing__item-image">
            <img alt="Know your template" src="//public-assets.envato-static.com/assets/ingested_content/home/marketing/tf_everything-230c90dd918293a5a877eabf493f1af8.png">
          </div>
          <p class="t-body"></p><p><h10 class="t-body -weight-bold">Title here here here!.</h10></p><p>Viết gì đây cho nó hay hay tí nhỉ? Viết gì đây cho nó hay hay tí nhỉ? Viết gì đây cho nó hay hay tí nhỉ? .</p><p></p>
        </li>
        <li class="home-section-marketing__item h-text-align-center">
          <div class="home-section-marketing__item-image">
            <img alt="Everything you need in one place" src="//public-assets.envato-static.com/assets/ingested_content/home/marketing/tf_discover-71af82e66c09d29fd128aa10502b28fb.png">
          </div>
          <p class="t-body"></p><p><h10 class="t-body -weight-bold">Title here here here!.</h10></p><p>Viết gì đây cho nó hay hay tí nhỉ? Viết gì đây cho nó hay hay tí nhỉ? Viết gì đây cho nó hay hay tí nhỉ? .</p><p></p>
        </li>
    </ul>
      </article>
   </div>
</section>
<!--/Section-->
<!--Section-->
<section class="c_section">
   <div class="container">
      <article class="row w100">
         <h2 class="c_section__title">Đang nghĩ tiêu đề</h2>
         <div class="intro_text">Section này sẽ nói về những gì Enesy cần làm để giúp đỡ giảng viên tạo khóa học, Enesy sẽ hiệu chỉnh khóa học như thế nào, các yêu cầu cần đạt được của khóa học như thế nào để ...</div>
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
         <div class="columns eight mt10 mb10">
            <div class="success_quote">
               <div class="quote_image columns three alpha"><img src="{{'frontend/images/obama.jpg'}}" alt="Marc Garcia" class="scale-with-grid" style="width: 160px"></div>
               <div class="quote_content columns five omega">
                  <h4>Obama</h4>
                  <div class="quote_box">
                     <p>“Hợp tác giảng dạy với Enesy đã mở ra cho tôi rất nhiều cánh cửa mới. Tôi làm việc để tích lũy kinh nghiệm, tôi truyền lại kinh nghiệm cho các bạn trẻ”</p>
                     <p class="quotes_info">xxx | Kỹ sư CNTT | 10 khóa học</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="columns eight mt10 mb10">
            <div class="success_quote">
               <div class="quote_image columns three alpha"><img src="{{'frontend/images/putin.jpg'}}" alt="Marc Garcia" class="scale-with-grid" style="width: 160px"></div>
               <div class="quote_content columns five omega">
                  <h4>Putin</h4>
                  <div class="quote_box">
                     <p>“Hợp tác giảng dạy với Enesy đã mở ra cho tôi rất nhiều cánh cửa mới. Tôi làm việc để tích lũy kinh nghiệm, tôi truyền lại kinh nghiệm cho các bạn trẻ”</p>
                     <p class="quotes_info">xxx | Kỹ sư CNTT | 10 khóa học</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="columns eight mt10 mb10">
            <div class="success_quote">
               <div class="quote_image columns three alpha"><img src="{{'frontend/images/kim.jpg'}}" alt="Marc Garcia" class="scale-with-grid" style="width: 160px"></div>
               <div class="quote_content columns five omega">
                  <h4>Kim Yoong Un</h4>
                  <div class="quote_box">
                     <p>“Hợp tác giảng dạy với Enesy đã mở ra cho tôi rất nhiều cánh cửa mới. Tôi làm việc để tích lũy kinh nghiệm, tôi truyền lại kinh nghiệm cho các bạn trẻ”</p>
                     <p class="quotes_info">xxx | Kỹ sư CNTT | 10 khóa học</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="columns eight mt10 mb10">
            <div class="success_quote">
               <div class="quote_image columns three alpha"><img src="{{'frontend/images/trinh.jpg'}}" alt="Marc Garcia" class="scale-with-grid" style="width: 160px"></div>
               <div class="quote_content columns five omega">
                  <h4>Ngọc Trinh</h4>
                  <div class="quote_box">
                     <p>“Hợp tác giảng dạy với Enesy đã mở ra cho tôi rất nhiều cánh cửa mới. Tôi làm việc để tích lũy kinh nghiệm, tôi truyền lại kinh nghiệm cho các bạn trẻ”</p>
                     <p class="quotes_info">xxx | Kỹ sư CNTT | 10 khóa học</p>
                  </div>
               </div>
            </div>
         </div>
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