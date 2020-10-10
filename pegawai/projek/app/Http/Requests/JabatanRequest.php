<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JabatanRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return ['nama_jabatan' => 'required|string|max:20'];
    }
}
