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
                  <h2>Add New Subcategory</h2>
                  <div class="clearfix"></div>
               </div>
               <div class="x_content">
                  @if (session()->has('flash_notification.message'))
                  <div class="alert alert-{{ session('flash_notification.level') }}">
                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                     {!! session('flash_notification.message') !!}
                  </div>
                  @endif
                  <form class="form-horizontal form-label-left" novalidate action="store-subcategory" method="POST" enctype="multipart/form-data">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                     <p></p>
                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="parent-id">Category & subcategory Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <select id="parent-id" class="form-control col-md-7 col-xs-12"  name="parent-id"  required="required">
                              <option value="">Select Category</option>
                              @foreach($category as $categories)
                              <option value="{{$categories->id}}">{{$categories->category_name}}</option>
                                 @foreach($subcategory as $subcategories)
                                    @if($subcategories->parent_id == $categories->id)
                                       <option value="{{$subcategories->id}}">&nbsp;&nbsp;&nbsp;-{{$subcategories->category_name}}</option>
                                    @endif
                                 @endforeach
                              @endforeach
                           </select>
                        </div>
                     </div>
                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="category-name">Subcategory Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <input id="category-name" class="form-control col-md-7 col-xs-12"  name="category-name"  required="required" type="text" value="">
                        </div>
                     </div>
                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="category-slug">Subcategory Slug<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <input id="category-slug" class="form-control col-md-7 col-xs-12"  name="category-slug" placeholder="Card-slug-placeholder" required="required" type="text" value="">
                        </div>
                     </div>
                     <div class="ln_solid"></div>
                     <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                           <button id="send" type="submit" class="btn btn-success">Create</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- /page content -->
@stop