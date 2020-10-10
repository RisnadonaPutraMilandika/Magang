<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\GajiRequest;

use App\Pegawai;
use App\Telepon;
use App\Jabatan;
use App\Gaji;

Use Session;

class GajiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $halaman = 'lihat_data_pegawai';
        $pegawai_list = Pegawai::orderBy('nip', 'asc')->simplePaginate(10);
        $jabatan_list = jabatan::all();
        $jumlah_pegawai = $pegawai_list->count();
        $gaji_list = gaji::all();
        return view('gaji/index', compact('gaji_list','halaman','pegawai_list','jumlah_pegawai','jabatan_list'));

    }
    public function create()
    {
        return view('gaji/create');
    }
    public function store(GajiRequest $request)
    {
        Gaji::create($request->all());
        Session::flash('flash_message', 'Data Gaji berhasil disimpan');
        return redirect('gaji');
    }
    public function show($id)
    {
        //
    }
    public function edit(Gaji $gaji)
    {
        return view('gaji/edit', compact('gaji'));
    }
    public function update(Gaji $gaji, GajiRequest $request)
    {
        $gaji->update($request->all());
        Session::flash('flash_message', 'Data gaji berhasil di update.');
        return redirect('gaji');
    }
    public function destroy(gaji $gaji)
    {
        $gaji->delete();
        Session::flash('flash_message', 'Data gaji berhasil di hapus.');
        Session::flash('penting', true);
        return redirect('gaji');
    }
    public function jumlah()
    {
            $gaji = 'gaji';
            $gaji1 = Pegawai::all()->wherein('gaji', ['Rp 2.500.000,00']);
            $jumlah_gaji1 = $gaji1->count();
            $gaji2 = Pegawai::all()->wherein('gaji', ['Rp 3.000.000,00']);
            $jumlah_gaji2 = $gaji2->count();
            $gaji3 = Pegawai::all()->wherein('gaji', ['Rp 4.000.000,00']);
            $jumlah_gaji3 = $gaji3->count();
            $gaji4 = Pegawai::all()->wherein('gaji', ['Rp 5.000.000,00']);
            $jumlah_gaji4 = $gaji4->count();
            
            return view('gaji', compact('gaji1','jumlah_gaji1','gaji2','jumlah_gaji2','gaji3','jumlah_gaji3','gaji4','jumlah_gaji',));
            }
}
