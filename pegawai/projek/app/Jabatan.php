<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $table = 'jabatan';
    
    protected $fillable = ['nama_jabatan','jabatan_gaji'];
    
    public function pegawai(){
        return $this->hasMany('App\pegawai', 'id_jabatan');
    }
}
