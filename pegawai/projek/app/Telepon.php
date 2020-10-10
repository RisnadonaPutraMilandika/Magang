<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telepon extends Model
{
    protected $table = 'telepon';
    protected $primaryKey = 'id_pegawai';
    protected $fillable = ['id_pegawai','nomor_telepon'];
    
    public function pegawai(){
        return $this->belongsTo('App\Pegawai', 'id_pegawai');
    }
}