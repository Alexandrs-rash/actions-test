<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class PlaceStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'file' => 'nullable|image:max:10000',
            'selectedTags' => 'array',
            'date_from' => 'nullable|integer',
            'date_to' => 'nullable|integer',
            'name' => 'required|string:max:255',
            'region_id' => 'nullable|integer',
            'anons'=> 'nullable|string|max:500',
            'status' => 'required|integer',
            'lat' => 'nullable|string:max:255',
            'len' => 'nullable|string:max:255',
//            'size' => 'required|integer', //TODO узнать, что такое size в таблице place
        ];
    }
}
