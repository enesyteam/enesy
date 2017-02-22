@extends('backend.templates.default.layouts.dashboard')
@section('page_heading','Courses list')
@section('body.content')
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-flat">
      <div class="panel-heading">
        <h6 class="panel-title">
          <i class="icon-list-unordered position-left">
          </i>All courses
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
        <table class="table table-striped" style="font-size: 13px;">
          <thead>
            <tr>
              <th style="width: 30px;">
                <input type="checkbox" name="checkAll" id="checkAll" onclick="checkAll(this)">
              </th>
              <th style="width: 30px;">Id
              </th>
              <th>Title
              </th>
              <th>Course Intro
              </th>
              <th>Create date
              </th>
              <th style="width: 50px;">Actions
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach($all_data as $value)
            <tr >
              <td>
                <input type="checkbox" onclick="rowCheck(this)"  name="rowCheck" value="{{ $value->id }}" >
              </td>
              <td>{{ $value->id }}
              </td>  
              <td>{{ $value->title }}
              </td>                       
              <td>{{ $value->introtext }}
              </td>
              <td>
                <?php echo date("d/m/Y",$value->create_date); ?>
              </td>
              <td>
                <a href="{{ URL::route('course/edit', array('id' => $value->id)) }}" class="glyphicon glyphicon-pencil">
                </a>
                &nbsp;&nbsp;|&nbsp;&nbsp;
                <a style="cursor:pointer;" onclick="deleteById('{{$value->id}}')" value="{{$value->id}}" class="glyphicon glyphicon-trash">
                </a>
                &nbsp;&nbsp;|&nbsp;&nbsp;
                <a href="{{ URL::route('course/list-lesson', array('eId' => $value->id)) }}" class="glyphicon glyphicon-question-sign">
                </a>
                &nbsp;&nbsp;|&nbsp;&nbsp;
                <a href="{{ URL::route('course/create-lesson', array('eId' => $value->id)) }}" class="glyphicon glyphicon-plus">
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
          <li>
            <a href="{{URL::route('course/add')}}" style="cursor:pointer;">
              <i class="glyphicon glyphicon-plus-sign">
              </i>&nbsp;Add new
            </a>
          </li>
        </ul>
      </div>
      <div class="col-md-8">
        <div class="pull-right">
          {{ $all_data->render()}}
        </div>
      </div>
    </div>
  </div>
</div>
@stop
@section('body.scripts')
<script type="text/javascript">
  function checkAll(obj) {
    var isChecked = false;
    if (obj.checked) {
      isChecked = true;
    }
    else {
      isChecked = false;
    }
    var chks = document.getElementsByName('rowCheck');
    for(var i = 0; i < chks.length; i++) {
      chks[i].checked = isChecked;
    }
  }
  function rowCheck(obj) {
    var parentCheck = document.getElementById('checkAll');
    parentCheck.checked = false;
    //alert(obj.checked);
  }
  function deleteAll() {
    var params = [1 ];
    var chks = document.getElementsByName('rowCheck');
    for(var i = 0; i < chks.length; i++) {
      if (chks[i].checked) {
        params.push(chks[i].value);
      }
    }
    if (confirm('Do you want to delete all?')) {
      $.ajax({
        url: "{{ URL::route('/course/deleteAll')}}",
        data: {
          'data': params}
        ,
        error: function(xhr, status, errorThrow) {
          // alert(errorThrow);
        }
        ,
        success: function(data) {
          location.reload();
        }
      }
            );
    }
  }
  function deleteById(id) {
    var link = "{{URL::route('/course/delete')}}";
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
          location.reload();
        }
      }
            );
    }
  }
</script>
@stop
