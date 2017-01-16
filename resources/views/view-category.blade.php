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
                           <th>Serial no</th>
                           <th>Category name</th>
                           <th>Category slug</th>
                           <th>Parent</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($category as $categories)
                        <tr>
                           <td>{{ $categories->id }}</td>
                           <td>{{ $categories->category_name }}</td>
                           <td>{{ $categories->category_slug }}</td>
                           <td>{{ $categories->parent_id }}</td>
                           <td><a href="/edit-category/{{ $categories->id }}" class="btn btn-info">Edit</a>
                           <a href="/delete-category/{{ $categories->id }}" class="btn btn-danger">Delete</a>
                           <a href="/edit-category-relation/{{ $categories->id }}" class="btn btn-warning">Relation</a></td>
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