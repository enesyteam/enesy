@extends('backend.layouts.dashboard')
@section('page_heading','Add new course')
@section('section')
<div class="col-sm-12">
 @section ('table_panel_title','&nbsp;')
 @section ('table_panel_body')


 <form role="form" action="{{ URL::route('course/add') }}" method="POST" enctype="multipart/form-data">
  {{ csrf_field() }}
  <div class="row">
    <div class="col-md-8">
      <div class="form-group">
        <label class="required">Title</label>
        <input class="form-control" name="title" required="">
        <div class="form-group has-error">
          <label lass="control-label" for="inputError" style="color:red;" >{{ $errors->first('title') }}</label>
        </div>              
      </div>

      <div class="form-group">
        <label class="required">Category</label>
        <select name="category" id='category' class="form-control">
          @foreach($listCat as $id => $cat)        
            <option value='{{ '0-'.$id }}'>{{ $cat['title'] }}</option>
            @foreach($cat['data'] as $item)        
              <option value="{{ $id.'-'.$item->id }}">&nbsp;&nbsp;&nbsp;&nbsp;-- {{ $item->title }}</option>
            @endforeach
          @endforeach                              
        </select>
      </div>

      <div class="form-group">
        <label class="required">Mentor</label>
        <select name="mentor_id" id='mentor_id' class="form-control">
          @foreach($listTeacher as $teach)        
          <option value='{{ $teach->id }}'>{{ $teach->last_name.' '.$teach->middle_name.' '.$teach->first_name }}</option>
          @endforeach                              
        </select>
      </div>


      <div class="form-group">
        <label class="required">Introtext</label>
        <input class="form-control" name="introtext" type="text" id="introtext" min="1" data-bind="value:num_of_question" required="">
        <div class="form-group has-error">
          <label lass="control-label" for="inputError" style="color:red;" >{{ $errors->first('introtext') }}</label>
        </div>              
      </div>

      <div class="form-group">
        <label class="required">Content</label>
        <input class="form-control" name="content" type="text" id="content" min="1" data-bind="value:exam_time" required="">
        <div class="form-group has-error">
          <label lass="control-label" for="inputError" style="color:red;" >{{ $errors->first('content') }}</label>
        </div>              
      </div>


      <div class="form-group">
        <input type="submit" name="" value="Add" class="btn btn-primary">
        <a href="{{URL::route('course')}}" class="btn btn-danger">Back</a>
      </div>

    </div>
  </div>                      
</form>

@endsection
@include('backend.widgets.panel', array('header'=>true, 'as'=>'table'))
</div>

@stop
