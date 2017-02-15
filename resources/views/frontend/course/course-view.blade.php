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
								
							</div>
						</div>
						<!--Playlist-->
						<div id="player-playlist" class="">
							<div id="watch-appbar-playlist" class="watch-playlist player-height">
								<div class="main-content">
									<div class="playlist-header">
										<div class="playlist-header-content">
											<div class="appbar-playlist-controls clearfix">
											</div>
											<div class="playlist-info">
												<h3 class="playlist-title">
									                <a href="#" class=" yt-uix-sessionlink spf-link ">Tiêu đề khóa học ở đây</a>
									            </h3>
									            <ul class="playlist-details">
									                <li class="author-attribution">
									                  <a href="#" class=" yt-uix-sessionlink spf-link ">Đỗ Trường Quân</a>
									                </li>
									                <li class="playlist-progress">
														<span id="playlist-current-index">1</span><span id="playlist-length">75 videos</span>                
													</li>
									            </ul>
											</div>
										</div>
									</div>
									<div class="playlist-videos-container yt-scrollbar-dark yt-scrollbar">
										<ol id="playlist-autoscroll-list" class="playlist-videos-list yt-uix-scroller">
											<!--Lesson-->
											<li class="yt-uix-scroller-scroll-unit  currently-playing">
												<span class="index">
        											1
												</span>
												<a href="#" class=" spf-link  playlist-video clearfix  yt-uix-sessionlink      spf-link ">
													<span class="video-thumb  yt-thumb yt-thumb-72">
														<span class="yt-thumb-default">
															<span class="yt-thumb-clip">
																<img alt="" aria-hidden="true" width="72" src="https://i.ytimg.com/vi/a39NvVhoxbo/hqdefault.jpg?custom=true&amp;w=120&amp;h=90&amp;jpg444=true&amp;jpgq=90&amp;sp=68&amp;sigh=EA0uY4tMMASiJR2FeZAvLoNT38c">
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
        											2
												</span>
												<a href="#" class=" spf-link  playlist-video clearfix  yt-uix-sessionlink      spf-link ">
													<span class="video-thumb  yt-thumb yt-thumb-72">
														<span class="yt-thumb-default">
															<span class="yt-thumb-clip">
																<img alt="" aria-hidden="true" width="72" src="https://i.ytimg.com/vi/a39NvVhoxbo/hqdefault.jpg?custom=true&amp;w=120&amp;h=90&amp;jpg444=true&amp;jpgq=90&amp;sp=68&amp;sigh=EA0uY4tMMASiJR2FeZAvLoNT38c">
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
																<img alt="" aria-hidden="true" width="72" src="https://i.ytimg.com/vi/a39NvVhoxbo/hqdefault.jpg?custom=true&amp;w=120&amp;h=90&amp;jpg444=true&amp;jpgq=90&amp;sp=68&amp;sigh=EA0uY4tMMASiJR2FeZAvLoNT38c">
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
																<img alt="" aria-hidden="true" width="72" src="https://i.ytimg.com/vi/a39NvVhoxbo/hqdefault.jpg?custom=true&amp;w=120&amp;h=90&amp;jpg444=true&amp;jpgq=90&amp;sp=68&amp;sigh=EA0uY4tMMASiJR2FeZAvLoNT38c">
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
																<img alt="" aria-hidden="true" width="72" src="https://i.ytimg.com/vi/a39NvVhoxbo/hqdefault.jpg?custom=true&amp;w=120&amp;h=90&amp;jpg444=true&amp;jpgq=90&amp;sp=68&amp;sigh=EA0uY4tMMASiJR2FeZAvLoNT38c">
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
																<img alt="" aria-hidden="true" width="72" src="https://i.ytimg.com/vi/a39NvVhoxbo/hqdefault.jpg?custom=true&amp;w=120&amp;h=90&amp;jpg444=true&amp;jpgq=90&amp;sp=68&amp;sigh=EA0uY4tMMASiJR2FeZAvLoNT38c">
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
												<div id="watch-description-text" class=""><p id="eow-description" class="">Bài này bạn sẽ được học về blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah <strong>3 dòng</strong></p></div>
											</div>
										</div>
									</div>
									<!--#Description-->
									<!--Comments-->
									<div id="watch-discussion" class="branded-page-box yt-card scrolldetect">
										<div id="comment-section-renderer" class="comment-section-renderer">
											<h2 class="comment-section-header-renderer" tabindex="0">
											<b>Comments</b><span class="alternate-content-link"></span>  </h2>
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
										          <li class="video-list-item related-list-item related-list-item-compact-video">
												    <div class="content-wrapper">
												    <a href="" class=" content-link spf-link  yt-uix-sessionlink      spf-link ">
												  <span dir="ltr" class="title">
												    Khóa học đề xuất
												  </span>
												  <span class="accessible-description" id="description-id-622508">
												     sdfasdfasdf asdf asdf asdf ádf
												  </span>
												  <span class="stat attribution"><span class="g-hovercard" data-ytid="UC9-QTozb8dsivZcBYFDlZLQ" data-name="related">TAN_UGN</span></span>
												  <span class="stat view-count">2 views<ul class="yt-badge-list "><li class="yt-badge-item"><span class="yt-badge ">New</span></li></ul></span>
												</a>
												  </div>
										  		</li>
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