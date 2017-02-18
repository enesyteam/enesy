  @extends('frontend.author.master.author-master') @section('author-body.content')
  <!-- Content area -->
@section('head.js')
  <script type="text/javascript" src="{{asset('frontend/user/assets/js/plugins/loaders/pace.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('frontend/user/assets/js/core/libraries/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('frontend/user/assets/js/core/libraries/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('frontend/user/assets/js/plugins/loaders/blockui.min.js')}}"></script>
  <!-- /core JS files -->
<script type="text/javascript" src="{{asset('frontend/user/assets/js/pages/user_pages_list.js')}}"></script>
@stop

  <div class="row mb-10">
  <div class="col-lg-12">
    <div class="panel panel-flat">
                <div class="panel-heading">
                  <h5 class="panel-title">Học viên của bạn<a class="heading-elements-toggle"><i class="icon-more"></i></a></h5>
                          <div class="form-group mt-10">
        <div class="has-feedback">
          <input class="form-control" placeholder="Tìm theo tên học viên hoặc theo khóa học" type="search">
          <div class="form-control-feedback">
            <i class="icon-search4 text-size-small text-muted"></i>
          </div>
        </div>
      </div>
      <div class="form-group">
            <label class="checkbox-inline">
              <input type="checkbox" checked="checked">
              Online
            </label>

            <label class="checkbox-inline">
              <input type="checkbox">
              Offline
            </label>
        </div>
                </div>

                <div class="panel-body">
                  <ul class="media-list">
                  <li class="mt-10"></li>

                    <li class="media">
                      <div class="media-left media-middle">
                        <a href="#">
                          <img src="{{asset('frontend/images/user-no-avatar.png')}}" class="img-circle" alt="">
                        </a>
                      </div>

                      <div class="media-body">
                        <div class="media-heading text-semibold">James Alexander</div>
                        <span class="text-muted">Khóa học: <a href="#">asfasdf</a></span>
                      </div>

                      <div class="media-right media-middle">
                        <ul class="icons-list icons-list-extended text-nowrap">
                                    <li><a href="#" data-popup="tooltip" title="" data-toggle="modal" data-target="#call" data-original-title="Call"><i class="icon-phone2"></i></a></li>
                                    <li><a href="#" data-popup="tooltip" title="" data-toggle="modal" data-target="#chat" data-original-title="Chat"><i class="icon-comment"></i></a></li>
                                  </ul>
                      </div>
                    </li>

                    <li class="media">
                      <div class="media-left media-middle">
                        <a href="#">
                          <img src="{{asset('frontend/images/user-no-avatar.png')}}" class="img-circle" alt="">
                        </a>
                      </div>

                      <div class="media-body">
                        <div class="media-heading text-semibold">Jeremy Victorino</div>
                        <span class="text-muted">Khóa học: <a href="#">asfasdf</a></span>
                      </div>

                      <div class="media-right media-middle">
                        <ul class="icons-list icons-list-extended text-nowrap">
                                    <li><a href="#" data-popup="tooltip" title="" data-toggle="modal" data-target="#call" data-original-title="Call"><i class="icon-phone2"></i></a></li>
                                    <li><a href="#" data-popup="tooltip" title="" data-toggle="modal" data-target="#chat" data-original-title="Chat"><i class="icon-comment"></i></a></li>
                                  </ul>
                      </div>
                    </li>

                    <li class="media">
                      <div class="media-left media-middle">
                        <a href="#">
                          <img src="{{asset('frontend/images/user-no-avatar.png')}}" class="img-circle" alt="">
                        </a>
                      </div>

                      <div class="media-body">
                        <div class="media-heading text-semibold">Margo Baker</div>
                        <span class="text-muted">Khóa học: <a href="#">asfasdf</a></span>
                      </div>

                      <div class="media-right media-middle">
                        <ul class="icons-list icons-list-extended text-nowrap">
                                    <li><a href="#" data-popup="tooltip" title="" data-toggle="modal" data-target="#call" data-original-title="Call"><i class="icon-phone2"></i></a></li>
                                    <li><a href="#" data-popup="tooltip" title="" data-toggle="modal" data-target="#chat" data-original-title="Chat"><i class="icon-comment"></i></a></li>
                                  </ul>
                      </div>
                    </li>

                    <li class="media">
                      <div class="media-left media-middle">
                        <a href="#">
                          <img src="{{asset('frontend/images/user-no-avatar.png')}}" class="img-circle" alt="">
                        </a>
                      </div>

                      <div class="media-body">
                        <div class="media-heading text-semibold">Monica Smith</div>
                        <span class="text-muted">Khóa học: <a href="#">asfasdf</a></span>
                      </div>

                      <div class="media-right media-middle">
                        <ul class="icons-list icons-list-extended text-nowrap">
                                    <li><a href="#" data-popup="tooltip" title="" data-toggle="modal" data-target="#call" data-original-title="Call"><i class="icon-phone2"></i></a></li>
                                    <li><a href="#" data-popup="tooltip" title="" data-toggle="modal" data-target="#chat" data-original-title="Chat"><i class="icon-comment"></i></a></li>
                                  </ul>
                      </div>
                    </li>

                    <li class="media">
                      <div class="media-left media-middle">
                        <a href="#">
                          <img src="{{asset('frontend/images/user-no-avatar.png')}}" class="img-circle" alt="">
                        </a>
                      </div>

                      <div class="media-body">
                        <div class="media-heading text-semibold">Bastian Miller</div>
                        <span class="text-muted">Khóa học: <a href="#">asfasdf</a></span>
                      </div>

                      <div class="media-right media-middle">
                        <ul class="icons-list icons-list-extended text-nowrap">
                                    <li><a href="#" data-popup="tooltip" title="" data-toggle="modal" data-target="#call" data-original-title="Call"><i class="icon-phone2"></i></a></li>
                                    <li><a href="#" data-popup="tooltip" title="" data-toggle="modal" data-target="#chat" data-original-title="Chat"><i class="icon-comment"></i></a></li>
                                  </ul>
                      </div>
                    </li>

                    <li class="media">
                      <div class="media-left media-middle">
                        <a href="#">
                          <img src="{{asset('frontend/images/user-no-avatar.png')}}" class="img-circle" alt="">
                        </a>
                      </div>

                      <div class="media-body">
                        <div class="media-heading text-semibold">Jordana Mills</div>
                        <span class="text-muted">Khóa học: <a href="#">asfasdf</a></span>
                      </div>

                      <div class="media-right media-middle">
                        <ul class="icons-list icons-list-extended text-nowrap">
                                    <li><a href="#" data-popup="tooltip" title="" data-toggle="modal" data-target="#call" data-original-title="Call"><i class="icon-phone2"></i></a></li>
                                    <li><a href="#" data-popup="tooltip" title="" data-toggle="modal" data-target="#chat" data-original-title="Chat"><i class="icon-comment"></i></a></li>
                                  </ul>
                      </div>
                    </li>

                    <li class="media">
                      <div class="media-left media-middle">
                        <a href="#">
                          <img src="{{asset('frontend/images/user-no-avatar.png')}}" class="img-circle" alt="">
                        </a>
                      </div>

                      <div class="media-body">
                        <div class="media-heading text-semibold">Buzz Brenson</div>
                        <span class="text-muted">Khóa học: <a href="#">asfasdf</a></span>
                      </div>

                      <div class="media-right media-middle">
                        <ul class="icons-list icons-list-extended text-nowrap">
                                    <li><a href="#" data-popup="tooltip" title="" data-toggle="modal" data-target="#call" data-original-title="Call"><i class="icon-phone2"></i></a></li>
                                    <li><a href="#" data-popup="tooltip" title="" data-toggle="modal" data-target="#chat" data-original-title="Chat"><i class="icon-comment"></i></a></li>
                                  </ul>
                      </div>
                    </li>

                    <li class="media">
                      <div class="media-left media-middle">
                        <a href="#">
                          <img src="{{asset('frontend/images/user-no-avatar.png')}}" class="img-circle" alt="">
                        </a>
                      </div>

                      <div class="media-body">
                        <div class="media-heading text-semibold">Zachary Willson</div>
                        <span class="text-muted">Khóa học: <a href="#">asfasdf</a></span>
                      </div>

                      <div class="media-right media-middle">
                        <ul class="icons-list icons-list-extended text-nowrap">
                                    <li><a href="#" data-popup="tooltip" title="" data-toggle="modal" data-target="#call" data-original-title="Call"><i class="icon-phone2"></i></a></li>
                                    <li><a href="#" data-popup="tooltip" title="" data-toggle="modal" data-target="#chat" data-original-title="Chat"><i class="icon-comment"></i></a></li>
                                  </ul>
                      </div>
                    </li>

                    <li class="media">
                      <div class="media-left media-middle">
                        <a href="#">
                          <img src="{{asset('frontend/images/user-no-avatar.png')}}" class="img-circle" alt="">
                        </a>
                      </div>

                      <div class="media-body">
                        <div class="media-heading text-semibold">William Miles</div>
                        <span class="text-muted">SEO expert</span>
                      </div>

                      <div class="media-right media-middle">
                        <ul class="icons-list icons-list-extended text-nowrap">
                                    <li><a href="#" data-popup="tooltip" title="" data-toggle="modal" data-target="#call" data-original-title="Call"><i class="icon-phone2"></i></a></li>
                                    <li><a href="#" data-popup="tooltip" title="" data-toggle="modal" data-target="#chat" data-original-title="Chat"><i class="icon-comment"></i></a></li>
                                  </ul>
                      </div>
                    </li>

                    <li class="media">
                      <div class="media-left media-middle">
                        <a href="#">
                          <img src="{{asset('frontend/images/user-no-avatar.png')}}" class="img-circle" alt="">
                        </a>
                      </div>

                      <div class="media-body">
                        <div class="media-heading text-semibold">Freddy Walden</div>
                        <span class="text-muted">Khóa học: <a href="#">asfasdf</a></span>
                      </div>

                      <div class="media-right media-middle">
                        <ul class="icons-list icons-list-extended text-nowrap">
                                    <li><a href="#" data-popup="tooltip" title="" data-toggle="modal" data-target="#call" data-original-title="Call"><i class="icon-phone2"></i></a></li>
                                    <li><a href="#" data-popup="tooltip" title="" data-toggle="modal" data-target="#chat" data-original-title="Chat"><i class="icon-comment"></i></a></li>
                                  </ul>
                      </div>
                    </li>

                    <li class="media">
                      <div class="media-left media-middle">
                        <a href="#">
                          <img src="{{asset('frontend/images/user-no-avatar.png')}}" class="img-circle" alt="">
                        </a>
                      </div>

                      <div class="media-body">
                        <div class="media-heading text-semibold">Dori Laperriere</div>
                        <span class="text-muted">Khóa học: <a href="#">asfasdf</a></span>
                      </div>

                      <div class="media-right media-middle">
                        <ul class="icons-list icons-list-extended text-nowrap">
                                    <li><a href="#" data-popup="tooltip" title="" data-toggle="modal" data-target="#call" data-original-title="Call"><i class="icon-phone2"></i></a></li>
                                    <li><a href="#" data-popup="tooltip" title="" data-toggle="modal" data-target="#chat" data-original-title="Chat"><i class="icon-comment"></i></a></li>
                                  </ul>
                      </div>
                    </li>

                    <li class="media">
                      <div class="media-left media-middle">
                        <a href="#">
                          <img src="{{asset('frontend/images/user-no-avatar.png')}}" class="img-circle" alt="">
                        </a>
                      </div>

                      <div class="media-body">
                        <div class="media-heading text-semibold">Vanessa Aurelius</div>
                        <span class="text-muted">Khóa học: <a href="#">asfasdf</a></span>
                      </div>

                      <div class="media-right media-middle">
                        <ul class="icons-list icons-list-extended text-nowrap">
                                    <li><a href="#" data-popup="tooltip" title="" data-toggle="modal" data-target="#call" data-original-title="Call"><i class="icon-phone2"></i></a></li>
                                    <li><a href="#" data-popup="tooltip" title="" data-toggle="modal" data-target="#chat" data-original-title="Chat"><i class="icon-comment"></i></a></li>
                                  </ul>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
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
  </div></div><!-- /content area -->
  @stop