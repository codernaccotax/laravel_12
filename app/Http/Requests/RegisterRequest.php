<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
            'employee_id' => 'required|exists:employees,id',
            'user_type_id' => 'required|exists:user_types,id',
        ];
    }
    public function messages(): array
    {
        return [
            'email.required' => 'Email is required',
            'email.email' => 'Email must be a valid email address',
            'email.unique' => 'Email is already registered',
            'password.required' => 'Password is required',
            'password.min' => 'Password must be at least 8 characters long',
            'password.confirmed' => 'Password confirmation does not match',
            'employee_id.required' => 'Employee ID is required',
            'employee_id.exists' => 'Employee ID does not exist',
            'user_type_id.required' => 'User Type ID is required',
            'user_type_id.exists' => 'User Type ID does not exist',
        ];
    }
}
