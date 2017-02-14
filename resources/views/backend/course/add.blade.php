@extends('backend.layouts.dashboard')
@section('page_heading','Add new course')
@section('section')
    <div class="col-sm-12">
         @section ('table_panel_title','&nbsp;')
        @section ('table_panel_body')

       
          <form role="form" action="{{ URL::route('course/add') }}" method="POST" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-8">
                  <div class="form-group">
                      <label>Title:</label>
                      <input class="form-control" name="title" required="">
                      <div class="form-group has-error">
                          <label lass="control-label" for="inputError" style="color:red;" >{{ $errors->first('title') }}</label>
                      </div>              
                   </div>
               
                  <div class="form-group">
                        <label>Category:</label>
                        <select name="category" id='category' class="form-control">
                            @foreach($all_category as $category)        
                                      <option value='{{ $category['id'] }}'>{{ $category['title'] }}</option>
                            @endforeach                              
                        </select>
                  </div>


                  <div class="form-group">
                      <label>Introtext:</label>
                      <input class="form-control" name="introtext" type="text" id="introtext" min="1" data-bind="value:num_of_question" required="">
                      <div class="form-group has-error">
                          <label lass="control-label" for="inputError" style="color:red;" >{{ $errors->first('introtext') }}</label>
                      </div>              
                   </div>

                  <div class="form-group">
                      <label>Content:</label>
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
