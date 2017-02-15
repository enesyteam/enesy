@extends ('frontend.master.course-master')
@section ('head.title')
Enesy | Đang xem Khóa học lập trình AutoCAD với C# trình độ cơ bản
@stop

@section('head.css')
<link href="{{'frontend/css/course-view.css'}}" rel="stylesheet" type="text/css" />
@stop

@section('body.content')
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
									</div>
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
@stop