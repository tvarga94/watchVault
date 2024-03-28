<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsletterSubscriptionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:newsletter,email',
            'subscribe' => 'required|accepted',
        ];
    }

    public function messages(): array
    {
        return [
            'email.unique' => 'This email address is already subscribed to our newsletter.',
        ];
    }
}
