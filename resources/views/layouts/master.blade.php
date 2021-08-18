<!doctype html>
<html lang="en">

@include('layouts.head')


<body id="top-header" background="">

<!-- LOADER TEMPLATE -->
<div id="page-loader">
    <div class="loader-icon fa fa-spin colored-border"></div>
</div>
    <!-- /LOADER TEMPLATE -->

 @include('layouts.address')

 <div class="logo-bar d-none d-md-block d-lg-block bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="logo d-none d-lg-block">
                    <!-- Brand -->
                    <a class="navbar-brand js-scroll-trigger" href="index.html">
                        <h6><img src="{{url('image/smk.jpg')}}" alt=""></h6>
                    </a>
                </div>
            </div>
@include('layouts.info')
        </div>
    </div>
</div>
    <!-- NAVBAR
    ================================================= -->
    @include('layouts.navbar')



    <!-- HERO
    ================================================== -->
    <section class="banner-area py-7">
        <!-- Content -->
     @yield('content')
    </section>






    <!--
    Essential Scripts
    =====================================-->


    <!-- Main jQuery -->
    @include('layouts.js')
  </body>
  </html>
