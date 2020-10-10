<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PegawaiRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {

        if($this->method() == 'PATCH'){
            $nip_rules = 'required|string|size:4|unique:pegawai,nip,'. $this->get('id');
            $telepon_rules = 'sometimes|nullable|numeric|digits_between:10,15|unique:telepon,nomor_telepon,' .$this->get('id').',id_pegawai';
    }else{
        $nip_rules = 'required|string|size:4|unique:pegawai,nip';
        $telepon_rules = 'sometimes|nullable|numeric|digits_between:10,15|unique:telepon,nomor_telepon';
    }
        return [
            'nip' => $nip_rules,
            'nama' => 'required|string|max:100',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:L,P',
            'nomor_telepon' => $telepon_rules,
            'id_jabatan' => 'required',
            'foto' => 'sometimes|nullable|image|mimes:jpeg,jpg,png|max:500',
        ];
    }
}