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
                       <h5 class="card-title">{{__('general.project_details')}}</h5>
                    </div>
                    <div class="card-body">
                <table class="table table-striped mb-0">
                    <tbody>
                        <tr>
                            <td>
                                <strong>Client Name:</strong>
                            </td>
                            <td>
                               {{$projectUserDetail->name}}
                            </td>
                            <td>
                                <strong>Client Email:</strong>
                            </td>
                            <td>
                                {{$projectUserDetail->email}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Client Phone:</strong>
                            </td>
                            <td>
                               {{$projectUserDetail->phone}}
                            </td>
                            <td>
                                
                            </td>
                            <td>
                                
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <strong>Project Name:</strong>
                            </td>
                            <td>
                               {{$project->name}}
                            </td>
                            <td>
                                <strong>Address:</strong>
                            </td>
                            <td>
                                {{$project->address}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Professional Type:</strong>
                            </td>
                            <td>
                               {{$project->professionalType->type}} 
                            </td>
                            <td>
                                <strong>Professional industry:</strong>
                            </td>
                            <td>
                               {{$project->IndustryType->industry}} 
                            </td>
                        </tr>
                       <tr>
                            <td>
                                <strong>Client Type:</strong>
                            </td>
                            <td>
                               {{$project->clients_type}} 
                            </td>
                            <td>
                                <strong>Budget:</strong>
                            </td>
                            <td>
                               {{$project->budget}} 
                            </td>
                        </tr> <tr>
                            <td>
                                <strong>Payout Option:</strong>
                            </td>
                            <td>
                               {{$project->payout_option}} 
                            </td>
                            <td>
                                <strong>Time Duration:</strong>
                            </td>
                            <td>
                               {{$project->time_duration}} 
                            </td>
                        </tr>
                        <tr>
                          <td>
                            <strong>{{__('general.date')}}</strong>
                          </td>
                          <td>
                            {{date('M d,Y h:i a',strtotime($project->created_at))}}
                          </td>
                        </tr>
                        <tr>
                            <td >
                                <strong>Desription:</strong>
                            </td>
                            <td colspan="3">
                               {{$project->description}} 
                            </td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
            @if(\Auth::user()->roles[0]->id=='2')
          <div class="card">
               <div class="card-header">
                 <h5 class="card-title">Already Assigned Providers</h5>
               </div>
                <div class="card-body">
                <table class="table table-striped mb-0">
                  <thead>
                   <th>Name</th>
                   <th>Mobile Number</th>
                   <th>Email</th>
                  </thead>
                    <tbody>
                    @if(count($assined_users_detail) > 0)
                    @foreach($assined_users_detail as $k=>$user)
                    <tr>
                      <td>{{$user->name}}</td>
                      <td>{{$user->phone}}</td>
                      <td>{{$user->email}}</td>
                    </tr>
                    @endforeach
                    @endif
                    </tbody>
                </table>
        </div>
    </div>
    @endif
        </div>
    </div>
</div>
</section>
@endsection