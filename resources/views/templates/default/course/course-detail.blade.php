@extends ('templates.default.master.course-master')
@section ('head.title')
Enesy | Khóa học lập trình AutoCAD với C# trình độ cơ bản
@stop
@section ('head.css')
<link href="{{'templates/default/assets/css/course.css'}}" rel="stylesheet" type="text/css" />
@stop
@section ('body.content')
<div class="context-header ">
   <div class="grid-container ">
      <nav class="breadcrumbs h-text-truncate ">
         <a href="{{route('home')}}">Trang chủ</a>
         <a href="{{route('courses.index')}}">Khóa học</a>
         <a href="#">CNTT &amp; Phần mềm</a>
         <a href="#">AutoCAD</a>
      </nav>
      <div class="item-header" data-view="itemHeader">
         <div class="item-header__title">
            <h1 class="t-heading -color-inherit -size-l h-m0 is-hidden-phone" itemprop="name">
               Khóa học lập trình AutoCAD với C# - trình độ cơ bản
            </h1>
            <h1 class="t-heading -color-inherit -size-xs h-m0 is-hidden-tablet-and-above">
               Khóa học lập trình AutoCAD với C# - trình độ cơ bản
            </h1>
         </div>
         <div class="item-header__price">
            <a class="js-item-header__cart-button e-btn--3d -color-primary -size-m" rel="nofollow" title="Add to Cart" data-view="modalAjax" href="">
            <span class="item-header__cart-button-icon">
            <i class="e-icon -icon-cart -margin-right"></i>
            </span>
            <span class="t-heading -size-m -color-light -margin-none">
            <b class="t-currency"><span class="js-item-header__price">699<sup>k</sup></span></b>
            </span>
            </a>          
         </div>
      </div>
      <!-- Desktop Item Navigation -->
      <div class="is-hidden-tablet-and-below page-tabs">
         <ul>
            <li class="selected"><a class="t-link -decoration-none" href="#">Thông tin khóa học</a></li>
            <li><a class="t-link -decoration-none" href="#">Đánh giá</a></li>
            <li><a class="t-link -decoration-none" href="#">Bình luận</a></li>
            <li><a class="t-link -decoration-none" href="#">Hỗ trợ</a></li>
         </ul>
      </div>
      <!-- Table or below Item Navigation -->
      <div class="page-tabs--dropdown" data-view="replaceItemNavsWithRemote" data-target=".js-remote">
         <div class="page-tabs--dropdown__slt-custom-wlabel">
            <div class="slt-custom-wlabel--page-tabs--dropdown">
               <label>
               <span class="js-label">
               Thông tin khóa học
               </span>
               <span class="slt-custom-wlabel__arrow">
               <i class="e-icon -icon-arrow-fill-down"></i>
               </span>
               </label>
               <select class="js-remote">
                  <option selected="selected" data-url="#">Thông tin khóa học</option>
                  <option data-url="#">Đánh giá</option>
                  <option data-url="#">Bình luận</option>
                  <option data-url="#">Hỗ trợ</option>
               </select>
            </div>
         </div>
      </div>
   </div>
