<?php

namespace App\Http\Requests\Api;

class CircleCalculateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() : array
    {
        return [
            'radius' => 'required|numeric',
        ];
    }

    /**
     * Get data to be validated from the request.
     *
     * @return array
     */
    public function validationData() : array
    {
        return [
            'radius' => cleanup($this->route('radius')),
        ];
    }
}
