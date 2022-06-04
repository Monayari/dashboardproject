<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Symfony\Contracts\Service\Attribute\Required;

class Profilerequest extends FormRequest
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
        $fields = [

            'first_name' => 'required',
            'last_name' => 'required',
            'biography' => 'required',
            'favoraite' => 'required',
            'citie_id'=>'required',
            'province_id' =>'required',
        ];
        if ($this->has('img')) {
            return array_merge(
                $fields,
                [
                    'img' => 'mimes:jpeg,png,jpg,gif'
                ]
            );
        }
        return $fields;

    }
}
