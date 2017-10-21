@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <table class="table table hover">
          <thead>
              <th> NIS </th>
              <th> Nama </th>
              <th> E-mail </th>
              <th> Tanggal Lahir </th>
              <th> Edit </th>
              <th> Delete </th>
          </thead>

          <tbody>
            @foreach ($dataSiswa as $value)
                <tr>
                  <td> {{ $value->nis }} </td>
                  <td> {{ $value->nama }} </td>
                  <td> {{ $value->email }} </td>
                  <td> {{ date('d-m-Y', strtotime($value->tanggal_lahir)) }} </td>
                  <td> <a href="{{ route('siswa.edit', ["id" => $value->nis])}}" class="btn btn-primary"> Edit </a></td>
                  <td> <a href="{{ route('siswa.hapus', ["id" => $value->nis])}}" class="btn btn-danger"> Hapus </a></td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
