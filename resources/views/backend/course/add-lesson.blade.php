@extends('backend.layouts.dashboard')
@section('page_heading','Add lesson')
@section('section')
    @include('backend.course.js-lesson', array())
           
    <div class="col-sm-12">
         @section ('table_panel_title','&nbsp;')
         @section ('table_panel_body')  
          <form role="form" action="" method="POST" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-12">
                <fieldset>  
                    <legend>Section</legend> 
                  <div class="col-md-12 form-group">
                      <div class="col-md-2">
                          <label>Title:</label>
                      </div>
                      <div class="col-md-6">  
                          <input class="form-control" name="title" required="">
                          <div class="form-group has-error">
                              <label lass="control-label" for="inputError" style="color:red;" >{{ $errors->first('title') }}</label>
                          </div>   
                       </div>            
                  </div>
             
                <div class="col-md-12 form-group">
                           <div class="col-md-2">
                               <label>Category:</label>
                          </div>
                          <div class="col-md-6">
                             <select name="category" id='category' class="form-control" required>
                                <option value="">-- Select category --</option>
                                @foreach($listCat as $id => $cat)        
                                  <option value='{{ $id.'-'.$id }}'>{{ $cat['title'] }}</option>
                                  @foreach($cat['data'] as $item)        
                                    <option value="{{ $id.'-'.$item->id }}">&nbsp;&nbsp;&nbsp;&nbsp;-- {{ $item->title }}</option>
                                  @endforeach
                                @endforeach                              
                              </select>
                          </div>
                 </div>
                </fieldset>  
                <fieldset>  
                <legend>Lesson</legend> 
                 <div class="col-md-12 form-group" id="list_answer">
                        <div class="input_fields_wrap col-md-12" style="min-height: 200px">
                          <div id="upload_doc"></div>
                          <input type="hidden" id="file"      name="file"/>
                          <input type="hidden" id="file_size" name="file_size"/>
                          <input type="hidden" id="file_type" name="file_type"/>
                          <table id="view_doc" name="view_video" width="100%" border="0" cellspacing="0" cellpadding="0" class="form1 magt20">

                          </table>
                      </div>
                  </div>
                 </fieldset>  
              <div class="col-md-8 form-group">
                <input type="submit" name="" value="Add" class="btn btn-primary">
                <a href="{{URL::route('course/list-lesson', array('eId' => $course->id))}}" class="btn btn-danger">Back</a>
              </div>
              </div>
            </div>                      
        </form>


        @endsection
        @include('backend.widgets.panel', array('header'=>true, 'as'=>'table'))
    </div>   
@stop
