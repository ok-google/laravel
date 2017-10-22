@extends('layouts.header')

@section('content')
  <div class='container'>
      <form class="m-form m-form--fit" action="{{ route('siswa.store') }}" method="post">
        {{ csrf_field() }}
        <div class="m-portlet__body">
          <div class="m-form__section m-form__section--first">
            <div class="m-form__heading">
              <h3 class="m-form__heading-title">
                Tambah Siswa
              </h3>
            </div>
          <div class="form-group m-form__group">
            <div class="col-lg-4 col-md-9 col-sm-12">
              <label for=""> NIS </label>
              <input type="text" name="nis" class="form-control m-input" value="" placeholder="Masukan NIS">
            </div>
          </div>
          <div class="form-group m-form__group">
            <div class="col-lg-4 col-md-9 col-sm-12">
              <label for=""> Nama </label>
              <input type="text" name="nama" class="form-control m-input" value="" placeholder="Masukan Nama">
            </div>
          </div>
          <div class="form-group m-form__group">
              <label for=""> Tanggal Lahir </label>
              <div class="col-lg-4 col-md-9 col-sm-12">
											<div class="input-group date datepicker" id="m_datepicker_3">
												<input type="text" class="form-control m-input" name="tanggal_lahir" readonly="" placeholder="dd/mm/yyyy">
												<span class="input-group-addon">
													<i class="la la-calendar"></i>
												</span>
											</div>
              </div>
          </div>
          <div class="form-group m-form__group">
            <div class="col-lg-4 col-md-9 col-sm-12">
              <label for=""> E-mail </label>
              <input type="email" name="email" class="form-control m-input" value="" placeholder="Masukan E-mail">
            </div>
          </div>
          <div class="form-group m-form__group">
              <input type="submit" class="btn btn-primary m-input" value="Save">
          </div>
        </div>
      </div>
      </form>
  </div>
@endsection
