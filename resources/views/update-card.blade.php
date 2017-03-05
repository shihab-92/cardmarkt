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
                  <h2>Add New Card</h2>
                  <div class="clearfix"></div>
               </div>
               <div class="x_content">
                  @if (session()->has('flash_notification.message'))
                  <div class="alert alert-{{ session('flash_notification.level') }}">
                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                     {!! session('flash_notification.message') !!}
                  </div>
                  @endif
                  <form class="form-horizontal form-label-left" novalidate action="/update-card/{{$card->id}}" method="POST" enctype="multipart/form-data">
                     <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                     <p></p>
                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="card-type">Card Type <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <select id="card-type" class="form-control col-md-7 col-xs-12"  name="card-type"  required="required">
                              <option value="">Select Card Type</option>
                              @foreach($Types as $Type)
                              <option value="{{$Type->id}}" {{($Type->id == $card->card_type) ? 'selected' : ''}}>{{$Type->card_type}}</option>
                              @endforeach
                           </select>
                        </div>
                     </div>
                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="card-brand">Card brand<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <select id="card-brand" class="form-control col-md-7 col-xs-12"  name="card-brand"  required="required">
                              <option value="">Select Card Brand</option>
                              @foreach($Brands as $brand)
                              <option value="{{$brand->id}}" {{($brand->id == $card->card_brand) ? 'selected' : ''}}>{{$brand->brand_name}}</option>
                              @endforeach
                           </select>
                        </div>
                     </div>
                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="validity">Valid until 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <input id="validity" class="form-control col-md-7 col-xs-12"  name="validity"   type="text" value="{{$card->valid_until}}">
                        </div>
                     </div>
                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="card-country">Card Origin Country<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <select id="card-country" class="form-control col-md-7 col-xs-12"  name="card-country"  required="required">
                              <option value="">Select Country</option>
                              @foreach($Countries as $Country)
                              <option value="{{$Country->id}}" {{($Country->id == $card->origin_country) ? 'selected' : ''}}>{{$Country->country_name}}</option>
                              @endforeach
                           </select>
                        </div>
                     </div>
                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="value">Card value 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <input id="value" class="form-control col-md-7 col-xs-12"  name="value"   placeholder="e.g 45.00" type="number" value="{{$card->original_price}}" required="required">
                        </div>
                     </div>
                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="discount">Discount %
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <input id="discount" class="form-control col-md-7 col-xs-12"  name="discount"   placeholder="e.g 10" type="number" value="{{$card->discount}}" required="required" >
                        </div>
                     </div>
                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sell_price">Sell Price
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <input id="sell_price" class="form-control col-md-7 col-xs-12"  name="sell_price"   type="number" value="{{$card->sell_price}}" readonly="true" required="required">
                        </div>
                     </div>
                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="card_number">Card number
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <input id="card_number" class="form-control col-md-7 col-xs-12"  name="card_number"   type="text" value="{{$card->card_number}}" required="required">
                        </div>
                     </div>
                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="card_pin">Card PIN
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <input id="card_pin" class="form-control col-md-7 col-xs-12"  name="card_pin"   type="text" value="{{$card->card_PIN}}" >
                        </div>
                     </div>
                     @if(Auth::check() && Auth::user()->role == "admin")
                     @else
                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="check_value">Card details
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <textarea rows="4" cols="50" id="check_value" name="check_value"  class="form-control col-md-7 col-xs-12"></textarea>
                        </div>
                     </div>
                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="check_value">Comment
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <textarea rows="4" cols="50" id="check_value" name="check_value"  class="form-control col-md-7 col-xs-12"></textarea>
                        </div>
                     </div>
                     @endif
                     <div class="ln_solid"></div>
                     <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                           <button id="send" type="submit" class="btn btn-success">Update Card</button>
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