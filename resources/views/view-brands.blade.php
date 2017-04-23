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
                           <th>Brand name</th>
                           <th>Brand slug</th>
                           <th>Brand category</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($brands as $brand)
                        <tr>
                           <td>{{ $brand->id }}</td>
                           <td>{{ $brand->brand_name }}</td>
                           <td>{{ $brand->brand_slug }}</td>
                           <td>
                              @foreach($brand_categories as $key=>$brand_category)
                                 @if($brand_category->brand_id == $brand->id)
                                     <span class="btn-xs btn-info">{{$brand_category->category()->first()->category_name}}</span>
                                 @endif
                              @endforeach
                           </td>
                           <td><a href="/edit-brand/{{ $brand->id }}" class="btn btn-info">Edit</a>
                           <a href="/delete-brand/{{ $brand->id }}" class="btn btn-danger">Delete</a></td>
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