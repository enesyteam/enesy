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
              <legend class="text-semibold">Thông tin cá nhân</legend> <label class="text-semibold">Tên bạn:</label> <input class="f-input -type-string -width-full" placeholder="" type="text" value="Nguyễn Văn Công">
            </div><!-- /Name -->
            <!-- Biography -->
            <div class="form-group">
              <label class="text-semibold">Giới thiệu:</label> 
              <textarea class="f-textarea" cols="5" rows="5">Kỹ sư cầu đường với 10 năm kinh nghiệm thiết kế, giám sát các dự án giao thông lớn ở Việt Nam như: Dự án cầu Nhật Tân, dự án hầm đường bộ qua Đèo Cả, dự án hầm đường bộ qua Đèo Cù Mông, dự án mở rộng hầm Hải Vân, ...</textarea>
            </div><!-- /Biography -->
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