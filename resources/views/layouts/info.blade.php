
            <div class="col-lg-8 justify-content-end ml-lg-auto d-flex col-12 col-md-12 justify-content-md-center">
                <div class="top-info-block d-inline-flex">
                    <div class="icon-block">
                        <br>
                        <i class="ti-mobile"></i>
                    </div>
                    <div class="info-block">
                        <br>
                        <h6>+62895630468373</h6>
                        <p>No.Tel</p>
                    </div>
                </div>

                <div class="top-info-block d-inline-flex">
                    <div class="icon-block">
                        <br>
                        <i class="ti-email"></i>
                    </div>
                    <div class="info-block">
                        <br>
                        <h6>Smkmahaputracerdasutama@Gmail.Com</h6>
                        <p>Email</p>
                    </div>
                </div>

                <div class="top-info-block d-inline-flex">
                    <div class="icon-block">
                        <br>
                        <i class="login"></i>
                    </div>
                    <div class="info-block">
                        <br>
                        <body>
                            <div class="flex-center position-ref full-height">
                                @if (Route::has('login'))
                                    <div class="top-right links">
                                        @auth
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
                                        @else
                                            <a href="{{ route('login') }}"><button type="button" class="btn btn-outline-info">Login</button></a>

                                        @endauth
                                    </div>
                                @endif
                            </div>
                        </body>
                    </div>
                </div>
            </div>

