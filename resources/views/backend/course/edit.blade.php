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
                <select name="category" id='category' class="form-control">
                    <option>-- Select category --</option>
                    @foreach($listCat as $id => $cat)        
                      <option value='{{ '0-'.$id }}' @if($course->cat_id == $id) selected @endif>{{ $cat['title'] }}</option>
                      @foreach($cat['data'] as $item)        
                        <option value="{{ $id.'-'.$item->id }}" @if($course->cat_id == $item->id) selected @endif>&nbsp;&nbsp;&nbsp;&nbsp;-- {{ $item->title }}</option>
                      @endforeach
                    @endforeach                              
                </select>
            </div>

            <div class="form-group">
              <label class="required">Mentor</label>
              <select name="mentor_id" id='mentor_id' class="form-control">
                <option>-- Select mentor --</option>
                @foreach($listTeacher as $teach)        
                <option value='{{ $teach->id }}' @if($course->mentor_id == $teach->id) selected @endif>{{ $teach->last_name.' '.$teach->middle_name.' '.$teach->first_name }}</option>
                @endforeach                              
              </select>
            </div>

            <div class="form-group">
                <label class="required">Introtext</label>
                <input class="form-control" name="introtext" type="text" id="introtext" min="1" data-bind="value:introtext" required="" value="{{ $course->introtext }}">
                <div class="form-group has-error">
                    <label lass="control-label" for="inputError" style="color:red;" >{{ $errors->first('introtext') }}</label>
                </div>              
             </div>

            <div class="form-group">
                <label class="required">Content</label>
                <input class="form-control" name="content" type="text" id="content" min="1" data-bind="value:content" required="" value="{{ $course->content }}">
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

        @endsection
        @include('backend.widgets.panel', array('header'=>true, 'as'=>'table'))
    </div>
    
@stop
