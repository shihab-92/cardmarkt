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
                           <th>Card Brand</th>
                           <th>Card type</th>
                           <th>Validity</th>
                           <th>Card country</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($card as $cards)
                        <tr>
                           <td>{{ $cards->id }}</td>
                           <td>{{ $cards->brand()->first()->brand_name}}</td>
                           <td>{{ $cards->type()->first()->card_type }}</td>
                           <td>{{ $cards->valid_until }}</td>
                           <td>{{ $cards->country()->first()->country_name }}</td>
                           <td><a href="/update-card/{{ $cards->id }}" class="btn btn-info">Edit</a>
                           <a href="/delete-card/{{ $cards->id }}" class="btn btn-danger">Delete</a>
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