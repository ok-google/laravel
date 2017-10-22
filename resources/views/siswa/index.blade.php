@extends('layouts.header')

@section('content')

  <div class="container">
    <div class="row">
      <div class="m-section">
									<div class="m-section__content">
										<table class="table">
											<thead>
												<tr>
                          <th> NIS </th>
                          <th> Nama </th>
                          <th> E-mail </th>
                          <th> Tanggal Lahir </th>
                          <th> Edit </th>
                          <th> Delete </th>
												</tr>
											</thead>
											<tbody>
                        @foreach ($dataSiswa as $value)
                            <tr scope="row">
                              <td> {{ $value->nis }} </td>
                              <td> {{ $value->nama }} </td>
                              <td> {{ $value->email }} </td>
                              <td> {{ date('d-m-Y', strtotime($value->tanggal_lahir)) }} </td>
                              <td> <a href="{{ route('siswa.edit', ["id" => $value->nis])}}" class="btn btn-accent m-btn m-btn--icon"> Edit </a></td>
                              <td> <a href="{{ route('siswa.hapus', ["id" => $value->nis])}}" class="btn btn-danger m-btn m-btn--icon"> Hapus </a></td>
                            </tr>
                        @endforeach
											</tbody>
										</table>
									</div>
								</div>
    </div>
  </div>
@endsection
