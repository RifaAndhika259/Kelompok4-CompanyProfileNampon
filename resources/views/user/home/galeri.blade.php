@extends('layouts.master')

@section('content')
<section id="projects" class="section-bottom">
    <div class="container">
        <div class="row justify-content-center">

            @foreach($gambar as $g)
            <div class="col-lg-4 col-md-6">
                <div class="blog-box">
                    <div class="blog-img-box">
                        <a href="{{ url('/data_file/'.$g->file)  }}" data-fancybox="images">
                            <img src="{{ url('/data_file/'.$g->file) }}" alt="" class="img-fluid blog-img">
                        </a>

                    </div>
                    <div class="single-blog">
                        <div class="blog-content">
                            <h6>{{$g->tbt}}</h6>

                                <h3 class="card-title">{{$g->keterangan}}</h3>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
