<?php

namespace AwStudio\Fjord\Form\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CrudReadRequest extends FormRequest
{
    use Traits\ModelName;

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user()->can('read ' . $this->model());
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }
}
