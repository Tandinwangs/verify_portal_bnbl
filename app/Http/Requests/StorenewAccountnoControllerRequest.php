<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorenewAccountnoControllerRequest extends FormRequest
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
            'account_number' => ['required', 'exists:user_account_details,account_number'], 
            'account_number' => 'required|string|max:255',
            'cid' => 'required|integer|max:255',
            'village' => 'required|string|max:255',
            'gewog' => 'required|string|max:255',
            'dzongkhag' => 'required|string|max:255',
            'household_number' => 'required|string|max:255',
            'thram_number' => 'required|string|max:255',
            'phone_number' => 'required|string|max:255',
            'new_account_number' => 'required|string|max:255',
            'status' => 'string|max:255',
            'file_path' => 'required|string|max:255',
        ];
    }
}
