@extends ('admin.layouts.master')

@section ('content')
      <!-- tah ieu copas baris row nepi ka end row -->



<!-- Modal -->

<br>
<html>
    <head>
        <title>Form Galeri Nampon</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>
    <body>
        <div class="row">
            <div class="container">
                <h2 class="text-center my-5">Form Galeri Nampon</h2>

                <div class="col-lg-8 mx-auto my-5">

                    @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        {{ $error }} <br/>
                        @endforeach
                    </div>
                    @endif

                    <form action="{{url('/upload/proses')}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <b>File Gambar</b><br/>
                            <input type="file" name="file">
                        </div>

                        <div class="form-group">
                            <b>Keterangan</b>
                            <textarea class="form-control" name="keterangan"></textarea>
                        </div>
                        <div class="form-group">
                            <label >Awal Periode</label>
                            <input type="date" name="tbt" max="3000-12-31"
                                   min="1000-01-01" class="form-control">
                           </div>
                           <div class="form-group">
                            <label >Akhir Periode</label>
                            <input type="date" name="tbt" min="1000-01-01"
                                   max="3000-12-31" class="form-control">
                           </div>

                        <input type="submit" value="Upload" class="btn btn-primary">
                    </form>



                    <h4 class="my-5">Data</h4>

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="1%">File</th>
                                <th>Keterangan</th>
                                <th>TBT</th>
                                <th width="1%">OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                             @foreach($gambar as $g)
                            <tr>
                                <td><img width="150px" src="{{ url('/data_file/'. $g->file)}}"></td>
                                <td>{{$g->keterangan}}</td>
                                <td>{{$g->tbt}}</td>
                                <td><a class="btn btn-danger" href="{{url('upload',$g->id)}}/delete">HAPUS</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
    </html>

  @endsection





