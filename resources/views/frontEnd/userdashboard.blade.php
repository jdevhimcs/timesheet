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
                <div class="card">
                   <div class="card-header">
                       <h5 class="card-title">{{ __('general.Dashboard') }}</h5>
                   </div>
                   <div class="card-body">
                       <div class="row">
                    <div class="col-12">
                        @if ($message = Session::get('success'))
                            <div class="custom-alerts alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                                {!! $message !!}
                            </div>
                            <?php Session::forget('success');?>
                            @endif

                            @if ($message = Session::get('error'))
                            <div class="custom-alerts alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                                {!! $message !!}
                            </div>
                            <?php Session::forget('error');?>
                            @endif
                        </div>
                   </div>
                   <div class="row">

                        <div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
                            <div class="card-box">
                                <div class="card-box-body">
                                    <span class="count">0</span>
                                    <h4 class="title">
                                        My Response
                                    </h4>
                                    <p>All Status</p>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
                            <div class="card-box">
                                <div class="card-box-body">
                                    <span class="count">{{$myprojects ?? 0}}</span>
                                    <h4 class="title">
                                         My Project
                                    </h4>
                                    <p>All Status</p>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
                            <div class="card-box">
                                <div class="card-box-body">
                                    <span class="count">0</span>
                                    <h4 class="title">
                                         My Requirement
                                    </h4>
                                    <p>All Status</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
                            <div class="card-box">
                                <div class="card-box-body">
                                    <span class="count">0</span>
                                    <h4 class="title">
                                        My Orders
                                    </h4>
                                    <p>All my transations</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                   </div>
     
                   </div> 
               </div>
            </div>
         </div>
      </section>
      <!-- End User Profile -->
   
@endsection
