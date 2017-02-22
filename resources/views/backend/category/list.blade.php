@extends('backend.layouts.dashboard')
@section('page_heading','Course category')
@section('section')
    <div class="col-sm-12">
        @section ('table_panel_title','List')
        @section ('table_panel_body')

          <div >
             
                <div class="row">
                 
                  <div class="col-md-3">
                      <div class="form-group">
                          <label>Title:</label>
                          <input class="form-control" name="title" id="title" value="{{ $title }}" placeholder="search by title...">              
                      </div>

                  </div>
                  <div class="col-md-2">
                      <div class="form-group">
                          <label>Create date:</label>
                          <input class="form-control" name="createDate" id="createDate" type="date" value="{{ $create_date }}">    
                         
                      </div>
                  </div>
                  <div class="col-md-2">
                      <div class="form-group">
                          <label>End date:</label>
                          <input class="form-control" name="endCreateDate" id="endCreateDate" type="date" value="{{ $end_create_date }}">    
                            
                      </div>
                  </div>
                   <div class="col-md-2">
                      <div class="form-group">
                          <label>Status:</label><br/>
                          <select name="status" id="status"  class="form-control">
                            <option value="3"  "<?php if ($status == 3) echo " selected "; ?>" >All</option>
                            <option value="1" "<?php if ($status == 1) echo " selected "; ?>" >Active</option>
                            <option value="2" "<?php if ($status == 2) echo " selected "; ?>"  >Inactive</option>
                          </select>             
                      </div>
                  </div>
                   
                  <div class="col-md-2">
                  <label>&nbsp;</label><br/>
                      <div class="form-group">
                          <button class="btn btn-primary " id="btsearch">Search</button>
                        </div>
                  </div>
                </div>

               
            
            
          </div>
          <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr style="background-color:#26C6DA; color:white;">
                  <th style="vertical-align: middle; text-align:center;"><input type="checkbox" name="checkAll" id="checkAll" onclick="checkAll(this)"></th>
                   <th >ID</th>
                   <th>Picture</th>                   
                    <th>Title</th>                    
                    <th>Description</th>  
                  
                    <th>User</th>               
                    <th>Create date</th>
                     <th style="vertical-align: middle; text-align:center;">Status</th>
                    <th  style="vertical-align: middle; text-align:center;">Action</th>                    
                  </tr>                   
                </thead>
                <tbody>
                @foreach($all_category as $value)
                     <tr >
                     <td style="vertical-align: middle; text-align:center;"><input type="checkbox" onclick="rowCheck(this)"  name="rowCheck" value="{{ $value->id }}" ></td>
                      <td style="vertical-align: middle; ">{{ $value->id }}</td>
                      <td>
                       <img src="<?php 
                            if(empty($value->picture)) {
                              echo Config::get('params.url_upload').'/default/img_default.png';
                            } else {
                              echo Config::get('params.url_upload').$value->picture;
                            }
                        ?>" width="100px" height="100px" alt="No picture">
                      </td>
                     
                       <td style="vertical-align: middle;">{{ $value->title }}</td>                       
                       <td style="vertical-align: middle;"><?php if (strlen($value->description) > 20) echo substr($value->description, 0, 20).'...'; else echo $value->description;  ?></td>
                     
                       <td style="vertical-align: middle;">{{$value->create_user}}</td>
                       <td style="vertical-align: middle;"><?php echo substr($value->create_date, 0, 4).'-'.substr($value->create_date, 4, 2).'-'.substr($value->create_date, 6, 2) ?></td>
                       <td style="vertical-align: middle; text-align:center;"><input type="checkbox" onclick="changeStatus('{{ $value->id }}')"   value="{{ $value->status == 1 ? 1 : 0 }}" {{ $value->status == 1 ? 'checked' : '' }} ></td>
                       <td style="vertical-align: middle; text-align:center;">
                       <a href="{{ URL::route('editCategory', array('id' => $value->id)) }}" class="glyphicon glyphicon-pencil"></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                        <a href="{{ URL::route('deleteCategory', array('id' => $value->id)) }}" class="glyphicon glyphicon-trash"></a>
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
                  <li><a href="{{URL::route('addCategory')}}" style="cursor:pointer;"><i class="glyphicon glyphicon-plus-sign"></i>&nbsp;Add new category</a></li>
               </ul>
             </div>
             <div class="col-md-6">
                <div align="right">
                 {{ $all_category->render()}}
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
               url: "{{ URL::route('deleteAllCategory')}}",
              data: {'data': params},
                error: function(xhr, status, errorThrow) {
                      // alert(errorThrow);
                    },
                     success: function(data) {
                      // alert('ok ' + data.status);
                       location.reload();
                    }

              });
              }
            }
           

                function changeStatus(value) {
                  var params = {'id':value};
                  $.ajax({
                    url: "{{ URL::route('updateCategory') }}",
                    data: params,
                    error: function(xhr, status, errorThrow) {
                      //alert(errorThrow);
                    },
                     success: function(data) {
                      // alert('ok '  + data.status + " id = " + data.id );
                    }

                  });
                  

                }
                 $(document).ready(function(){

                    $('#btsearch').click(function(){
                      var link = "{{ URL::route('allCategory')}}";
                      link += "?search=true";
                     
                      if ($('#title').val().trim().length > 0)
                      link += "&title=" +  $('#title').val();
                      if ($('#createDate').val().trim().length > 0)
                      link +=  "&createDate=" + $('#createDate').val();
                      if ($('#endCreateDate').val().trim().length > 0)
                      link += "&endCreateDate=" +  $('#endCreateDate').val();
                      if ($('#status').val().trim().length > 0)
                      link +=  "&status=" + $('#status').val();
                      location.href = link;
                    });

                  });
                             

              
            </script>
        @endsection
        @include('backend.widgets.panel', array('header'=>true, 'as'=>'table'))
    </div>
    
@stop

