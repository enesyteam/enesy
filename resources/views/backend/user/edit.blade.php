@extends('backend.layouts.dashboard')
@section('page_heading')
   Edit User {{ $user->username }}
@stop
@section('section')
    <script rel="text/javascript" src="{{ asset('backend/assets/scripts/fileinput.min.js') }}" ></script>
    <link rel="stylesheet" href="{{ asset("backend/assets/stylesheets/fileinput.min.css") }}" />
    <div class="col-sm-12">
        <form role="form" method="POST" action="postEditUser" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-6">
                    <input type="hidden" name="id" value="{{ $user->id }}" />
                    <div class="form-group">
                        <label>User Name:</label>
                        <input type="text" name="username" disabled value="{{ $user->username }}" class="form-control {!! $errors->has('username') ? 'errorInput' : '' !!}">
                        <p class="errorTxt">{{$errors->first('username') }}</p>
                    </div>

                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" name="email" placeholder="Email" value="{{ $user->email }}" class="form-control {!! $errors->has('email') ? 'errorInput' : '' !!}">
                        <p class="errorTxt">{{$errors->first('email') }}</p>
                    </div>

                    <div class="form-group">
                        <label>Full Name:</label>
                        <input type="text" name="full_name" placeholder="Full Name" value="{{ $user->full_name }}" class="form-control {!! $errors->has('full_name') ? 'errorInput' : '' !!}">
                        <p class="errorTxt">{{$errors->first('full_name') }}</p>
                    </div>

                    <div class="form-group">
                        <label for="sel1">Active:</label>
                        <select class="form-control" id="sel1">
                            <option>0</option>
                            <option>1</option>
                            <option>2</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Info:</label>
                        <textarea rows="3" name="info" placeholder="Info" class="form-control">{{ $user->info }}</textarea>
                    </div>

                </div>
                <div class="col-lg-6">
                    <div id="kv-avatar-errors-2" class="center-block" style="width:800px;display:none"></div>
                    <div class="kv-avatar center-block" style="width:200px">
                        <input id="avatar-2" name="avatar" type="file" class="file-loading">
                    </div>

                </div>
            </div>
            <button type="submit" class="btn btn-default">Edit User</button>
            <button type="reset" class="btn btn-default">Reset</button>
        </form>
    </div>
    <script>
        var btnCust = '<button type="button" class="btn btn-default" title="Add picture tags" ' +
                'onclick="alert(\'Call your custom code here.\')">' +
                '<i class="glyphicon glyphicon-tag"></i>' +
                '</button>';
        $("#avatar-2").fileinput({
            overwriteInitial: true,
            maxFileSize: 1500,
            showClose: false,
            showCaption: false,
            showBrowse: false,
            browseOnZoneClick: true,
            removeLabel: '',
            removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
            removeTitle: 'Cancel or reset changes',
            elErrorContainer: '#kv-avatar-errors-2',
            msgErrorClass: 'alert alert-block alert-danger',
            defaultPreviewContent: '<img src="{{ $user->avatar ? asset('upload/image/'.$user->avatar) : asset('backend/image/default_avatar_male.jpg') }}" alt="Your Avatar" style="width:160px"><h6 class="text-muted">Click to select</h6>',
            layoutTemplates: {main2: '{preview}  {remove} {browse}'},
            allowedFileExtensions: ["jpg", "png", "gif"]
        });
    </script>
@stop
