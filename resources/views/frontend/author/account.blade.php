@extends('frontend.author.master.author-master') @section('author-body.content') <!-- Content area -->
@section('author-body.content') <!-- Content area -->
<style>
    .error_message{
        color: red;
    }
</style>
<div class="row">
    <div class="col-md-12 mr--10">
            <div class="panel panel-flat">
                <div class="panel-body">
                    <div class="col-md-8">
                    {{ Form::open(array('route' => 'user.author_account_post' , 'class'=>'e-form')) }}
                    <!-- old password -->
                        <div class="form-group">
                            <legend class="text-semibold">Thay đổi mật khẩu</legend>
                            <label class="text-semibold">Mật khẩu cũ:</label>
                            {{ Form::password('old_pass', array('placeholder' => 'Mật khẩu cũ' , 'class'=>'f-input -type-string -width-full')) }}
                            <p class="error_message">{{ $errors->first('old_pass') }}</p>
                        </div><!-- /old password -->
                        <!-- new password -->
                        <div class="form-group">
                            <label class="text-semibold">Mật khẩu mới:</label>
                            {{ Form::password('new_pass', array('placeholder' => 'Mật khẩu mới' , 'class'=>'f-input -type-string -width-full')) }}
                            <p class="error_message">{{ $errors->first('new_pass') }}</p>
                        </div><!-- /new password -->
                        <!-- confirm new password -->
                        <div class="form-group">
                            <label class="text-semibold">Nhập lại mật khẩu mới:</label>
                            {{ Form::password('new_pass_confirm', array('placeholder' => 'Nhập lại mật khẩu mới' , 'class'=>'f-input -type-string -width-full')) }}
                            <p class="error_message">{{ $errors->first('new_pass_confirm') }}</p>
                        </div><!-- /confirm new password -->
                        @if(Session::has('message_error'))
                            <div class="alert-box success">
                                <h2>{{ Session::get('message_error') }}</h2>
                            </div>
                        @endif
                        <button class="btn btn-primary" type="submit">Cập nhật mật khẩu</button>

                        {{--<!-- username -->--}}
                        {{--<div class="form-group mt-10">--}}
                        {{--<legend class="text-semibold">Tài khoản đăng nhập</legend>--}}
                        {{--<label class="text-semibold">Tên đăng nhập:</label> <input--}}
                        {{--class="f-input -type-string -width-full" placeholder="" type="text" value="congcd4">--}}
                        {{--</div><!-- /username -->--}}
                        {{--<button class="btn btn-primary" type="button">Thay đổi tên đăng nhập</button>--}}

                        {{--<!-- delete account -->--}}
                        {{--<div class="form-group mt-10">--}}
                        {{--<legend class="text-semibold">Xóa tài khoản</legend>--}}
                        {{--<p>Khi xóa tài khoản, bạn không thể đăng nhập trở lại hệ thống. Hãy cân nhắc kỹ trước khi--}}
                        {{--xóa!</p>--}}
                        {{--<button class="btn btn-danger" type="button">Xóa tài khoản</button>--}}
                        {{--</div><!-- /delete account -->--}}

                        {{ Form::close() }}
                    </div>
                    <div class="col-md-1">
                        <!-- Nothing here! just placeholder -->
                    </div>
                    <div class="col-md-3">
                        <!-- Nothing here! just placeholder -->
                    </div>
                </div>
            </div>
    </div>
</div><!-- /content area -->
@stop