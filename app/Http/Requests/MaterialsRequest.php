<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MaterialsRequest extends FormRequest
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
            'book_name'=>'required| max:100| min:2',
            'title'=>'required| max:200',
            'file'=>'file| max:155000|mimes:pdf,doc,docx,pptx,xlsx,zip,ppt,xls,xlm,xla,pps,pot,xlsm',
            'image'=>'sometimes|image|max:819200',
            'category'=>'required|max:100'
        ];
    }
}
