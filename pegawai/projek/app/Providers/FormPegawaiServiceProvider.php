<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;



use App\Jabatan;

use App\Gaji;

class FormPegawaiServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }
    public function boot()
    {
        view()->composer('pegawai/form', function($view){
            $view->with('list_jabatan', Jabatan::pluck('nama_jabatan', 'id'));
            $view->with('list_gaji', Gaji::pluck('jumlah_gaji', 'id'));
        });

        view()->composer('pegawai/form_pencarian', function($view){
            $view->with('list_jabatan', Jabatan::pluck('nama_jabatan','id'));
        });
    }
}
