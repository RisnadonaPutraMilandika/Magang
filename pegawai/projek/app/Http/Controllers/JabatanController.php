<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Http\Requests\JabatanRequest;

use App\Jabatan;
use App\Pegawai;

use Session;

class JabatanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //jumlah data jabatan
        $jabatan_list = jabatan::all();
        $jabatan_1 = Pegawai::all()->wherein('id_jabatan', ['1']);
        $jumlah_jabatan_1 = $jabatan_1->count();
        $jabatan_2 = Pegawai::all()->wherein('id_jabatan', ['2']);
        $jumlah_jabatan_2 = $jabatan_2->count();
        $jabatan_3 = Pegawai::all()->wherein('id_jabatan', ['3']);
        $jumlah_jabatan_3 = $jabatan_3->count();
        $jabatan_5 = Pegawai::all()->wherein('id_jabatan', ['5']);
        $jumlah_jabatan_5 = $jabatan_5->count();
        

        //memanggil data nama_jabatan
        $j1 = DB::table('jabatan')->where('id',1)->get();
        $nama_j1 = $j1[0]->nama_jabatan;
        $j2 = DB::table('jabatan')->where('id',2)->get();
        $nama_j2 = $j2[0]->nama_jabatan;
        $j3 = DB::table('jabatan')->where('id',3)->get();
        $nama_j3 = $j3[0]->nama_jabatan;
        $j5 = DB::table('jabatan')->where('id',5)->get();
        $nama_j5 = $j5[0]->nama_jabatan;
    
        return view('jabatan/index', compact('nama_j1','nama_j2','nama_j3','nama_j5','j1','j2','j3','j5','jabatan_list','jabatan_1','jumlah_jabatan_1','jabatan_2','jumlah_jabatan_2','jabatan_3','jumlah_jabatan_3','jabatan_5','jumlah_jabatan_5'));
    }
    public function create()
    {
        return view('jabatan/create');
    }
    public function store(Request $request)
    {
        Jabatan::create($request->all());
        Session::flash('flash_message', 'Data jabatan berhasil disimpan');
        return redirect('jabatan');
    }
    public function show($id)
    {
        //
    }
    public function edit(Jabatan $jabatan)
    {
        return view('jabatan/edit', compact('jabatan'));
    }
    public function update(Jabatan $jabatan, JabatanRequest $request)
    {
        $jabatan->update($request->all());
        Session::flash('flash_message', 'Data jabatan berhasil di update.');
        return redirect('jabatan');
    }
    public function destroy(jabatan $jabatan)
    {
        $jabatan->delete();
        Session::flash('flash_message', 'Data jabatan berhasil di hapus.');
        Session::flash('penting', true);
        return redirect('jabatan');
    }
}
