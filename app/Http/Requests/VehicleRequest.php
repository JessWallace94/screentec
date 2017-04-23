<?php

namespace ScreenTec\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehicleRequest extends FormRequest
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
          'registration' => 'required|min:4|max:10',
          'make' => 'required|min:2',
          'model' => 'required|min:2',
        ];
    }
}
