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
                    <li>
                      <a tabindex="0"><label class="radio"></label>
                      <div class="choice">
                      </div>7 ngày qua</a>
                    </li>
                    <li>
                      <a tabindex="0"><label class="radio"></label>
                      <div class="choice">
                      </div>30 ngày qua</a>
                    </li>
                    <li>
                      <a tabindex="0"><label class="radio"></label>
                      <div class="choice">
                      </div>Toàn thời gian</a>
                    </li>
                  </ul>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="container-fluid">
          <div class="row text-center mt-10 mb-10">
            <div class="col-xs-4">
                <p><i class="icon-users2 icon-2x display-inline-block text-info"></i></p>
                <h5 class="text-semibold no-margin">2,345</h5>
                <span class="text-muted text-size-small">Học viên hàng tuần</span>
            </div>
            <div class="col-xs-4">
                    <p><i class="icon-point-up icon-2x display-inline-block text-warning"></i></p>
                    <h5 class="text-semibold no-margin">3,568</h5>
                    <span class="text-muted text-size-small">Lượt xem bài học</span>
            </div>
            <div class="col-xs-4">
                    <p><i class="icon-cash3 icon-2x display-inline-block text-success"></i></p>
                    <h5 class="text-semibold no-margin">15 triệu</h5>
                    <span class="text-muted text-size-small">Thu nhập</span>
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
    </div>
  </div><!-- /dashboard content -->
  <!-- /content area -->
  @stop