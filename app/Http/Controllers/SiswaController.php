<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Siswa;

class SiswaController extends Controller
{

    public function index()
    {
      $dataSiswa = Siswa::all();

      return view('siswa.index', compact('dataSiswa'));
    }

    public function add()
    {
      return view('siswa.add');
    }

    public function store()
    {
      Siswa::create([
        'nis' => request('nis'),
        'nama' => request('nama'),
        'tanggal_lahir' => date('Y-m-d', strtotime(request('tanggal_lahir'))),
        'email' => request('email')
      ]);

      return redirect()->route('siswa.index');
    }

    public function edit($nis)
    {
      $dataSiswa = Siswa::get()->where('nis', $nis);

      return view('siswa.edit', compact('dataSiswa'));
    }

    public function update($nis)
    {
      $dataSiswa = Siswa::where('nis', $nis)->update([
        'nama' => request('nama'),
        'tanggal_lahir' => date('Y-m-d', strtotime(request('tanggal_lahir'))),
        'email' => request('email')
      ]);

      return redirect()->route('siswa.index');
    }

    public function hapus($nis){
        $dataSiswa = Siswa::where('nis', $nis)->delete();

        return redirect()->route('siswa.index');
    }
}
