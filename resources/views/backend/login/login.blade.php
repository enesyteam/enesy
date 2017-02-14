@extends ('backend.layouts.plane')
@section ('body')
    <script type=text/javascript>
        $(document).ready(function () {
            $(".btn-success").click(function () {
                $("#loginForm").submit();
            });
        });
    </script>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <br/><br/><br/>
                @section ('login_panel_title','Please Sign In')
                @section ('login_panel_body')
                    <form id="loginForm" action="{{url('admin/postLogin') }}" method="POST" role="form">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <fieldset>
                            @if (isset($errors))
                                <p style="color:red;">
                                    @foreach ($errors->all() as $error)
                                        {!! $error !!}<br/>
                                    @endforeach
                                </p>
                            @endif
                            @if (isset($message))
                                <p style="color:red;">
                                    {{ $message }}
                                </p>
                            @endif
                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="email" value="{{ old('email') }}" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" value="{{ old('password') }}" type="password"
                                       value="">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                </label>
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <a href="javascript:void(0);" class="btn btn-lg btn-success btn-block">Login</a>
                        </fieldset>
                    </form>
                @endsection
                @include('backend.widgets.panel', array('as'=>'login', 'header'=>true))
            </div>
        </div>
    </div>
@stop
