@extends('layouts.master')
@section('content')


<div class="main-banner" >

    <!-- Heading -->

    <div class="container">
        <div class="row  align-items-center">

            <div class=" col-lg-7 text-center text-lg-left">
            <img src="{{url('image/mbah.jpg')}}" alt="Testimonial author" class="img-fluid">
           <h4>      Uwa Nampon adalah pendiri dan guru besar perguruan pencak silat Nampon.
        </h4>

                       <h1 >
                        Eskul Nampon Kiwari
                    </h1>



                    <!-- Button -->
                    <p class="mb-0">
                        <h2>
                        <a  class="btn btn-circled">
                            SMKS Mahaputra Cerdas Utama
                        </a>
                    </h2>
            </div>

            <div class="col-lg-5 d-none d-lg-block">
                <div data-aos="fade-up"
     data-aos-duration="3000">

                <div class="banner-img-block">
                    <img src="image/nampon.jpg" alt="banner-img" class="img-fluid">
                </div>
            </div>
            </div>
        </div> <!-- / .row -->
    </div>



    @include('user.page.welcome')
    @include('user.page.vm')
<br><br><br>
<center>
<center><h1>Jadwal Eskul Nampon</h1></center>
<div data-aos="fade-up"
data-aos-duration="3000">
    <table class="table table-hover col-md-6" >

        <thead class="thead-light">

          <tr>
            <th>Tanggal</th>
            <th>Hari</th>
           <th>Pelatih</th>
           <th>Info</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($jadwal_nampon as $nampon)
            <tr>
            {{-- <td>{{$i++}}</td> --}}
                <td>{{$nampon->tanggal}}</td>
                <td>{{$nampon->hari}}</td>
                <td>{{$nampon->pelatih}}</td>
                <td>{{$nampon->info}}</td>

            </tr>
            @endforeach
        </tbody>

      </table>
    </div>
    </center>
<br><br><br>
    {{-- <section class="section" id="blog">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 text-center">
                    <div class="section-heading">
                        <!-- Heading -->
                        <h2 class="section-title">
                            Read our latest news
                        </h2>

                        <!-- Subheading -->
                        <p>
                            Our duty towards you is to share our experience we're reaching in our work path with you.
                        </p>
                    </div>
                </div>
            </div> <!-- / .row -->

            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-box">
                        <div class="blog-img-box">
                            <img src="images/blog/blog-1.jpg" alt="" class="img-fluid blog-img">
                        </div>
                        <div class="single-blog">
                            <div class="blog-content">
                                <h6> 17 October 2018</h6>
                                <a href="#">
                                    <h3 class="card-title">Top tips to speed up your site in a speedy time</h3>
                                </a>
                                <p>There are many variations of passages Lorem Ipsum available, but majority have ama suffered altratio. the lorem.</p>
                                <a href="#" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="blog-box">
                        <div class="blog-img-box">
                            <img src="images/blog/blog-2.jpg" alt="" class="img-fluid blog-img">
                        </div>
                        <div class="single-blog">
                            <div class="blog-content">
                                <h6> 17 October 2018</h6>
                                <a href="#">
                                    <h3 class="card-title">Brand your site value with marketing strategies</h3>
                                </a>

                                <p>There are many variations of passages Lorem Ipsum available, but majority have ama suffered altratio. the lorem.</p>
                                 <a href="#" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-8">
                    <div class="blog-box">
                        <div class="blog-img-box">
                            <img src="images/blog/blog-3.jpg" alt="" class="img-fluid blog-img">
                        </div>
                        <div class="single-blog">
                            <div class="blog-content">
                                <h6> 17 October 2018</h6>
                                <a href="#">
                                    <h3 class="card-title">Website Optimization is very essential for site speed</h3>
                                </a>
                                <p>There are many variations of passages Lorem Ipsum available, but majority have ama suffered altratio. the lorem.</p>
                                 <a href="#" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}


    <footer class="section " id="footer">
        <div class="overlay footer-overlay"></div>
        <!--Content -->

        <div class="container">
            <div class="row justify-content-start">
                <div class="col-lg-4 col-sm-12">
                    <div class="footer-widget">
                        <!-- Brand -->
                        <a href="#" class="footer-brand text-white">
                            Tentang Kami
                        </a>
                        <p>Alm Nampon sebagai Guru senantiasa menekankan bahwa Ilmu Nampon perlu dilestarikan, diajarkan kepada mereka yang membutuhkannya secara selektif. Beliau mengutamakan kualitas daripada kuantitas. "Sebarkanlah Ilmu ini keseluruh Indonesia kepada mereka yang membutuhkan" demikian amanat Alm Nampon kepada Alm KM Tamim, yang dipercayakan membina dan membangun padepokan Nampon Trirasa di Jalan Kopo (dahulu Situsauer).</p>
                    </div>
                </div>
<br>
                <div class="col-lg-3 ml-lg-auto col-sm-12">
                    <div class="footer-widget">
                        <h3>Socials</h3>
                        <!-- Links -->
                        <ul class="list-unstyled footer-links">
                            <li><a href="#"><i class="fab fa-facebook-f"></i>smkmahaputra</a>s</li>

                            <li><a href="#"><i class="fab fa-instagram"></i>smkmahaputracerdasutama
                            </a></li>

                            <li><a href="#"><i class="fab fa-youtube"></i>smkmahaputracerdasutama
                            </a></li>
                        </ul>
                    </div>
                </div>




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
</div>
</div>
