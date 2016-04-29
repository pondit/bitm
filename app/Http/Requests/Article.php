<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class Article extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
//        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|max:65',
            'html_details' => 'required'
        ];
    }
}
