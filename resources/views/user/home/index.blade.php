@extends('layouts.master')
@section('content')

<div class="main-banner" >

    <!-- Heading -->

    <div class="container">
        <div class="row  align-items-center">

            <div class=" col-lg-7 text-center text-lg-left">
            <img src="{{url('image/mbah.jpg')}}" alt="Testimonial author" class="img-fluid">
                       <h1 >
                        Eskul Nampon Kiwari
                    </h1>



                    <!-- Button -->
                    <p class="mb-0">
                        <a  class="btn btn-primary btn-circled">
                            SMKS Mahaputra Cerdas Utama
                        </a>
                    </p>

            </div>

            <div class="col-lg-5 d-none d-lg-block">
                <div class="banner-img-block">
                    <img src="image/nampon.jpg" alt="banner-img" class="img-fluid">
                </div>
            </div>
        </div> <!-- / .row -->
    </div>
    @include('user.page.welcome')
    @include('user.page.vm')
    <footer class="section " id="footer">
        <div class="overlay footer-overlay"></div>
        <!--Content -->
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-lg-4 col-sm-12">
                    <div class="footer-widget">
                        <!-- Brand -->
                        <a href="#" class="footer-brand text-white">
                            Rapoo
                        </a>
                        <p>Each theme featured at the Bootstrap marketplace has been reviewed by Bootstrap's creators.Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>

                <div class="col-lg-3 ml-lg-auto col-sm-12">

                </div>
            </div> <!-- / .row -->


            <div class="row text-right pt-5">
                <div class="col-lg-12">
                    <!-- Copyright -->
                    <p class="footer-copy ">
                        &copy; Copyright <span class="current-year">Themefisher</span> All rights reserved.
                    </p>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </footer>


    <!--  Page Scroll to Top  -->

    <a class="scroll-to-top js-scroll-trigger" href="#top-header">
        <i class="fa fa-angle-up"></i>
    </a><!-- / .container -->


@endsection
