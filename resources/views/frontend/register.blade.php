<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8 no-js">
<![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js">
<![endif]-->
<!--[if !IE]><!-->
<html class="js cors svg" lang="{{ config('app.locale') }}">
<!--<![endif]-->
<!-- HEAD -->
<head>
    <meta charset="utf-8"/>
    <title>Enesy | Đào tạo Kỹ sư chuyên nghiệp</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="Đào tạo Kỹ sư chuyên nghiệp"
          name="description"/>
    <meta content="" name="author"/>
    <link href="{{'frontend/css/normalize.css'}}" rel="stylesheet" type="text/css"/>
    <link href="{{'frontend/css/style.css'}}" rel="stylesheet" type="text/css"/>
    <link href="{{'frontend/css/custom.css'}}" rel="stylesheet" type="text/css"/>
    <link href="{{'frontend/css/layout.css'}}" rel="stylesheet" type="text/css"/>
    <!--JqueryModal-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="{{'frontend/vender/jquery-modal/jquery.modal.js'}}" type="text/javascript" charset="utf-8"></script>
    <script src="{{'frontend/vender/jquery-modal/highlight/highlight.pack.js'}}" type="text/javascript"
            charset="utf-8"></script>
    <script type="text/javascript" charset="utf-8"> hljs.initHighlightingOnLoad(); </script>
</head>
<!-- #HEAD -->
<body>
<div class="mfp-bg mfp-fade mfp-ready"></div>
<div class="mfp-wrap mfp-auto-cursor mfp-fade mfp-ready" tabindex="-1" style="overflow-x: hidden; overflow-y: auto;">
    <div class="mfp-s-ready mfp-inline-holder">
        <div class="mfp-content">
            <div class="e-modal -width-s" data-view="modalInternalControls"
                 data-google-analytics-page-title="direct_sign_up">
                <header class="e-modal__header -background-dark -padding-m">
                    <div class="h-image-svg h-text-align-center" width="130px" height="25px">
                        <a href="{{route('home')}}">
                            <img alt="Enesy" width="130" class="is-hidden--no-svg is-hidden--no-js"
                                 src="{{url('frontend/images/logo.png')}}">
                            <h1 class="t-heading -size-l -color-light h-m0 is-hidden--svg">Enesy</h1>
                        </a>
                    </div>
                </header>
                <div class="e-modal__section -padding-none -radius-bottom">
                    <div am-grid="" class="sso-modal">
                        <div am-grid-col="m:6 m:pre1 l:8 l:pre2" am-grid-row="m:start m:end l:start l:end">
                            <div class="sso-form--sign-up" data-view="signUpForm" data-sign-up-step="1.1" data-props="">

                                <form class="js-sign-up__session-form" action="" accept-charset="UTF-8" method="post">
                                    <input name="utf8" type="hidden" value="✓"><input type="hidden"
                                                                                      name="authenticity_token"
                                                                                      value="">
                                    <input type="hidden" name="token" id="token" class="js-sign-up__session-token">
                                    <input type="hidden" name="user_signed_up" id="user_signed_up" value="true"
                                           class="js-sign-up__user-signed-up">
                                </form>
                                {{ Form::open(array('url' => 'doRegister' , 'method'=>'post' , 'class'=>'simple_form js-sign-up__form e-form -layout-vertical','id'=>'sign-up-form')) }}

                                    <fieldset class="sso-form__step1">

                                        <div class="h-text-align-center">
                                            <h2 class="t-heading -size-m">
                                                Gia nhập hệ thống Enesy
                                            </h2>
                                            <!--<p class="t-body -size-m -color-mid">
                                                Hoàn thành các bước đăng ký để trở thành thành viên của Enesy.
                                            </p>-->

                                             <div id="error_message" style="color: red">
                                                {{ $errors->first('first_name') }}
                                                {{ $errors->first('last_name') }}
                                                {{ $errors->first('middle_name') }}
                                                {{ $errors->first('username') }}
                                                {{ $errors->first('email') }}
                                                {{ $errors->first('password') }}
                                                {{ $errors->first('confirm-password') }}
                                            </div>
                                        </div>

                                        <div class="e-form__group">
                                            <div class="e-form__label"><label
                                                        for="sso_sign_up_form_first_name">Họ</label></div>
                                            <div class="e-form__input">
                                                {{ Form::text('first_name', Input::old('first_name'), array('placeholder' => 'Họ' , 'class'=>'f-input -type-string js-sign-up__first-name -width-full')) }}
                                            </div>
                                        </div>

                                        <div class="e-form__group">
                                            <div class="e-form__label"><label for="sso_sign_up_form_first_name">Tên
                                                    đệm</label></div>
                                            <div class="e-form__input">
                                                        {{ Form::text('middle_name', Input::old('middle_name'), array('placeholder' => 'Tên Đệm' , 'class'=>'f-input -type-string js-sign-up__first-name -width-full')) }}
                                                        </div>
                                        </div>

                                        <div class="e-form__group">
                                            <div class="e-form__label"><label
                                                        for="sso_sign_up_form_last_name">Tên</label></div>
                                                        <div class="e-form__input">
                                                        {{ Form::text('last_name', Input::old('last_name'), array('placeholder' => 'Tên' , 'class'=>'f-input -type-string js-sign-up__last-name -width-full')) }}
                                                         </div>
                                        </div>

                                        <div class="e-form__group">
                                            <div class="e-form__label"><label
                                                        for="sso_sign_up_form_last_name">User Name</label></div>
                                                        <div class="e-form__input">
                                                        {{ Form::text('username', Input::old('username'), array('placeholder' => 'User Name' , 'class'=>'f-input -type-string js-sign-up__last-name -width-full')) }}
                                                         </div>
                                        </div>

                                        <div class="e-form__group">
                                            <div class="e-form__label"><label for="sso_sign_up_form_email">Email</label>
                                            </div>
                                            <div class="e-form__input">
                                            {{ Form::email('email', Input::old('email'), array('placeholder' => 'Email' , 'class'=>'string f-input -type-string js-sign-up__email -width-full f-input -type-string')) }}</div>
                                        </div>

                                        <div class="e-form__group">
                                            <div class="e-form__label"><label
                                                        for="sso_sign_up_form_email">Password</label></div>
                                            <div class="e-form__input"> 
                                            {{ Form::password('password', array('placeholder' => 'Password' , 'class'=>'string f-input -type-string js-sign-up__email -width-full f-input -type-string')) }}
                                            </div>
                                        </div>

                                        <div class="e-form__group">
                                            <div class="e-form__label"><label for="sso_sign_up_form_email">Confirm
                                                    password</label></div>
                                            <div class="e-form__input">
                                            {{ Form::password('confirm-password', array('placeholder' => 'Confirm Password' , 'class'=>'string f-input -type-string js-sign-up__email -width-full f-input -type-string')) }}</div>
                                        </div>

                                        <div class="h-text-align-center">
                                            <p class="t-body -size-m -color-mid h-m0">
                                                Bằng việc tạo tài khoản, coi như bạn đã đồng ý với các <a href="{{route('home.terms')}}">Điều
                                                    khoản sử dụng</a> và <a href="{{route('home.privacy_policy')}}"> Chính sách bảo mật</a> của Enesy.

                                            </p>
                                        </div>

                                        <footer class="sso-form__step1-1">
                                            {{ Form::submit('Đăng ký' , array('class' => 'js-sign-up__goto-step2 e-btn--3d -color-primary -size-m -width-full h-my2')) }}
                                            <p class="t-body -size-m h-text-align-center h-m0">
                                                Bạn đã có tài khoản? <a href="{{route('user.login')}}">Đăng nhập tại đây</a>
                                            </p>
                                        </footer>
                                    </fieldset>
                              {{ Form::close() }}
                            </div>

                            <div class="sso-form__fallback">
                                <div class="h-text-align-center">
                                    <h2 class="t-heading -size-m">
                                        Great to see you here!
                                    </h2>
                                    <p class="t-body -size-m -color-mid">
                                        Let’s set up your account in just a couple of steps.
                                    </p>
                                </div>


                                <a class="e-btn--3d -color-primary -size-m h-mt1"
                                   href="https://account.envato.com/sign_up?to=themeforest">Create an Enesy account</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mfp-preloader">Loading...</div>
    </div>
</div>
</body>
</html>