<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'pegawai';

    protected $fillable = [
        'nip',
        'nama',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'id_jabatan',
        'created_at', 
        'foto',
    ];

    protected $dates = ['tanggal_lahir'];

    public function getNamaAttribute($nama){
        return ucwords($nama);
    }

    public function setNamaAttribute($nama){
        $this->attributes['nama'] = strtolower($nama);
    }

    public function telepon(){
        return $this->hasOne('App\Telepon', 'id_pegawai'); 
    }

    public function jabatan(){
        return $this->belongsTo('App\Jabatan', 'id_jabatan'); 
    }

    public function gaji(){
        return $this->belongsToMany('App\Gaji', 'gaji_pegawai', 'id_pegawai', 'id_gaji')->withTimeStamps(); 
    }

    public function getGajiPegawaiAttribute(){
        return $this->Gaji->pluck('id')->toArray(); 
    }

    public function scopeJabatan($query, $id_jabatan){
        return $query->where('id_jabatan', $id_jabatan);
    }

    public function scopeJenisKelamin($query, $jenis_kelamin){
        return $query->where('jenis_kelamin', $jenis_kelamin);
    }
}
