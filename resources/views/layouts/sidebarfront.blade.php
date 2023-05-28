  <div class="col-lg-3 col-md-3">
    <div class="sidbar-widget">
        <div class="sidbar-menu">
            <ul>
                <li>
                    <a class="nav-link @if(end(Request::segments())=='userdashboard') active text-success @endif" href="{{ url('/userdashboard') }}"><img src="{{ asset('assets/images/icon/1.png')}}" alt="logo" /> Dashboard</a>
                 </li>
                 @if(\Auth::user()->roles[0]->id == 3)
                 <li>
                     <a class="nav-link @if(end(Request::segments())=='user-projects') active text-success @endif" href="{{ route('user.projects') }}"><img src="{{ asset('assets/images/icon/3.png')}}" alt="logo" /> {{ __('general.my_project') }}</a>
                 </li>
                 @endif
                 <li>
                    <a class="nav-link @if(end(Request::segments())=='my-profile') active text-success @endif" href="{{ url('/my-profile') }}"><img src="{{ asset('assets/images/icon/2.png')}}" alt="logo" /> {{ __('general.my_profile') }}</a>
                 </li>
                 @if(\Auth::user()->roles[0]->id=='2')
                 <li>
                    <a class="nav-link @if(end(Request::segments())=='post-project') active text-success @endif" href="{{ route('post-project') }}"><img src="{{ asset('assets/images/icon/6.png')}}" alt="logo" /> {{ __('general.post_project') }}</a>
                </li>
                <li>
                    <a class="nav-link @if(end(Request::segments())=='my-project') active text-success @endif" href="{{ route('my-project') }}"><img src="{{ asset('assets/images/icon/3.png')}}" alt="logo" /> {{ __('general.my_project') }}</a>
                    </li>
                <li>
                    <a class="nav-link @if(end(Request::segments())=='ongoing-project') active text-success @endif" href="{{ route('ongoing-project') }}"><img src="{{ asset('assets/images/icon/7.png')}}" alt="logo" /> {{ __('general.ongoing_project') }}</a>
                    </li>
                <li>
                    <a class="nav-link @if(end(Request::segments())=='past-project') active text-success @endif" href="{{ route('past-project') }}"><img src="{{ asset('assets/images/icon/8.png')}}" alt="logo" /> {{ __('general.past_project') }}</a>
                 </li>
                 @endif
                 <li>
                    <a class="nav-link @if(end(Request::segments())=='change-password') active text-success @endif" href="{{url('/change-password')}}"><img src="{{ asset('assets/images/icon/4.png')}}" alt="logo" /> {{ __('general.change_password') }}</a>
                 </li>
                 <li>
                    <a class="nav-link @if(end(Request::segments())=='my-notification') active text-success @endif" href="{{url('/my-notification')}}"><img src="{{ asset('assets/images/icon/5.png')}}" alt="logo" /> {{ __('general.notification') }}  

                        @if(get_project_notification_count() > 0)
                        <span class="ms-2 badge rounded-pill bg-danger">{{get_project_notification_count()}}</span>
                        @endif
                    </a>
                 </li>
               
               
            </ul>
        </div>
    </div>

</div>