@extends('frontend.author.master.author-master') @section('author-body.content') <!-- Content area -->
 @section('author-body.content') <!-- Content area -->
<div class="row">
  <div class="col-md-12 mr--10">
    <form action="" class="e-form">
      <div class="panel panel-flat">
        <div class="panel-body">
          <div class="col-md-8">
            <!-- bill -->
            <div class="form-group">
              <legend class="text-semibold">Thông tin thanh toán</legend>
              <p>Cập nhật phương thức thanh toán và thông tin cá nhân.</p><!-- bank -->
              <div class="form-group">
                <label class="text-semibold">Tên ngân hàng:</label> <input class="f-input -type-string -width-full" placeholder="" type="text" value="Vietcombank">
              </div><!-- /bank -->
              <!-- bank branch-->
              <div class="form-group">
                <label class="text-semibold">Chi nhánh:</label> <input class="f-input -type-string -width-full" placeholder="" type="text" value="Ba Đình">
              </div><!-- /bank branch-->
              <!-- bank account name-->
              <div class="form-group">
                <label class="text-semibold">Chủ tài khoản:</label> <input class="f-input -type-string -width-full" placeholder="" type="text" value="Nguyễn Văn Công">
              </div><!-- /bank account name-->
              <!-- bank number-->
              <div class="form-group">
                <label class="text-semibold">Số tài khoản:</label> <input class="f-input -type-string -width-full" placeholder="" type="text" value="180010889875">
              </div><!-- /bank number-->
              <button class="btn btn-primary" type="button">Cập nhật</button>
            </div><!-- /bill -->
            <!-- Payment History -->
            <legend class="text-semibold">Yêu cầu thanh toán</legend>
            <p>Hiển thị lịch sử các yêu cầu thanh toán của bạn.</p>
            <div class="panel panel-flat">
              <div class="table-responsive">
                <table class="table text-nowrap">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th class="col-md-2">Giá trị</th>
                      <th class="col-md-2">Trạng thái</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- Thanh toán 1 -->
                    <tr>
                      <td>
                        <div class="media-left">
                          <div class="">
                            <a class="text-default text-semibold" href="#">[Thanh toán số #1001]</a>
                          </div>
                          <div class="text-muted text-size-small">
                            <span class="status-mark border-blue position-left"></span> Thanh toán tháng 1
                          </div>
                        </div>
                      </td>
                      <td>
                        <h6 class="text-semibold">7 triệu</h6>
                      </td>
                      <td><span class="label label-flat border-success text-success-600">Thành công</span></td>
                    </tr>
                    <!-- /Thanh toán 1 -->
                    <!-- Thanh toán 2 -->
                    <tr>
                      <td>
                        <div class="media-left">
                          <div class="">
                            <a class="text-default text-semibold" href="#">[Thanh toán số #1001]</a>
                          </div>
                          <div class="text-muted text-size-small">
                            <span class="status-mark border-blue position-left"></span> Thanh toán tháng 1
                          </div>
                        </div>
                      </td>
                      <td>
                        <h6 class="text-semibold">7 triệu</h6>
                      </td>
                      <td>
                      <span class="label label-flat border-danger text-danger-600">Từ chối</span>
                      </td>
                    </tr>
                    <!-- /Thanh toán 2 -->
                    <!-- Thanh toán 3 -->
                    <tr>
                      <td>
                        <div class="media-left">
                          <div class="">
                            <a class="text-default text-semibold" href="#">[Thanh toán số #1001]</a>
                          </div>
                          <div class="text-muted text-size-small">
                            <span class="status-mark border-blue position-left"></span> Thanh toán tháng 1
                          </div>
                        </div>
                      </td>
                      <td>
                        <h6 class="text-semibold">7 triệu</h6>
                      </td>
                      <td>
                      <span class="label label-flat border-grey text-grey-600">Chờ duyệt</span>
                      </td>
                    </tr>
                    <!-- /Thanh toán 3 -->
                    <!-- Thanh toán 1 -->
                    <tr>
                      <td>
                        <div class="media-left">
                          <div class="">
                            <a class="text-default text-semibold" href="#">[Thanh toán số #1001]</a>
                          </div>
                          <div class="text-muted text-size-small">
                            <span class="status-mark border-blue position-left"></span> Thanh toán tháng 1
                          </div>
                        </div>
                      </td>
                      <td>
                        <h6 class="text-semibold">7 triệu</h6>
                      </td>
                      <td><span class="label label-flat border-success text-success-600">Thành công</span></td>
                    </tr>
                    <!-- /Thanh toán 1 -->
                    <!-- Thanh toán 1 -->
                    <tr>
                      <td>
                        <div class="media-left">
                          <div class="">
                            <a class="text-default text-semibold" href="#">[Thanh toán số #1001]</a>
                          </div>
                          <div class="text-muted text-size-small">
                            <span class="status-mark border-blue position-left"></span> Thanh toán tháng 1
                          </div>
                        </div>
                      </td>
                      <td>
                        <h6 class="text-semibold">7 triệu</h6>
                      </td>
                      <td><span class="label label-flat border-success text-success-600">Thành công</span></td>
                    </tr>
                    <!-- /Thanh toán 1 -->
                    <!-- Thanh toán 1 -->
                    <tr>
                      <td>
                        <div class="media-left">
                          <div class="">
                            <a class="text-default text-semibold" href="#">[Thanh toán số #1001]</a>
                          </div>
                          <div class="text-muted text-size-small">
                            <span class="status-mark border-blue position-left"></span> Thanh toán tháng 1
                          </div>
                        </div>
                      </td>
                      <td>
                        <h6 class="text-semibold">7 triệu</h6>
                      </td>
                      <td><span class="label label-flat border-success text-success-600">Thành công</span></td>
                    </tr>
                    <!-- /Thanh toán 1 -->
                    <!-- Thanh toán 1 -->
                    <tr>
                      <td>
                        <div class="media-left">
                          <div class="">
                            <a class="text-default text-semibold" href="#">[Thanh toán số #1001]</a>
                          </div>
                          <div class="text-muted text-size-small">
                            <span class="status-mark border-blue position-left"></span> Thanh toán tháng 1
                          </div>
                        </div>
                      </td>
                      <td>
                        <h6 class="text-semibold">7 triệu</h6>
                      </td>
                      <td><span class="label label-flat border-success text-success-600">Thành công</span></td>
                    </tr>
                    <!-- /Thanh toán 1 -->
                  </tbody>
                </table>
              </div>
            </div>
            <!-- Pagination -->
            <ul class="pagination pagination-flat">
              <li><a href="#">‹</a></li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li class="disabled"><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">›</a></li>
            </ul>
            <!-- /Pagination -->
            <button class="btn btn-primary" type="button"><i class="icon-redo2 position-left"></i>Gửi yêu cầu thanh toán</button> 
            <span class="help-block"><strong>Chú ý:</strong> Hiện tại Enesy chỉ chấp nhận những thanh toán có giá trị từ 500,000 đồng trở lên.</span>
            <!-- /Payment History -->
          </div>
          <div class="col-md-1">
            <!-- Nothing here! just placeholder -->
          </div>
          <div class="col-md-3">
            <!-- Nothing here! just placeholder -->
            <div class="thumbnail no-border no-boxshadow">
              <div class="thumb mt-10 mb-10"><span class="text-semibold mb-10">Các ngân hàng được chấp nhận</span> 
              <img alt="" class="mt-10" src="{{asset('frontend/images/vietcombank.jpg')}}"></div>
              <img alt="" class="mt-10" src="{{asset('frontend/images/vietinbank.jpg')}}"></div>
              <img alt="" class="mt-10" src="{{asset('frontend/images/techcombank.jpg')}}"></div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div><!-- /content area -->
@stop