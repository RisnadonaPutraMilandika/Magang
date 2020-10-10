<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gaji extends Model
{
    protected $table = 'gaji';
    
    protected $fillable = ['jumlah_gaji'];
    
    public function pegawai(){
        return $this->hasMany('App\pegawai' ,'id_gaji');
    }
}
