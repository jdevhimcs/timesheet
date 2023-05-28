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
                        <h5 class="card-title">{{ __('general.my_project') }}</h5>
                      </div>

                        <div class="card-body">
                           <table class="table table-bordered table-striped">

                               <thead>

                                   <tr>

                                       <th>{{ __('general.id') }}</th>

                                       <th>{{ __('general.name') }}</th>
                                       <th>{{ __('general.payout') }}</th>

                                       <th>{{ __('general.budget') }}</th>

                                       <th>{{ __('general.date') }}</th>

                                       <th>Action</th>

                                   </tr>

                               </thead>

                               <tbody>

                               	@if(count($result)>0)

                                @foreach($result  as $key=>$value) 

                                   <tr>

                                       <td>{{$key+1}}</td>

                                       <td>{{$value->project->name}}</td>

                                       <td>{{$value->project->payout_option}}</td>

                                       <td>{{$value->project->budget}}</td>

                                       <td>{{date('M d,Y h:i a',strtotime($value->project->created_at))}}</td>

                                        <td><a href="{{route('project.user.details',['id'=>$value->project->id])}}" class="btn btn-dark btn-sm text-white ">View Details</a></td>

                                   </tr>

                                   @endforeach

                                    {!! $result->render() !!}

                                   @else

                                   <tr>

                                      <td colspan="6"> {{ __('general.no_data_found') }}</td>

                                   </tr>

                                   @endif

                               </tbody>

                           </table>

                        </div>

                     </div>
	<!-- Row / End -->

               </div>

            </div>

         </div>

      </section>

      <!-- End User Profile -->

   

@endsection

