@extends ('admin.layouts.master')

@section ('content')
      <!-- tah ieu copas baris row nepi ka end row -->


          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> Data Table </div>

            <div class="card-body">
              <div class="table-responsive">
              <table id="default-datatable" class="table table-bordered table-hover">
              <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Tambah Jadwal

</button>
                <thead>
                  <!-- Judul field table luhur -->
                  <tr>
                  <th>Tanggal</th>
             <th>Hari</th>
            <th>Pelatih</th>
            <th>Info</th>
            <th>Aksi</th>
          </tr>

                    </tr>
                </thead>
                <tbody>
                  <!-- ISI BODY TABLE -->

                   @foreach ($jadwal_nampon as $jadwal)
                        <tr>
                        {{-- <td>{{$i++}}</td> --}}
                            <td>{{$jadwal->tanggal}}</td>
                            <td>{{$jadwal->hari}}</td>
                            <td>{{$jadwal->pelatih}}</td>
                            <td>{{$jadwal->info}}</td>
                            <td>
                            <a href="{{url('admin',$jadwal->id)}}/edit" class="btn btn-primary btn-sm waves-effect m-1"><i class="fa fa-edit"></i></a>
                            <a href="{{url('admin',$jadwal->id)}}/delete" class="btn btn-danger btn-sm waves-effect m-1"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                </tbody>


            </table>
            </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Row-->


    </div>
    <!-- End container-fluid-->
    </div><!--End content-wrapper-->



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Jadwal Nampon</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

      </div>
      <div class="modal-body">


      <form action="{{url('jadwal')}}/create" method="POST">
      {{csrf_field()}}

    <div class="form-group">
    <label for="tanggal">Tanggal</label>
    <input name="tanggal" type="date" class="form-control" id="tanggal" aria-describedby="tanggal">
  </div>



  <div class="form-group">
    <label for="hari">Hari</label>
    <input name="hari" type="text" class="form-control" id="hari" aria-describedby="hari">
  </div>

    <div class="form-group">
    <label for="pelatih">Pelatih</label>
    <input name="pelatih" type="text" class="form-control" id="pelatih" aria-describedby="pelatih">
  </div>


  <div class="form-floating">
  <label>Info</label>
  <textarea name="info" class="form-control" id="floatingTextarea2" style="height: 100px"></textarea>
</div>

  <div class="modal-footer">

        <button type="submit" class="btn btn-primary">Tambah</button>
      </div>
</form>

      </div>
    </div>
  </div>
</div>
  @endsection



