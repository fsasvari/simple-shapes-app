<?php

namespace App\Http\Requests\Api;

class TriangleCalculateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() : array
    {
        return [
            'a' => 'required|numeric',
            'b' => 'required|numeric',
            'c' => 'required|numeric',
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
            'a' => cleanup($this->route('a')),
            'b' => cleanup($this->route('b')),
            'c' => cleanup($this->route('c')),
        ];
    }
}
