<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicsRequest extends FormRequest
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
            'title' => 'required|min:5|max:100',
            'description' => 'nullable',
            'thumb' => 'required',
            'price' => 'required|min:2|max:255',
            'series' => 'required|min:2|max:255',
            'sale_date' => 'required|min:2|max:255',
            'type' => 'required|min:2|max:255',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il titolo è obbligatorio',
            'title.min' => 'Il titolo deve essere minimo di 5 caratteri',
            'title.max' => 'Il titolo deve essere massimo di 100 caratteri',
            'thumb' => "L'immagine è richiesta",
            'price.required' => 'Il prezzo è obbligatorio',
            'price.min' => 'Il prezzo deve essere minimo di 5 caratteri',
            'price.max' => 'Il prezzo deve essere massimo di 100 caratteri',
            'series.required' => 'La serie è obbligatorio',
            'series.min' => 'La serie deve essere minimo di 5 caratteri',
            'series.max' => 'La serie deve essere massimo di 100 caratteri',
            'sale_date.required' => 'La data deve essere obbligatoria',
            'sale_date.min' => 'La data deve essere minimo di 5 caratteri',
            'sale_date.max' => 'La data deve essere massimo di 100 caratteri',
            'type.required' => 'Il tipo è obbligatorio',
            'type.min' => 'Il tipo deve essere minimo di 5 caratteri',
            'type.max' => 'Il tipo deve essere massimo di 100 caratteri',
        ];
    }
}
