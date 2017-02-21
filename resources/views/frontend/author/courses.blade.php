  @extends('frontend.author.master.author-master') 
  @section('author-body.content') <!-- Content area -->
  <!--Messages-->
  <div class="alert alert-warning alert-styled-left alert-arrow-left alert-component">
    <button class="close" data-dismiss="alert" type="button"><span>×</span><span class="sr-only">Close</span></button>
    <h6 class="alert-heading text-semibold">Cảnh báo từ hệ thống</h6>Nội dung thông báo ở đây Nội dung thông báo ở đây Nội dung thông báo ở đây Nội dung thông báo ở đây Nội dung thông báo ở đây Nội dung thông báo ở đây.
  </div><!--/Messages-->
  <!--Toolbar-->
  <button class="btn btn-info btn-labeled btn-xs mb-10" onclick="location.href='{{route('user.author_courses_create')}}';" type="button"><b><i class="icon-plus2"></i></b> Tạo khóa học</button> <!--/Toolbar-->
  <div class="row">
    <div class="col-lg-12">
      <!-- Marketing campaigns -->
      <div class="panel panel-flat">
        <div class="panel-heading">
          <h6 class="panel-title">Khóa học của bạn<a class="heading-elements-toggle"><i class="icon-more"></i></a><a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
          <div class="heading-elements">
            <span class="label bg-success heading-text">18 active</span>
            <span class="label label-danger heading-text">10 coming soon</span>
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
                <th>Tiêu đề</th>
                <th class="col-md-2">Bài học</th>
                <th class="col-md-2"><i class="icon-coin-dollar"></i> Giá bán</th>
                <th class="col-md-2"><i class="icon-users"></i> Học viên</th>
                <th class="col-md-2">Trạng thái</th>
                <th class="text-center" style="width: 20px;">Sửa</th>
              </tr>
            </thead>
            <tbody>
              <!--Course-->
              <tr>
                <td>
                  <div class="media-left">
                    <div class="">
                      <a class="text-default text-semibold" href="#">Tên khóa học ở đây...</a>
                    </div>
                  </div>
                </td>
                <td><span class="badge badge-flat border-danger text-danger-600 position-right">190</span></td>
                <td>
                  <h6 class="text-semibold">650k</h6>
                </td>
                <td><span class="badge badge-primary">1,500</span></td>
                <td><span class="label label-danger position-right">Coming soon</span></td>
                <td class="text-center">
                  <a href="#"><i class="icon-pencil7"></i></a>
                </td>
              </tr><!--Course-->
              <!--Course-->
              <tr>
                <td>
                  <div class="media-left">
                    <div class="">
                      <a class="text-default text-semibold" href="#">Tên khóa học ở đây...</a>
                    </div>
                  </div>
                </td>
                <td><span class="badge badge-flat border-danger text-danger-600 position-right">190</span></td>
                <td>
                  <h6 class="text-semibold">650k</h6>
                </td>
                <td><span class="badge badge-primary">1,500</span></td>
                <td><span class="label label-flat border-success text-success-600 position-right">Xuất bản</span></td>
                <td class="text-center">
                  <a href="#"><i class="icon-pencil7"></i></a>
                </td>
              </tr><!--Course-->
              <!--Course-->
              <tr>
                <td>
                  <div class="media-left">
                    <div class="">
                      <a class="text-default text-semibold" href="#">Tên khóa học ở đây...</a>
                    </div>
                  </div>
                </td>
                <td><span class="badge badge-flat border-danger text-danger-600 position-right">190</span></td>
                <td>
                  <h6 class="text-semibold">650k</h6>
                </td>
                <td><span class="badge badge-primary">1,500</span></td>
                <td><span class="label label-flat border-success text-success-600 position-right">Xuất bản</span></td>
                <td class="text-center">
                  <a href="#"><i class="icon-pencil7"></i></a>
                </td>
              </tr><!--Course-->
              <!--Course-->
              <tr>
                <td>
                  <div class="media-left">
                    <div class="">
                      <a class="text-default text-semibold" href="#">Tên khóa học ở đây...</a>
                    </div>
                  </div>
                </td>
                <td><span class="badge badge-flat border-danger text-danger-600 position-right">190</span></td>
                <td>
                  <h6 class="text-semibold">650k</h6>
                </td>
                <td><span class="badge badge-primary">1,500</span></td>
                <td><span class="label label-flat border-success text-success-600 position-right">Xuất bản</span></td>
                <td class="text-center">
                  <a href="#"><i class="icon-pencil7"></i></a>
                </td>
              </tr><!--Course-->
              <!--Course-->
              <tr>
                <td>
                  <div class="media-left">
                    <div class="">
                      <a class="text-default text-semibold" href="#">Tên khóa học ở đây...</a>
                    </div>
                  </div>
                </td>
                <td><span class="badge badge-flat border-danger text-danger-600 position-right">190</span></td>
                <td>
                  <h6 class="text-semibold">650k</h6>
                </td>
                <td><span class="badge badge-primary">1,500</span></td>
                <td><span class="label label-flat border-success text-success-600 position-right">Xuất bản</span></td>
                <td class="text-center">
                  <a href="#"><i class="icon-pencil7"></i></a>
                </td>
              </tr><!--Course-->
              <!--Course-->
              <tr>
                <td>
                  <div class="media-left">
                    <div class="">
                      <a class="text-default text-semibold" href="#">Tên khóa học ở đây...</a>
                    </div>
                  </div>
                </td>
                <td><span class="badge badge-flat border-danger text-danger-600 position-right">190</span></td>
                <td>
                  <h6 class="text-semibold">650k</h6>
                </td>
                <td><span class="badge badge-primary">1,500</span></td>
                <td><span class="label label-flat border-success text-success-600 position-right">Xuất bản</span></td>
                <td class="text-center">
                  <a href="#"><i class="icon-pencil7"></i></a>
                </td>
              </tr><!--Course-->
              <!--Course-->
              <tr>
                <td>
                  <div class="media-left">
                    <div class="">
                      <a class="text-default text-semibold" href="#">Tên khóa học ở đây...</a>
                    </div>
                  </div>
                </td>
                <td><span class="badge badge-flat border-danger text-danger-600 position-right">190</span></td>
                <td>
                  <h6 class="text-semibold">650k</h6>
                </td>
                <td><span class="badge badge-primary">1,500</span></td>
                <td><span class="label label-flat border-success text-success-600 position-right">Xuất bản</span></td>
                <td class="text-center">
                  <a href="#"><i class="icon-pencil7"></i></a>
                </td>
              </tr><!--Course-->
              <!--Course-->
              <tr>
                <td>
                  <div class="media-left">
                    <div class="">
                      <a class="text-default text-semibold" href="#">Tên khóa học ở đây...</a>
                    </div>
                  </div>
                </td>
                <td><span class="badge badge-flat border-danger text-danger-600 position-right">190</span></td>
                <td>
                  <h6 class="text-semibold">650k</h6>
                </td>
                <td><span class="badge badge-primary">1,500</span></td>
                <td><span class="label label-flat border-success text-success-600 position-right">Xuất bản</span></td>
                <td class="text-center">
                  <a href="#"><i class="icon-pencil7"></i></a>
                </td>
              </tr><!--Course-->
              <!--Course-->
              <tr>
                <td>
                  <div class="media-left">
                    <div class="">
                      <a class="text-default text-semibold" href="#">Tên khóa học ở đây...</a>
                    </div>
                  </div>
                </td>
                <td><span class="badge badge-flat border-danger text-danger-600 position-right">190</span></td>
                <td>
                  <h6 class="text-semibold">650k</h6>
                </td>
                <td><span class="badge badge-primary">1,500</span></td>
                <td><span class="label label-flat border-success text-success-600 position-right">Xuất bản</span></td>
                <td class="text-center">
                  <a href="#"><i class="icon-pencil7"></i></a>
                </td>
              </tr><!--Course-->
              <!--Course-->
              <tr>
                <td>
                  <div class="media-left">
                    <div class="">
                      <a class="text-default text-semibold" href="#">Tên khóa học ở đây...</a>
                    </div>
                  </div>
                </td>
                <td><span class="badge badge-flat border-danger text-danger-600 position-right">190</span></td>
                <td>
                  <h6 class="text-semibold">650k</h6>
                </td>
                <td><span class="badge badge-primary">1,500</span></td>
                <td><span class="label label-flat border-success text-success-600 position-right">Xuất bản</span></td>
                <td class="text-center">
                  <a href="#"><i class="icon-pencil7"></i></a>
                </td>
              </tr><!--Course-->
            </tbody>
          </table>
        </div>
      </div><!-- /marketing campaigns -->
      <!--Pagination-->
    <ul class="pagination pagination-flat">
      <li>
        <a href="#">‹</a>
      </li>
      <li class="active">
        <a href="#">1</a>
      </li>
      <li>
        <a href="#">2</a>
      </li>
      <li>
        <a href="#">3</a>
      </li>
      <li class="disabled">
        <a href="#">4</a>
      </li>
      <li>
        <a href="#">5</a>
      </li>
      <li>
        <a href="#">›</a>
      </li>
    </ul><!--/Pagination-->
    </div>
  </div><!-- /content area -->
  @stop