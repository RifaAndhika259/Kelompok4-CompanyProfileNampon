@extends('layouts.master')

@section('content')
<section id="projects" class="section-bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-6 mb-5">
                <div class="single-project">
                    <img src="{{url('image/gambar 1.jpg')}}" alt="" class="img-fluid">
                    <div class="project-content">
                        <h4>Project: onepage</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate eligendi consequuntur veniam quod</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mb-5">
                <div class="single-project">
                    <img src="{{url('image/gambar4.jpg')}}" alt="" class="img-fluid">
                    <div class="project-content">
                        <h4>Project: business</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate eligendi consequuntur veniam quod</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8 ">
                <div class="single-project">
                    <img src="{{url('image/gambar3.jpg')}}" alt="" class="img-fluid">
                    <div class="project-content">
                        <h4>Project : Marketing</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate eligendi consequuntur veniam quod</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
