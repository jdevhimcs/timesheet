@extends('layouts.admin')











@section('content')



<div class="content-header row">

  <div class="content-header-left col-12 mb-2 mt-1">

    <div class="row breadcrumbs-top">

      <div class="col-12">

        <h5 class="content-header-title float-left pr-1 mb-0">Users Management</h5>

        <div class="breadcrumb-wrapper float-left col-7">

          <ol class="breadcrumb p-0 mb-0">

            <li class="breadcrumb-item"><a href="#"><i class="bx bx-home-alt"></i></a>

            </li>

            <li class="breadcrumb-item active"> Edit  User

            </li>

        </ol>

    </div>

    <div class="button-wrapper float-right">

      <a class="btn btn-success btn-sm" href="{{route('users.index')}}"> Back</a>

  </div>

</div>

</div>

</div>

</div>

<div class="content-body">

    <!-- users edit start -->

    <section class="users-edit">

        <div class="card">

            <div class="card-content">

                <div class="card-body">

                    <ul class="nav nav-tabs mb-2" role="tablist">

                        <li class="nav-item">

                            <a class="nav-link d-flex align-items-center active" id="account-tab" data-toggle="tab"

                            href="#account" aria-controls="account" role="tab" aria-selected="true">

                            <i class="bx bx-user mr-25"></i><span class="d-none d-sm-block">Account Details</span>

                        </a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link d-flex align-items-center" id="information-tab" data-toggle="tab"

                        href="#information" aria-controls="information" role="tab" aria-selected="false">

                        <i class="bx bx-info-circle mr-25"></i><span class="d-none d-sm-block">Other Information</span>

                    </a>

                </li>

                <li class="nav-item">

                    <a class="nav-link d-flex align-items-center" id="role-tab" data-toggle="tab"

                    href="#role-permission" aria-controls="role-permission" role="tab" aria-selected="false">

                    <i class="bx bx-info-circle mr-25"></i><span class="d-none d-sm-block">Role Permission</span>

                </a>

            </li>

        </ul>

        <div class="tab-content">

            <div class="tab-pane active fade show" id="account" aria-labelledby="account-tab" role="tabpanel">

                <h5 class="mb-1"><i class="bx bx-user mr-25"></i>Account Details</h5>

                <!-- users edit media object start -->

                <div class="media mb-2">

                    <a class="mr-2" href="#">

                        <img src="{{ asset('app-assets/images/portrait/small/avatar-s-26.jpg')}}" alt="users avatar"

                        class="users-avatar-shadow rounded-circle" height="64" width="64">

                    </a>

                    <div class="media-body">

                        <h4 class="media-heading">Avatar</h4>

                        <div class="col-12 px-0 d-flex">

                            <a href="#" class="btn btn-sm btn-primary mr-25">Change</a>

                            <a href="#" class="btn btn-sm btn-light-secondary">Reset</a>

                        </div>

                    </div>

                </div>

                <!-- users edit media object ends -->

                <!-- users edit account form start -->

                

                    <form novalidate action="{{ route("users.update", [$user->id]) }}" method="POST" enctype="multipart/form-data">

                       @csrf

                          @method('PUT')

                    <div class="row">

                        <div class="col-12 col-sm-6">

                           

                            <div class="form-group">

                                <div class="controls">

                                    <label>Name</label>

                                    <input type="text" class="form-control" placeholder="Name" name="name"  value="{{ old('name', isset($user) ? $user->name : '') }}" 

                                    required data-validation-required-message="This name field is required">

                                     @if($errors->has('name'))

                    <p class="help-block">

                        {{ $errors->first('name') }}

                    </p>

                @endif

                                </div>

                            </div>

                            <div class="form-group">

                                <div class="controls">

                                    <label>E-mail</label>

                                    <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email', isset($user) ? $user->email : '') }}" 

                                    required  data-validation-required-message="This email field is required">

                                     @if($errors->has('email'))

                                    <p class="help-block">

                                        {{ $errors->first('email') }}

                                    </p>

                                @endif

                                </div>

                            </div>

                            <div class="form-group">

                                <label>Gender</label>

                                <select class="form-control select2" name="gender">

                                    <option {{ (isset($user) && $user->gender=='male') ? 'selected' : '' }} value="male">Male</option>

                                    <option {{ (isset($user) && $user->gender=='female') ? 'selected' : '' }} value="female">Female</option>

                                    <option {{ (isset($user) && $user->gender=='other') ? 'selected' : '' }} value="other">Other</option>

                                </select>

                                 @if($errors->has('gender'))

                                    <p class="help-block">

                                        {{ $errors->first('gender') }}

                                    </p>

                                @endif

                            </div>

                        </div>

                        <div class="col-12 col-sm-6">

                            <div class="form-group">

                                <label>Role</label>

                                <select class="form-control select2" name="roles[]" id="roles" class="form-control select2" multiple="multiple">

                                    @foreach($roles as $id => $roles)

                                    <option value="{{ $roles->id }}" {{ (in_array($roles->id, old('roles', [])) || isset($user) && $user->roles->contains($roles->id)) ? 'selected' : '' }}>

                                        {{ $roles->name }}

                                    </option>

                                    @endforeach

                                </select>

                                 @if($errors->has('roles'))

                                    <p class="help-block">

                                        {{ $errors->first('roles') }}

                                    </p>

                                @endif

                            </div>

                            <div class="form-group">

                                <label>Date of Birth</label>

                                <div class="controls position-relative has-icon-left">

                                    <input type="text" value="{{ old('dob', isset($user) ? $user->dob : '') }}"  name="dob" class="form-control custom-picker" required placeholder="Date of birth" data-validation-required-message="This birthdate field is required">

                                    <div class="form-control-position">

                                      <i class='bx bx-calendar'></i>

                                  </div>

                                   @if($errors->has('dob'))

                                    <p class="help-block">

                                        {{ $errors->first('dob') }}

                                    </p>

                                @endif

                              </div>

                          </div>

                          <div class="form-group">

                            <div class="controls">

                                <label>Phone</label>

                                <input type="text" name="phone" value="{{ old('phone', isset($user) ? $user->phone : '') }}"  class="form-control" required placeholder="Phone number" data-validation-required-message="This phone number field is required">

                                 @if($errors->has('phone'))

                                    <p class="help-block">

                                        {{ $errors->first('phone') }}

                                    </p>

                                @endif

                            </div>

                        </div>

                        <div class="form-group">

                            <label>Status</label>

                            <select name="status" class="form-control select2">

                                <option {{ (isset($user) && $user->status=='active') ? 'selected' : '' }} value="active">Active</option>

                                <option {{ (isset($user) && $user->status=='inactive') ? 'selected' : '' }} value="inactive">In-active</option>

                                

                            </select>

                             @if($errors->has('status'))

                                    <p class="help-block">

                                        {{ $errors->first('status') }}

                                    </p>

                                @endif

                        </div>

                    </div>

                </div>

            

            

                <div class="row">

                    <div class="col-12 col-sm-12">

                        <h5 class="mb-1"><i class="bx bx-key mr-25"></i>Password info</h5>

                    </div>

                    <div class="col-12 col-sm-6">

                        <div class="form-group">

                            <div class="controls">

                                <label>Password</label>

                                <input class="form-control" type="password" value="" name="password" >

                            </div>

                        </div>

                    </div>

                    <div class="col-12 col-sm-6">

                        <div class="form-group">

                            <div class="controls">

                                <label>Confirm password</label>

                                <input class="form-control" name="confirm-password" type="password" value="" >

                            </div>

                        </div>

                    </div>

                </div>

                 <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">

                <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save changes</button>

                <button type="reset" class="btn btn-light">Cancel</button>

            </div>

            </form>

           

            <!-- users edit account form ends -->

        </div>

        <div class="tab-pane fade show" id="information" aria-labelledby="information-tab" role="tabpanel">

            <!-- users edit Info form start -->

               <form novalidate action="{{ route("users.updateother", [$user->id]) }}" method="POST" enctype="multipart/form-data">

                       @csrf

                <div class="row">

                   

                    <div class="col-12 col-sm-12 mt-1 mt-sm-0">

                        <h5 class="mb-1"><i class="bx bx-user mr-25"></i>Address Info</h5>

                        <div class="form-group">

                            <div class="controls">

                                <label>Address</label>

                                <input type="text" name="address" class="form-control" placeholder="Address"

                                data-validation-required-message="This Address field is required" value="{{ old('address', isset($user) ? $user->address : '') }}">

                                 @if($errors->has('address'))

                                    <p class="help-block">

                                        {{ $errors->first('address') }}

                                    </p>

                                @endif

                            </div>

                        </div>

                        <div class="form-group">

                            <div class="controls">

                                <label>City / District</label>

                                <input type="text" name="city" class="form-control" placeholder="City / District"

                                data-validation-required-message="This City / District field is required" value="{{ old('city', isset($user) ? $user->city : '') }}">

                                 @if($errors->has('city'))

                                    <p class="help-block">

                                        {{ $errors->first('city') }}

                                    </p>

                                @endif

                            </div>

                        </div>

                        <div class="form-group">

                            <label>State</label>

                            <select class="form-control select2" name="state" id="state">

                                @foreach($states as $key=>$value)

                                <option value="{{$value->id}}" @if($value->id==$user->state) selected @endif>{{$value->name}}</option>

                                @endforeach

                                

                            </select>

                             @if($errors->has('state'))

                                    <p class="help-block">

                                        {{ $errors->first('state') }}

                                    </p>

                                @endif

                        </div>

                        <div class="form-group">

                            <div class="controls">

                                <label>Pincode</label>

                                <input type="text" name="pincode" class="form-control" placeholder="Pincode"

                                data-validation-required-message="The Pincode field is required" value="{{ old('pincode', isset($user) ? $user->pincode : '') }}">

                                 @if($errors->has('pincode'))

                                    <p class="help-block">

                                        {{ $errors->first('pincode') }}

                                    </p>

                                @endif

                            </div>

                        </div>

                        <div class="form-group">

                            <label>Country</label>

                            <select class="form-control select2" name="country" id="country">

                                <option value="101" selected="selected">India</option>

                              

                            </select>

                        </div>

                    </div>

                

                    

                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">

                        <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save changes</button>

                        <button type="reset" class="btn btn-light">Cancel</button>

                    </div>

                </div>

            </form>

            <!-- users edit Info form ends -->

        </div>

        <div class="tab-pane fade show" id="role-permission" aria-labelledby="role-permission-tab" role="tabpanel">

            <h5 class="mb-1"><i class="bx bx-user mr-25"></i>Role Permission</h5>

            <!-- users edit account form start -->

            <form novalidate>

                <div class="row">                                

                    <div class="col-12">

                        <div class="table-responsive">

                            <table id="module-list" class="table table-bordered table-striped mt-1">

                                <thead>

                                    <tr>

                                        <th>Module Permission</th>

                                        <th>Read</th>

                                        <th>Edit</th>

                                        <th>Create</th>

                                        <th>Delete</th>

                                    </tr>

                                </thead>

                                <tbody>

                                    <?php $modulearr=[];?>

                                     @foreach($permission as $id => $value)

                                     

                                        @if(!in_array(explode('-',$value->name)[0],$modulearr))

                                       <tr>

                                        <td>{{$module = $modulearr[]= explode('-',$value->name)[0]}}</td>

                                        <td>

                                            <div class="checkbox"><input type="checkbox"

                                                id="users-checkbox1" class="checkbox-input" @if(in_array($module.'-list', $rolePermissions)) checked @endif disabled="disabled">

                                                <label for="users-checkbox1"></label>

                                            </div>

                                        </td>

                                        <td>

                                            <div class="checkbox"><input type="checkbox"

                                                id="users-checkbox2" class="checkbox-input" @if(in_array($module.'-edit', $rolePermissions)) checked @endif disabled="disabled"><label

                                                for="users-checkbox2"></label>

                                            </div>

                                        </td>

                                        <td>

                                            <div class="checkbox"><input type="checkbox"

                                                id="users-checkbox3" class="checkbox-input" @if(in_array($module.'-create', $rolePermissions)) checked @endif disabled="disabled"><label

                                                for="users-checkbox3"></label>

                                            </div>

                                        </td>

                                        <td>

                                            <div class="checkbox"><input type="checkbox"

                                                id="users-checkbox4" class="checkbox-input" @if(in_array($module.'-delete', $rolePermissions)) checked @endif disabled="disabled">

                                                <label for="users-checkbox4"></label>

                                            </div>

                                        </td>

                                    </tr>

                                    @endif

                                   

                      

                    @endforeach

                                  

                                </tbody>

                            </table>

                        </div>

                    </div>

                   

                </div>

            </form>

           

        </div>

    </div>

</div>

</div>

</div>

</section>

</div>



@endsection