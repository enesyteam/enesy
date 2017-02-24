@extends('frontend.author.master.author-master') @section('author-body.content') <!-- Content area -->
@section('author-body.content') <!-- Content area -->

<style>
    .error_message{
        color: red;
    }
</style>


@include('backend.course.js', array())
<style type="text/css">
   .qq-upload-button
   {
    margin: 0 auto;
   }
 </style>
<div class="row">
    <div class="col-md-12 mr--10">
        <div class="panel panel-flat">
        {{--open form--}}
        {{ Form::open(array('url' => 'lecturers/doUpdateProfile' , 'class'=>'e-form')) }}
            <div class="panel-body">
                <div class="col-md-8">
                    <!-- Name -->
                    <div class="form-group">
                        <legend class="text-semibold">Thông tin cá nhân</legend>
                        <label class="text-semibold">Họ:</label>
                        {{ Form::text('first_name',Auth::guard('frontend')->user()->first_name, array('placeholder' => 'Họ' , 'class'=>'f-input -type-string -width-full')) }}
                        <p class="error_message">{{ $errors->first('first_name') }}</p>
                        <label class="text-semibold mt-10">Tên đệm:</label>
                        {{ Form::text('middle_name', Auth::guard('frontend')->user()->middle_name, array('placeholder' => 'Tên Đệm' , 'class'=>'f-input -type-string js-sign-up__first-name -width-full')) }}
                        <p class="error_message">{{ $errors->first('middle_name') }}</p>

                        <label class="text-semibold mt-10">Tên:</label>
                        {{ Form::text('last_name',Auth::guard('frontend')->user()->last_name, array('placeholder' => 'Tên' , 'class'=>'f-input -type-string js-sign-up__last-name -width-full')) }}
                        <p class="error_message">{{ $errors->first('last_name') }}</p>
                    </div><!-- /Name -->
                    <!-- Gender -->
                    <label class="text-semibold">Giới tính:</label>
                    <label class="radio-inline ml-10">
                        {{ Form::radio('sex' , '1' , Auth::guard('frontend')->user()->sex =="1") }}Nam
                    </label>
                    <label class="radio-inline">
                        {{ Form::radio('sex' , '0' , Auth::guard('frontend')->user()->sex =="0") }}Nữ
                    </label>
                    <label class="radio-inline">
                        {{ Form::radio('sex' , '2' , Auth::guard('frontend')->user()->sex=="2") }}Khác
                    </label><br/>
                    <p class="error_message">{{ $errors->first('sex') }}</p>
                    <!-- /Gender -->
                    <!-- Date of birth -->
                    <label class="text-semibold">Ngày sinh:</label>
                {{ Form::date('dob',date("Y-m-d" ,  Auth::guard('frontend')->user()->dob), array('placeholder' => 'Ngày Sinh' , 'class'=>'f-input -type-string js-sign-up__last-name -width-full')) }}
                    <p class="error_message">{{ $errors->first('dob') }}</p>
                <!-- /Date of birth -->
                    <!-- Biography -->
                    <div class="form-group mt-10">
                        <label class="text-semibold">Giới thiệu:</label>
                        {{Form::textarea('social',Auth::guard('frontend')->user()->social,['class'=>'f-textarea font-size-13', 'rows' => 10, 'cols' => 5]) }}
                        <p class="error_message">{{ $errors->first('social') }}</p>
                    </div><!-- /Biography -->
                    <!-- Biography help -->
                    <div class="box h-clickable biography-help mt--20 is-open" data-view="dropdown"
                         data-dropdown-target="#us-person-definition">
                        <h3 class="t-body -size-s h-m0">
                            <i class="e-icon -icon-info -margin-right"></i>
                            <strong>Các thẻ <code>&lt;html&gt;</code> được chấp nhận</strong>
                        </h3>

                        <ul class="t-list mt-10 is-hidden" id="us-person-definition">
                            <li class="t-body -size-s h-m0">&lt;strong&gt;&lt;/strong&gt; để in đậm text.
                            </li>
                            <li class="t-body -size-s h-m0">&lt;ul&gt;&lt;li&gt; hoặc &lt;ol&gt;&lt;li&gt; để tạo
                                danh sách.
                            </li>
                            <li class="t-body -size-s h-m0">&lt;a&gt;&lt;/a&gt; để chèn một liên kết.
                            </li>
                            <li class="t-body -size-s h-m0">&lt;img&gt; để chèn một hình ảnh.
                            </li>
                            <li class="t-body -size-s h-m0">&lt;blockquote&gt;&lt;/blockquote&gt; để chèn một trích
                                dẫn.
                            </li>
                        </ul>
                    </div>
                    <!-- /Biography help -->
                    <!-- Contact info -->
                    <div class="form-group">
                        <legend class="text-semibold">Thông tin liên hệ</legend>
                        <label class="text-semibold">Địa chỉ:</label>
                        {{ Form::text('address', Auth::guard('frontend')->user()->address, array('placeholder' => 'Địa chỉ' , 'class'=>'f-input -type-string -width-full')) }}
                        <p class="error_message">{{ $errors->first('address') }}</p>

                        <label class="text-semibold mt-10">Điện thoại:</label>
                        {{ Form::text('phone', Auth::guard('frontend')->user()->phone, array('placeholder' => 'Điện Thoại' , 'class'=>'f-input -type-string -width-full')) }}
                        <p class="error_message">{{ $errors->first('phone') }}</p>

                        <label class="text-semibold mt-10">Facebook:</label>
                        {{ Form::text('facebook', Auth::guard('frontend')->user()->facebook, array('placeholder' => 'Facebook' , 'class'=>'f-input -type-string -width-full')) }}
                        <p class="error_message">{{ $errors->first('facebook') }} </p>

                        <label class="text-semibold mt-10">Skype:</label>
                        {{ Form::text('skype',Auth::guard('frontend')->user()->skype, array('placeholder' => 'Skype' , 'class'=>'f-input -type-string -width-full')) }}
                        <p class="error_message">{{ $errors->first('skype') }}</p>
                    </div>

                    @if(Session::has('message_error'))
                        <div class="alert-box success">
                            <h2>{{ Session::get('message_error') }}</h2>
                        </div>
                @endif
                    <!-- /Contact info -->
                    <button class="btn btn-primary" type="submit">Cập nhật</button>
                </div>
                <script type="text/javascript">
                    $(document).ready(function(){
                        $('#path_small').on('change', function() {
                            var path_small = $("#path_small").val();
                            $(".avatar-img").prop("src" , "../upload/image"+path_small);
                        })
                    })
                </script>
                <div class="col-md-1"></div>
                <div class="col-md-3">
                    <div class="thumbnail no-border no-boxshadow">
                        <div class="thumb mt-10 mb-10 avatar"><span class="text-semibold mb-10">Ảnh đại diện</span> 
                        @if(Auth::guard('frontend')->user()->avatar)
                            <img alt="" class="mt-10 avatar-img" src="../upload/image{{Auth::guard('frontend')->user()->avatar}}">
                        @else
                            abc
                            <img alt="" class="mt-10 avatar-img" src="{{'frontend/images/user-no-avatar.png'}}">
                        @endif
                        </div>
                        <div class="form-group">
                          <div id="upload_img"></div>
                           <input type="hidden" id="picture" name="picture"/>   
                           <input type="hidden" id="path_small" name="path_small"/>  
                           <input type="hidden" id="path_mini" name="path_mini"/>  
                           <input type="hidden" id="folder_path" name="folder_path"/>   
                                       
                           <div id="frm_crop_img" style="display: none;">
                                            <img id="cropbox" src=""  />
                                            <input id="x_ads" type="hidden" name="x_ads" value="">
                                            <input id="y_ads" type="hidden" name="y_ads" value="">
                                            <input id="w_ads" type="hidden" name="w_ads" value="">
                                            <input id="h_ads" type="hidden" name="h_ads" value="">
                                            <p style="margin-top: 10px;text-align: center;">
                                                <input class="buton-radi" name="btn_crop" id="btn_crop" type="button" value="Cắt ảnh" />
                                                <input class="buton-radi" onclick="closeCutImage();"  type="button" value="Bỏ qua" />
                                            </p>
                           </div>         
                        </div>
                    </div>
                </div>
            </div>
           {{ Form::close() }}
        </div>
    </div>
</div><!-- /content area -->
@stop
@section('head-scripts')
    <script type="text/javascript">
        //this is demo by cong, need to rewrite by code team
        $(document).ready(function () {
            var clickArea = $(".biography-help");

            $(clickArea).click(function (e) {
                e.preventDefault();
                $(clickArea).children('ul#us-person-definition').toggleClass("is-hidden");
            });
        });
    </script>
@stop