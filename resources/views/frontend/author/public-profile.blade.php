@extends('frontend.author.master.author-master') @section('author-body.content') <!-- Content area -->
 @section('author-body.content') <!-- Content area -->
<div class="row">
  <div class="col-md-12 mr--10">
    <form action="" class="e-form">
      <div class="panel panel-flat">
        <div class="panel-body">
          <div class="col-md-8">
            <!-- Name -->
            <div class="form-group">
              <legend class="text-semibold">Thông tin cá nhân</legend> 
              <label class="text-semibold">Họ:</label> <input class="f-input -type-string -width-full" placeholder="" type="text" value="Nguyễn" required="true">
              <label class="text-semibold">Tên đệm:</label> <input class="f-input -type-string -width-full" placeholder="" type="text" value="Văn" required="true">
              <label class="text-semibold">Tên:</label> <input class="f-input -type-string -width-full" placeholder="" type="text" value="Công" required="true">
            </div><!-- /Name -->
            <!-- Gender -->
            <label class="text-semibold">Giới tính:</label>
            <label class="radio-inline ml-10">
              <input type="radio" name="radio-unstyled-inline-left" checked="checked">Nam
            </label>
            <label class="radio-inline">
              <input type="radio" name="radio-unstyled-inline-left" checked="checked">Nữ
            </label>
            <label class="radio-inline">
              <input type="radio" name="radio-unstyled-inline-left" checked="checked">Khác
            </label><br />
            <!-- /Gender -->
            <!-- Date of birth -->
            <label class="text-semibold">Ngày sinh:</label> <input class="f-input -type-string -width-full" placeholder="" type="text" value="16/07/1986" required="true">
            <!-- /Date of birth -->
            <!-- Biography -->
            <div class="form-group mt-10">
              <label class="text-semibold">Giới thiệu:</label> 
              <textarea class="f-textarea font-size-13" cols="5" rows="10">Kỹ sư cầu đường với 10 năm kinh nghiệm thiết kế, giám sát các dự án giao thông lớn ở Việt Nam như: Dự án cầu Nhật Tân, dự án hầm đường bộ qua Đèo Cả, dự án hầm đường bộ qua Đèo Cù Mông, dự án mở rộng hầm Hải Vân, ...</textarea>
            </div><!-- /Biography -->
            <!-- Biography help -->
            <div class="box h-clickable biography-help mt--10 is-open" data-view="dropdown" data-dropdown-target="#us-person-definition">
            <h3 class="t-body -size-s h-m0">
              <i class="e-icon -icon-info -margin-right"></i>
              <strong>Các thẻ <code>&lt;html&gt;</code> được chấp nhận</strong>
            </h3>

            <ul class="t-list mt-10 is-hidden" id="us-person-definition">
              <li class="t-body -size-s h-m0">&lt;strong&gt;&lt;/strong&gt; để in đậm text.
              </li>
              <li class="t-body -size-s h-m0">&lt;ul&gt;&lt;li&gt; hoặc &lt;ol&gt;&lt;li&gt; để tạo danh sách.
              </li>
              <li class="t-body -size-s h-m0">&lt;a&gt;&lt;/a&gt; để chèn một liên kết.
              </li>
              <li class="t-body -size-s h-m0">&lt;img&gt; để chèn một hình ảnh.
              </li>
              <li class="t-body -size-s h-m0">&lt;blockquote&gt;&lt;/blockquote&gt; để chèn một trích dẫn.
              </li>
            </ul>
            </div>
            <!-- /Biography help -->
            <button class="btn btn-primary" type="button">Cập nhật</button>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-3">
            <div class="thumbnail no-border no-boxshadow">
              <div class="thumb mt-10 mb-10"><span class="text-semibold mb-10">Ảnh đại diện</span> <img alt="" class="mt-10" src="{{asset('frontend/images/user-no-avatar.png')}}"></div>
              <div class="caption">
                <button class="btn btn-default btn-ladda btn-ladda-progress" data-spinner-size="20" data-style="expand-left" type="button"><span class="ladda-label">Thay ảnh mới</span><span class="ladda-spinner"></span>
                <div class="ladda-progress" style="width: 158px;"></div></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div><!-- /content area -->
@stop
@section('head-scripts')
<script type="text/javascript">
  //this is demo by cong, need to rewrite by code team
  $(document).ready(function() {
  var clickArea         = $(".biography-help");

  $(clickArea).click(function(e){
      e.preventDefault();
          $(clickArea).children('ul#us-person-definition').toggleClass("is-hidden");
  });
});
</script>
@stop