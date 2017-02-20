@extends('backend.layouts.dashboard')
@section('page_heading','Member List')
@section('section')
    <div class="col-sm-12">
        @section ('table_panel_title','&nbsp;')
        @section ('table_panel_body')
      <style type="text/css">
          .td_show {
            display: block;
            position: absolute;
          }
          .td_hidden {
            display: none;
          }
        </style>
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
                     <label>Teacher:</label>
                    <select id="teacher" class="form-control">
                        <option value="none">None</option>
                        <option value="1" "<?php if ($teacher== 1) echo ' selected ';?>">Teacher</option>
                        <option value="2" "<?php if ($teacher == 2) echo ' selected ';?>">No teacher</option>
                      </select>
                 </div>

                 <div class="col-md-2 form-group">
                     <label>Status</label>
                   <select id="active" class="form-control">
                        <option value="none">None</option>
                       @foreach($status as $key => $st)
                        <option value="{{$key}}">{{$st}}</option>
                       @endforeach
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
                  <th style="vertical-align: middle; "><input type="checkbox" name="checkAll" id="checkAll" onclick="checkAll(this)"></th>

                   <th >No</th>                   
                   <th>Name</th>    
                   <th>Email</th>             
                   <th>Info</th>    
                    <th>Status</th>                             
                    <th>Register date</th>
                    <th>Modify date</th>                   
                    <th>Create user</th>                   
                    <th>Teacher</th>
                          
                    <th>Action</th>                                
                  </tr>                   
                </thead>
                <tbody>
                  @foreach($all_member as $value)
                    <tr>
                    <td><input type="checkbox" name="rowCheck" value="{{$value->id}}"></td>
                   
                      <td>{{$value->id}}</td>
                      <td>{{$value->full_name}}</td>
                      <td>{{$value->email}}</td>                   
                                          
                      <td>
                      <p id="info{{$value->id}}" onclick="showTd(this)">
                          <?php echo strlen($value->info) > 10 ? substr($value->info, 0, 10).'...' : $value->info; ?>
                        </p>
                        <textarea id="info{{$value->id}}Edit" class="td_hidden">{{$value->info}}</textarea>
                      </td>
                    <td>{{$status[$value->status]}}</td>
                      <td id="createDate{{$value->id}}">
                      @if ($value->create_date > 0)
                        <?php if ($value->create_date > 0) echo date('d/m/Y',$value->create_date) ?>                        
                          @endif
                      </td>
                      <td id="createUser{{$value->id}}">
                          @if ($value->modify_date > 0)
                      <?php if ($value->modify_date > 0) echo date('d/m/Y',$value->modify_date) ?></td>
                      @endif   
                      </td>
                      <td id="modifyDate{{$value->id}}">
                       
                      {{$value->create_user}}                  
                      <td>
                        <input type="checkbox" name="" value="{{ $value->is_teaching == 1 ? 1 : 0 }}"  "<?php if($value->is_teaching == 1) echo ' checked ' ?>" onclick="changeStatus('{{ $value->id }}')">
                      </td>
                      
                     
                      <td>
                      <a href="{{URL::route('memberEdit', array('id' => $value->id))}}">  <span class="glyphicon glyphicon-pencil"></span></a>
                        <label>&nbsp;&nbsp;|&nbsp;&nbsp;</label>
                        <a style="cursor:pointer;" onclick="deleteById('{{$value->id}}')" value="{{$value->id}}"><span class="glyphicon glyphicon-trash"></span></a>
                    </tr>

                  @endforeach
                </tbody>
            </table>
            </div>
           <div class="row">
             <div class="col-md-6">
               <ul class="pagination" >
               
                 <li><a class="btn btn-danger" onclick="deleteAll()"style="cursor:pointer;"><i class="glyphicon glyphicon-remove-circle"></i>&nbsp;Delete Check</a></li>
              
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
                var teacher = $('#teacher').val();
                link += '&teacher=' + teacher;
                var learning = $('#learning').val();
                link += '&learning=' + learning;
                var active = $('#active').val();
                link += '&status=' + active;
                var create = $('#createDate').val();
                link += '&createDate=' + create;
                var toDate = $('#toDate').val();
                link += '&toDate=' + toDate;
                // alert(link);
                location.href = link;
             });

             function deleteById(id) {
            
           
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
            function changeStatus(value) {
                  var params = {'id':value};
                  $.ajax({
                    url: "{{ URL::route('changeIsTeacher') }}",
                    data: params,
                    error: function(xhr, status, errorThrow) {
                      //alert(errorThrow);
                    },
                     success: function(data) {
                      // alert('ok '  + data.status + " id = " + data.id );
                    }

                  });
                  

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

             function showTd(obj) {
              $("#" + obj.id).removeClass().addClass("td_hidden");
              $("#" + obj.id + "Edit").removeClass().addClass('td_show');
              $("#" + obj.id + "Edit").focus();
              $("#" + obj.id + "Edit").blur(function(){
              $("#" + obj.id).removeClass();
              $("#" + obj.id + "Edit").removeClass().addClass('td_hidden');
              });
            }



           </script>
          
        @endsection
        @include('backend.widgets.panel', array('header'=>true, 'as'=>'table'))
    </div>
    
@stop

