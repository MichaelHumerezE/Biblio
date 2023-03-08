<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductoRequest extends FormRequest
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
            'name' => ['required', 'string'],
            'descripcion' => ['required', 'string'],
            'stock' => ['required'],
            'precioUnitario' => ['required'],
            'idcategoria' => ['required'],
            'idmarca' => ['required'],
            'imagen' => ['nullable', 'mimes:jpg,jpeg,png'],
        ];
    }
}
