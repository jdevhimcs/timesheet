@extends('layouts.home')

@section('content')
<section class="banner-section position-relative">
        <img class="banner-shape" src="{{ asset('assets/images/banner/shape1.png')}}" alt="shape">
    </section>
    
      <!-- User Profile -->
      <section class="user-section section-py">
         <div class="container">
            <div class="row">
             @include('layouts.sidebarfront')
               <div class="col-lg-9 col-md-9">
                      @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    @if(session()->has('error'))
                        <div class="alert alert-danger">
                            {{ session()->get('error') }}
                        </div>
                    @endif
                  <form method="post" action="{{route('postpassword')}}">
                    @csrf
                     <div class="card">
                        <div class="card-header">
                          <h5 class="card-title">Change Password</h5>
                        </div>
                        <div class="card-body">
                           
                           <div class="form-group">
                              <label>Password <span class="text-danger">*</span></label>
                              <input type="password" name="password" class="form-control" required="required" placeholder="">@if ($errors->has('password'))
                              <div class="text-danger">{{ $errors->first('password') }}</div>
                              @endif
                               </div>
                               <div class="form-group">
                                  <label>Confirm Password <span class="text-danger">*</span></label>
                                  <input type="password" name="password_confirmation" class="form-control" required="required" placeholder="">
                                  @if ($errors->has('password_confirmation'))
                              <div class="text-danger">{{ $errors->first('password_confirmation') }}</div>
                              @endif
                           </div>
                           <div class="form-group mt-4">
                             <button type="submit" class="btn btn-dark btn-smd">Save Details</button>
                           </div>
                        </div>
                     </div>
                     
                  </form>
               </div>
            </div>
         </div>
      </section>
      <!-- End User Profile -->
   
@endsection
