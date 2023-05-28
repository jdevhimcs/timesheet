<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Skales Solutions</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico')}}" />

    <!--  # vendor min css,plugins min css,style min css -->

    <link rel="stylesheet" href="{{ asset('assets/css/vendor/vendor.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/plugins.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/custom1.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/sweetalert.css')}}" />

</head>

<body>
   @include('layouts.partials.front-header')
    <!-- page content -->

    @yield('content')

    <!-- page content end -->
@include('layouts.partials.front-footer')

     <!-- Login Popup Start-->
        <div class="modal fade sl-loginpopup" tabindex="-1" role="dialog" id="loginpopup" data-backdrop="static">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="sl-modalcontent modal-content">
                    <div class="sl-popuptitle">
                        <h4>Sign in to your account</h4>
                        <a href="javascript:void(0);" class="sl-closebtn close"><i class="flaticon-close" data-bs-dismiss="modal"></i></a>
                    </div>
                    <div class="modal-body">
                        <form class="sl-formtheme sl-formlogin" method="post" id="loginform">
                          
          <div class="alert alert-danger logindanger" style="display:none"></div>
          <div class="alert alert-success loginsuccess" style="display:none"></div>
                          @csrf
                            <fieldset>
                                <div class="form-group">
                                    <input type="text" name="login_email" class="form-control sl-form-control" placeholder="Your Email*" id="login_email" required="">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="login_password" id="login_password" class="form-control sl-form-control" placeholder="Password*">
                                </div>
                                <div class="form-group sl-btnarea">
                                    <div class="sl-checkbox">
                                        <input id="remember" type="checkbox">
                                        <label for="remember">Remember me here</label>
                                    </div>
                                    <button type="button" id="ajaxloginSubmit" class="btn sl-btn">login</button>
                                    
                                </div>
                            </fieldset>
                        </form>
                        <span class="sl-optionsbar"><em>or</em></span>
                        <div class="sl-loginicon">
                            <ul>
                                <li><a href="javascript:void(0);" class="sl-facebookbox"><i class="fa fa-facebook"></i>Facebook</a></li>
                                <li><a href="javascript:void(0);" class="sl-googlebox"><i class="fa fa-google"></i>Google</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="modal-footer">
                        
                        <div class="sl-loginfooterinfo">
                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#registerpopup" data-bs-dismiss="modal"><em>Don't have an account?</em> Signup Now</a>
                            <a href="javascript:;" class="sl-forgot-password">Forgot password?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Login Popup End-->

    <!-- Register Popup Start-->
        <div class="modal fade sl-registerpopup" tabindex="-1" role="dialog" id="registerpopup" data-backdrop="static">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="sl-modalcontent modal-content">
                    <div class="sl-popuptitle">
                        <h4>Create an Account</h4>
                        <a href="javascript:void(0);" class="sl-closebtn close"><i class="flaticon-close" data-bs-dismiss="modal"></i></a>
                    </div>
                    <div class="modal-body">
                        <form class="sl-formtheme sl-signupform"  method="post" id="form" >
                          <div class="alert alert-danger registerdanger" style="display:none"></div>
          <div class="alert alert-success registersuccess" style="display:none"></div>
                          @csrf
                            <fieldset>
                                <div class="sl-signupform-wrap">
                                    <div class="sl-radio">
                                        <input id="usertype-radio1" type="radio" name="usertype" value="client" checked="">
                                        <label for="usertype-radio1">
                                            Client
                                        </label>
                                    </div>
                                    <div class="sl-radio">
                                        <input id="usertype-radio2" type="radio" name="usertype" value="provider">
                                        <label for="usertype-radio2">
                                            Service Provider
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="name" value="" id="name" class="form-control sl-form-control" placeholder="Name*" required="">
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="text" name="email" id="email" value="" class="form-control sl-form-control" placeholder="Email*" required="">
                                    </div>
                                    
                                   
                                    <div class="form-group">
                                        <input type="text" name="mobile" id="mobile" value="" class="form-control sl-form-control" placeholder="Mobile Number*" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="zipcode" id="zipcode" value="" class="form-control sl-form-control" placeholder="Postal code*" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" id="password" value="" class="form-control sl-form-control" placeholder="Password*" required="">
                                    </div>
                                    <div class="form-group sl-btnarea">
                                        <div class="sl-checkbox">
                                            <input id="terms" type="checkbox" name="category">
                                            <label for="terms">
                                                <span>I agree to <a href="javascript:void(0);">Terms and Conditions</a></span>
                                            </label>
                                        </div>
                                        <button type="button" id="ajaxSubmit" class="btn sl-btn">Signup</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                        <span class="sl-optionsbar"><em>or</em></span>
                        <div class="sl-loginicon">
                            <ul>
                                <li><a href="javascript:void(0);" class="sl-facebookbox"><i class="fa fa-facebook"></i>Facebook Signup</a></li>
                                <li><a href="javascript:void(0);" class="sl-googlebox"><i class="fa fa-google"></i>Google Signup</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="sl-registerarea__terms">
                            <p>By signing up you agree to these <a href="javascript:void(0);">Terms &amp; Conditions</a> &amp; consent to <a href="javascript:void(0);"> Cookie Policy &amp; Privacy Policy.</a></p>
                        </div>
                        <div class="sl-registerarea__footer">
                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#loginpopup" data-bs-dismiss="modal"><em>Do u have an account? </em> Signin Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Login Popup End-->

    <!-- Scripts -->
    <!-- Global Vendor, plugins JS -->

    <script src="{{ asset('assets/js/vendor/vendor.min.js')}}"></script>

    <script src="{{ asset('assets/js/waypoints.min.js')}}"></script>
    <script src="{{ asset('assets/js/appear.js')}}"></script>
    <script src="{{ asset('assets/js/wow.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/parallax.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/plugins.min.js')}}"></script>
    <script src="{{ asset('assets/js/ajax-contact.js')}}"></script>
    <script src="{{ asset('assets/js/main.min.js')}}"></script>
    @yield('footer')

  <script type="text/javascript">
                  $('#ajaxSubmit').click(function(e){
               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('input[name="_token"]').val()
                  }
              });
               
               $.ajax({
                  url: "{{ route('userregister') }}",
                  method: 'post',
                  data: {
                     name: $('#name').val(),
                     email: $('#email').val(),
                     mobile: $('#mobile').val(),
                     password: $('#password').val(),
                     usertype:  $("input[name='usertype']:checked").val(),

                  },
                  success: function(result){
                    if(result.errors)
                    {
                        $('.alert-danger').html('');
                        $.each(result.errors, function(key, value){
                            $('.registerdanger').show();
                            $('.registerdanger').append('<li>'+value+'</li>');
                        });
                    }
                    else if(result.error)
                    {
                      $('.alert-danger').html(result.error);
                    }else
                    {
                        //alert(result.success);
                        $('.registerdanger').hide();
                        $('.registersuccess').html(result.success);
                         $('.registersuccess').show();
                         
                        //$('#myModal').modal('hide');
                    }
                  }});
               });



               $('#ajaxloginSubmit').click(function(e){
               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('input[name="_token"]').val()
                  }
              });
               
               $.ajax({
                  url: "{{ route('userlogin') }}",
                  method: 'post',
                  data: {
                     email: $('#login_email').val(),
                     password: $('#login_password').val(),
                     

                  },
                  success: function(result){
                    if(result.errors)
                    {
                        $('.logindanger').html('');
                       
                        
                        $.each(result.errors, function(key, value){
                            $('.logindanger').show();
                            $('.logindanger').append('<li>'+value+'</li>');
                        });
                        $('#login_password').val('');
                    }
                    else if(result.error)
                    {
                       swal('Error', result.error, 'error')
                    }else
                    {
                      if(result.type=='1')
                      {
                       window.location.href = "{{route('dashboard')}}";
                      }

                      else 
                      {
                         window.location.href = "{{route('userdashboard')}}";
                      }
                       
                        //alert(result.success);
                        $('.logindanger').hide();
                        $('.loginsucces').html(result.success);
                         $('.loginsucces').show();
                        //$('#myModal').modal('hide');
                    }
                  }});
               });

  </script>
    <script type="text/javascript">
        (function($) {
            if($('.wow').length){
            var wow = new WOW(
              {
                boxClass:     'wow',      // animated element css class (default is wow)
                animateClass: 'animated', // animation css class (default is animated)
                offset:       0,          // distance to the element when triggering the animation (default is 0)
                mobile:       true,       // trigger animations on mobile devices (default is true)
                live:         true       // act on asynchronously loaded content (default is true)
              }
            );
            wow.init();
            }

        })(jQuery);


    </script>
    <script src="{{ asset('js/sweetalert.min.js')}}"></script>

</body>

</html>

  

  