<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GajiRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return ['jumlah_gaji' => 'required|string|max:30'];
    }
}
  
