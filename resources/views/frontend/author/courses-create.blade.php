  @extends('frontend.author.master.author-master') @section('head.js') <!-- Core JS files -->
   
  <script src="{{asset('frontend/user/assets/js/plugins/loaders/pace.min.js')}}" type="text/javascript">
  </script> 
  <script src="{{asset('frontend/user/assets/js/core/libraries/jquery.min.js')}}" type="text/javascript">
  </script> 
  <script src="{{asset('frontend/user/assets/js/core/libraries/bootstrap.min.js')}}" type="text/javascript">
  </script> 
  <script src="{{asset('frontend/user/assets/js/plugins/loaders/blockui.min.js')}}" type="text/javascript">
  </script> <!-- /core JS files -->
   <!-- Theme JS files -->
   
  <script src="{{asset('frontend/user/assets/js/plugins/forms/wizards/stepy.min.js')}}" type="text/javascript">
  </script> 
  <script src="{{asset('frontend/user/assets/js/plugins/forms/styling/uniform.min.js')}}" type="text/javascript">
  </script> 
  <script src="{{asset('frontend/user/assets/js/core/libraries/jasny_bootstrap.min.js')}}" type="text/javascript">
  </script> 
  <script src="{{asset('frontend/user/assets/js/core/app.js')}}" type="text/javascript">
  </script> 
  <script src="{{asset('frontend/user/assets/js/plugins/forms/tags/tagsinput.min.js')}}" type="text/javascript">
  </script> 
  <script src="{{asset('frontend/user/assets/js/plugins/forms/tags/tokenfield.min.js')}}" type="text/javascript">
  </script> 
  <script src="{{asset('frontend/user/assets/js/pages/form_tags_input.js')}}" type="text/javascript">
  </script> <!-- /theme JS files -->
  @stop @section('author-body.content') <!-- Content area -->
  <!--Messages-->
  <div class="alert alert-info alert-styled-left alert-bordered">
    <button class="close" data-dismiss="alert" type="button"><span>×</span><span class="sr-only">Close</span></button> <span class="text-semibold">Mẹo:</span> Tối ưu video bài học của bạn với kích thước HD720 trước khi upload <a class="alert-link" href="#">Xem hướng dẫn tối ưu</a>.
  </div><!--/Messages-->
  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-white">
        <div class="panel-heading">
          <h6 class="panel-title">Thông tin chung<a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
          <div class="heading-elements">
            <ul class="icons-list">
              <li>
                <a data-action="collapse"></a>
              </li>
              <li>
                <a data-action="reload"></a>
              </li>
              <li>
                <a data-action="close"></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="panel-body">
          <form class="form-horizontal">
            <fieldset class="">
              <!--Title-->
              <div class="form-group">
                <label class="control-label col-lg-3 cursor-pointer" for="clickable-label">Tiêu đề khóa học</label>
                <div class="col-lg-9">
                  <input class="form-control" id="clickable-label" placeholder="vd: Khóa học lập trình Laravel 5.0" type="text">
                </div>
              </div><!--/Title-->
              <!--Description-->
              <div class="form-group">
                <label class="control-label col-lg-3 cursor-pointer" for="clickable-text">Tóm tắt khóa học</label>
                <div class="col-lg-9">
                  <textarea class="form-control" cols="5" id="clickable-text" placeholder="Default textarea" rows="5"></textarea>
                </div>
              </div><!--/Description-->
              <!--Tags-->
              <div class="form-group">
                <div class="control-label col-lg-3">
                  <label class="control-label">Tags</label>
                </div>
                <div class=" col-lg-9">
                  <div class="tokenfield form-control col-lg-9">
                    <input class="form-control tokenfield" style="position: absolute; left: -10000px;" tabindex="-1" type="text" value="These,are,tokens"><input style="position: absolute; left: -10000px;" tabindex="-1" type="text">
                    <div class="token">
                      <span class="token-label" style="max-width: 548.4px;">PHP</span><a class="close" href="#" tabindex="-1">×</a>
                    </div>
                    <div class="token">
                      <span class="token-label" style="max-width: 548.4px;">HTML</span><a class="close" href="#" tabindex="-1">×</a>
                    </div>
                    <div class="token">
                      <span class="token-label" style="max-width: 548.4px;">CSS</span><a class="close" href="#" tabindex="-1">×</a>
                    </div>
                    <div class="token">
                      <span class="token-label" style="max-width: 548.4px;">Java</span><a class="close" href="#" tabindex="-1">×</a>
                    </div><input autocomplete="off" class="token-input" id="1487390985936124-tokenfield" placeholder="vd: php, html" style="min-width: 60px; width: 272.4px;" tabindex="0" type="text">
                  </div><small class="display-block mt-10 mb-10">Sử dụng dấu "," để phân chia các tags</small>
                </div>
              </div><!--/Tags-->
              <!--Status-->
              <div class="form-group">
                <div class="control-label col-lg-3">
                  <label class="control-label">Trạng thái</label>
                </div>
                <div class=" col-lg-9">
                  <label class="radio-inline"></label>
                  <div class="choice">
                    <label class="radio-inline"><span class="checked"><input checked="checked" class="styled" name="radio-inline-left" type="radio"></span></label>
                  </div><label class="radio-inline">Xuất bản</label> <label class="radio-inline"></label>
                  <div class="choice">
                    <label class="radio-inline"><span class=""><input class="styled" name="radio-inline-left" type="radio"></span></label>
                  </div><label class="radio-inline">Coming soon</label>
                </div>
              </div><!--/Status-->
            </fieldset>
          </form>
        </div>
      </div><!--/Thông tin chung-->
      <!--Chi tiết khóa học-->
      <div class="panel panel-white">
        <div class="panel-heading">
          <h6 class="panel-title">Chi tiết khóa học<a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
          <div class="heading-elements">
            <ul class="icons-list">
              <li>
                <a data-action="collapse"></a>
              </li>
              <li>
                <a data-action="reload"></a>
              </li>
              <li>
                <a data-action="close"></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="panel-body">
          <form class="form-horizontal">
            <fieldset class="">
              <div class="panel-group panel-group-control" id="accordion-target">
                <!--Section-->
                <div class="panel panel-white">
                  <div class="panel-heading">
                    <h6 class="panel-title"><a aria-expanded="true" class="" data-parent="#accordion-target" data-toggle="collapse" href="#accordion-control-group1">Section 1</a></h6>
                    <div class="heading-elements">
                      <div class="btn-group">
                        <button aria-expanded="false" class="btn dropdown-toggle" data-toggle="dropdown" type="button"><i class="icon-menu7"></i></button>
                        <ul class="dropdown-menu dropdown-menu-right">
                          <li>
                            <a href="#"><i class="icon-plus2"></i> Thêm bài học</a>
                          </li>
                          <li>
                            <a href="#"><i class="icon-pencil7"></i> Sửa tiêu đề</a>
                          </li>
                          <li class="divider"></li>
                          <li>
                            <a href="#"><i class="icon-gear"></i> Gì đây cũng được</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div aria-expanded="true" class="panel-collapse collapse in" id="accordion-control-group1">
                    <div class="panel-body">
                      <!--Bài học-->
                      <form class="form-horizontal">
                        <fieldset class="">
                          <legend class="text-bold">Bài học 1</legend> <!--Tiêu đề-->
                          <div class="form-group">
                            <label class="control-label col-lg-3">Tiêu đề bài học</label>
                            <div class="col-lg-9">
                              <input class="form-control" placeholder="Nhập tiêu đề bài học" type="text">
                            </div>
                          </div><!--/Tiêu đề-->
                          <!--Description-->
                          <div class="form-group">
                            <label class="control-label col-lg-3">Tóm tắt bài học</label>
                            <div class="col-lg-9">
                              <textarea class="form-control" cols="5" placeholder="Default textarea" rows="5"></textarea>
                            </div>
                          </div><!--/Description-->
                          <!--Video file-->
                          <div class="form-group">
                            <label class="col-lg-3 control-label">Video bài học</label>
                            <div class="col-lg-9">
                              <div class="uploader">
                                <input class="file-styled" type="file"><span class="filename" style="user-select: none;">Chưa chọn file</span><span class="action btn bg-pink-400" style="user-select: none;">Chọn File</span>
                              </div><span class="help-block">Định dạng cho phép: avi, mp4, mpg. Kích thước tối đa 1Gb</span>
                            </div>
                          </div><!--/Video file-->
                        </fieldset>
                      </form><!--/Bài học-->
                    </div>
                  </div>
                </div><!--/Section-->
                <div class="panel panel-white">
                  <div class="panel-heading">
                    <h6 class="panel-title"><a aria-expanded="true" class="" data-parent="#accordion-target" data-toggle="collapse" href="#accordion-control-group2">Section 2</a></h6>
                    <div class="heading-elements">
                      <div class="btn-group">
                        <button aria-expanded="false" class="btn dropdown-toggle" data-toggle="dropdown" type="button"><i class="icon-menu7"></i></button>
                        <ul class="dropdown-menu dropdown-menu-right">
                          <li>
                            <a href="#"><i class="icon-plus2"></i> Thêm bài học</a>
                          </li>
                          <li>
                            <a href="#"><i class="icon-pencil7"></i> Sửa tiêu đề</a>
                          </li>
                          <li class="divider"></li>
                          <li>
                            <a href="#"><i class="icon-gear"></i> Gì đây cũng được</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div aria-expanded="true" class="panel-collapse collapse in" id="accordion-control-group2">
                    <div class="panel-body">
                      <!--Bài học-->
                      <form class="form-horizontal">
                        <fieldset class="">
                          <legend class="text-bold">Bài học 1</legend> <!--Tiêu đề-->
                          <div class="form-group">
                            <label class="control-label col-lg-3">Tiêu đề bài học</label>
                            <div class="col-lg-9">
                              <input class="form-control" placeholder="Nhập tiêu đề bài học" type="text">
                            </div>
                          </div><!--/Tiêu đề-->
                          <!--Description-->
                          <div class="form-group">
                            <label class="control-label col-lg-3">Tóm tắt bài học</label>
                            <div class="col-lg-9">
                              <textarea class="form-control" cols="5" placeholder="Default textarea" rows="5"></textarea>
                            </div>
                          </div><!--/Description-->
                          <!--Video file-->
                          <div class="form-group">
                            <label class="col-lg-3 control-label">Video bài học</label>
                            <div class="col-lg-9">
                              <div class="uploader">
                                <input class="file-styled" type="file"><span class="filename" style="user-select: none;">Chưa chọn file</span><span class="action btn bg-pink-400" style="user-select: none;">Chọn File</span>
                              </div><span class="help-block">Định dạng cho phép: avi, mp4, mpg. Kích thước tối đa 1Gb</span>
                            </div>
                          </div><!--/Video file-->
                        </fieldset>
                      </form><!--/Bài học-->
                    </div>
                  </div>
                </div>
              </div><!--Buttons-->
              <button class="btn btn-primary" type="button"><i class="icon-plus2 position-left"></i> Thêm Section</button>
            </fieldset>
          </form>
        </div>
      </div><!--/Chi tiết khóa học-->
      <!--Giá-->
      <!--Chi tiết khóa học-->
      <div class="panel panel-white">
        <div class="panel-heading">
          <h6 class="panel-title">Chính sách giá<a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
          <div class="heading-elements">
            <ul class="icons-list">
              <li>
                <a data-action="collapse"></a>
              </li>
              <li>
                <a data-action="reload"></a>
              </li>
              <li>
                <a data-action="close"></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="panel-body">
          <form class="form-horizontal">
            <fieldset class="">
              <!--Giá mới-->
              <div class="form-group">
                <label class="control-label col-lg-3">Giá mới</label>
                <div class="col-lg-9">
                  <input class="form-control" placeholder="Nhập giá mới" type="text">
                </div>
              </div><!--/Giá mới-->
              <!--Giá cũ-->
              <div class="form-group">
                <label class="control-label col-lg-3">Giá cũ</label>
                <div class="col-lg-9">
                  <input class="form-control" placeholder="Nhập giá cũ" type="text">
                </div>
              </div><!--/Giá cũ-->
            </fieldset>
          </form>
        </div>
      </div><!--/Giá-->
      <div class="text-right">
        <button class="btn btn-default" type="button"><i class="icon-floppy-disk position-left"></i> Lưu</button> <button class="btn btn-primary" type="button"><i class="icon-arrow-right14 position-left"></i> Tạo khóa học</button>
      </div>
    </div>
  </div><!-- /content area -->
  @stop