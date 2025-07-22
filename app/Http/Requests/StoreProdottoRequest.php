<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProdottoRequest extends FormRequest
{
    public function authorize()
    {
        return true; // abilita l’uso della richiesta
    }

    public function rules()
    {
        return [
            'nome' => 'required|max:255',
            'prezzo' => 'required|numeric|min:0.01',
            'descrizione' => 'nullable|string',
        ];
    }
}
