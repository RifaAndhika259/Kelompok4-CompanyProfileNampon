<header class="topbar-nav">
    <nav class="navbar navbar-expand fixed-top gradient-scooter">
     <ul class="navbar-nav mr-auto align-items-center">
       <li class="nav-item">
         <a class="nav-link toggle-menu" href="javascript:void();">
          <i class="icon-menu menu-icon"></i>
        </a>
       </li>

     </ul>

     <ul class="navbar-nav align-items-center right-nav-link">

       <li class="nav-item">
         <ul class="navbar-nav ml-auto">
                           <!-- Authentication Links -->
                           @guest
                               <li class="nav-item">
                                   <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                               </li>
                               @if (Route::has('register'))
                                   <li class="nav-item">
                                       <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                   </li>
                               @endif
                           @else

                               <li class="nav-item dropdown">

                                    <li class="nav-item">
         <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
           <span class="user-profile"><img src="{{URL::to('image/smk.jpg')}}" class="img-circle" alt="user avatar"></span>
         </a>
         <ul class="dropdown-menu dropdown-menu-right">
          <li class="dropdown-item user-details">
           <a href="javaScript:void();">
              <div class="media">
                <div class="avatar"><img class="align-self-start mr-3" src="{{URL::to('image/smk.jpg')}}" alt="user avatar"></div>
               <div class="media-body">
               <h6 class="mt-2 user-title"> {{ Auth::user()->name }}</h6>

               </div>
              </div>
             </a>
           </li>

           <li class="dropdown-item"><i class="icon-power mr-2"></i><a href="{{ route('logout') }}"
                                          onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                           {{ __('Logout') }}
                                       </a></li>
         </ul>
       </li>




                                       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                           @csrf
                                       </form>
                                   </div>
                               </li>
                           @endguest
                       </ul>
       </li>
     </ul>
   </nav>
   </header>
