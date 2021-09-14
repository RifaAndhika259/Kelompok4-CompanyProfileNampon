@extends ('admin.layouts.master')

@section ('content')
      <!-- tah ieu copas baris row nepi ka end row -->



<!-- Modal -->
<h3>Edit Jadwal Nampon</h3>
<br>
      <form action="{{ URL::to('admin',$jadwal->id)}}/update" method="POST">
      {{csrf_field()}}

    <div class="form-group">
    <label for="tanggal">Tanggal</label>
    <input name="tanggal" type="text" class="form-control" id="tanggal" aria-describedby="tanggal" value="{{$jadwal->tanggal}}">
  </div>



  <div class="form-group">
    <label for="hari">Hari</label>
    <input name="hari" type="text" class="form-control" id="hari" aria-describedby="hari" value="{{$jadwal->hari}}">
  </div>

    <div class="form-group">
    <label for="pelatih">Pelatih</label>
    <input name="pelatih" type="text" class="form-control" id="pelatih" aria-describedby="pelatih" value="{{$jadwal->pelatih}}">
  </div>


  <div class="form-floating">
  <label>Info</label>
  <textarea name="info" class="form-control" id="floatingTextarea2" style="height: 100px" value="{{$jadwal->tanggal}}"></textarea>
</div>

  <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Update</button>
       <button type="submit" class="btn btn-danger"> <a href="{{url('/admin')}}">Batal</a></button>
      </div>
</form>

      </div>
    </div>
  </div>
</div>
  @endsection



