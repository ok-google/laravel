@extends('layouts.app')

@section('content')
  <div class='container'>
      @foreach ($dataSiswa as $value)
      <form class="" action="{{ route('siswa.update', $value->nis) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
          <div class="form-group">
              <label for=""> NIS </label>
              <input type="text" name="nis" class="form-control" value="{{ $value->nis }}">
          </div>
          <div class="form-group">
              <label for=""> Nama </label>
              <input type="text" name="nama" class="form-control" value="{{ $value->nama }}">
          </div>
          <div class="form-group">
              <label for=""> Tanggal Lahir </label>
              <input type="date" name="tanggal_lahir" class="form-control" value="{{ $value->tanggal_lahir }}">
          </div>
          <div class="form-group">
              <label for=""> E-mail </label>
              <input type="email" name="email" class="form-control" value="{{ $value->email }}">
          </div>

          <div class="form-group">
              <input type="submit" class="btn btn-primary" value="update">
          </div>
        @endforeach

      </form>
  </div>
@endsection
