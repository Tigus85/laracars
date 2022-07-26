<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCarRequest extends FormRequest
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
            
            "brand" => ["required", "min:3"],
            "serie" => ["required"],
            "price" => ["required"],
            "energy" => ["required"],
            "power" => ["required", "integer"],
            "release_date" => ["required", "date"],
            "weight" => ["required","integer"],
            "thumbnail" => ["required","url"]
            
        ];
    }
}
