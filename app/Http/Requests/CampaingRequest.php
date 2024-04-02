<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CampaingRequest extends FormRequest
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
            'description_en' => 'required|string',
            'description_bn' => 'nullable|string',
            'heading_one_en' => 'required|string',
            'heading_one_bn' => 'nullable|string',
            'frame'          => 'required|string',
            'frame1'         => 'nullable|string'
        ];
    }
}
