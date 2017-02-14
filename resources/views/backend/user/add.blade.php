@extends('backend.layouts.dashboard')
@section('page_heading','New Admin')
@section('section')
  <div class="col-sm-12">
      <form role="form" method="POST" action="insertAdmin">
          <div class="row">
              <div class="col-lg-6">
                      <div class="form-group">
                          <label>User Name:</label>
                          <input type="text" name="username" placeholder="User Name" value="{{ old('username') }}" class="form-control {!! $errors->has('username') ? 'errorInput' : '' !!}">
                          <p class="errorTxt">{{$errors->first('username') }}</p>
                      </div>

                      <div class="form-group">
                          <label>Password:</label>
                          <input type="password" name="password" placeholder=" Password" value="{{ old('password') }}" class="form-control  {!! $errors->has('password') ? 'errorInput' : '' !!}">
                          <p class="errorTxt">{{$errors->first('password') }}</p>
                      </div>

                      <div class="form-group">
                          <label>Confirm Password:</label>
                          <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirmation Password" class="form-control {!! $errors->has('password_confirmation') ? 'errorInput' : '' !!}">
                          <p class="errorTxt">{{$errors->first('password_confirmation') }}</p>
                      </div>
              </div>
              <div class="col-lg-6">
                  <div class="form-group">
                      <label>Email:</label>
                      <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" class="form-control {!! $errors->has('email') ? 'errorInput' : '' !!}">
                      <p class="errorTxt">{{$errors->first('email') }}</p>
                  </div>

                  <div class="form-group">
                      <label>Full Name:</label>
                      <input type="text" name="full_name" placeholder="Full Name" value="{{ old('full_name') }}" class="form-control {!! $errors->has('full_name') ? 'errorInput' : '' !!}">
                      <p class="errorTxt">{{$errors->first('full_name') }}</p>
                  </div>

                  <div class="form-group">
                      <label>Info:</label>
                      <textarea rows="3" name="info" value="{{ old('info') }}" placeholder="Info" class="form-control"></textarea>
                  </div>
              </div>
          </div>
          <button type="submit" class="btn btn-default">Create Admim</button>
          <button type="reset" class="btn btn-default">Reset</button>
      </form>
  </div>
@stop
