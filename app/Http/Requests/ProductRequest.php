<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;

class ProductRequest extends FormRequest
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

    public function attributes()
    {
        return [
            'name' => "nazwa produktu",
            'price' => "cena",
            'description' => "opis produktu",
            'active' => "status",
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:products|min:5|max:255',
            'price' => 'required|numeric',
            'description' => 'required|min:20',
            'active' => 'required|boolean',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "Pole :attribute jest wymagana oraz musi być unikalny",
            'active.boolean' => "Produkt może przyjmować status aktywny lub nieaktywny.",
            'price.numeric' => "Podana cena produktu jest niepoprawna."
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $errors = $validator->errors();

        throw new HttpResponseException(response()->json([
            'errors' => $errors
        ], JsonResponse::HTTP_UNPROCESSABLE_ENTITY));
    }
}
