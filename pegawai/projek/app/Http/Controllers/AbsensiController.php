<?php

namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Pegawai;
use App\Jabatan;

use Session;
use PDF;
use Storage;
 	
use Carbon;

use App\Http\Requests\PegawaiRequest;
  
class AbsensiController extends Controller
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function index()
    {
            $absensi = 'absensi';  
            $tanggal=date('l, d-m-Y');
            $pegawai_list = Pegawai::orderBy('nama')->simplePaginate(100);
            return view('absensi', compact('tanggal','absensi','pegawai_list'));
            }

        }