<?php

namespace App\Http\Requests;

use App\Models\Mprofile;
use Illuminate\Foundation\Http\FormRequest;

class MprofileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'Mprofile.name'=>'required|string',
            'Mprofile.kana'=>'required|string',
            'Mprofile.hobby'=>'required|string',
            'Mprofile.work'=>'required|string',
            'Mprofile.word'=>'required|string',
        ];
    }
}
