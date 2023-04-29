<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CoursesRequest extends FormRequest
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
            'course_name'=>'required| max:50| min:2',
            'count_students'=>'required| numeric| max:30',
            'duration'=>'required| max:50|',
            'about'=>'required| max:1000|min:2',
            'when'=>'required',
            'cost'=>'required | integer | min:1000| max:10000000',
            'image'=>'sometimes|image|max:819200',
        ];
    }
}
