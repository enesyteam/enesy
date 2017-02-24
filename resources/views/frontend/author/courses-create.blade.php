  @extends('frontend.author.master.author-master') @section('head.js') 
  <!-- Core JS files -->
   
  <script src="{{asset('frontend/user/assets/js/plugins/loaders/pace.min.js')}}" type="text/javascript">
  </script> 
  <script src="{{asset('frontend/user/assets/js/core/libraries/jquery.min.js')}}" type="text/javascript">
  </script> 
  <script src="{{asset('frontend/user/assets/js/core/libraries/bootstrap.min.js')}}" type="text/javascript">
  </script> 
  <script src="{{asset('frontend/user/assets/js/plugins/loaders/blockui.min.js')}}" type="text/javascript">
  </script> <!-- /core JS files -->
   <!-- Theme JS files -->
  <script src="{{asset('frontend/user/assets/js/plugins/forms/styling/uniform.min.js')}}" type="text/javascript">
  </script>  
    <script src="{{asset('frontend/user/assets/js/core/app.js')}}" type="text/javascript">
  </script> 

<script type="text/javascript" src="{{asset('frontend/user/assets/js/pages/components_popups.js')}}"></script>
@include('frontend.author.js-upload', array())
  <!-- /theme JS files -->
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
            </ul>
          </div>
        </div>
        <div class="panel-body">
          <form class="form-horizontal">
            <fieldset class="">
            <!--Status-->
              <div class="form-group">
                <div class="control-label col-lg-3">
                  <label class="control-label">Trạng thái</label>
                </div>
                <div class="col-lg-9">
                <div class="col-lg-4">
                  <label class="radio-inline" data-popup="tooltip" title="" data-placement="bottom" data-original-title="Tạo và xuất bản khóa học.">
                      <input type="radio" name="course[status]" value="{{$arrStatus['PUBLIC']}}" checked="checked">
                      Xuất bản
                  </label>
                  </div>
                  <div class="col-lg-4">
                  <label class="radio-inline" data-popup="tooltip" title="" data-placement="bottom" data-original-title="Khóa học của bạn vẫn xuất hiện trên trang chủ nhưng chưa thể bán cho đến khi bạn hoàn thành nó.">
                      <input type="radio" name="course[status]" value="{{$arrStatus['COMMING_SOON']}}">
                      Comming soon
                  </label>
                  </div>
                  <div class="col-lg-4">
                  <label class="radio-inline" data-popup="tooltip" title="" data-placement="bottom" data-original-title="Tạo và lưu lại khóa học dưới dạng bản nháp và bạn có thể hoàn thiện nó sau.">
                      <input type="radio" name="course[status]" value="{{$arrStatus['DRAFT']}}">
                      Bản nháp
                  </label>
                  </div>
                </div>
              </div><!--/Status-->
              <!--Title-->
              <div class="form-group">
                <label class="control-label col-lg-3 cursor-pointer" for="clickable-label">Tiêu đề khóa học</label>
                <div class="col-lg-9">
                  <input class="f-input -type-string -width-full" id="clickable-label" placeholder="vd: Khóa học lập trình Laravel 5.0" type="text" name="course[title]">
                </div>
              </div><!--/Title-->
              <!--Category-->
              <div class="form-group">
                <label class="control-label col-lg-3 cursor-pointer" for="clickable-label">Danh mục</label>
                <div class="col-lg-9">
                  <select class="f-input -type-string -width-full" name="course[cat]">
                    <option value="">-- Chọn danh mục --</option>
                    @foreach($listCat as $id => $cat)        
                      <option value='{{ $id.'-'.$id }}'>{{ $cat['title'] }}</option>
                      @foreach($cat['data'] as $item)        
                        <option value="{{ $id.'-'.$item->id }}">&nbsp;&nbsp;&nbsp;&nbsp;-- {{ $item->title }}</option>
                      @endforeach
                    @endforeach
                  </select>
                </div>
              </div><!--/Category-->
              <!--Introtext-->
              <div class="form-group">
                <label class="control-label col-lg-3 cursor-pointer" for="clickable-text">Tóm tắt khóa học</label>
                <div class="col-lg-9">
                  <textarea class="f-textarea" cols="5" id="clickable-text" placeholder="Default textarea" rows="5" name="course[introtext]"></textarea>
                </div>
              </div><!--/Introtext-->
              <!--Description-->
              <div class="form-group">
                <label class="control-label col-lg-3 cursor-pointer" for="clickable-text">Nội dung khóa học</label>
                <div class="col-lg-9">
                  <textarea class="f-textarea" cols="5" id="clickable-text" placeholder="Default textarea" rows="10" name="course[content]"></textarea>
                </div>
              </div><!--/Description-->
              <!--Thumb-->
              <div class="form-group">
                <label class="col-lg-3 control-label">Hình đại diện</label>
                <div class="col-lg-9">
                  <div class="inputs">
                    <div id="upload_img"></div>
                    <input type="hidden" id="picture" name="picture"/>   
                    <input type="hidden" id="path_small" name="path_small"/>  
                    <input type="hidden" id="path_mini" name="path_mini"/>  
                    <input type="hidden" id="folder_path" name="folder_path"/>   
                                
                    <div id="view_img" name="view_img"></div>
                    <div id="frm_crop_img" style="display: none;">
                      <img id="cropbox" src=""  />
                      <input id="x_ads" type="hidden" name="x_ads" value="">
                      <input id="y_ads" type="hidden" name="y_ads" value="">
                      <input id="w_ads" type="hidden" name="w_ads" value="">
                      <input id="h_ads" type="hidden" name="h_ads" value="">
                      <p style="margin-top: 10px;text-align: center;">
                        <input class="buton-radi" name="btn_crop" id="btn_crop" type="button" value="Cắt ảnh" />
                        <input class="buton-radi" onclick="closeCutImage();"  type="button" value="Bỏ qua" />
                      </p>
                     </div>
                  </div>
                  <small class="help-block">JPEG 150x80px</small>
                </div>
              </div><!--/Thumb-->
              <!--Thumb-->
              <div class="form-group">
                <label class="col-lg-3 control-label">Video giới thiệu</label>
                <div class="col-lg-9">
                  <div class="inputs">
                    <div id="upload_video"></div>
                    <input type="hidden" id="file" name="file"/>
                    <input type="hidden" id="file_size"/>
                    <input type="hidden" id="file_type"/>
                    <table id="view_video" name="view_video" width="100%" border="0" cellspacing="0" cellpadding="0" class="form1 magt20"></table>
                  </div>
                  <small class="help-block">Video FullHD 1080</small>
                </div>
              </div><!--/Thumb-->
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
            </ul>
          </div>
        </div>
        <div class="panel-body">
          <form class="form-horizontal">
            <fieldset class="">
              <div class="panel-group panel-group-control sections-wrap" id="accordion-target">
                <!--Section-->
                <div class="panel panel-white">
                  <div class="panel-heading">
                    <h6 class="panel-title">
                      <a aria-expanded="false" class="collapsed title-section" data-parent="#accordion-target" data-toggle="collapse" href="#accordion-control-group1">Section 1</a>
                    </h6>
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
                  <div aria-expanded="false" class="panel-collapse collapse" id="accordion-control-group1">
                    <div class="panel-body">
                      <!--Bài học-->
                      <form class="form-horizontal">
                        <fieldset class="">
                          <legend class="text-bold">Bài học 1</legend> <!--Tiêu đề-->
                          <div class="form-group">
                            <label class="control-label col-lg-3">Tiêu đề bài học</label>
                            <div class="col-lg-9">
                              <input class="f-input -type-string -width-full" placeholder="Nhập tiêu đề bài học" type="text">
                            </div>
                          </div><!--/Tiêu đề-->
                          <!--Description-->
                          <div class="form-group">
                            <label class="control-label col-lg-3">Tóm tắt bài học</label>
                            <div class="col-lg-9">
                              <textarea class="f-textarea" cols="5" placeholder="Default textarea" rows="5"></textarea>
                            </div>
                          </div><!--/Description-->
                          <!--Video file-->
                          <div class="form-group">
                            <label class="col-lg-3 control-label">Video bài học</label>
                            <div class="col-lg-9">
                                <div class="inputs">
                                  <input type="file" class="" name="" id="" vk_1c399="subscribed">
                                </div>
                                <small class="help-block">JPEG 150x80px</small>
                            </div>
                          </div><!--/Video file-->
                        </fieldset>
                      </form><!--/Bài học-->
                    </div>
                  </div>
                </div><!--/Section-->
                
              </div><!--Buttons-->
              <button class="btn btn-primary btn-add-section" type="button"><i class="icon-plus2 position-left"></i> Thêm Section</button>
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
                  <input class="f-input -type-string -width-full" placeholder="Nhập giá mới" type="text">
                </div>
              </div><!--/Giá mới-->
              <!--Giá cũ-->
              <div class="form-group">
                <label class="control-label col-lg-3">Giá cũ</label>
                <div class="col-lg-9">
                  <input class="f-input -type-string -width-full" placeholder="Nhập giá cũ" type="text">
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

  @section('head-scripts')
  <script type="text/javascript">
    $(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".sections-wrap"); //Fields wrapper
    var add_button      = $(".btn-add-section"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            var url_load = '{{URL::to('giang-vien/course/add/section')}}'+'/'+x;
            $(wrapper).append($("<div>").load(url_load));
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
  </script>

  @stop
