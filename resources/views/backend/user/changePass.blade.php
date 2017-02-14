@extends('backend.layouts.dashboard')
@section('page_heading')
    Change Pass {{ $user->username }}
@stop
@section('section')
    <div class="col-sm-12">
        <form role="form" method="POST" action="postChangePass">
            <div class="row">
                <div class="col-lg-6">
                    <input type="hidden" name="id" value="{{ $user->id }}"/>

                    <div class="form-group">
                        <label>New Password:</label>
                        <input type="password" name="password" placeholder="New Password" value="{{ old('password') }}" class="form-control  {!! $errors->has('password') ? 'errorInput' : '' !!}">
                        <p class="errorTxt">{{$errors->first('password') }}</p>
                    </div>

                    <div class="form-group">
                        <label>Confirm Password:</label>
                        <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirmation Password" class="form-control {!! $errors->has('password_confirmation') ? 'errorInput' : '' !!}">
                        <p class="errorTxt">{{$errors->first('password_confirmation') }}</p>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-default">Change Password</button>
            <button type="reset" class="btn btn-default">Reset</button>
        </form>
    </div>
@stop
