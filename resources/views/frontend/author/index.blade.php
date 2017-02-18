  @extends('frontend.author.master.author-master') @section('author-body.content') <!--Messages-->
  <div class="alert alert-info alert-styled-left alert-arrow-left alert-component">
    <button class="close" data-dismiss="alert" type="button"><span>×</span><span class="sr-only">Close</span></button>
    <h6 class="alert-heading text-semibold">Thông báo từ Enesy</h6>Nội dung thông báo ở đây Nội dung thông báo ở đây Nội dung thông báo ở đây Nội dung thông báo ở đây Nội dung thông báo ở đây Nội dung thông báo ở đây.
  </div><!--/Messages-->
  <!-- Main charts -->
  <div class="row">
    <div class="col-lg-12">
      <!-- Sales stats -->
      <div class="panel panel-flat">
        <div class="panel-heading">
          <h6 class="panel-title">Thống kê<a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
          <div class="heading-elements">
            <form action="#" class="heading-form">
              <div class="form-group">
                <select class="change-date select-sm" id="select_date" style="display: none;">
                  <optgroup label="&lt;i class='icon-watch pull-right'&gt;&lt;/i&gt; Time period">
                    <option value="val1">
                      7 ngày qua
                    </option>
                    <option value="val2">
                      30 ngày qua
                    </option>
                    <option value="val4">
                      Toàn thời gian
                    </option>
                  </optgroup>
                </select>
                <div class="btn-group">
                  <button class="multiselect dropdown-toggle btn btn-link text-semibold" data-toggle="dropdown" title="June, 15 - June, 21" type="button"><span class="multiselect-selected-text"><span class="status-mark border-warning position-left"></span>7 ngày qua</span> <b class="caret"></b></button>
                  <ul class="multiselect-container dropdown-menu pull-right">
                    <li class="multiselect-item multiselect-group"><label><i class="icon-watch pull-right"></i> Khoảng thời gian</label></li>
                    <li>
                      <a tabindex="0"><label class="radio"></label>
                      <div class="choice">
                        <label><span><input type="radio" value="val1"></span></label>
                      </div>7 ngày qua</a>
                    </li>
                    <li>
                      <a tabindex="0"><label class="radio"></label>
                      <div class="choice">
                        <label><span><input type="radio" value="val2"></span></label>
                      </div>30 ngày qua</a>
                    </li>
                    <li>
                      <a tabindex="0"><label class="radio"></label>
                      <div class="choice">
                        <label><span><input type="radio" value="val3"></span></label>
                      </div>Toàn thời gian</a>
                    </li>
                  </ul>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="container-fluid">
          <div class="row text-center mt-10">
            <div class="col-md-4">
              <div class="content-group">
                <h5 class="text-semibold no-margin"><i class="icon-users position-left text-slate"></i> 5,689</h5><span class="text-muted text-size-small">học viên hàng tuần</span>
              </div>
            </div>
            <div class="col-md-4">
              <div class="content-group">
                <h5 class="text-semibold no-margin"><i class="icon-calendar52 position-left text-slate"></i> 32,568</h5><span class="text-muted text-size-small">học viên hàng tháng</span>
              </div>
            </div>
            <div class="col-md-4">
              <div class="content-group">
                <h5 class="text-semibold no-margin"><i class="icon-cash3 position-left text-slate"></i> 8 triệu</h5><span class="text-muted text-size-small">tổng thu nhập</span>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /sales stats -->
    </div>
  </div><!-- /main charts -->
  <!-- Dashboard content -->
  <div class="row">
    <div class="col-lg-12">
      <!-- Hoạt động trên khóa học -->
      <div class="panel panel-flat">
        <div class="panel-heading">
          <h6 class="panel-title">Hoạt động trên khóa học<a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
          <div class="heading-elements">
            <span class="label bg-success heading-text">28 active</span>
            <span class="label label-danger heading-text">10 comming soon</span>
            <ul class="icons-list">
              <li class="dropdown">
                <a data-action="reload" href="#"></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table text-nowrap">
            <thead>
              <tr>
                <th>Khóa học</th>
                <th class="col-md-2">Học viên</th>
                <th class="col-md-2">Thu nhập</th>
                <th class="col-md-2">Trạng thái</th>
                <th class="text-center" style="width: 20px;"><i class="icon-arrow-down12"></i></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="media-left">
                    <div class="">
                      <a class="text-default text-semibold" href="#">Tiêu đề cho khóa học</a>
                    </div>
                    <div class="text-muted text-size-small">
                      <span class="status-mark border-blue position-left"></span> 30 ngày qua
                    </div>
                  </div>
                </td>
                <td><span class="text-success-600">1,500 <i class="icon-stats-growth2 position-left"></i></span></td>
                <td>
                  <h6 class="text-semibold">7 triệu</h6>
                </td>
                <td><span class="label label-flat border-success text-success-600 position-right">Xuất bản</span></td>
                <td class="text-center">
                  <ul class="icons-list">
                    <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-menu7"></i></a>
                      <ul class="dropdown-menu dropdown-menu-right">
                        <li>
                          <a href="#"><i class="icon-file-stats"></i> Xem chi tiết</a>
                        </li>
                        <li>
                          <a href="#"><i class="icon-file-text2"></i> Làm gì đây?</a>
                        </li>
                        <li>
                          <a href="#"><i class="icon-file-locked"></i> Làm gì đây?</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                          <a href="#"><i class="icon-gear"></i> Sửa khóa học</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="media-left">
                    <div class="">
                      <a class="text-default text-semibold" href="#">Tiêu đề cho khóa học</a>
                    </div>
                    <div class="text-muted text-size-small">
                      <span class="status-mark border-danger position-left"></span> 30 ngày qua
                    </div>
                  </div>
                </td>
                <td><span class="text-success-600">2,500 <i class="icon-stats-growth2 position-left"></i></span></td>
                <td>
                  <h6 class="text-semibold">8 triệu</h6>
                </td>
                <td><span class="label label-flat border-success text-success-600 position-right">Xuất bản</span></td>
                <td class="text-center">
                  <ul class="icons-list">
                    <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-menu7"></i></a>
                      <ul class="dropdown-menu dropdown-menu-right">
                        <li>
                          <a href="#"><i class="icon-file-stats"></i> Xem chi tiết</a>
                        </li>
                        <li>
                          <a href="#"><i class="icon-file-text2"></i> Làm gì đây?</a>
                        </li>
                        <li>
                          <a href="#"><i class="icon-file-locked"></i> Làm gì đây?</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                          <a href="#"><i class="icon-gear"></i> Sửa khóa học</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="media-left">
                    <div class="">
                      <a class="text-default text-semibold" href="#">Tiêu đề cho khóa học</a>
                    </div>
                    <div class="text-muted text-size-small">
                      <span class="status-mark border-grey-400 position-left"></span> 30 ngày qua
                    </div>
                  </div>
                </td>
                <td><span class="text-danger">500 <i class="icon-stats-decline2 position-left"></i></span></td>
                <td>
                  <h6 class="text-semibold">10 triệu</h6>
                </td>
                <td><span class="label label-flat border-success text-success-600 position-right">Xuất bản</span></td>
                <td class="text-center">
                  <ul class="icons-list">
                    <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-menu7"></i></a>
                      <ul class="dropdown-menu dropdown-menu-right">
                        <li>
                          <a href="#"><i class="icon-file-stats"></i> Xem chi tiết</a>
                        </li>
                        <li>
                          <a href="#"><i class="icon-file-text2"></i> Làm gì đây?</a>
                        </li>
                        <li>
                          <a href="#"><i class="icon-file-locked"></i> Làm gì đây?</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                          <a href="#"><i class="icon-gear"></i> Sửa khóa học</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="media-left">
                    <div class="">
                      <a class="text-default text-semibold" href="#">Tiêu đề cho khóa học</a>
                    </div>
                    <div class="text-muted text-size-small">
                      <span class="status-mark border-grey-400 position-left"></span> 30 ngày qua
                    </div>
                  </div>
                </td>
                <td><span class="text-success-600">110 <i class="icon-stats-growth2 position-left"></i></span></td>
                <td>
                  <h6 class="text-semibold">6 triệu</h6>
                </td>
                <td><span class="label label-danger position-right">Coming soon</span></td>
                <td class="text-center">
                  <ul class="icons-list">
                    <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-menu7"></i></a>
                      <ul class="dropdown-menu dropdown-menu-right">
                        <li>
                          <a href="#"><i class="icon-file-stats"></i> Xem chi tiết</a>
                        </li>
                        <li>
                          <a href="#"><i class="icon-file-text2"></i> Làm gì đây?</a>
                        </li>
                        <li>
                          <a href="#"><i class="icon-file-locked"></i> Làm gì đây?</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                          <a href="#"><i class="icon-gear"></i> Sửa khóa học</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="media-left">
                    <div class="">
                      <a class="text-default text-semibold" href="#">Tiêu đề cho khóa học</a>
                    </div>
                    <div class="text-muted text-size-small">
                      <span class="status-mark border-success position-left"></span> 30 ngày qua
                    </div>
                  </div>
                </td>
                <td><span class="text-danger">250 <i class="icon-stats-decline2 position-left"></i></span></td>
                <td>
                  <h6 class="text-semibold">1 triệu</h6>
                </td>
                <td><span class="label label-flat border-success text-success-600 position-right">Xuất bản</span></td>
                <td class="text-center">
                  <ul class="icons-list">
                    <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-menu7"></i></a>
                      <ul class="dropdown-menu dropdown-menu-right">
                        <li>
                          <a href="#"><i class="icon-file-stats"></i> Xem chi tiết</a>
                        </li>
                        <li>
                          <a href="#"><i class="icon-file-text2"></i> Làm gì đây?</a>
                        </li>
                        <li>
                          <a href="#"><i class="icon-file-locked"></i> Làm gì đây?</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                          <a href="#"><i class="icon-gear"></i> Sửa khóa học</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="media-left">
                    <div class="">
                      <a class="text-default text-semibold" href="#">Tiêu đề cho khóa học</a>
                    </div>
                    <div class="text-muted text-size-small">
                      <span class="status-mark border-danger position-left"></span> 30 ngày qua
                    </div>
                  </div>
                </td>
                <td><span class="text-success-600">900 <i class="icon-stats-growth2 position-left"></i></span></td>
                <td>
                  <h6 class="text-semibold">800k</h6>
                </td>
                <td><span class="label label-flat border-success text-success-600 position-right">Xuất bản</span></td>
                <td class="text-center">
                  <ul class="icons-list">
                    <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-menu7"></i></a>
                      <ul class="dropdown-menu dropdown-menu-right">
                        <li>
                          <a href="#"><i class="icon-file-stats"></i> Xem chi tiết</a>
                        </li>
                        <li>
                          <a href="#"><i class="icon-file-text2"></i> Làm gì đây?</a>
                        </li>
                        <li>
                          <a href="#"><i class="icon-file-locked"></i> Làm gì đây?</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                          <a href="#"><i class="icon-gear"></i> Sửa khóa học</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="media-left">
                    <div class="">
                      <a class="text-default text-semibold" href="#">Tiêu đề cho khóa học</a>
                    </div>
                    <div class="text-muted text-size-small">
                      <span class="status-mark border-blue position-left"></span> 30 ngày qua
                    </div>
                  </div>
                </td>
                <td><span class="text-danger">150 <i class="icon-stats-decline2 position-left"></i></span></td>
                <td>
                  <h6 class="text-semibold">700k</h6>
                </td>
                <td><span class="label label-flat border-success text-success-600 position-right">Xuất bản</span></td>
                <td class="text-center">
                  <ul class="icons-list">
                    <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-menu7"></i></a>
                      <ul class="dropdown-menu dropdown-menu-right">
                        <li>
                          <a href="#"><i class="icon-file-stats"></i> Xem chi tiết</a>
                        </li>
                        <li>
                          <a href="#"><i class="icon-file-text2"></i> Làm gì đây?</a>
                        </li>
                        <li>
                          <a href="#"><i class="icon-file-locked"></i> Làm gì đây?</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                          <a href="#"><i class="icon-gear"></i> Sửa khóa học</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div><!-- /Hoạt động trên khóa học -->
      <!-- Hỗ trợ khóa học -->
      <div class="panel panel-flat">
        <div class="panel-heading">
          <h6 class="panel-title">Hỗ trợ khóa học<a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
          <div class="heading-elements">
            <ul class="icons-list">
              <li class="dropdown">
                <a data-action="reload" href="#"></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table text-nowrap">
            <thead>
              <tr>
                <th style="width: 40px">Thời gian</th>
                <th style="width: 280px;">Học viên</th>
                <th>Nội dung hỗ trợ</th>
                <th class="text-center" style="width: 20px;"><i class="icon-arrow-down12"></i></th>
              </tr>
            </thead>
            <tbody>
              <tr class="active border-double">
                <td colspan="3">Hỗ trợ mới nhất</td>
                <td class="text-right"><span class="badge bg-blue">24</span></td>
              </tr>
              <tr>
                <td class="text-center">
                  <h6 class="no-margin">12 <small class="display-block text-size-small no-margin">hours</small></h6>
                </td>
                <td>
                  <div class="media-left media-middle">
                    <a href="#"><img alt="" class="img-circle img-sm" src="{{'frontend/images/user-no-avatar.png'}}"></a>
                  </div>
                  <div class="media-body">
                    <a class="display-inline-block text-default text-semibold letter-icon-title" href="#">Đức Nguyễn</a>
                    <div class="text-muted text-size-small">
                      <span class="status-mark border-blue position-left"></span> Active
                    </div>
                  </div>
                </td>
                <td>
                  <a class="text-default display-inline-block" href="#"><span class="text-semibold">[#1183] Yêu cầu trợ giúp cho khóa học</span> <span class="display-block text-muted">Mộ câu hỏi nào đó về bài học trong khóa học...</span></a>
                </td>
                <td class="text-center">
                  <ul class="icons-list">
                    <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-menu7"></i></a>
                      <ul class="dropdown-menu dropdown-menu-right">
                        <li>
                          <a href="#"><i class="icon-undo"></i> Quick reply</a>
                        </li>
                        <li>
                          <a href="#"><i class="icon-history"></i> Full history</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                          <a href="#"><i class="icon-checkmark3 text-success"></i> Resolve issue</a>
                        </li>
                        <li>
                          <a href="#"><i class="icon-cross2 text-danger"></i> Close issue</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </td>
              </tr>
              <tr>
                <td class="text-center">
                  <h6 class="no-margin">16 <small class="display-block text-size-small no-margin">hours</small></h6>
                </td>
                <td>
                  <div class="media-left media-middle">
                    <a href="#"><img alt="" class="img-circle img-xs" src="{{'frontend/images/user-no-avatar.png'}}"></a>
                  </div>
                  <div class="media-body">
                    <a class="display-inline-block text-default text-semibold letter-icon-title" href="#">Dũng nguyễn</a>
                    <div class="text-muted text-size-small">
                      <span class="status-mark border-blue position-left"></span> Active
                    </div>
                  </div>
                </td>
                <td>
                  <a class="text-default display-inline-block" href="#"><span class="text-semibold">[#1249] Không vào được khóa học</span> <span class="display-block text-muted">Hỏi tẹt ga đi anh trả lời hết...</span></a>
                </td>
                <td class="text-center">
                  <ul class="icons-list">
                    <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-menu7"></i></a>
                      <ul class="dropdown-menu dropdown-menu-right">
                        <li>
                          <a href="#"><i class="icon-undo"></i> Quick reply</a>
                        </li>
                        <li>
                          <a href="#"><i class="icon-history"></i> Full history</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                          <a href="#"><i class="icon-checkmark3 text-success"></i> Resolve issue</a>
                        </li>
                        <li>
                          <a href="#"><i class="icon-cross2 text-danger"></i> Close issue</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </td>
              </tr>
              <tr>
                <td class="text-center">
                  <h6 class="no-margin">20 <small class="display-block text-size-small no-margin">hours</small></h6>
                </td>
                <td>
                  <div class="media-left media-middle">
                    <a href="#"><img alt="" class="img-circle img-sm" src="{{'frontend/images/user-no-avatar.png'}}"></a>
                  </div>
                  <div class="media-body">
                    <a class="display-inline-block text-default text-semibold letter-icon-title" href="#">Công Nguyễn</a>
                    <div class="text-muted text-size-small">
                      <span class="status-mark border-blue position-left"></span> Active
                    </div>
                  </div>
                </td>
                <td>
                  <a class="text-default display-inline-block" href="#"><span class="text-semibold">[#1254] Chỗ này làm như thế nào?</span> <span class="display-block text-muted">Không có gì là không trả lời được...</span></a>
                </td>
                <td class="text-center">
                  <ul class="icons-list">
                    <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-menu7"></i></a>
                      <ul class="dropdown-menu dropdown-menu-right">
                        <li>
                          <a href="#"><i class="icon-undo"></i> Quick reply</a>
                        </li>
                        <li>
                          <a href="#"><i class="icon-history"></i> Full history</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                          <a href="#"><i class="icon-checkmark3 text-success"></i> Resolve issue</a>
                        </li>
                        <li>
                          <a href="#"><i class="icon-cross2 text-danger"></i> Close issue</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </td>
              </tr>
              <tr>
                <td class="text-center">
                  <h6 class="no-margin">40 <small class="display-block text-size-small no-margin">hours</small></h6>
                </td>
                <td>
                  <div class="media-left media-middle">
                    <a href="#"><img alt="" class="img-circle img-sm" src="{{'frontend/images/user-no-avatar.png'}}"></a>
                  </div>
                  <div class="media-body">
                    <a class="display-inline-block text-default text-semibold letter-icon-title" href="#">Dex Sponheim</a>
                    <div class="text-muted text-size-small">
                      <span class="status-mark border-blue position-left"></span> Active
                    </div>
                  </div>
                </td>
                <td>
                  <a class="text-default display-inline-block" href="#"><span class="text-semibold">[#1184] Không hề đơn giản tí nào</span> <span class="display-block text-muted">Đơn giản như đang giỡn...</span></a>
                </td>
                <td class="text-center">
                  <ul class="icons-list">
                    <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-menu7"></i></a>
                      <ul class="dropdown-menu dropdown-menu-right">
                        <li>
                          <a href="#"><i class="icon-undo"></i> Quick reply</a>
                        </li>
                        <li>
                          <a href="#"><i class="icon-history"></i> Full history</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                          <a href="#"><i class="icon-checkmark3 text-success"></i> Resolve issue</a>
                        </li>
                        <li>
                          <a href="#"><i class="icon-cross2 text-danger"></i> Close issue</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </td>
              </tr>
              <tr>
                <td class="text-center"><i class="icon-checkmark3 text-success"></i></td>
                <td>
                  <div class="media-left media-middle">
                    <a href="#"><img alt="" class="img-circle img-sm" src="{{'frontend/images/user-no-avatar.png'}}"></a>
                  </div>
                  <div class="media-body">
                    <a class="display-inline-block text-default letter-icon-title" href="#">Brett Castellano</a>
                    <div class="text-muted text-size-small">
                      <span class="status-mark border-success position-left"></span> Resolved
                    </div>
                  </div>
                </td>
                <td>
                  <a class="text-default display-inline-block" href="#">[#1038] Thường thôi có gì đâu <span class="display-block text-muted">Cái này là cái gì đây?...</span></a>
                </td>
                <td class="text-center">
                  <ul class="icons-list">
                    <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-menu7"></i></a>
                      <ul class="dropdown-menu dropdown-menu-right">
                        <li>
                          <a href="#"><i class="icon-undo"></i> Quick reply</a>
                        </li>
                        <li>
                          <a href="#"><i class="icon-history"></i> Full history</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                          <a href="#"><i class="icon-plus3 text-blue"></i> Unresolve issue</a>
                        </li>
                        <li>
                          <a href="#"><i class="icon-cross2 text-danger"></i> Close issue</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </td>
              </tr>
              <tr>
                <td class="text-center"><i class="icon-checkmark3 text-success"></i></td>
                <td>
                  <div class="media-left media-middle">
                    <a href="#"><img alt="" class="img-circle img-xs" src="{{'frontend/images/user-no-avatar.png'}}"></a>
                  </div>
                  <div class="media-body">
                    <a class="display-inline-block text-default" href="#">Roxanne Forbes</a>
                    <div class="text-muted text-size-small">
                      <span class="status-mark border-success position-left"></span> Resolved
                    </div>
                  </div>
                </td>
                <td>
                  <a class="text-default display-inline-block" href="#">[#1034] Đơn giản như ăn cháo <span class="display-block text-muted">Đoạn này khó vãi đái ra quần...</span></a>
                </td>
                <td class="text-center">
                  <ul class="icons-list">
                    <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-menu7"></i></a>
                      <ul class="dropdown-menu dropdown-menu-right">
                        <li>
                          <a href="#"><i class="icon-undo"></i> Quick reply</a>
                        </li>
                        <li>
                          <a href="#"><i class="icon-history"></i> Full history</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                          <a href="#"><i class="icon-plus3 text-blue"></i> Unresolve issue</a>
                        </li>
                        <li>
                          <a href="#"><i class="icon-cross2 text-danger"></i> Close issue</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </td>
              </tr>
              <tr class="active border-double">
                <td colspan="3">Các hỗ trợ đã đóng</td>
                <td class="text-right"><span class="badge bg-danger">37</span></td>
              </tr>
              <tr>
                <td class="text-center"><i class="icon-cross2 text-danger-400"></i></td>
                <td>
                  <div class="media-left media-middle">
                    <a href="#"><img alt="" class="img-circle img-xs" src="{{'frontend/images/user-no-avatar.png'}}"></a>
                  </div>
                  <div class="media-body">
                    <a class="display-inline-block text-default" href="#">Mitchell Sitkin</a>
                    <div class="text-muted text-size-small">
                      <span class="status-mark border-danger position-left"></span> Closed
                    </div>
                  </div>
                </td>
                <td>
                  <a class="text-default display-inline-block" href="#">[#1040] Anh ơi giúp em với <span class="display-block text-muted">Thời gian đã trôi qua không thể trở lại...</span></a>
                </td>
                <td class="text-center">
                  <ul class="icons-list">
                    <li class="dropup">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-menu7"></i></a>
                      <ul class="dropdown-menu dropdown-menu-right">
                        <li>
                          <a href="#"><i class="icon-undo"></i> Quick reply</a>
                        </li>
                        <li>
                          <a href="#"><i class="icon-history"></i> Full history</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                          <a href="#"><i class="icon-reload-alt text-blue"></i> Reopen issue</a>
                        </li>
                        <li>
                          <a href="#"><i class="icon-cross2 text-danger"></i> Close issue</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </td>
              </tr>
              <tr>
                <td class="text-center"><i class="icon-cross2 text-danger"></i></td>
                <td>
                  <div class="media-left media-middle">
                    <a href="#"><img alt="" class="img-circle img-sm" src="{{'frontend/images/user-no-avatar.png'}}"></a>
                  </div>
                  <div class="media-body">
                    <a class="display-inline-block text-default letter-icon-title" href="#">Katleen Jensen</a>
                    <div class="text-muted text-size-small">
                      <span class="status-mark border-danger position-left"></span> Closed
                    </div>
                  </div>
                </td>
                <td>
                  <a class="text-default display-inline-block" href="#">[#1038] Đây là cái quái gì? <span class="display-block text-muted">Dòng sông đã trôi đi làm sao về bến cũ...</span></a>
                </td>
                <td class="text-center">
                  <ul class="icons-list">
                    <li class="dropup">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-menu7"></i></a>
                      <ul class="dropdown-menu dropdown-menu-right">
                        <li>
                          <a href="#"><i class="icon-undo"></i> Quick reply</a>
                        </li>
                        <li>
                          <a href="#"><i class="icon-history"></i> Full history</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                          <a href="#"><i class="icon-plus3 text-blue"></i> Unresolve issue</a>
                        </li>
                        <li>
                          <a href="#"><i class="icon-cross2 text-danger"></i> Close issue</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div><!-- /Hỗ trợ khóa học -->
    </div>
  </div><!-- /dashboard content -->
  <!-- /content area -->
  @stop