@extends('backend.layouts.dashboard')
@section('page_heading','Edit lesson')
@section('section')
    <div class="col-sm-12">
        @section ('table_panel_title','&nbsp;')
        @section ('table_panel_body')
        @include('backend.course.js-lesson', array())
      
           <form role="form" action="" method="POST" enctype="multipart/form-data">
          	 <div class="row">
                <div class="col-md-12">
                    <input class="form-control" type="hidden" name="id" value="{{ $section->id }}">      
                    <fieldset>  
                    <legend>Section</legend> 
                    <div class="col-md-12 form-group">
                       <div class="col-md-2"> 
                          <label>Name:</label>
                       </div>
                       <div class="col-md-6">    
                           <input class="form-control" name="title" value="{{ $section->title }}">    
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
                                    <option value='{{ $id.'-'.$id }}' @if($section->cat_id == $id) selected @endif>{{ $cat['title'] }}</option>
                                    @foreach($cat['data'] as $item)        
                                      <option value="{{ $id.'-'.$item->id }}" @if($section->cat_id == $item->id) selected @endif>&nbsp;&nbsp;&nbsp;&nbsp;-- {{ $item->title }}</option>
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
                          <table id="view_doc" name="view_video" width="100%" border="0" cellspacing="0" cellpadding="0" class="form1 magt20">
                           @foreach($list_data_doc as $key=>$doc) 
                             

                            <tr>
                              <td width="30%"><div style="float:left">
                                
                              <video controls="" width="300" height="200">
                              <source src="<?php echo Helper::getDocs($doc->path);?>" type="video/<?php echo $doc->file_type; ?>">
                              </video> 

                              </div></td>
                              <td>        
                              <div class="filltext">            
                              <div class="form-group"><input placeholder="Tiêu đề bài học" type="text" name="file_title[]"  value="<?php echo $doc->title; ?>" class="form-control"></div>  
                              <textarea placeholder="Miêu tả bài học"  name="file_introtext[]"  class="form-control"><?php echo $doc->introtext; ?></textarea> 
                              <input type="hidden" name="file_path[]"  value="<?php echo $doc->path; ?>" >  
                              <input type="hidden" name="file_type[]"  value="<?php echo $doc->file_type; ?>" > 
                              <input type="hidden" name="file_size[]"  value="<?php echo $doc->file_size; ?>" >              
                              </div>                  

                          </td></tr>                            

                           @endforeach  

                          </table>
                      </div>
                  </div>
                 </fieldset>
                     
                   <div class="col-md-8 form-group">
                      <input type="submit" name="" value="Update" class="btn btn-primary">
                      <a href="{{URL::route('course/list-lesson', array('eId' => $section->course_id))}}" class="btn btn-danger">Back</a>
                    </div>

                </div> 

             </div>
            
        </form>

        @endsection
        @include('backend.widgets.panel', array('header'=>true, 'as'=>'table'))
    </div>
    
@stop