</div>
<!--#Context Header-->
<div class="content-main" id="content">
   <div class="grid-container">
      <link itemprop="thumbnailUrl" href="https://0.s3.envato.com/files/213029039/Thumbnail.jpg">
      <div class="content-s">
         <div class="box--no-padding">
            <div class="item-preview -preview-live">
               <a target="_blank" href=""><img alt="EduLearn - Education, School &amp; Courses HTML Template - Business Corporate" itemprop="image" src="{{url('templates/default/assets/images/courses/preview-images/course-preview-image.jpg')}}">
                              <div class="" ng-show="showPlaceholderPlayButton" style="">
                        <div class="play-button play-button--initially-visible" data-purpose="video-play-button-initial"></div>
                    </div></a>
               <div class="item-preview__actions">
                  <div id="fullscreen" class="item-preview__preview-buttons">
                     <a data-view="crossDomainGoogleAnalyticsLink" href="#" role="button" class="btn-icon live-preview" target="_blank" rel="nofollow">2,000 học viên</a><a data-view="screenshotGallery" href="" role="button" class="btn-icon screenshots" target="_blank">48 giờ học</a>
                  </div>
                  <div class="item-preview__preview-buttons--social" data-view="socialButtons">
                     <div class="btn-group">
                        <div class="btn btn--label btn--group-item">Chia sẻ</div>
                        <a class="btn btn--group-item" data-social-network-link="" href=""><i class="e-icon -icon-facebook -size-medium -line-height-small"><span class="e-icon__alt">Facebook</span></i></a>
                        <a class="btn btn--group-item" data-social-network-link="" href="https://plus.google.com/share?url=https%3A%2F%2Fthemeforest.net%2Fitem%2Fedulearn-education-school-courses-html-template%2F17695406%3Futm_source%3Dsharegp"><i class="e-icon -icon-google-plus -size-medium -line-height-small"><span class="e-icon__alt">Google Plus</span></i></a>
                        <a class="btn btn--group-item" data-social-network-link="" href="https://twitter.com/intent/tweet?text=Check+out+%27EduLearn+-+Education%2C+School+%26+Courses+HTML+Template%27+on+%23EnvatoMarket+by+%40cowthemes+%23themeforest&amp;url=https%3A%2F%2Fthemeforest.net%2Fitem%2Fedulearn-education-school-courses-html-template%2F17695406%3Futm_source%3Dsharetw"><i class="e-icon -icon-twitter -size-medium -line-height-small"><span class="e-icon__alt">Twitter</span></i></a>
                        <a class="btn btn--group-item" data-social-network-link="" href="http://pinterest.com/pin/create/button?description=EduLearn+-+Education%2C+School+%26+Courses+HTML+Template&amp;media=http%3A%2F%2F0.s3.envato.com%2Ffiles%2F208388954%2FTheme%2520Preview%2F01-theme-preview.__large_preview.jpg&amp;url=https%3A%2F%2Fthemeforest.net%2Fitem%2Fedulearn-education-school-courses-html-template%2F17695406%3Futm_source%3Dsharepi"><i class="e-icon -icon-pinterest -size-medium -line-height-small"><span class="e-icon__alt">Pinterest</span></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div data-view="toggleItemDescription">
            <div class="js-item-description item-description has-toggle" itemprop="description">
               <div class="user-html">
                  Chi tiết khóa học ở đây
               </div>
            </div>
            <div class="js-item-description-toggle item-description-toggle">
               <a class="item-description-toggle__link" href="#">
               <span>Show More <i class="e-icon -icon-chevron-down"></i></span>
               <span class="item-description-toggle__less">Show Less <i class="e-icon -icon-chevron-down -rotate-180"></i></span>
               </a>        
            </div>
         </div>
         <section data-view="recommendedItems" data-url="/item/edulearn-education-school-courses-html-template/17695406/recommended_items" id="recommended_items"></section>
         <section class="related-by-author h-my2 h-pb1">
            <h1 class="t-heading -size-xs -weight-normal">Các khóa học khác từ giảng viên Đỗ Trường Quân</h1>
            <div class="related-by-author__list h-py1" data-view="productList">
               <ul class="item-thumbnail-carousel--item-page overthrow">
                  <li class="item-thumbnail-container">
                     <div class="item-thumbnail__image">
                        <a class="js-google-analytics__list-event-trigger" href="https://themeforest.net/item/architecture-interior-design-decor-architecture-template/19321225"><img border="0" alt="Architecture - Interior Design, Decor &amp; Architecture Template - ThemeForest Item for Sale" title="Architecture - Interior Design, Decor &amp; Architecture Template" height="80" width="80" class="landscape-image-magnifier preload no_preview" data-preview-width="" data-preview-height="" data-item-name="Architecture - Interior Design, Decor &amp; Architecture Template" data-item-author="cowthemes" data-item-id="19321225" data-item-category="Site Templates / Corporate / Business" data-item-cost="20" data-google-analytics-payload="{&quot;actionData&quot;:null,&quot;productsArray&quot;:[{&quot;id&quot;:19321225,&quot;name&quot;:&quot;Architecture - Interior Design, Decor \u0026 Architecture Template&quot;,&quot;brand&quot;:&quot;cowthemes&quot;,&quot;category&quot;:&quot;themeforest.net/category/site-templates/corporate/business&quot;,&quot;position&quot;:1,&quot;list&quot;:&quot;Item page: More items by this author&quot;}],&quot;timestamp&quot;:1486520806}" data-preview-url="https://preview-tf.s3.envato.com/files/219966830/Theme%20Preview/01_Theme_Preview.__large_preview.jpg" src="https://thumb-tf.s3.envato.com/files/220489054/Thumbnail.jpg"></a>
                     </div>
                  </li>
                  <li class="item-thumbnail-container">
                     <div class="item-thumbnail__image">
                        <a class="js-google-analytics__list-event-trigger" href="https://themeforest.net/item/digital-industry-industrial-business-joomla-template/19268979"><img border="0" alt="Digital Industry - Industrial Business Joomla Template - ThemeForest Item for Sale" title="Digital Industry - Industrial Business Joomla Template" height="80" width="80" class="landscape-image-magnifier preload no_preview" data-preview-width="" data-preview-height="" data-item-name="Digital Industry - Industrial Business Joomla Template" data-item-author="cowthemes" data-item-id="19268979" data-item-category="CMS Themes / Joomla / Corporate / Business" data-item-cost="49" data-google-analytics-payload="{&quot;actionData&quot;:null,&quot;productsArray&quot;:[{&quot;id&quot;:19268979,&quot;name&quot;:&quot;Digital Industry - Industrial Business Joomla Template&quot;,&quot;brand&quot;:&quot;cowthemes&quot;,&quot;category&quot;:&quot;themeforest.net/category/cms-themes/joomla/corporate/business&quot;,&quot;position&quot;:2,&quot;list&quot;:&quot;Item page: More items by this author&quot;}],&quot;timestamp&quot;:1486520806}" data-preview-url="https://preview-tf.s3.envato.com/files/219461945/preview.__large_preview.jpg" src="https://thumb-tf.s3.envato.com/files/219461937/Thumbnail.jpg"></a>
                     </div>
                  </li>
                  
               </ul>
            </div>
            <div>
               <p class="t-body -size-m">
                  <a class="t-link-decoration-reversed" href="#">Xem hồ sơ giảng viên</a>
               </p>
            </div>
         </section>
      </div>
      <div class="sidebar-l sidebar-right hentry">
         <div class="js-pricebox__regular pricebox-container" itemscope="itemscope" itemtype="http://schema.org/Product">
            <meta itemprop="name" content="EduLearn - Education, School &amp; Courses HTML Template">
            <div class="purchase-panel">
               <div id="purchase-form" class="purchase-form">
                  <form action="" accept-charset="UTF-8" method="post">
                     <input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" value="">
                     <div itemprop="offers" itemscope="" itemtype="">
                        <meta itemprop="price" content="20.00">
                        <meta itemprop="priceCurrency" content="USD">
                        <meta itemprop="availability" content="instock">
                        <div data-view="itemVariantSelector">
                           <div class="purchase-form__selection">
                              <span class="purchase-form__license-type">
                                 <span data-view="flyout" class="flyout">
                                    <span class="js-license-selector__chosen-license">Bạn sẽ học gì?</span>
                                 </span>
                              </span>
                              <div class="js-purchase-heading purchase-form__price t-heading -size-xxl">
                                 <b class="t-currency"><span class="js-purchase-price">k699</span></b>
                              </div>
                           </div>
                           <div class="purchase-form__license js-purchase-license is-active" data-license="regular">
                              <input type="hidden" name="size_regular" id="size_regular" value="source" class="js-purchase-hidden-license is-active" data-size="source" data-price-prepaid="$20" data-license="regular" data-price-prepaid-upgrade="$26" data-support-upgrade-price="$6" data-support-upgrade-saving="$8" data-support-extension-price="$10" data-support-extension-saving="$4">
                           </div>
                           <div class="purchase-form__license js-purchase-license" data-license="extended">
                              <input type="hidden" name="size_extended" id="size_extended" value="source" class="js-purchase-hidden-license" data-size="source" data-price-prepaid="$800" data-license="extended" data-price-prepaid-upgrade="$1025" data-support-upgrade-price="$225" data-support-upgrade-saving="$300" data-support-extension-price="$375" data-support-extension-saving="$150">
                           </div>
                           <div class="purchase-form__support">
                              <ul class="t-icon-list -font-size-s -icon-size-s -offset-flush">
                                 <li class="t-icon-list__item -icon-ok">
                                    <span class="is-visually-hidden">Included:</span>
                                    Lập trình với AutoCAD thành thạo
                                 </li>
                                 <li class="t-icon-list__item -icon-ok">
                                    <span class="is-visually-hidden">Included:</span>
                                    Tự viết các ứng dụng cơ bản
                                 </li>
                                 <li class="t-icon-list__item -icon-ok">
                                    <span class="is-visually-hidden">Included:</span>
                                    Hỗ trợ ....
                                 </li>
                                 <li class="t-icon-list__item -icon-ok">
                                    <span class="is-visually-hidden">Included:</span>
                                    Hỗ trợ ....
                                 </li>
                                 <li class="t-icon-list__item -icon-ok">
                                    <span class="is-visually-hidden">Included:</span>
                                    Hỗ trợ ....
                                 </li>
                                 <li class="t-icon-list__item -icon-ok">
                                    <span class="is-visually-hidden">Included:</span>
                                    Hỗ trợ ....
                                 </li>
                                 <li class="t-icon-list__item -icon-ok">
                                    <span class="is-visually-hidden">Included:</span>
                                    Hỗ trợ ....
                                 </li>
                                 <li class="t-icon-list__item -icon-ok">
                                    <span class="is-visually-hidden">Included:</span>
                                    Hỗ trợ ....
                                 </li>
                                 <li class="t-icon-list__item -icon-ok">
                                    <span class="is-visually-hidden">Included:</span>
                                    Hỗ trợ ....
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <div class="purchase-form__button">
                           <button name="button" type="submit" class="js-purchase__add-to-cart e-btn--3d -color-primary -size-m -width-full">
                           <i class="e-icon -icon-cart -margin-right"></i> <strong>Mua khóa học</strong>
                           </button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
         <div class="box -radius-all">
            <div class="media">
               <div class="media__item">
                  <div class="avatar-wrapper tooltip-advanced">
                     <a class="avatar" title="cowthemes" href="">
                     <img width="80" height="80" alt="cowthemes" src="{{url('templates/default/assets/images/authors/default-user-thumb.png')}}">
                     </a>
                  </div>
               </div>
               <div class="media__body">
                  <h2 class="t-heading -size-s">
                     <a rel="author" class="t-link -color-dark -decoration-none" href="">Đỗ Trường Quân</a>
                  </h2>
                  <div class="author-desc">
                     Kỹ sư cầu đường với 05 năm kinh nghiệm thiết kế các dự án lớn như: Hầm đường bộ qua Đèo Cả, mở rộng hầm hải Vân. Chuyên gia lập trình AutoCAD .NET với hơn 8 năm làm việc với các ngôn ngữ lập trình AutoCAD như: AutoLISP, VBA, C#, C++
                  </div>
               </div>
            </div>
            <div class="h-mt1">
               <a class="e-btn--3d -color-light -width-full" href="">Xem hồ sơ giảng viên</a>
            </div>
         </div>

         <div class="t-body -size-s h-text-align-center h-mt2">
            © Đỗ Trường Quân và Enesy giữ bản quyền khóa học này
            <br>
            <a href="#">Liên hệ bản quyền tại đây</a>
         </div>
      </div>
   </div>
</div>
@stop