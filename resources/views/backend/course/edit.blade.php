@extends('backend.layouts.dashboard')
@section('page_heading','Edit Course')
@section('section')
    <div class="col-sm-12">
        @section ('table_panel_title','&nbsp;')
        @section ('table_panel_body')
          @include('backend.course.js', array())       
       
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
                  <label class="required">Price</label>
                  <input class="form-control" name="price" value="{{ $course->price }}" required="">
                  <div class="form-group has-error">
                    <label lass="control-label" for="inputError" style="color:red;" >{{ $errors->first('price') }}</label>
                  </div>              
                </div>
             <div class="form-group">
                  <label class="required">Sale Price</label>
                  <input class="form-control" name="sale" value="{{ $course->sale }}">
                               
             </div>           
           
            <div class="form-group">
                <label class="required">Category</label>
                <select name="category" id='category' class="form-control" required>
                    <option value="">-- Select category --</option>
                    @foreach($listCat as $id => $cat)        
                      <option value='{{ $id.'-'.$id }}' @if($course->cat_id == $id) selected @endif>{{ $cat['title'] }}</option>
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
                    <label class="required">Picture</label>
                          <div id="upload_img"></div>
                           <input type="hidden" id="picture" name="picture" value="<?php echo $course->picture;?>"/>   
                           <input type="hidden" id="path_small" name="path_small"/>  
                           <input type="hidden" id="path_mini" name="path_mini"/>  
                           <input type="hidden" id="folder_path" name="folder_path"/>   
                                       
                           <div id="view_img" name="view_img">
                             <?php if(!empty($course->picture)){?>
                               <img  src="<?php echo Helper::getPic($course->picture);?>"/>
                            <?php }?>

                           </div>
                           <div id="frm_crop_img" style="display: none;">
                                            <img id="cropbox" src=""  />
                                            <input id="x_ads" type="hidden" name="x_ads" value="">
                                            <input id="y_ads" type="hidden" name="y_ads" value="">
                                            <input id="w_ads" type="hidden" name="w_ads" value="">
                                            <input id="h_ads" type="hidden" name="h_ads" value="">
                                            <p style="margin-top: 10px;text-align: center;">
                                                <input class="buton-radi" name="btn_crop" id="btn_crop" type="button" value="Cắt ảnh" />
                                                <input class="buton-radi" onclick="closeCutImage();"  type="button" value="Bỏ qua" />
                                            </p>
                           </div>         
                  </div>

                  <div class="form-group">
                    <label class="required">Video intro</label>
                        <div id="upload_video"></div>
                        <input type="hidden" id="file" name="file" value="<?php echo $course->video; ?>" />
                        <input type="hidden" id="file_size"/>
                        <input type="hidden" id="file_type"/>
                        <table id="view_video" name="view_video" width="100%" border="0" cellspacing="0" cellpadding="0" class="form1 magt20">
                          <?php if(!empty($course->video)){?>
                               <video controls="" width="640" height="480" >
                                 <source src="<?php echo Helper::getDocs($course->video);?>" type="video/mp4">
                               </video>
                               
                            <?php }?>

                        </table>        
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
                <label class="required">Lợi ích từ khóa học </label>
                <div id="benefit">
                  @foreach($list_benefit as $key=>$benefit) 
                    <div class="form-group"><input placeholder="Lợi ích" type="text" name="benefit[]"  value="{{$benefit->title}}" class="form-control"></div>
                   @endforeach  

                </div>
                <button id="btn_benefit" type="button">Thêm lợi ích</button>
                             
              </div>
              <div class="form-group">
                <label class="required">Các yêu cầu của khóa học</label>
                <div id="requirement">
                  @foreach($list_requirement as $key=>$requirement) 
                    <div class="form-group"><input placeholder="Yêu cầu" type="text" name="requirement[]"  value="{{$requirement->title}}" class="form-control"></div>
                   @endforeach 

                </div>
                <button id="btn_requirement" type="button">Thêm yêu cầu</button>
                             
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
