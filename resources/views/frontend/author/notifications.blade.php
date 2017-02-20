@extends('frontend.author.master.author-master') @section('author-body.content') <!-- Content area -->
 @section('author-body.content') <!-- Content area -->
<div class="row">
  <div class="col-md-12 mr--10">
    <form action="" class="e-form">
      <div class="panel panel-flat">
        <div class="panel-body">
          <div class="col-md-8">
          <legend class="text-semibold">Trung tâm thông báo</legend>
            <ul class="" role="notification">
                <li class="media">
                  <div class="pull-left media-notifications">
                    <span class="label label-success">Mới</span>
                  </div>
                  <div class="media-body">
                    <a href="#">Đức </a> đã bình luận trên một bài học của bạn.
                    <br>
                    <span class="text-caption text-muted">Anh ơi cho em hỏi đẻ có đau lắm không ạ?</span>
                    <ul class="list-inline mt-5">
                        <li><a class="label label-default" href="#"><i class=" icon-arrow-right14 font-size-12 position-left"></i>Chi tiết</a></li>
                        <li><a class="label label-default btn-reply" href="#"><i class="icon-undo2 font-size-12 position-left"></i>Trả lời</a></li>
                    </ul>
                    <!-- Comment -->
                    <div class="comment-form hidden">
                      <textarea name="enter-message" class="f-textarea content-group mt-10 mb-5" rows="3" cols="1" placeholder="Enter your message..."></textarea>
                      <ul class="list-inline"><li><a class="label label-primary" href="#">Gửi</a></li></ul>
                    </div>
                    <!-- /Comment -->
                  </div>
                </li>
                <li class="media">
                  <div class="pull-left media-notifications">
                    <span class="label label-success">Mới</span>
                  </div>
                  <div class="media-body">
                    <a href="#">congcd4</a>, <a href="#">quandt</a> đã mua khóa học <a href="#"> Lập trình PHP nâng cao</a> của bạn asef asd.
                    <ul class="list-inline mt-5">
                        <li><a class="label label-default" href="#"><i class=" icon-arrow-right14 font-size-12 position-left"></i>Chi tiết</a></li>
                    </ul>
                  </div>
                </li>
                <li class="media">
                  <div class="pull-left media-notifications">
                    <span class="media-annotation">30 phút trước</span>
                  </div>
                  <div class="media-body">
                    <a href="#">congcd4</a>, <a href="#">quandt</a> đã mua khóa học <a href="#"> Lập trình PHP nâng cao</a> của bạn asef asd.
                    <ul class="list-inline mt-5">
                        <li><a class="label label-default" href="#"><i class=" icon-arrow-right14 font-size-12 position-left"></i>Chi tiết</a></li>
                    </ul>
                  </div>
                </li>
                <li class="media">
                  <div class="pull-left media-notifications">
                    <span class="media-annotation">2 giờ trước</span>
                  </div>
                  <div class="media-body">
                    <a href="#">congcd4</a>, <a href="#">quandt</a> đã mua khóa học <a href="#"> Lập trình PHP nâng cao</a> của bạn asef asd.
                    <ul class="list-inline mt-5">
                        <li><a class="label label-default" href="#"><i class=" icon-arrow-right14 font-size-12 position-left"></i>Chi tiết</a></li>
                    </ul>
                  </div>
                </li>
                <li class="media">
                  <div class="pull-left media-notifications">
                    <span class="media-annotation">2 giờ trước</span>
                  </div>
                  <div class="media-body">
                    <a href="#">congcd4</a>, <a href="#">quandt</a> đã mua khóa học <a href="#"> Lập trình PHP nâng cao</a> của bạn asef asd.
                    <ul class="list-inline mt-5">
                        <li><a class="label label-default" href="#"><i class=" icon-arrow-right14 font-size-12 position-left"></i>Chi tiết</a></li>
                    </ul>
                  </div>
                </li>
                <li class="media">
                  <div class="pull-left media-notifications">
                    <span class="media-annotation">2 giờ trước</span>
                  </div>
                  <div class="media-body">
                    <a href="#">congcd4</a>, <a href="#">quandt</a> đã mua khóa học <a href="#"> Lập trình PHP nâng cao</a> của bạn asef asd.
                    <ul class="list-inline mt-5">
                        <li><a class="label label-default" href="#"><i class=" icon-arrow-right14 font-size-12 position-left"></i>Chi tiết</a></li>
                    </ul>
                  </div>
                </li>
                <li class="media">
                  <div class="pull-left media-notifications">
                    <span class="media-annotation">2 giờ trước</span>
                  </div>
                  <div class="media-body">
                    <a href="#">congcd4</a>, <a href="#">quandt</a> đã mua khóa học <a href="#"> Lập trình PHP nâng cao</a> của bạn asef asd.
                    <ul class="list-inline mt-5">
                        <li><a class="label label-default" href="#"><i class=" icon-arrow-right14 font-size-12 position-left"></i>Chi tiết</a></li>
                    </ul>
                  </div>
                </li>
                <li class="media">
                  <div class="pull-left media-notifications">
                    <span class="media-annotation">2 giờ trước</span>
                  </div>
                  <div class="media-body">
                    <a href="#">congcd4</a>, <a href="#">quandt</a> đã mua khóa học <a href="#"> Lập trình PHP nâng cao</a> của bạn asef asd.
                    <ul class="list-inline mt-5">
                        <li><a class="label label-default" href="#"><i class=" icon-arrow-right14 font-size-12 position-left"></i>Chi tiết</a></li>
                    </ul>
                  </div>
                </li>
              </ul>
          </div>
          <div class="col-md-1">
            <!-- Nothing here! just placeholder -->
          </div>
          <div class="col-md-3">
            
          </div>
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
    </form>
  </div>
</div><!-- /content area -->
@stop

@section('head-scripts')
<script type="text/javascript">
  //this is demo by cong, need to rewrite by code team
  $(document).ready(function() {
  var max_fields      = 10; //maximum emails
  var wrapper         = $(".comment-form"); //Fields wrapper
  var reply_button      = $(".btn-reply"); //Add button ID

  $(reply_button).click(function(e){
      e.preventDefault();
        $(wrapper).removeClass('hidden');
  });
});
</script>
@stop