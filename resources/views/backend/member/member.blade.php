@extends('backend.layouts.dashboard')
@section('page_heading','Member Manager')
@section('section')
    <div class="col-sm-12">
        @section ('table_panel_title','List')
        @section ('table_panel_body')
      
          <div  >
             <div class="row">
                   <div class="col-md-2 form-group">
                     <label>Email:</label>
                   <input type="email" id="email" class="form-control" placeholder="search by..." value="{{$email}}">
                 </div>
                 <div class="col-md-2 form-group">
                     <label>Name or full name:</label>
                   <input type="text" id="fullName" class="form-control" placeholder="search by..." value="{{$fullName}}">
                 </div>
                 <div class="col-md-2 form-group">
                     <label>Type admin:</label>
                      <select id="typeAdmin" class="form-control">
                        <option value="0"  >All</option>
                        <option value="1" "<?php if ($typeAdmin == 1) echo ' selected ';?>">Admin</option>
                        <option value="2" "<?php if ($typeAdmin == 2) echo ' selected ';?>">BTV</option>
                        <option value="3" "<?php if ($typeAdmin == 3) echo ' selected ';?>">CTV</option>
                      </select>
                 </div>
                 <div class="col-md-2 form-group">
                     <label>Teacher:</label>
                    <select id="teacher" class="form-control">
                        <option value="3">All</option>
                        <option value="1" "<?php if ($teacher== 1) echo ' selected ';?>">Teacher</option>
                        <option value="2" "<?php if ($teacher == 2) echo ' selected ';?>">No teacher</option>
                      </select>
                 </div>
                 <div class="col-md-2 form-group">
                     <label>Learning:</label>
                   <select id="learning" class="form-control">
                        <option value="3" >All</option>
                        <option value="1" "<?php if ($learning == 1) echo ' selected ';?>">Student</option>
                        <option value="2" "<?php if ($learning == 2) echo ' selected ';?>">No student</option>
                      </select>
                 </div>
                 <div class="col-md-2 form-group">
                     <label>Active:</label>
                   <select id="active" class="form-control">
                        <option value="3">All</option>
                        <option value="1" "<?php if ($active == 1) echo ' selected ';?>">Active</option>
                        <option value="2" "<?php if ($active == 2) echo ' selected ';?>">No active</option>
                      </select>
                 </div>
             </div>
              <div class="row">
                  <div class="col-md-2 form-group">
                   <label>Create date:</label>
                     <input type="date" id="createDate" class="form-control">
                   </div>
                   <div class="col-md-2 form-group">
                   <label>To date:</label>
                     <input type="date" id="toDate" class="form-control" >
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
                     <th>Active</th> 
                   <th>Email</th>
                    <th>User name</th>
                    <th>Full name</th>                    
                     
                    <th>Infor</th>   
                    <th>Category ID</th>               
                    <th>Create date</th>
                    <th>Create user</th>
                    <th>Modify date</th>
                    <th>Modify user</th>
                    <th>Remember</th>
                    <th>Type Admin</th>
                    <th>Teacher</th>
                    <th>Learning</th>     
                    <th>Action</th>                                
                  </tr>                   
                </thead>
                <tbody>
                  @foreach($all_member as $value)
                    <tr>
                    <td><input type="checkbox" name="rowCheck" value="{{$value->id}}"></td>
                   
                      <td>{{$value->id}}</td>
                        <td id="active{{$value->id}}">{{$value->active}}</td>
                      <td>{{$value->email}}</td>
                      <td>{{$value->username}}</td>
                      <td>{{$value->full_name}}</td>
                     
                      <td>{{$value->info}}</td>
                      <td>{{$value->id_cats}}</td>
                      <td id="createDate{{$value->id}}"><?php if ($value->create_date > 0) echo substr($value->create_date, 0, 4).'-'.substr($value->create_date, 4, 2).'-'.substr($value->create_date, 6, 2) ?></td>
                      <td id="createUser{{$value->id}}">{{$value->create_user}}</td>
                      <td id="modifyDate{{$value->id}}"><?php if ($value->modify_date > 0) echo substr($value->modify_date, 0, 4).'-'.substr($value->modify_date, 4, 2).'-'.substr($value->modify_date, 6, 2) ?></td>
                      <td id="modifyUser{{$value->id}}">{{$value->modify_user}}</td>
                      <td>{{$value->remember_token}}</td>
                      <td>{{$value->type_admin}}</td>
                      <td>{{$value->is_teaching}}</td>
                      <td>{{$value->is_learning}}</td>
                      <td>
                      <button class="btn btn-primary btn-outline  " id="{{$value->id}}" onclick="deleteById(this);">Delete</button>
                      <button class="btn btn-primary btn-outline  " id="{{$value->id}}" onclick="changeActive(this);">Change active</button>
                    </tr>

                  @endforeach
                </tbody>
            </table>
            </div>
           <div class="row">
             <div class="col-md-6">
               <ul class="pagination" >
               
                 <li><button class="btn btn-danger" onclick="deleteAll()">Delete Check</button></li>
              
               </ul>
             </div>
             <div class="col-md-6">
                <div align="right">
                  {{ $all_member->render()}}
               </div>

             </div>
           </div>

           <script type="text/javascript">
             
             $("#btsearch").click(function(){

                var link = "{{URL::route('memberIndex')}}";
                link += '?search=true';
                var email = $('#email').val();
                link += '&email=' + email;
                var name = $('#fullName').val();
                link += '&fullName='+ name;
                var type = $('#typeAdmin').val();
                link += '&typeAdmin=' + type;
                var teacher = $('#teacher').val();
                link += '&teacher=' + teacher;
                var learning = $('#learning').val();
                link += '&learning=' + learning;
                var active = $('#active').val();
                link += '&active=' + active;
                var create = $('#createDate').val();
                link += '&createDate=' + create;
                var toDate = $('#toDate').val();
                link += '&toDate=' + toDate;
                // alert(link);
                location.href = link;
             });

             function deleteById(obj) {
              var id = obj.id;
           
                var link = "{{URL::route('memberDeleteById')}}";
                if (confirm('Do you want to delete?')) {
                          $.ajax({
                         url: link,
                        data: {'id': id},
                          error: function(xhr, status, errorThrow) {
                            alert(errorThrow);
                          },
                           success: function(data) {
                            // alert('ok ' + data.status);
                             location.reload();
                          }

                    });
               }
             }

             function deleteAll() {
              var ids = new Array();
              var allCheckbox = document.getElementsByName('rowCheck');
              for(var i = 0; i < allCheckbox.length; i++) {
                if (allCheckbox[i].checked) {
                  ids.push(allCheckbox[i].value);
                }
              }
                 var link = "{{URL::route('memberDeleteAllCheck')}}";
                if (confirm('Do you want to delete all?')) {
                          $.ajax({
                         url: link,
                        data: {'data': ids},
                          error: function(xhr, status, errorThrow) {
                            alert(errorThrow);
                          },
                           success: function(data) {
                            // alert('ok ' + data.status);
                             location.reload();
                          }

                    });
               }
             }

             function checkAll() {
                var allCheckbox = document.getElementsByName('rowCheck');
                for(var i = 0; i < allCheckbox.length; i++) {
                  allCheckbox[i].checked = true;
                }
             }

             function changeActive(obj) {
              var id = obj.id;
              var admin = "{{Auth::user()->email}}";          
                var link = "{{URL::route('memberChageActive')}}";
               
                        $.ajax({
                         url: link,
                        data: {'id': id, email: admin},
                          error: function(xhr, status, errorThrow) {
                            alert(errorThrow);
                          },
                           success: function(data) {
                            // alert('ok ' + data.status);
                             // location.reload();
                             var active = $('#active' + id).text();
                             if (active == 1) {
                              $('#active' + id).text('0');
                             } else {
                              $('#active' + id).text('1');
                             }
                             var date = "{{date('Y-m-d')}}";
                             $('#modifyDate' + id).text(date);
                             $('#modifyUser' + id).text(admin);
                             if ($('#createDate' + id).text().length == 0) {
                              $('#createDate' + id).text(date);
                              $('#createUser' + id).text(admin);
                             }
                          }

                    });
              

             }



           </script>
          
        @endsection
        @include('backend.widgets.panel', array('header'=>true, 'as'=>'table'))
    </div>
    
@stop

