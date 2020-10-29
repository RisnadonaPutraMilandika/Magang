<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $chart = 'chart';
            $pegawai_laki = Pegawai::all()->wherein('jenis_kelamin', ['L']);
            $jumlah_pegawai_laki = $pegawai_laki->count();
            $pegawai_cewek = Pegawai::all()->wherein('jenis_kelamin', ['P']);
            $jumlah_pegawai_cewek = $pegawai_cewek->count();
            
            $jumlah = $jumlah_pegawai_cewek + $jumlah_pegawai_laki;
            return view('chart', compact('jumlah','chart','pegawai_laki','jumlah_pegawai_laki','pegawai_cewek','jumlah_pegawai_cewek'));
        }
    }

