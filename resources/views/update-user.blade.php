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
                  <h2>Form validation <small>sub title</small></h2>
                  <div class="clearfix"></div>
               </div>
               <div class="x_content">
                  <form class="form-horizontal form-label-left" novalidate action="/update-user/{{$editUserInfo->id}}" method="POST">
                     @if (session()->has('flash_notification.message'))
                     <div class="alert alert-{{ session('flash_notification.level') }}">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                        {!! session('flash_notification.message') !!}
                     </div>
                     @endif
                     <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                     <p>
                     </p>
                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">User Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <input id="name" class="form-control col-md-7 col-xs-12"  name="Username" placeholder="User name e.g Jon90" required="required" type="text" value="{{$editUserInfo->username}}">
                        </div>
                     </div>
                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">First Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <input id="first-name" class="form-control col-md-7 col-xs-12"  name="firstName" placeholder="first name e.g Jon" required="required" type="text" value="{{$editUserInfo->firstname}}">
                        </div>
                     </div>
                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Last Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <input id="last-name" class="form-control col-md-7 col-xs-12"  name="lastName" placeholder="last name e.g Doe" required="required" type="text" value="{{$editUserInfo->lastname}}">
                        </div>
                     </div>
                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="type">Type <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <select name="type" class="form-control col-md-7 col-xs-12" required>
                              <option value="">Type</option>
                              <option value="company" @if($editUserInfo->type == 'company')  selected @endif>Company</option>
                              <option value="individual" @if($editUserInfo->type == 'individual')  selected @endif>Individual</option>
                           </select>
                        </div>
                     </div>
                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <input type="email" id="email" name="Email" required="required" class="form-control col-md-7 col-xs-12" value="{{$editUserInfo->email}}">
                        </div>
                     </div>
                     <div class="item form-group">
                        <label for="password" class="control-label col-md-3">Password</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <input id="password" type="password" name="Password" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                     </div>
                     <div class="item form-group">
                        <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Repeat Password</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <input id="password2" type="password" name="Confirm_Password" data-validate-linked="Password" class="form-control col-md-7 col-xs-12" required="required">
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