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
    <meta charset="utf-8" />
    <title>Enesy | Đào tạo Kỹ sư chuyên nghiệp</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Đào tạo Kỹ sư chuyên nghiệp"
          name="description" />
    <meta content="" name="author" />
    <link href="{{'frontend/css/normalize.css'}}" rel="stylesheet" type="text/css" />
    <link href="{{'frontend/css/style.css'}}" rel="stylesheet" type="text/css" />
    <link href="{{'frontend/css/custom.css'}}" rel="stylesheet" type="text/css" />
    <link href="{{'frontend/css/layout.css'}}" rel="stylesheet" type="text/css" />
    <!--JqueryModal-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="{{'frontend/vender/jquery-modal/jquery.modal.js'}}" type="text/javascript" charset="utf-8"></script>
    <script src="{{'frontend/vender/jquery-modal/highlight/highlight.pack.js'}}" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" charset="utf-8"> hljs.initHighlightingOnLoad(); </script>
</head>
<!-- #HEAD -->
<body>
<div class="mfp-bg mfp-fade mfp-ready"></div>
<div class="mfp-wrap mfp-auto-cursor mfp-fade mfp-ready" tabindex="-1" style="overflow: hidden;">
    <div class="mfp-s-ready mfp-inline-holder">
        <div class="mfp-content">
            <div class="e-modal -width-s" data-view="modalInternalControls"
                 data-google-analytics-page-title="direct_sign_in">
                <header class="e-modal__header -background-dark -padding-m">
                    <div class="h-image-svg h-text-align-center" width="130px" height="25px">
                        <img alt="Envato" width="130" class="is-hidden--no-svg is-hidden--no-js"
                             src="{{url('frontend/images/logo.png')}}">
                        <h1 class="t-heading -size-l -color-light h-m0 is-hidden--svg">Enesy</h1>
                    </div>
                </header>
                <div class="e-modal__section -padding-none -radius-bottom">
                    <div am-grid="" class="sso-modal">
                        <div am-grid-col="m:6 m:pre1 l:8 l:pre2" am-grid-row="m:start m:end l:start l:end">
                            <div class="h-text-align-center h-mb1">
                                <h2 class="t-heading -size-m">Đăng nhập hệ thống Enesy</h2>
                            </div>
                            <script src="https://www.google.com/recaptcha/api.js?render=explicit" async=""
                                    defer=""></script>

                            {{ Form::open(array('url' => 'doLogin' , 'class'=>'simple_form js-sign-in__form e-form -layout-vertical-inline','id'=>'login_form')) }}
                            <div class="sso-form--sign-in">

                                <!--   <form class="js-sign-in__session-form" action="/sso/verify_token" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" value="JEduv5FyPa6XLaxOBYWkX9Zt4RHd45ShW9MNUemlEkkfBn+6qLWKz3Fdnp2ZHLeO1avCiUmTkej7pVXWJwXTrg==">
                                    <input type="hidden" name="token" id="token" class="js-sign-in__session-token">
                                  </form> -->

                                <input type="hidden" value="{{ URL::to('doLogin') }}" id="actionLogin">
                                <div class="e-form -layout-vertical-inline">
                                    <div class="e-form__group">
                                        <div class="e-form__label">
                                            <label for="sso_sign_in_form_username">Tên đăng nhập</label>
                                        </div>
                                        <div class="e-form__input">
                                            {{--<input class="f-input -type-string js-sign-in__username -width-full" type="text" name="sso_sign_in_form[username]" id="sso_sign_in_form_username">--}}
                                            {{ Form::text('username', Input::old('username'), array('placeholder' => 'User Name' , 'class'=>'f-input -type-string js-sign-in__username -width-full' , 'id'=>'sso_sign_in_form_username')) }}
                                        </div>
                                        <div class="e-form__hint">
                                            <a class="t-link -decoration-reversed h-pull-right" tabindex="-1" href="#">Remind
                                                me</a></div>
                                    </div>

                                    <div class="e-form__group">
                                        <div class="e-form__label">
                                            <label for="sso_sign_in_form_password">Mật khẩu</label>
                                        </div>
                                        <div class="e-form__input">
                                            {{--<input class="f-input -type-password js-sign-in__password -width-full" type="password" name="sso_sign_in_form[password]" id="sso_sign_in_form_password">--}}
                                            {{ Form::password('password' , array('placeholder'=>'Password','class'=>'f-input -type-password js-sign-in__password -width-full' , 'id'=>'sso_sign_in_form_password')) }}
                                        </div>
                                        <div class="e-form__hint">
                                            <a class="t-link -decoration-reversed h-pull-right" tabindex="-1" href="#">Reset</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="sso-form__recaptcha">
                                    <div class="e-form__group">
                                        <div class="e-form__input">
                                            <div class="js-recaptcha recaptcha">
                                                <span id="sso-recaptcha" class="g-recaptcha" data-tabindex="3"></span>
                                            </div>
                                        </div>
                                        <div class="e-form__response"></div>
                                    </div>
                                </div>

                                <div class="sso-form__two-factor">
                                    <div class="e-form__group">
                                        <div class="e-form__label">
                                            <label for="sso_sign_in_form_authentication_code">Authentication
                                                Code</label>
                                        </div>
                                        <div class="e-form__input">
                                            <input class="f-input -type-string js-sign-in__authentication-code -width-full"
                                                   type="text" name="sso_sign_in_form[authentication_code]"
                                                   id="sso_sign_in_form_authentication_code">
                                        </div>
                                        <div class="e-form__hint">You may use a backup code instead</div>
                                    </div>
                                </div>

                                <div class="sso-form__errors h-text-align-center">
                                    <div class="js-sign-in__errors e-form__base-errors">

                                    </div>
                                </div>

                                <div id="error_message" style="color: red">
                                    {{ $errors->first('username') }}
                                    {{ $errors->first('password') }}
                                </div>
                                {{--<input type="submit" name="commit" value="Đăng nhập hệ thống" class="js-sign-in__submit e-btn--3d -color-primary -size-m -width-full h-mb2 h-mt1">--}}
                                {{ Form::submit('Đăng nhập hệ thống' , array('class' => 'js-sign-in__submit e-btn--3d -color-primary -size-m -width-full h-mb2 h-mt1' , 'id'=>'loginButton')) }}
                            </div>
                            <div class="sso-form__fallback">
                                <a class="e-btn--3d -color-primary -size-m" href="#">Đăng nhập hệ thống</a>
                            </div>


                            {{ Form::close() }}

                            <div class="h-text-align-center">
                                <p class="t-body -size-m">
                                    Bạn chưa có tài khoản? <a href="{{route('user.register')}}">Đăng ký ngay!</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mfp-preloader">Đang tải...</div>
    </div>
</div>
<!--[if lte IE 8]>
<div style="color:#fff;background:#f00;padding:20px;text-align:center;">
    ThemeForest no longer actively supports this version of Internet Explorer. We suggest that you <a
        href="http://windows.microsoft.com/en-us/internet-explorer/download-ie"
        style="color:#fff;text-decoration:underline;">upgrade to a newer version</a> or <a
        href="http://browsehappy.com/" style="color:#fff;text-decoration:underline;">try a different browser</a>.
</div>
<![endif]-->
</body>
</html>
