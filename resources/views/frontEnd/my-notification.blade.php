@extends('layouts.home')

@section('head')



@endsection

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
                            <h5 class="card-title">{{ __('general.my_notification_list') }}</h5>
                        </div>
                        <div class="card-body">

                         

                           @if ($message = Session::get('success'))

                            <div class="custom-alerts alert alert-success">

                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>

                                {!! $message !!}

                            </div>

                            <?php Session::forget('success');?>

                            @endif

                            @if ($message = Session::get('error'))

                            <div class="custom-alerts alert alert-danger">

                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>

                                {!! $message !!}

                            </div>

                            <?php Session::forget('error');?>

                            @endif

                           

                           <table class="table table-bordered table-striped">

                               <thead>

                                   <tr>

                                       <th colspan="2">{{ __('general.project_details') }}</th>

                                       <th>Action</th>

                                   </tr>

                               </thead>

                               <tbody>

                               	@if(count($notifications)>0)

                                @foreach($notifications  as $key=>$notification) 

                                   <tr>

                                       <td>

                                         <strong>

                                         Project Name 

                                       </strong>: {{$notification->project->name}}

                                       <br>

                                         <strong>

                                         Payout 

                                       </strong>: {{$notification->project->payout_option}}

                                    

                                       <br>

                                       <strong>

                                         Date

                                       </strong>:  {{date('M d,Y h:i a',strtotime($notification->project->created_at))}}

                                       <br>

                                       <strong>

                                         Desription

                                       </strong>:  {{$notification->project->description}}

                                     </td>

                                     <td>

                                      <strong>

                                         Time Duration 

                                       </strong>: {{$notification->project->time_duration}}

                                       <br>

                                         <strong>

                                         Budget

                                       </strong>: {{$notification->project->budget}}



                                     </td>

                                       

                                        <td>

                                      <a href="" onclick="accept_project_popup({{$notification->id}})" data-bs-toggle="modal" data-bs-target="#modal-credit" class="btn btn-dark text-white btn-sm">Accept</a>

                                                                     

                                     {!! Form::open( ['method' => 'delete', 'url' => route('project.assignment.destroy', ['id' => $notification->id]), 'onSubmit' => 'return confirm("Are yous sure wanted to reject it?")']) !!}

                                      <button type="submit" class="btn btn-danger text-white btn-sm">
                                         <i class="flaticon-close"></i>
                                      </button>

                                  {!! Form::close() !!}</td>

                                       

                                   </tr>

                                   @endforeach

                                    
                                   @else

                                   <tr>

                                      <td colspan="3"> {{ __('general.no_record_found') }}</td>

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



 <div id="modal-credit" class="modal" role="dialog">

    <div class="modal-dialog">

      <div class="modal-content">

        <div class="modal-header">

          <h5>Aaccount Credit: <span id="credit_info">{{Auth::user()->account_credits}}</span></h5>

          @if(Auth::user()->account_credits <1)

          <span>You do not have enought credit, Please add credit first!</span>

          @endif
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
      

          <div class="modal-body">
            <form method="post" id="creditform" action="{{route('paypal')}}">

          <div class="alert alert-danger logindanger" id="failed" style="display:none"></div>

          <div class="alert alert-success loginsuccess" id="success" style="display:none"></div>

          @csrf

          <input type="hidden" name="project_accept_id" id="project_accept_id" value="">

            <div class="form-group">

              <label>Add Credit</label>

              <select name="amount" class="form-control">

                <option value="">Select</option>

                <option value="10">10</option>

                 <option value="20">20</option>

              </select>

              <span class="mdi mdi-at"></span>

            </div>


            <div class="form-group clearfix">

             

              <button type="submit" id="ajaxAddCreditSubmit" class="btn btn-warning btn-md float-right">Add Credit</button> 

              &nbsp;

              @if(Auth::user()->account_credits > 0)

              <button type="button" id="ajaxAcceptAssignmentSubmit" class="btn btn-dark btn-md float-right">Accept</button>    

              @endif     

            </div>

        </form>

      </div>

    </div>

    </div>

    </div>

      <!-- End User Profile -->

   

@endsection



@section('footer')

<script>

  function accept_project_popup(id){

    $("#project_accept_id").val(id);



    }



  $(document).ready(function(){

    

    $("#ajaxAcceptAssignmentSubmit").on('click',function(){



      var project_id = $('#project_accept_id').val();



      if(project_id > 0){



        $.ajax({

                    headers: {

                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                    },

                    type:'POST',

                    url:'{{ route("project.assignment.accept") }}',

                    dataType: "JSON",

                    async: false,

                    data: {'project_id': project_id},

                    success:function(data){

                      if(data.status =='success'){

                        window.location.replace(data.redirect_url);



                      }

                       

                    },

                    error: function(jqXHR, textStatus, errorThrown) {

                    

                    },

                    completed: function(){

    

                    }

                });



      }



    });



  });

  

</script>

@endsection

