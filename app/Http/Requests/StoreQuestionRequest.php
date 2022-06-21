<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreQuestionRequest extends FormRequest
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
    protected function prepareForValidation() {
        $this->merge([
            'user_id' => $this->user()->id,
        ]);
    }


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user_id' => 'required', 
            'title' => 'required| string',
            'description'=> 'required|string',
            'subject' => 'required|string',
            'tags' => 'required|string'
        ];
    }
}
