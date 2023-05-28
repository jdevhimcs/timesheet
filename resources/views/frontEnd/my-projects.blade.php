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
                                       <th>{{ __('general.professional_needed') }}</th>
                                       <th>{{ __('general.industry') }}</th>
                                       <th>{{ __('general.budget') }}</th>
                                       <th>{{ __('general.date') }}</th>
                                       <th>{{ __('general.status') }}</th>
                                       <th style="width: 190px">Action</th>
                                      
                                      
                                   </tr>
                               </thead>
                               <tbody>
                               	@if(count($result)>0)
                                @foreach($result  as $key=>$value) 
                                   <tr>
                                       <td>{{$key+1}}</td>
                                       <td>{{$value->name}}</td>
                                       <td>{{$value->professionalType->type}}</td>
                                       <td>{{$value->IndustryType->industry}}</td>
                                       <td>{{$value->budget}}</td>
                                       <td>{{date('M d,Y h:i a',strtotime($value->created_at))}}</td>
                                       <td>{{$value->status}}</td>
                                        <td>
                                          <a href="{{url('edit-project')}}/{{$value->id}}" class="btn btn-dark btn-sm text-white">Modify</a>

                                          <a href="{{url('project/details')}}/{{$value->id}}" class="btn btn-info btn-sm text-white">View</a>
                                       
                                        {!! Form::open( ['method' => 'delete', "class" => 'd-inline-block', 'url' => route('project.destroy', ['id' => $value->id]), 'onSubmit' => 'return confirm("Are yous sure wanted to delete it?")']) !!}
                                          <button type="submit" class="btn btn-danger btn-sm text-white">
                                              <i class="flaticon-close"></i>
                                          </button>
                                  {!! Form::close() !!}</td>
                                       
                                   </tr>
                                   @endforeach
                                   
                                   {!! $result->render() !!}
                                   @else
                                   <tr>
                                      <td colspan="8"> {{ __('general.no_data_found') }}</td>
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
