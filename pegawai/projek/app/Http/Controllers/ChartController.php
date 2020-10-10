<?php

namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Pegawai;
  
class ChartController extends Controller
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function index()
    {
            $chart = 'chart';
            $pegawai_laki = Pegawai::all()->wherein('jenis_kelamin', ['L']);
            $jumlah_pegawai_laki = $pegawai_laki->count();
            $pegawai_cewek = Pegawai::all()->wherein('jenis_kelamin', ['P']);
            $jumlah_pegawai_cewek = $pegawai_cewek->count();
            return view('chart', compact('chart','pegawai_laki','jumlah_pegawai_laki','pegawai_cewek','jumlah_pegawai_cewek'));
            }
    }

