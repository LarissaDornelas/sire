<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EditSoftwareRequest extends Request
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
            'nome' => 'required|string|max:255|unique:softwares,nome,' . explode('/' , $this->path())[1],
            'fabricante' => 'required|numeric|exists:fabricante_softwares,id',
            'versao' => 'required|string|max:255',
            'status' => 'required|boolean',
        ];
    }
}
