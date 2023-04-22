<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required| max:255| min:2| alpha:ascii',
            'phone_number'=>'required|max:999999999| min:110000000 | integer|unique:App\Models\Registration,phone_number',
            'second_name'=>'required| max:255 | alpha:ascii| min:2',
            'email'=>'required| email:rfc,dns| unique:App\Models\Registration,email',
            'course'=>'required',
            'days'=>'required',
            'time'=>'required',
        ];
    }
}
