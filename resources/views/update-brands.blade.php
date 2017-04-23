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
                  <h2>Update Brand</h2>
                  <div class="clearfix"></div>
               </div>
               <div class="x_content">
                  @if (session()->has('flash_notification.message'))
                  <div class="alert alert-{{ session('flash_notification.level') }}">
                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                     {!! session('flash_notification.message') !!}
                  </div>
                  @endif
                  <form class="form-horizontal form-label-left" novalidate action="/edit-brand/{{$brands->id}}" method="POST" enctype="multipart/form-data" id="brand_form">
                     <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                     <p></p>
                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="brand-name">Brand Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <input id="brand-name" class="form-control col-md-7 col-xs-12"  name="brand-name"  required="required" type="text" value="{{$brands->brand_name}}">
                        </div>
                     </div>
                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="brand-slug">Brand Slug<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <input id="brand-slug" class="form-control col-md-7 col-xs-12"  name="brand-slug" placeholder="Card-slug-placeholder" required="required" type="text" value="{{$brands->brand_slug}}">
                        </div>
                     </div>
                     <div class="item form-group">
                       <label class="control-label col-md-3 col-sm-3 col-xs-12" for="value-link">Card value checking link<span class="required">*</span>
                       </label>
                       <div class="col-md-6 col-sm-6 col-xs-12">
                         <input id="value-link" class="form-control col-md-7 col-xs-12"  name="value-link" placeholder="Enter url for checking card value" required="required" type="text" value="{{$brands->card_value_link}}">
                       </div>
                     </div>
                     <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="brand-image">Brand Image<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <img src="/brand_image/{{$brands->brand_image}}">
                     </div>
                   </div>
                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="brand-image">Brand Image<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <input id="brand-image" class="form-control col-md-7 col-xs-12"  name="brand-image" placeholder="Card-slug-placeholder"  type="file" value="">
                        </div>
                     </div>
                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="brand-category">Brand category/Subategory<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           @foreach($category as $key=>$categories)
                           <div class="col-xs-12 col-md-12">
                             <label class="checkbox-inline" style="margin-left: 0;">
                             <input class="flat" type="checkbox" name="brand-category-subcategory[]"  data-parsley-mincheck="1" value="{{$categories->id}}" 
                               @foreach($brand_categories as $selectKey=>$brand_category)
                                {{($categories->id == $brand_categories[$selectKey]->category_id) ? "checked" : " "}}
                               @endforeach> {{$categories->category_name}}
                             </label>
                             </div>
                           @endforeach
                        </div>
                     </div>
                     <div class="ln_solid"></div>
                     <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                           <button id="send" type="submit" class="btn btn-success">Update</button>
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