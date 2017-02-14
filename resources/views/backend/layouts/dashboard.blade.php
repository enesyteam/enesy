@extends('backend.layouts.plane')

@section('body')
 <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url ('admin/') }}">Hi  {{ Auth::user()->username }}</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="{{ URL::to('admin/userProfile?id='.Auth::user()->id) }}"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{{ url ('admin/logout') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>


                         <!-- nguyen van quang -->
                    

                        <li >
                            <a href="{{ url ('admin/member') }}"><i class="glyphicon glyphicon-user"></i> Members</a>
                        </li>
                         <li >
                            <a href="{{ url ('admin/mentorlist') }}"><i class="glyphicon glyphicon-sunglasses"></i> Mentors</a>
                        </li>

                         <li >
                            <a href="{{ url ('admin/workshoplist') }}"><i class="glyphicon glyphicon-book"></i> Workshops</a>
                        </li>

                         <li >
                            <a href="{{ url ('admin/category/all') }}"><i class="fa fa-list-alt fa-fw"></i> Categories</a>
                        </li>   

                       <li>
                            <a href="#"><i class="fa fa-book fa-fw"></i> Exam<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a  href="{{ url ('admin/exam') }}"><i class="fa fa-th-list"></i> List</a>
                                </li>
                                <li>
                                    <a  href="{{ url ('admin/exam/add') }}"> <i class="fa fa-plus-square"></i> Add New</a>
                                </li>
                                <li>
                                    <a  href="{{ url ('admin/exam/list-result') }}"><i class="fa fa-th-list"></i> List Result</a>
                                </li>

                            </ul>
                            <!-- /.nav-second-level -->
                        </li>      

                         <li>
                            <a href="#"><i class="fa fa-graduation-cap fa-fw"></i> Course<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a  href="{{ url ('admin/course') }}"><i class="fa fa-th-list"></i> List</a>
                                </li>
                                <li>
                                    <a  href="{{ url ('admin/course/add') }}"> <i class="fa fa-plus-square"></i> Add New</a>
                                </li>

                            </ul>
                            <!-- /.nav-second-level -->
                        </li>                                                                     

                        <li >
                            <a href="{{ url ('admin/recruitmentlist') }}"><i class="fa fa-graduation-cap fa-fw"></i> Recruitments</a>
                        </li>


                        <li>
                            <a href="#"><i class="fa fa-globe fa-fw"></i> Discussions<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li {{ (Request::is('*panels') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('admin/listDiscussions?page=1') }}"><i class="fa fa-user"></i> List Discussions</a>
                                </li>
                                <li {{ (Request::is('*buttons') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('admin/listDiscussionsComment' ) }}"><i class="fa fa-comments-o">+</i> List Comment</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                      
                       <li>
                            <a href="#"><i class="fa fa-hacker-news"></i> Articles<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a  href="{{ url ('admin/articles') }}"><i class="fa fa-th-list"></i> List Articles</a>
                                </li>
                                <li>
                                    <a  href="{{ url ('admin/articles/add') }}"> <i class="fa fa-plus-square"></i> Add New Articles</a>
                                </li>

                            </ul>
                            <!-- /.nav-second-level -->
                        </li>  
                        <li >
                            <a href="{{ url ('admin/notificationlist') }}"><i class="glyphicon glyphicon-bell"></i> Notifications</a>
                        </li>
         
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Admin System<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li {{ (Request::is('*panels') ? 'class="active"' : '') }}>
                                   <a href="{{ url ('admin/adminManager?page=1') }}"><i class="fa fa-user"></i> List:</a>
                                </li>
                                <li {{ (Request::is('*buttons') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('admin/addUserAdmin' ) }}"><i class="fa fa-user">+</i> Add</a>
                                </li>
                            </ul>
                            
                        </li>                                             

                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
			 <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">@yield('page_heading')</h1>
                </div>
                <!-- /.col-lg-12 -->
           </div>
			<div class="row">  
				@yield('section')

            </div>
            <!-- /#page-wrapper -->
        </div>
    </div>
@stop
