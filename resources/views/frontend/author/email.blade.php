@extends('frontend.author.master.author-master') @section('author-body.content') <!-- Content area -->
 @section('author-body.content') <!-- Content area -->
<div class="row">
  <div class="col-md-12 mr--10">
    <form action="" class="e-form">
      <div class="panel panel-flat">
        <div class="panel-body">
          <div class="col-md-8">
            <!-- email -->
            <div class="form-group">
              <legend class="text-semibold">Địa chỉ Email</legend>
              <p>Tất cả những thông báo của hệ thống và các hoạt động liên quan đến tài khoản sẽ được gửi đến địa chỉ email của bạn.</p>
              <div class="h-clearfix mb-10">
                <ul class="e-list" data-show-form="true" data-view="creditCardList" id="credit-card-list">
                  <li class="e-list__item -padding-2 -background-white" id="credit-card-empty">
                    <p class="h-m0"></p>
                    <ul class="Box list-style-none" id="settings-emails">
                      <li class="Box-row clearfix css-truncate settings-email"><span class="css-truncate-target" title="congnvc@gmail.com">congnvc@gmail.com</span> <span class="label bg-success position-right">Chính</span> <span class="label label-danger">Hiển thị</span> <button class="btn btn-link label h-pull-right" data-original-title="Ít nhất một địa chỉ email được yêu cầu" data-placement="top" data-popup="tooltip" title="" type="button"><i class=" icon-trash position-left"></i></button></li>
                    </ul>
                    <p></p>
                  </li>
                </ul>
              </div><label class="text-semibold">Thêm địa chỉ email:</label>
              <div class="input-group form__group">
                <input class="f-input" type="text"> <span class="btn--group-item"><button class="bg-success" type="button"><span class="btn--group-item">Thêm</span></button></span>
              </div>
              <div class="inputs">
                <label for=""><input name="" type="hidden" value="0"><input id="" name="" type="checkbox" value="1"> 
                <span class="text-semibold">Không hiển thị địa chỉ email của tôi</span>
                <br /><span class="help-block position-right">Bạn vẫn nhận được các thông báo từ hệ thống, tuy nhiên địa chỉ email sẽ không hiển thị cho bất kỳ ai.</span></label>
              </div>
            </div><!-- /email -->
            <!-- email settings-->
            <div class="form-group">
              <legend class="text-semibold">Cài đặt Email</legend>
              <label class="">
                      <input type="radio" name="radio-unstyled-inline-left" checked="checked">
                      <span class="text-semibold">Nhận tất cả email...</span>
                      <span class="help-block position-right">Viết cái gì đây nhỉ?.</span>
              </label>
              <br />
              <label class="">
                      <input type="radio" name="radio-unstyled-inline-left" checked="checked">
                      <span class="text-semibold">Chỉ nhận các email từ hệ thống và ...</span>
                      <span class="help-block position-right">Viết cái gì đây nhỉ?.</span>
                  </label>    

              <!-- /email settings-->
            </div>
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