@extends('backend.layouts.dashboard')
@section('page_heading','List Lesson')
@section('section')
    <div class="col-sm-12">
        @section ('table_panel_title',' ')
        @section ('table_panel_body')

        <script rel="text/javascript" src="{{ asset('backend/assets/scripts/function.js') }}" ></script>

          <div >
             
                <div class="row">
                <form method="get" action="{{URL::route('course/list-lesson', array('eId' => $course->id))}}" novalidate="">        
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Title:</label>
                            <input class="form-control" name="title" id="title" value="{{ $title }}" placeholder="search by title...">              
                        </div>

                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Create date:</label>
                            <input class="form-control" data-provide="datepicker" data-date-format="dd/mm/yyyy" name="start_date" id="start_date" type="date" value="{{ $create_date }}">    
                           
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>End date:</label>
                            <input class="form-control" data-provide="datepicker" data-date-format="dd/mm/yyyy" name="end_date" id="end_date" type="date" value="{{ $end_create_date }}">    
                              
                        </div>
                    </div>
                     
                    <div class="col-md-2">
                    <label>&nbsp;</label><br/>
                        <div class="form-group">
                            <button class="btn btn-primary " id="btsearch">Search</button>
                          </div>
                    </div>
                  </div>

               </form>
            
          </div>
          <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr style="background-color:#26C6DA; color:white;">
                  <th style="vertical-align: middle; text-align:center;"><input type="checkbox" name="checkAll" id="checkAll" onclick="checkAll(this)"></th>
                   <th >ID</th>
                                 
                    <th>Title</th>                    
                      
                    <th>Create date</th>
                     
                    <th  style="vertical-align: middle; text-align:center;">Action</th>                    
                  </tr>                   
                </thead>
                <tbody>
                @foreach($all_data as $value)
                     <tr >
                     <td style="vertical-align: middle; text-align:center;"><input type="checkbox" onclick="rowCheck(this)"  name="rowCheck" value="{{ $value->id }}" ></td>
                      <td style="vertical-align: middle; ">{{ $value->id }}</td>               
                       <td style="vertical-align: middle;">{{ $value->title }}</td>                       
                       <td style="vertical-align: middle;"><?php echo date("d/m/Y",$value->create_date); ?></td>
                       <td style="vertical-align: middle; text-align:center;">
                        <a href="{{ URL::route('course/edit-lesson', array('id' => $value->id)) }}" class="glyphicon glyphicon-pencil"></a>
                        &nbsp;&nbsp;|&nbsp;&nbsp;
                        <a style="cursor:pointer;" onclick="deleteById('{{$value->id}}')" value="{{$value->id}}" class="glyphicon glyphicon-trash"></a>
                        
                       </td>
                       
                     </tr>

                @endforeach
                </tbody>
            </table>
            </div>
           <div class="row">
             <div class="col-md-6">
               <ul class="pagination" >
                 <li><a onclick="deleteAll()" style="cursor:pointer;"><i class="glyphicon glyphicon-remove-circle"></i>&nbsp;Delete all</a></li>
                  <li><a href="{{URL::route('course/create-lesson', array('eId' => $course->id))}}" style="cursor:pointer;"><i class="glyphicon glyphicon-plus-sign"></i>&nbsp;Add new</a></li>
               </ul>
             </div>
             <div class="col-md-6">
                <div align="right">
                  {{ $all_data->render()}}
               </div>

             </div>
           </div>

           
            <script type="text/javascript">

            function checkAll(obj) {
             
              var isChecked = false;
              if (obj.checked) {
                  isChecked = true;                   
              } else {
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
                    url: "{{ URL::route('/course/deleteAllLesson')}}",
                    data: {'data': params},
                      error: function(xhr, status, errorThrow) {
                            // alert(errorThrow);
                          },
                           success: function(data) {
    
                             location.reload();
                          }

                    });
              }
            }
               
             function deleteById(id) {     
                var link = "{{URL::route('/course/deleteLesson')}}";
                if (confirm('Do you want to delete?')) {
                          $.ajax({
                              url: link,
                              data: {'id': id},
                                error: function(xhr, status, errorThrow) {
                                  alert(errorThrow);
                                },
                                 success: function(data) {
                                   location.reload();
                                }
                        });
               }
             }
              
            </script>
        @endsection
        @include('backend.widgets.panel', array('header'=>true, 'as'=>'table'))
    </div>
    
@stop

