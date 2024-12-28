<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuizRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required|string|max:30',
            'kana'=>'required|string|max:40',
            'relation_id'=>'required',
            'date'=>'required|date',
            'from_id'=>'required',
            'hobby'=>'required|string|max:30',
            'food'=>'required|string|max:30',
            'work'=>'required|string|max:20',
            'word'=>'required|string|max:40'
        ];
    }
}
