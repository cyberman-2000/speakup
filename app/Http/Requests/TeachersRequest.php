<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeachersRequest extends FormRequest
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
            'name'=>'required| max:50| min:2| alpha:ascii',
            'last_name'=>'required| max:50| min:2| alpha:ascii',
            'role'=>'required| max:100| min:2',
            'scoreband'=>'required| numeric',
            'phone_number'=>'required|max:999999999| min:110000000 | integer',
            'about'=>'required| max:1000|min:2',
            'image'=>'sometimes|image|max:819200'
        ];
    }
}
