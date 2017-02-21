@extends('backend.layouts.dashboard')
@section('page_heading','Edit Course')
@section('section')
    <div class="col-sm-12">
        @section ('table_panel_title','&nbsp;')
        @section ('table_panel_body')
       
           <form role="form" action="{{ URL::to('/admin/course/edit/'.$course->id) }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
             <div class="row">
                <div class="col-md-8">
                    <input class="form-control" type="hidden" name="id" value="{{ $course->id }}">   
            <div class="form-group">
                <label class="required">Title</label>
                <input class="form-control" name="title" value="{{ $course->title }}">  
                 <div class="form-group has-error">
                    <label lass="control-label" for="inputError" style="color:red;" >{{ $errors->first('title') }}</label>
                </div>              
            </div>
           
           
            <div class="form-group">
                <label class="required">Category</label>
                <select name="category" id='category' class="form-control" required>
                    <option value="">-- Select category --</option>
                    @foreach($listCat as $id => $cat)        
                      <option disabled>{{ $cat['title'] }}</option>
                      @foreach($cat['data'] as $item)        
                        <option value="{{ $id.'-'.$item->id }}" @if($course->cat_id == $item->id) selected @endif>&nbsp;&nbsp;&nbsp;&nbsp;-- {{ $item->title }}</option>
                      @endforeach
                    @endforeach                              
                </select>
            </div>

            <div class="form-group">
              <label class="required">Mentor</label>
              <select name="mentor_id" id='mentor_id' class="form-control" required>
                <option value="">-- Select mentor --</option>
                @foreach($listTeacher as $teach)        
                <option value='{{ $teach->id }}' @if($course->mentor_id == $teach->id) selected @endif>{{ $teach->last_name.' '.$teach->middle_name.' '.$teach->first_name }}</option>
                @endforeach                              
              </select>
            </div>

            <div class="form-group">
                <label class="required">Introtext</label>
                <textarea class="form-control" name="introtext"  id="introtext"  data-bind="value:introtext" required="">{{ $course->introtext }}</textarea>
                <div class="form-group has-error">
                    <label lass="control-label" for="inputError" style="color:red;" >{{ $errors->first('introtext') }}</label>
                </div>              
             </div>

            <div class="form-group">
                <label class="required">Content</label>
                <textarea class="form-control" name="content"  id="content"  data-bind="value:content">{{ $course->content }}</textarea>
                <div class="form-group has-error">
                    <label lass="control-label" for="inputError" style="color:red;" >{{ $errors->first('content') }}</label>
                </div>              
             </div>            
             
            <div class="form-group">
              <input type="submit" name="" value="Update" class="btn btn-primary     ">
               <a href="{{URL::route('course')}}" class="btn btn-danger">Back</a>
            </div>

                </div> 

             </div>
            
        </form>
        <script rel="text/javascript" src="{{ asset('backend/assets/scripts/tinymce/tinymce.js') }}" ></script>
        <script rel="text/javascript" src="{{ asset('backend/assets/scripts/tinymce_des.js') }}" ></script> 
        @endsection
        @include('backend.widgets.panel', array('header'=>true, 'as'=>'table'))
    </div>
    
@stop
