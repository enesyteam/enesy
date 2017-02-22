@extends('backend.templates.default.layouts.dashboard')
@section('page_heading','Members list')
@section('body.content')
<div class="row">
  <div class="col-lg-8">
    <div class="panel panel-flat">
      <div class="panel-heading">
        <h6 class="panel-title">
          <i class="icon-list-unordered position-left">
          </i>All members
          <a class="heading-elements-toggle">
            <i class="icon-more">
            </i>
          </a>
        </h6>
        <div class="heading-elements">
          <ul class="icons-list">
            <li>
              <a data-action="reload">
              </a>
            </li>
            <li>
              <a data-action="collapse" class="">
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="panel-body">
      </div>
      <!-- New table -->
      <div class="table-responsive">
        <table class="table table-striped text-nowrap" style="font-size: 13px;">
          <thead>
            <tr>
              <th style="width: 30px;">
                <input type="checkbox" name="checkAll" id="checkAll" onclick="checkAll(this)">
              </th>
              <th style="width: 30px;">Id
              </th>
              <th>Name
              </th>
              <th>Email
              </th>
              <th>Info
              </th>
              <th style="width: 50px;">Is Teacher?
              </th>
              <th style="width: 50px;">Actions
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach($all_member as $value)
            <tr >
              <td>
                <input type="checkbox" onclick="rowCheck(this)"  name="rowCheck" value="{{ $value->id }}" >
              </td>
              <td>{{$value->id}}
              </td>  
              <td>{{$value->full_name}}
              </td>                       
              <td>{{$value->email}}
              </td>
              <td>
                <p id="info{{$value->id}}" onclick="showTd(this)">
                  <?php echo strlen($value->info) > 10 ? substr($value->info, 0, 10).'...' : $value->info; ?>
                </p>
                <!-- <textarea id="info{{$value->id}}Edit" class="td_hidden">{{$value->info}}</textarea> -->
              </td>
              <td>
                <input type="checkbox" name="" value="{{ $value->is_teaching == 1 ? 1 : 0 }}"  "<?php if($value->is_teaching == 1) echo ' checked ' ?>" onclick="changeStatus('{{ $value->id }}')">
              </td>
              <td>
                <a href="{{URL::route('memberEdit', array('id' => $value->id))}}">  
                  <span class="glyphicon glyphicon-pencil">
                  </span>
                </a>
                <label>&nbsp;&nbsp;|&nbsp;&nbsp;
                </label>
                <a style="cursor:pointer;" onclick="deleteById('{{$value->id}}')" value="{{$value->id}}">
                  <span class="glyphicon glyphicon-trash">
                  </span>
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <!-- /New Table -->
    </div>
    <!-- Footer -->
    <div class="row">
      <div class="col-md-4">
        <ul class="pagination" >
          <li>
            <a onclick="deleteAll()" style="cursor:pointer;">
              <i class="glyphicon glyphicon-remove-circle">
              </i>&nbsp;Delete all
            </a>
          </li>
        </ul>
      </div>
      <div class="col-md-8">
        <div class="pull-right">
          {{ $all_member->render()}}
        </div>
      </div>
    </div>
  </div>
  <!-- Add member -->
  <div class="col-lg-4">
    {!! Form::open([
    'route'	=> [ 'executeAddMember' ],
    'method'	=>	'POST',
    'id'		=>	'addMemberForm',
    'class'		=>	'form-vertical',
    'enctype'	=>	'multipart/form-data',
    'files'		=>	true
    ]) !!}
    <div class="panel panel-flat">
      <div class="panel-heading">
        <h6 class="panel-title">
          <i class="icon-user-plus position-left">
          </i>Add new member
          <a class="heading-elements-toggle">
            <i class="icon-more">
            </i>
          </a>
        </h6>
        <div class="heading-elements">
          <ul class="icons-list">
            <li>
              <a data-action="reload">
              </a>
            </li>
            <li>
              <a data-action="collapse" class="">
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-lg-12">
            <div class="form-group">
              {!! Form::label('title','Username:',['class'=>'control-label text-semibold'])!!}
              {!! Form::text('username','',['id'=>'title','class'=>'form-control','required'=>'true','placeholder'=>'User Name']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('email','Email:',['class'=>'control-label text-semibold'])!!}
              {!! Form::text('email','',['id'=>'title','class'=>'form-control','required'=>'true','placeholder'=>'Email']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('title','Password:',['class'=>'control-label text-semibold'])!!}
              {!! Form::text('password','',['id'=>'title','class'=>'form-control','required'=>'true','placeholder'=>'Password']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('status','Status:',['class'=>'control-label text-semibold'])!!}
              <select class="form-control" name="status" >
                @foreach($status as $key => $st)
                <option value="{{$key}}">{{$st}}
                </option>
                @endforeach
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="pull-right">
              <input type="submit" name="" value="Add member" class="btn btn-primary">
            </div>
          </div>
        </div>
      </div>
    </div>
    {!! Form::close() !!}
  </div>
  <!-- /Add member -->
</div>
@stop
@section('body.scripts')
<script type="text/javascript">
  $("#btsearch").click(function(){
    var link = "{{URL::route('memberIndex')}}";
    link += '?search=true';
    var email = $('#email').val();
    link += '&email=' + email;
    var name = $('#fullName').val();
    link += '&fullName='+ name;
    var teacher = $('#teacher').val();
    link += '&teacher=' + teacher;
    var learning = $('#learning').val();
    link += '&learning=' + learning;
    var active = $('#active').val();
    link += '&status=' + active;
    var create = $('#createDate').val();
    link += '&createDate=' + create;
    var toDate = $('#toDate').val();
    link += '&toDate=' + toDate;
    // alert(link);
    location.href = link;
  }
                      );
  function deleteById(id) {
    var link = "{{URL::route('memberDeleteById')}}";
    if (confirm('Do you want to delete?')) {
      $.ajax({
        url: link,
        data: {
          'id': id}
        ,
        error: function(xhr, status, errorThrow) {
          alert(errorThrow);
        }
        ,
        success: function(data) {
          // alert('ok ' + data.status);
          location.reload();
        }
      }
            );
    }
  }
  function deleteAll() {
    var ids = new Array();
    var allCheckbox = document.getElementsByName('rowCheck');
    for(var i = 0; i < allCheckbox.length; i++) {
      if (allCheckbox[i].checked) {
        ids.push(allCheckbox[i].value);
      }
    }
    var link = "{{URL::route('memberDeleteAllCheck')}}";
    if (confirm('Do you want to delete all?')) {
      $.ajax({
        url: link,
        data: {
          'data': ids}
        ,
        error: function(xhr, status, errorThrow) {
          alert(errorThrow);
        }
        ,
        success: function(data) {
          // alert('ok ' + data.status);
          location.reload();
        }
      }
            );
    }
  }
  function changeStatus(value) {
    var params = {
      'id':value};
    $.ajax({
      url: "{{ URL::route('changeIsTeacher') }}",
      data: params,
      error: function(xhr, status, errorThrow) {
        //alert(errorThrow);
      }
      ,
      success: function(data) {
        // alert('ok '  + data.status + " id = " + data.id );
      }
    }
          );
  }
  function checkAll() {
    var allCheckbox = document.getElementsByName('rowCheck');
    for(var i = 0; i < allCheckbox.length; i++) {
      allCheckbox[i].checked = true;
    }
  }
  function changeActive(obj) {
    var id = obj.id;
    var admin = "{{Auth::user()->email}}";
    var link = "{{URL::route('memberChageActive')}}";
    $.ajax({
      url: link,
      data: {
        'id': id, email: admin}
      ,
      error: function(xhr, status, errorThrow) {
        alert(errorThrow);
      }
      ,
      success: function(data) {
        // alert('ok ' + data.status);
        // location.reload();
        var active = $('#active' + id).text();
        if (active == 1) {
          $('#active' + id).text('0');
        }
        else {
          $('#active' + id).text('1');
        }
        var date = "{{date('Y-m-d')}}";
        $('#modifyDate' + id).text(date);
        $('#modifyUser' + id).text(admin);
        if ($('#createDate' + id).text().length == 0) {
          $('#createDate' + id).text(date);
          $('#createUser' + id).text(admin);
        }
      }
    }
          );
  }
  function showTd(obj) {
    $("#" + obj.id).removeClass().addClass("td_hidden");
    $("#" + obj.id + "Edit").removeClass().addClass('td_show');
    $("#" + obj.id + "Edit").focus();
    $("#" + obj.id + "Edit").blur(function(){
      $("#" + obj.id).removeClass();
      $("#" + obj.id + "Edit").removeClass().addClass('td_hidden');
    }
                                 );
  }
</script>
@stop
