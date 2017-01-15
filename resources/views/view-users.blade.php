@extends('dashboard')
@section('admin_content')
<!-- page content -->
<div class="right_col" role="main">
   <div class="">
      <div class="clearfix"></div>
      <div class="row">
         <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
               <div class="x_title">
                  <h2>View All Users</h2>
                  <ul class="nav navbar-right panel_toolbox">
                     <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                     </li>
                     <li><a class="close-link"><i class="fa fa-close"></i></a>
                     </li>
                  </ul>
                  <div class="clearfix"></div>
               </div>
               <div class="x_content">
                  <p class="text-muted font-13 m-b-30">
                  </p>
                  <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                     <thead>
                        <tr>
                           <th>Username</th>
                           <th>First name</th>
                           <th>Last name</th>
                           <th>User Type</th>
                           <th>Email</th>
                           <th>Role</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                     @foreach($UserInfo as $UserInformation)
                      <tr>
                        <td>{{ $UserInformation->username }}</td>
                        <td>{{ $UserInformation->firstname }}</td>
                        <td>{{ $UserInformation->lastname }}</td>
                        <td>{{ $UserInformation->type }}</td>
                        <td>{{ $UserInformation->email }}</td>
                        <td>{{ $UserInformation->role }}</td>
                         <td><a href="/view-users/{{ $UserInformation->id }}" class="btn btn-info">Edit</a></td>
                      </tr>
                      @endforeach
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- /page content -->
@stop