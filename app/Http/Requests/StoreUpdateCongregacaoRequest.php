<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateCongregacaoRequest extends FormRequest
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
        return 
            [                        
                'congregacao'=> 'required|min:3',                  
            ];        
    }

    public function messages()

    {
        return
            [                        
                'congregacao.required' => 'O campo :attribute é obrigatório!',                             
            ];
            
    }
    
}
