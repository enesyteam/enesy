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
											<li class="yt-uix-scroller-scroll-unit ">
												<span class="index">
        											1
												</span>
												<a href="#" class=" spf-link  playlist-video clearfix  yt-uix-sessionlink      spf-link ">
													<span class="video-thumb  yt-thumb yt-thumb-72">
														<span class="yt-thumb-default">
															<span class="yt-thumb-clip">
																<img alt="" aria-hidden="true" width="72" src="https://i.ytimg.com/vi/a39NvVhoxbo/hqdefault.jpg?custom=true&amp;w=120&amp;h=90&amp;jpg444=true&amp;jpgq=90&amp;sp=68&amp;sigh=EA0uY4tMMASiJR2FeZAvLoNT38c" onload=";__ytRIL(this)" data-ytimg="1">
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
																<img alt="" aria-hidden="true" width="72" src="https://i.ytimg.com/vi/a39NvVhoxbo/hqdefault.jpg?custom=true&amp;w=120&amp;h=90&amp;jpg444=true&amp;jpgq=90&amp;sp=68&amp;sigh=EA0uY4tMMASiJR2FeZAvLoNT38c" onload=";__ytRIL(this)" data-ytimg="1">
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
																<img alt="" aria-hidden="true" width="72" src="https://i.ytimg.com/vi/a39NvVhoxbo/hqdefault.jpg?custom=true&amp;w=120&amp;h=90&amp;jpg444=true&amp;jpgq=90&amp;sp=68&amp;sigh=EA0uY4tMMASiJR2FeZAvLoNT38c" onload=";__ytRIL(this)" data-ytimg="1">
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
																<img alt="" aria-hidden="true" width="72" src="https://i.ytimg.com/vi/a39NvVhoxbo/hqdefault.jpg?custom=true&amp;w=120&amp;h=90&amp;jpg444=true&amp;jpgq=90&amp;sp=68&amp;sigh=EA0uY4tMMASiJR2FeZAvLoNT38c" onload=";__ytRIL(this)" data-ytimg="1">
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
																<img alt="" aria-hidden="true" width="72" src="https://i.ytimg.com/vi/a39NvVhoxbo/hqdefault.jpg?custom=true&amp;w=120&amp;h=90&amp;jpg444=true&amp;jpgq=90&amp;sp=68&amp;sigh=EA0uY4tMMASiJR2FeZAvLoNT38c" onload=";__ytRIL(this)" data-ytimg="1">
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
																<img alt="" aria-hidden="true" width="72" src="https://i.ytimg.com/vi/a39NvVhoxbo/hqdefault.jpg?custom=true&amp;w=120&amp;h=90&amp;jpg444=true&amp;jpgq=90&amp;sp=68&amp;sigh=EA0uY4tMMASiJR2FeZAvLoNT38c" onload=";__ytRIL(this)" data-ytimg="1">
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
				</div>
			</div>
		</div>
	</div>
</div>
@stop