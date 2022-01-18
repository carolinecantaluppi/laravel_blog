<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() // mi consente dei metodi di inviare dati.
    {
        return true;   // se lascia false, non ariverà mai.
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()     // vuoi sapere quali e come vogliamo i dati inserite dal cliente.
    {
        return [
            'email'=>'required|email:rfc,dns',       // rfc = @. dns = nome di un provider che fornisce un email ()es.: google.com)
            'name'=>'required|min:10|max:80',
            'message'=>'required|min:3|max:1000',
        ];
    }

    public function messages(){

        return [
        'email.required' => 'Devi inserire una email.',
        'email.email:rfc,dns' => 'Devi inserire un indirizzo valido.',
        'message.required' => 'Devi inserire un messaggio.',
        // 'message.min' => 'Devi inserire un messaggio di almeno 5 carattere.',
        // 'message.max' => 'Devi inserire un messaggio di almeno 100 carattere.',
        ];
    }
}
