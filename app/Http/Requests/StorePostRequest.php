<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'image' => 'required|max:2028|image|mimes:jpeg,png,jpg,gif,svg',
            'title' => 'required|max:255',
            'category_id' => 'required|integer',
            'description' => 'required',
        ];
    }

    public function attributes(): array
    {
        return [
            'category_id' => 'category'
        ];
    }
}
