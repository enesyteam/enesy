@extends('frontend.author.master.author-master') @section('author-body.content') <!-- Content area -->
 @section('author-body.content') <!-- Content area -->
<div class="row">
  <div class="col-md-12 mr--10">
    <form action="" class="e-form">
      <div class="panel panel-flat">
        <div class="panel-body">
          <div class="col-md-8">
            <!-- old password -->
            <div class="form-group">
              <legend class="text-semibold">Thay đổi mật khẩu</legend> 
              <label class="text-semibold">Mật khẩu cũ:</label> <input class="f-input -type-string -width-full" placeholder="" type="password" value="">
            </div><!-- /old password -->
            <!-- new password -->
            <div class="form-group">
              <label class="text-semibold">Mật khẩu mới:</label> <input class="f-input -type-string -width-full" placeholder="" type="password" value="">
            </div><!-- /new password -->
            <!-- confirm new password -->
            <div class="form-group">
              <label class="text-semibold">Nhập lại mật khẩu mới:</label> <input class="f-input -type-string -width-full" placeholder="" type="password" value="">
            </div><!-- /confirm new password -->
            
            <button class="btn btn-primary" type="button">Cập nhật mật khẩu</button>
            <a class=" position-right">Quên mật khẩu</a>

            <!-- username -->
            <div class="form-group mt-10">
              <legend class="text-semibold">Tài khoản đăng nhập</legend> 
              <label class="text-semibold">Tên đăng nhập:</label> <input class="f-input -type-string -width-full" placeholder="" type="text" value="congcd4">
            </div><!-- /username -->
            <button class="btn btn-primary" type="button">Thay đổi tên đăng nhập</button>

            <!-- delete account -->
            <div class="form-group mt-10">
              <legend class="text-semibold">Xóa tài khoản</legend>
              <p>Khi xóa tài khoản, bạn không thể đăng nhập trở lại hệ thống. Hãy cân nhắc kỹ trước khi xóa!</p>
              <button class="btn btn-danger" type="button">Xóa tài khoản</button>
            </div><!-- /delete account -->
            

          </div>
          <div class="col-md-1">
            <!-- Nothing here! just placeholder -->
          </div>
          <div class="col-md-3">
            <!-- Nothing here! just placeholder -->
          </div>
        </div>
      </div>
    </form>
  </div>
</div><!-- /content area -->
@stop