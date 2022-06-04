<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|string|regex:/[\u0600-\u06FFa-zA-Z0-9 ]+/|min:3|max:225',
            'article' => 'required|min:20|max:65000',
            'file' => 'mimes:pdf,xlx,csv,txt|max:5000',
            'banner_img' => 'image|mimes:jpg,png,jpeg,gif,svg|max:10000',
            'featured' => 'required|boolean',
            'enabled' => 'required|boolean',
            'comments_enabled' => 'required|boolean',
            'cats' => 'required',
            'tags' => 'required'
        ];
    }
}
