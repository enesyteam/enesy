@extends('backend.layouts.dashboard')
@section('page_heading','Admin List')
@section('section')

    <script rel="text/javascript" src="{{ asset('backend/assets/scripts/tooltip.js') }}" ></script>

    <script rel="text/javascript" src="{{ asset('backend/assets/scripts/bootstrap-confirmation.js') }}" ></script>

    <script rel="text/javascript" src="{{ asset('backend/assets/scripts/adminuser/adminuser.js') }}" ></script>

    <span class="col-sm-12">
        @section ('table_panel_title','Admin List')
        @section ('table_panel_body')
            <div class="col-sm-12">
   
                <div id="formSearch">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Username or FullName:</label>
                                <input type="text" name="name" value="{{ isset($name) ? $name : old('name') }}" class="form-control">
                            </div>

                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Email:</label>
                                <input type="email" name="email" value="{{ isset($email) ? $email : old('email') }}" class="form-control">
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Start Date:</label>
                                <input type="date"  name="startdate" value="{{ isset($startdate) ? $startdate : old('startdate') }}" class="dateTime form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>End Date:</label>
                                <input id="datepicker" type="date" name="enddate" value="{{ isset($enddate) ? $enddate : old('enddate') }}" class="dateTime form-control">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Search:</label>
                                <button id="searchData" class="btn btn-primary form-control" type="button">Search</button>
                            </div>
                        </div>
                        <input type="hidden" value="{{ URL::to('admin/adminManager?sort=username'.$url)  }}" />
                    </div>
                </div>

            </div>
                <table class="table tableList">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>
                            User Name
                            <a href="{{ URL::to('admin/adminManager?sort=username'.$url) }}" class="sort_username fa fa-sort"></a>
                        </th>
                        <th>
                            Email
                            <a href="{{ URL::to('admin/adminManager?sort=email'.$url) }}" class="sort_email fa fa-sort"></a>
                        </th>
                        <th>
                            Full Name
                            <a href="{{ URL::to('admin/adminManager?sort=full_name'.$url) }}" class="sort_full_name fa fa-sort"></a>
                        </th>
                        <th>
                            Active
                            <a href="javascript:void(0)" class=""></a>
                        </th>
                        <th>
                            Info
                            <a href="javascript:void(0)" class=""></a>
                        </th>
                        <th>
                            Create Date
                            <a href="javascript:void(0)" class=""></a>
                        </th>
                        <th>
                            Create User
                            <a href="javascript:void(0)" class=""></a>
                        </th>
                        <th>
                            Type Admin
                            <a href="javascript:void(0)" class=""></a>
                        </th>
                        <th class="centered">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $listAdmin as $item )
                        <tr>
                            <td>
                                <label>
                                    <input type="checkbox" value="{{ $item['id']  }}">
                                </label>
                            </td>
                            <td>{{ $item['username']  }}</td>
                            <td>{{ $item['email']  }}</td>
                            <td>{{ $item['full_name']  }}</td>
                            <td>
                                @if ( $item['active'] === 0 )
                                    <span class="statusActive">Delete</span>
                                @elseif( $item['active'] === 1 )
                                    <span class="statusActive">Non-Active</span>
                                @elseif( $item['active'] === 2 )
                                            <span class="statusActive">Active</span>
                                @endif
                                <input type="checkbox"
                                       class="checkActive" data-id="{{ $item['id'] }}"
                                       value-id ="{{ $item['active'] }}"
                                       {{ $item['active'] == 2 ? "checked" : "" }}
                                >
                            </td>
                            <td>{{ $item['info']  }}</td>
                            <td>{{ $item['create_date']  }}</td>
                            <td>{{ $item['create_user']  }}</td>
                            <td>{{ $item['type_admin']  }}</td>
                            <td>
                                <button class="btn btn-default editButton" type="button" data-id="{{ $item['id']  }}">Edit</button>
                                <button class="btn btn-default deleteButton" data-confirm="Are you sure you want to delete?" type="button" data-id="{{ $item['id'] }}">Delete</button>
                                <button class="btn btn-default changePass" type="button" data-id="{{ $item['id'] }}">Change Password</button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            <div class="hidden-xs pull-right">
                {!!  $listAdmin->render() !!}
            </div>
            @endsection
            @include('backend.widgets.panel', array('header'=>true, 'as'=>'table'))
        </div>
    </div>
    <input id="getUrlPage" type="hidden" value="{!! Request::url() !!}" />
    <input id="sortColumn" type="hidden" value="{{ $sort }}" />
    <input id="orderColumn" type="hidden" value="{{ $order }}" />

    <input id="urlChangeStatus" type="hidden" value="{{ URL::to("admin/ajax/changeStatus")}}" />
    <input id="urlEditUser" type="hidden" value="{{ URL::to("admin/editUser")}}" />
    <input id="urlDeleteUser" type="hidden" value="{{ URL::to("admin/deleteUser")}}" />
    <input id="urlChangePass" type="hidden" value="{{ URL::to("admin/changePassUser")}}" />
    </span>
@stop
