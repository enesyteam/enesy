@extends ('frontend.master.course-master')
@section ('head.title')
Enesy | Đang xem Khóa học lập trình AutoCAD với C# trình độ cơ bản
@stop
@section('head.css')
<link href="{{'frontend/css/course-view.css'}}" rel="stylesheet" type="text/css" />
@stop
@section('body.content')
<div class="content-container">
   <div class="content-main" id="content">
      <div class="grid-container">
         <div id="page" class="watch">
            <div id="player" class="">
               <div class="player-height">
                  <!--Player-->
                  <div class="player-mole-container">
                     <div id="player-api" class="player-width player-height off-screen-target player-api">
                        <div class="html5-video-player">
                        <div style="height: 100%;width: 100%;line-height: 360px;text-align: center;font-size: 30px;">            <video height="360" controls>
              <source src="{{url('frontend/images/courses/course-preview.mp4')}}" type="video/mp4">
            Your browser does not support the video tag.
            </video></div>
                        </div>
                     </div>
                     <!--Playlist-->
                     <div id="player-playlist" class="">
                        <div id="watch-appbar-playlist" class="watch-playlist player-height">
                           <div class="main-content">
                              <div class="playlist-header">
                                 <div class="playlist-header-content">
                                    <div class="appbar-playlist-controls clearfix">
                                       <span class="yt-uix-clickcard">
                                          <span class="yt-uix-clickcard-target" data-position="bottomright" data-orientation="vertical">
                                          <button class="yt-uix-button yt-uix-button-size-default yt-uix-button-player-controls yt-uix-button-empty yt-uix-button-has-icon no-icon-markup yt-uix-playlistlike watch-playlist-like yt-uix-button-opacity yt-uix-tooltip"></button>
                                          </span>
                                          <div class="signin-clickcard yt-uix-clickcard-content">
                                             <h3 class="signin-clickcard-header">+</h3>
                                             <div class="signin-clickcard-message">
                                             </div>
                                          </div>
                                       </span>
                                    </div>
                                    <div class="playlist-info">
                                       <h3 class="playlist-title">
                                          <a href="#" class=" yt-uix-sessionlink spf-link" title="Khóa học lập trình AutoCAD với C# - trình độ cơ bản">Lập trình AutoCAD với C# - trình độ cơ bản</a>
                                       </h3>
                                       <ul class="playlist-details">
                                          <li class="author-attribution">
                                             <a href="#" class=" yt-uix-sessionlink spf-link ">Đỗ Trường Quân</a>
                                          </li>
                                          <li class="playlist-progress">
                                             <span id="playlist-current-index">3</span><span id="playlist-length">3 videos</span>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                              <div class="playlist-videos-container yt-scrollbar-dark yt-scrollbar">
                                 <ol id="playlist-autoscroll-list" class="playlist-videos-list yt-uix-scroller">
                                    <!--Lesson-->
                                    <li class="yt-uix-scroller-scroll-unit">
                                       <span class="index">
                                       1
                                       </span>
                                       <a href="#" class=" spf-link  playlist-video clearfix  yt-uix-sessionlink      spf-link ">
                                          <span class="video-thumb  yt-thumb yt-thumb-72">
                                          <span class="yt-thumb-default">
                                          <span class="yt-thumb-clip">
                                          <img alt="" aria-hidden="true" width="72" src="frontend/images/courses/lecture_thumb.jpg">
                                          <span class="vertical-align"></span>
                                          </span>
                                          </span>
                                          </span>
                                          <div class="playlist-video-description">
                                             <h4 class="yt-ui-ellipsis yt-ui-ellipsis-2">
                                                Tiêu đề bài học ở đây
                                             </h4>
                                             <span class="video-uploader-byline">
                                             <span class="" data-ytid="UCIdYTLffZ_SKITZihrlSACQ">Đỗ Trường Quân</span>
                                             </span>
                                          </div>
                                       </a>
                                    </li>
                                    <!--#Lesson-->
                                    <!--Lesson-->
                                    <li class="yt-uix-scroller-scroll-unit currently-playing">
                                       <span class="index">
                                       2
                                       </span>
                                       <a href="#" class=" spf-link  playlist-video clearfix  yt-uix-sessionlink      spf-link ">
                                          <span class="video-thumb  yt-thumb yt-thumb-72">
                                          <span class="yt-thumb-default">
                                          <span class="yt-thumb-clip">
                                          <img alt="" aria-hidden="true" width="72" src="frontend/images/courses/lecture_thumb.jpg">
                                          <span class="vertical-align"></span>
                                          </span>
                                          </span>
                                          </span>
                                          <div class="playlist-video-description">
                                             <h4 class="yt-ui-ellipsis yt-ui-ellipsis-2">
                                                Tiêu đề bài học ở đây
                                             </h4>
                                             <span class="video-uploader-byline">
                                             <span class="" data-ytid="UCIdYTLffZ_SKITZihrlSACQ">Đỗ Trường Quân</span>
                                             </span>
                                          </div>
                                       </a>
                                    </li>
                                    <!--#Lesson-->
                                    <!--Lesson-->
                                    <li class="yt-uix-scroller-scroll-unit ">
                                       <span class="index">
                                       3
                                       </span>
                                       <a href="#" class=" spf-link  playlist-video clearfix  yt-uix-sessionlink      spf-link ">
                                          <span class="video-thumb  yt-thumb yt-thumb-72">
                                          <span class="yt-thumb-default">
                                          <span class="yt-thumb-clip">
                                          <img alt="" aria-hidden="true" width="72" src="frontend/images/courses/lecture_thumb.jpg">
                                          <span class="vertical-align"></span>
                                          </span>
                                          </span>
                                          </span>
                                          <div class="playlist-video-description">
                                             <h4 class="yt-ui-ellipsis yt-ui-ellipsis-2">
                                                Tiêu đề bài học ở đây
                                             </h4>
                                             <span class="video-uploader-byline">
                                             <span class="" data-ytid="UCIdYTLffZ_SKITZihrlSACQ">Đỗ Trường Quân</span>
                                             </span>
                                          </div>
                                       </a>
                                    </li>
                                    <!--#Lesson-->
                                    <!--Lesson-->
                                    <li class="yt-uix-scroller-scroll-unit ">
                                       <span class="index">
                                       4
                                       </span>
                                       <a href="#" class=" spf-link  playlist-video clearfix  yt-uix-sessionlink      spf-link ">
                                          <span class="video-thumb  yt-thumb yt-thumb-72">
                                          <span class="yt-thumb-default">
                                          <span class="yt-thumb-clip">
                                          <img alt="" aria-hidden="true" width="72" src="frontend/images/courses/lecture_thumb.jpg">
                                          <span class="vertical-align"></span>
                                          </span>
                                          </span>
                                          </span>
                                          <div class="playlist-video-description">
                                             <h4 class="yt-ui-ellipsis yt-ui-ellipsis-2">
                                                Tiêu đề bài học ở đây
                                             </h4>
                                             <span class="video-uploader-byline">
                                             <span class="" data-ytid="UCIdYTLffZ_SKITZihrlSACQ">Đỗ Trường Quân</span>
                                             </span>
                                          </div>
                                       </a>
                                    </li>
                                    <!--#Lesson-->
                                    <!--Lesson-->
                                    <li class="yt-uix-scroller-scroll-unit ">
                                       <span class="index">
                                       5
                                       </span>
                                       <a href="#" class=" spf-link  playlist-video clearfix  yt-uix-sessionlink      spf-link ">
                                          <span class="video-thumb  yt-thumb yt-thumb-72">
                                          <span class="yt-thumb-default">
                                          <span class="yt-thumb-clip">
                                          <img alt="" aria-hidden="true" width="72" src="frontend/images/courses/lecture_thumb.jpg">
                                          <span class="vertical-align"></span>
                                          </span>
                                          </span>
                                          </span>
                                          <div class="playlist-video-description">
                                             <h4 class="yt-ui-ellipsis yt-ui-ellipsis-2">
                                                Tiêu đề bài học ở đây
                                             </h4>
                                             <span class="video-uploader-byline">
                                             <span class="" data-ytid="UCIdYTLffZ_SKITZihrlSACQ">Đỗ Trường Quân</span>
                                             </span>
                                          </div>
                                       </a>
                                    </li>
                                    <!--#Lesson-->
                                    <!--Lesson-->
                                    <li class="yt-uix-scroller-scroll-unit ">
                                       <span class="index">
                                       6
                                       </span>
                                       <a href="#" class=" spf-link  playlist-video clearfix  yt-uix-sessionlink      spf-link ">
                                          <span class="video-thumb  yt-thumb yt-thumb-72">
                                          <span class="yt-thumb-default">
                                          <span class="yt-thumb-clip">
                                          <img alt="" aria-hidden="true" width="72" src="frontend/images/courses/lecture_thumb.jpg">
                                          <span class="vertical-align"></span>
                                          </span>
                                          </span>
                                          </span>
                                          <div class="playlist-video-description">
                                             <h4 class="yt-ui-ellipsis yt-ui-ellipsis-2">
                                                Tiêu đề bài học ở đây
                                             </h4>
                                             <span class="video-uploader-byline">
                                             <span class="" data-ytid="UCIdYTLffZ_SKITZihrlSACQ">Đỗ Trường Quân</span>
                                             </span>
                                          </div>
                                       </a>
                                    </li>
                                    <!--#Lesson-->
                                 </ol>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--#Playlist-->
                  </div>
                  <!--#Player-->
               </div>
               <!--Watch container-->
               <div id="watch7-container">
                  <!--Player messages-->
                  <div id="player-messages">
                  </div>
                  <!--#Player messages-->
                  <div id="watch7-main-container">
                     <div id="watch7-main">
                        <div id="watch7-content" class="watch-main-col ">
                           <!--Watch header-->
                           <div id="watch-header" class="yt-card yt-card-has-padding">
                              <div id="watch7-headline" class="clearfix">
                                 <div id="watch-headline-title">
                                    <h1 class="watch-title-container">
                                       <span id="eow-title" class="watch-title" dir="ltr" title="[Đỗ Trường Quân] Tiêu đề bài học dài dài dài dài dài">
                                       [Đỗ Trường Quân] Tiêu đề bài học dài dài dài dài dài
                                       </span>
                                    </h1>
                                 </div>
                              </div>
                              <!--User-->
                              <div id="watch7-user-header" class=" spf-link ">
                                 <a href="#" class="yt-user-photo g-hovercard yt-uix-sessionlink      spf-link ">
                                 <span class="video-thumb  yt-thumb yt-thumb-48 g-hovercard">
                                 <span class="yt-thumb-square">
                                 <span class="yt-thumb-clip">
                                 <img width="48" height="48" alt="laptrinh.io" src="frontend/images/authors/default-user-thumb.png">
                                 <span class="vertical-align"></span>
                                 </span>
                                 </span>
                                 </span>
                                 </a>
                                 <div class="yt-user-info">
                                    <a href="#" class="g-hovercard yt-uix-sessionlink spf-link ">Đỗ Trường Quân</a>
                                 </div>
                              </div>
                              <span style="color: red"> Chưa biết nên hiển thị thông tin ở đây như thế nào?????</span>
                              <!--#User-->
                           </div>
                           <!--#Watch header-->
                           <!--Description-->
                           <div id="action-panel-details" class="action-panel-content yt-uix-expander yt-card yt-card-has-padding">
                              <div id="watch-description" class="yt-uix-button-panel">
                                 <div id="watch-description-content">
                                    <div id="watch-uploader-info">
                                       <strong class="watch-time-text">Tóm tắt bài học</strong>
                                    </div>
                                    <div id="watch-description-text" class="">
                                       <p id="eow-description" class="">Bài này bạn sẽ được học về blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah <strong>3 dòng</strong></p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!--#Description-->
                           <!--Comments-->
                           <div id="watch-discussion" class="branded-page-box yt-card scrolldetect">
                              <div id="comment-section-renderer" class="comment-section-renderer">
                                 <h2 class="comment-section-header-renderer" tabindex="0">
                                    <b>Comments</b><span class="alternate-content-link"></span>
                                 </h2>
                                 <!--Comment Input box-->
                                 <div class="comment-simplebox-renderer yt-uix-servicelink">
                                    <span class="video-thumb comment-author-thumbnail yt-thumb yt-thumb-48">
                                    <span class="yt-thumb-square">
                                    <span class="yt-thumb-clip">
                                    <img src="//s.ytimg.com/yts/img/avatar_48-vfllY0UTT.png" height="48" width="48" role="img" alt="Default profile photo" tabindex="0">
                                    <span class="vertical-align"></span>
                                    </span>
                                    </span>
                                    </span>
                                    <div class="comment-simplebox-renderer-collapsed comment-section-renderer-redirect" data-target="https://accounts.google.com/ServiceLogin?passive=true&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26app%3DNone%26hl%3Den%26next%3D%252Fwatch%253Fv%253D5BOcLWJcGWk&amp;uilel=3&amp;hl=en&amp;service=youtube">
                                       <div class="comment-simplebox-renderer-collapsed-content">Bình luận về bài học này...</div>
                                       <div class="comment-simplebox-arrow">
                                          <div class="arrow-inner"></div>
                                          <div class="arrow-outer"></div>
                                       </div>
                                    </div>
                                 </div>
                                 <!--#Comment Input box-->
                                 <!--Comment Filter-->
                                 <div class="yt-uix-menu comment-section-sort-menu">
                                    <button class="yt-uix-button yt-uix-button-size-default yt-uix-button-default  yt-uix-menu-trigger" type="button" onclick=";return false;" aria-label="Action menu." aria-haspopup="true" role="button" aria-pressed="false"><span class="yt-uix-button-content">Top comments</span><span class="yt-uix-button-arrow yt-sprite"></span></button>
                                    <div class="yt-uix-menu-content yt-ui-menu-content yt-uix-menu-content-hidden" role="menu">
                                       <ul>
                                          <li>  <button type="button" class="yt-ui-menu-item yt-uix-menu-close-on-select comment-section-sort-menu-item yt-uix-sessionlink" data-url="/comment_service_ajax?action_get_comments=1" data-menu_name="top-comments" data-token="EhYSCzVCT2NMV0pjR1drwAEAyAEA4AEBGAYyEyIPIgs1Qk9jTFdKY0dXazAAMAA%3D" data-sessionlink-target="/comment_service_ajax?action_get_comments=1" data-sessionlink="itct=CAIQ7pgBIhMI8M7LnMeT0gIViaNYCh1zwweb">
                                             <span class="yt-ui-menu-item-label">Top comments</span>
                                             </button>
                                          </li>
                                          <li>  <button type="button" class="yt-ui-menu-item yt-uix-menu-close-on-select comment-section-sort-menu-item yt-uix-sessionlink" data-url="/comment_service_ajax?action_get_comments=1" data-menu_name="newest-first" data-token="EhYSCzVCT2NMV0pjR1drwAEAyAEA4AEBGAYyEyIPIgs1Qk9jTFdKY0dXazABMAA%3D" data-sessionlink-target="/comment_service_ajax?action_get_comments=1" data-sessionlink="itct=CAIQ7pgBIhMI8M7LnMeT0gIViaNYCh1zwweb">
                                             <span class="yt-ui-menu-item-label">Newest first</span>
                                             </button>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <!--#Comment Filter-->
                                 <!--Comments here-->
                                 <div id="comment-section-renderer-items" class="comment-section-renderer-items">
                                    <span class="yt-spinner-img comment-section-items-loading yt-sprite" title="Loading icon"></span>
                                    <section class="comment-thread-renderer">
                                       <div class="comment-renderer">
                                          <a href="#" class=" g-hovercard yt-uix-sessionlink      spf-link " >  <span class="video-thumb comment-author-thumbnail yt-thumb yt-thumb-48">
                                          <span class="yt-thumb-square">
                                          <span class="yt-thumb-clip">
                                          <img src="https://yt3.ggpht.com/-RDiltSfGdqg/AAAAAAAAAAI/AAAAAAAAAAA/Oq6XJwLvFpE/s48-c-k-no-mo-rj-c0xffffff/photo.jpg"  height="48" width="48" role="img" alt="Thang Nguyen" tabindex="0">
                                          <span class="vertical-align"></span>
                                          </span>
                                          </span>
                                          </span>
                                          </a>
                                          <div id="comment-renderer-edit-z12xsnp4zmiivr5at04cc3txjrbtjf4ae2c" class="comment-simplebox-edit">
                                          </div>
                                          <div class="comment-renderer-content">
                                             <div class="comment-renderer-header"><a href="#" class="comment-author-text g-hovercard yt-uix-sessionlink      spf-link " >Cong Nguyen</a><span class="comment-renderer-time"><a href="" class="yt-uix-sessionlink       spf-link " >1 tuần trước</a></span></div>
                                             <div class="comment-renderer-text" role="article">
                                                <div class="comment-renderer-text-content">Lão này dạy hay vãi lúa. Lão này dạy hay vãi lúa. Lão này dạy hay vãi lúa. Lão này dạy hay vãi lúa. Lão này dạy hay vãi lúa. Lão này dạy hay vãi lúa. Lão này dạy hay vãi lúa. Lão này dạy hay vãi lúa. Lão này dạy hay vãi lúa. Lão này dạy hay vãi lúa. Lão này dạy hay vãi lúa. </div>
                                                <div class="comment-text-toggle hid">
                                                   <div class="comment-text-toggle-link read-more"><button class="yt-uix-button yt-uix-button-size-default yt-uix-button-link" type="button" onclick="return false;"><span class="yt-uix-button-content">Read more
                                                      </span></button>
                                                   </div>
                                                   <div class="comment-text-toggle-link show-less hid"><button class="yt-uix-button yt-uix-button-size-default yt-uix-button-link" type="button" onclick="return false;"><span class="yt-uix-button-content">Show less
                                                      </span></button>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="comment-renderer-footer" data-vote-status="INDIFFERENT">
                                                <div class="comment-action-buttons-toolbar">
                                                   <button class="yt-uix-button yt-uix-button-size-small yt-uix-button-link comment-renderer-reply yt-uix-sessionlink" type="button" href="#" role="link"><span class="yt-uix-button-content">Trả lời</span></button>
                                                   <span class="comment-renderer-like-count off">90</span>
                                                   <span class="comment-renderer-like-count on">91</span>
                                                   <span role="radiogroup">
                                                   <button class="yt-uix-button yt-uix-button-size-default yt-uix-button-default yt-uix-button-empty yt-uix-button-has-icon no-icon-markup comment-action-buttons-renderer-thumb yt-uix-sessionlink sprite-comment-actions sprite-like i-a-v-sprite-like" type="button" aria-label="Like" href="#" role="link" aria-checked="false"></button>
                                                   <button class="yt-uix-button yt-uix-button-size-default yt-uix-button-default yt-uix-button-empty yt-uix-button-has-icon no-icon-markup comment-action-buttons-renderer-thumb yt-uix-sessionlink sprite-comment-actions sprite-dislike i-a-v-sprite-dislike" type="button" aria-label="Dislike" href="#" role="link" aria-checked="false"></button>
                                                   </span>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <!--Replied-->
                                       <div id="comment-replies-renderer">
                                          <div class="yt-uix-expander comment-replies-renderer-header">
                                             <div id="comment-replies-renderer-z12xsnp4zmiivr5at04cc3txjrbtjf4ae2c" class="yt-uix-expander-body comment-replies-renderer-pages">
                                                <div class="comment-renderer">
                                                   <a href="/channel/UCQtpmDvrT51o_O3gmKsymGA" class=" g-hovercard yt-uix-sessionlink     " data-sessionlink="itct=CAIQtnUYAiITCO3csvnUk9ICFU8AWAod2M8AZg" data-ytid="UCQtpmDvrT51o_O3gmKsymGA">  <span class="video-thumb comment-author-thumbnail yt-thumb yt-thumb-32">
                                                       <span class="yt-thumb-square">
                                                         <span class="yt-thumb-clip">
                                                           
                                                     <img src="https://yt3.ggpht.com/-aXj7xPhcslM/AAAAAAAAAAI/AAAAAAAAAAA/doIHJE8nKkc/s32-c-k-no-mo-rj-c0xffffff/photo.jpg" tabindex="0" data-ytimg="1" height="32" width="32" alt="TIN TỨC 24H" role="img">

                                                           <span class="vertical-align"></span>
                                                         </span>
                                                       </span>
                                                     </span>
                                                   </a>
                                                   <div id="comment-renderer-edit-z12xsnp4zmiivr5at04cc3txjrbtjf4ae2c.1486734268191951" class="comment-simplebox-edit" data-editable-content-text="" data-image-src="" data-video-id="">
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </section>
                                 </div>
                                 <!--#Comments here-->
                              </div>
                           </div>
                           <!--#Comments-->
                        </div>
                        <!--Sidebar-->
                        <div id="watch7-sidebar" class="watch-sidebar">
                           <div id="watch7-sidebar-contents" class="watch-sidebar-gutter   yt-card yt-card-has-padding    yt-uix-expander yt-uix-expander-collapsed">
                              <div id="watch7-sidebar-offer"></div>
                              <div id="watch7-sidebar-modules">
                                 <div class="watch-sidebar-section">
                                    <div class="watch-sidebar-body">
                                       <ul id="watch-related" class="video-list">
                                          <!--Recommended Course-->
                                          <li class="video-list-item related-list-item related-list-item-compact-video">
                                             <!--Content-->
                                             <div class="content-wrapper">
                                                <a href="" class=" content-link spf-link  yt-uix-sessionlink      spf-link ">
                                                   <span dir="ltr" class="title">										Làm thế nào để trở thành cao thủ PHP?
                                                   </span>
                                                   <span class="stat attribution"><span class="g-hovercard" data-ytid="UC9-QTozb8dsivZcBYFDlZLQ" data-name="related">Nguyễn Văn Đức</span></span>
                                                   <span class="stat view-count">
                                                      2000 Học viên
                                                      <ul class="yt-badge-list ">
                                                         <li class="yt-badge-item"><span class="yt-badge ">120 giờ học</span></li>
                                                      </ul>
                                                   </span>
                                                </a>
                                             </div>
                                             <!--#Content-->
                                             <!--Thumb-->
                                             <div class="thumb-wrapper">
                                                <a href="#" class="thumb-link spf-link yt-uix-sessionlink spf-link"  aria-hidden="true"><span class="yt-uix-simple-thumb-wrap yt-uix-simple-thumb-related" tabindex="0" data-vid="Ut4deXaDktE"><img alt="" width="168" src="frontend/images/courses/course_thumb336x188.jpg" aria-hidden="true" style="top: 0px" height="94"><span class="video-time">15:19</span></span></a>
                                                <button class="yt-uix-button yt-uix-button-size-small yt-uix-button-default yt-uix-button-empty yt-uix-button-has-icon no-icon-markup addto-button video-actions spf-nolink hide-until-delayloaded addto-watch-later-button-sign-in yt-uix-tooltip" type="button" role="button" title="Watch Later"><span class="yt-uix-button-arrow yt-sprite"></span></button>
                                                <span class="thumb-menu dark-overflow-action-menu video-actions">
                                                   <button aria-expanded="false" class="yt-uix-button-reverse flip addto-watch-queue-menu spf-nolink hide-until-delayloaded yt-uix-button yt-uix-button-dark-overflow-action-menu yt-uix-button-size-default yt-uix-button-has-icon no-icon-markup yt-uix-button-empty" type="button" aria-haspopup="true">
                                                      <span class="yt-uix-button-arrow yt-sprite"></span>
                                                      <ul class="watch-queue-thumb-menu yt-uix-button-menu yt-uix-button-menu-dark-overflow-action-menu hid">
                                                         <li role="menuitem" class="overflow-menu-choice addto-watch-queue-menu-choice addto-watch-queue-play-next yt-uix-button-menu-item"><span class="addto-watch-queue-menu-text">Play next</span></li>
                                                         <li role="menuitem" class="overflow-menu-choice addto-watch-queue-menu-choice addto-watch-queue-play-now yt-uix-button-menu-item"><span class="addto-watch-queue-menu-text">Play now</span></li>
                                                      </ul>
                                                   </button>
                                                </span>
                                                <button class="yt-uix-button yt-uix-button-size-small yt-uix-button-default yt-uix-button-empty yt-uix-button-has-icon no-icon-markup addto-button addto-queue-button video-actions spf-nolink hide-until-delayloaded addto-tv-queue-button yt-uix-tooltip" type="button" title="Queue"></button>
                                             </div>
                                             <!--Thumb-->
                                          </li>
                                          <!--#Recommended Course-->
                                          <!--Recommended Course-->
                                          <li class="video-list-item related-list-item related-list-item-compact-video">
                                             <!--Content-->
                                             <div class="content-wrapper">
                                                <a href="" class=" content-link spf-link  yt-uix-sessionlink      spf-link ">
                                                   <span dir="ltr" class="title">										Làm thế nào để trở thành cao thủ PHP?
                                                   </span>
                                                   <span class="stat attribution"><span class="g-hovercard" data-ytid="UC9-QTozb8dsivZcBYFDlZLQ" data-name="related">Nguyễn Văn Đức</span></span>
                                                   <span class="stat view-count">
                                                      2000 Học viên
                                                      <ul class="yt-badge-list ">
                                                         <li class="yt-badge-item"><span class="yt-badge ">120 giờ học</span></li>
                                                      </ul>
                                                   </span>
                                                </a>
                                             </div>
                                             <!--#Content-->
                                             <!--Thumb-->
                                             <div class="thumb-wrapper">
                                                <a href="#" class="thumb-link spf-link yt-uix-sessionlink spf-link"  aria-hidden="true"><span class="yt-uix-simple-thumb-wrap yt-uix-simple-thumb-related" tabindex="0" data-vid="Ut4deXaDktE"><img alt="" width="168" src="frontend/images/courses/course_thumb336x188.jpg" aria-hidden="true" style="top: 0px" height="94"><span class="video-time">15:19</span></span></a>
                                                <button class="yt-uix-button yt-uix-button-size-small yt-uix-button-default yt-uix-button-empty yt-uix-button-has-icon no-icon-markup addto-button video-actions spf-nolink hide-until-delayloaded addto-watch-later-button-sign-in yt-uix-tooltip" type="button" role="button" title="Watch Later"><span class="yt-uix-button-arrow yt-sprite"></span></button>
                                                <span class="thumb-menu dark-overflow-action-menu video-actions">
                                                   <button aria-expanded="false" class="yt-uix-button-reverse flip addto-watch-queue-menu spf-nolink hide-until-delayloaded yt-uix-button yt-uix-button-dark-overflow-action-menu yt-uix-button-size-default yt-uix-button-has-icon no-icon-markup yt-uix-button-empty" type="button" aria-haspopup="true">
                                                      <span class="yt-uix-button-arrow yt-sprite"></span>
                                                      <ul class="watch-queue-thumb-menu yt-uix-button-menu yt-uix-button-menu-dark-overflow-action-menu hid">
                                                         <li role="menuitem" class="overflow-menu-choice addto-watch-queue-menu-choice addto-watch-queue-play-next yt-uix-button-menu-item"><span class="addto-watch-queue-menu-text">Play next</span></li>
                                                         <li role="menuitem" class="overflow-menu-choice addto-watch-queue-menu-choice addto-watch-queue-play-now yt-uix-button-menu-item"><span class="addto-watch-queue-menu-text">Play now</span></li>
                                                      </ul>
                                                   </button>
                                                </span>
                                                <button class="yt-uix-button yt-uix-button-size-small yt-uix-button-default yt-uix-button-empty yt-uix-button-has-icon no-icon-markup addto-button addto-queue-button video-actions spf-nolink hide-until-delayloaded addto-tv-queue-button yt-uix-tooltip" type="button" title="Queue"></button>
                                             </div>
                                             <!--Thumb-->
                                          </li>
                                          <!--#Recommended Course-->
                                          <!--Recommended Course-->
                                          <li class="video-list-item related-list-item related-list-item-compact-video">
                                             <!--Content-->
                                             <div class="content-wrapper">
                                                <a href="" class=" content-link spf-link  yt-uix-sessionlink      spf-link ">
                                                   <span dir="ltr" class="title">										Làm thế nào để trở thành cao thủ PHP?
                                                   </span>
                                                   <span class="stat attribution"><span class="g-hovercard" data-ytid="UC9-QTozb8dsivZcBYFDlZLQ" data-name="related">Nguyễn Văn Đức</span></span>
                                                   <span class="stat view-count">
                                                      2000 Học viên
                                                      <ul class="yt-badge-list ">
                                                         <li class="yt-badge-item"><span class="yt-badge ">120 giờ học</span></li>
                                                      </ul>
                                                   </span>
                                                </a>
                                             </div>
                                             <!--#Content-->
                                             <!--Thumb-->
                                             <div class="thumb-wrapper">
                                                <a href="#" class="thumb-link spf-link yt-uix-sessionlink spf-link"  aria-hidden="true"><span class="yt-uix-simple-thumb-wrap yt-uix-simple-thumb-related" tabindex="0" data-vid="Ut4deXaDktE"><img alt="" width="168" src="frontend/images/courses/course_thumb336x188.jpg" aria-hidden="true" style="top: 0px" height="94"><span class="video-time">15:19</span></span></a>
                                                <button class="yt-uix-button yt-uix-button-size-small yt-uix-button-default yt-uix-button-empty yt-uix-button-has-icon no-icon-markup addto-button video-actions spf-nolink hide-until-delayloaded addto-watch-later-button-sign-in yt-uix-tooltip" type="button" role="button" title="Watch Later"><span class="yt-uix-button-arrow yt-sprite"></span></button>
                                                <span class="thumb-menu dark-overflow-action-menu video-actions">
                                                   <button aria-expanded="false" class="yt-uix-button-reverse flip addto-watch-queue-menu spf-nolink hide-until-delayloaded yt-uix-button yt-uix-button-dark-overflow-action-menu yt-uix-button-size-default yt-uix-button-has-icon no-icon-markup yt-uix-button-empty" type="button" aria-haspopup="true">
                                                      <span class="yt-uix-button-arrow yt-sprite"></span>
                                                      <ul class="watch-queue-thumb-menu yt-uix-button-menu yt-uix-button-menu-dark-overflow-action-menu hid">
                                                         <li role="menuitem" class="overflow-menu-choice addto-watch-queue-menu-choice addto-watch-queue-play-next yt-uix-button-menu-item"><span class="addto-watch-queue-menu-text">Play next</span></li>
                                                         <li role="menuitem" class="overflow-menu-choice addto-watch-queue-menu-choice addto-watch-queue-play-now yt-uix-button-menu-item"><span class="addto-watch-queue-menu-text">Play now</span></li>
                                                      </ul>
                                                   </button>
                                                </span>
                                                <button class="yt-uix-button yt-uix-button-size-small yt-uix-button-default yt-uix-button-empty yt-uix-button-has-icon no-icon-markup addto-button addto-queue-button video-actions spf-nolink hide-until-delayloaded addto-tv-queue-button yt-uix-tooltip" type="button" title="Queue"></button>
                                             </div>
                                             <!--Thumb-->
                                          </li>
                                          <!--#Recommended Course-->
                                          <!--Recommended Course-->
                                          <li class="video-list-item related-list-item related-list-item-compact-video">
                                             <!--Content-->
                                             <div class="content-wrapper">
                                                <a href="" class=" content-link spf-link  yt-uix-sessionlink      spf-link ">
                                                   <span dir="ltr" class="title">										Làm thế nào để trở thành cao thủ PHP?
                                                   </span>
                                                   <span class="stat attribution"><span class="g-hovercard" data-ytid="UC9-QTozb8dsivZcBYFDlZLQ" data-name="related">Nguyễn Văn Đức</span></span>
                                                   <span class="stat view-count">
                                                      2000 Học viên
                                                      <ul class="yt-badge-list ">
                                                         <li class="yt-badge-item"><span class="yt-badge ">120 giờ học</span></li>
                                                      </ul>
                                                   </span>
                                                </a>
                                             </div>
                                             <!--#Content-->
                                             <!--Thumb-->
                                             <div class="thumb-wrapper">
                                                <a href="#" class="thumb-link spf-link yt-uix-sessionlink spf-link"  aria-hidden="true"><span class="yt-uix-simple-thumb-wrap yt-uix-simple-thumb-related" tabindex="0" data-vid="Ut4deXaDktE"><img alt="" width="168" src="frontend/images/courses/course_thumb336x188.jpg" aria-hidden="true" style="top: 0px" height="94"><span class="video-time">15:19</span></span></a>
                                                <button class="yt-uix-button yt-uix-button-size-small yt-uix-button-default yt-uix-button-empty yt-uix-button-has-icon no-icon-markup addto-button video-actions spf-nolink hide-until-delayloaded addto-watch-later-button-sign-in yt-uix-tooltip" type="button" role="button" title="Watch Later"><span class="yt-uix-button-arrow yt-sprite"></span></button>
                                                <span class="thumb-menu dark-overflow-action-menu video-actions">
                                                   <button aria-expanded="false" class="yt-uix-button-reverse flip addto-watch-queue-menu spf-nolink hide-until-delayloaded yt-uix-button yt-uix-button-dark-overflow-action-menu yt-uix-button-size-default yt-uix-button-has-icon no-icon-markup yt-uix-button-empty" type="button" aria-haspopup="true">
                                                      <span class="yt-uix-button-arrow yt-sprite"></span>
                                                      <ul class="watch-queue-thumb-menu yt-uix-button-menu yt-uix-button-menu-dark-overflow-action-menu hid">
                                                         <li role="menuitem" class="overflow-menu-choice addto-watch-queue-menu-choice addto-watch-queue-play-next yt-uix-button-menu-item"><span class="addto-watch-queue-menu-text">Play next</span></li>
                                                         <li role="menuitem" class="overflow-menu-choice addto-watch-queue-menu-choice addto-watch-queue-play-now yt-uix-button-menu-item"><span class="addto-watch-queue-menu-text">Play now</span></li>
                                                      </ul>
                                                   </button>
                                                </span>
                                                <button class="yt-uix-button yt-uix-button-size-small yt-uix-button-default yt-uix-button-empty yt-uix-button-has-icon no-icon-markup addto-button addto-queue-button video-actions spf-nolink hide-until-delayloaded addto-tv-queue-button yt-uix-tooltip" type="button" title="Queue"></button>
                                             </div>
                                             <!--Thumb-->
                                          </li>
                                          <!--#Recommended Course-->
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--#Watch container-->
            </div>
         </div>
      </div>
   </div>
</div>
@stop