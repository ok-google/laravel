@extends('layouts.app')

@section('content')
  <div class='container'>
      <form class="" action="{{ route('siswa.store') }}" method="post">
        {{ csrf_field() }} 
          <div class="form-group">
              <label for=""> NIS </label>
              <input type="text" name="nis" class="form-control" value="" placeholder="Masukan NIS">
          </div>
          <div class="form-group">
              <label for=""> Nama </label>
              <input type="text" name="nama" class="form-control" value="" placeholder="Masukan Nama">
          </div>
          <div class="form-group">
              <label for=""> Tanggal Lahir </label>
              <input type="date" name="tanggal_lahir" class="form-control" placeholder="Masukan Tanggal">
          </div>
          <div class="form-group">
              <label for=""> E-mail </label>
              <input type="email" name="email" class="form-control" value="" placeholder="Masukan E-mail">
          </div>

          <div class="form-group">
              <input type="submit" class="btn btn-primary" value="Save">
          </div>
      </form>
  </div>
@endsection
