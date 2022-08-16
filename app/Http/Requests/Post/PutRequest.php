<?php

namespace App\Http\Requests\Post;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

class PutRequest extends FormRequest
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
            "title" => "required|min:5|max:500",
            "slug" => "required|min:5|max:500|unique:posts,slug," . $this->route("post")->id,
            "content" => "required|min:10",
            "category_id" => "required",
            "description" => "required|min:10",
            "posted" => "required",
            "image" => "mimes:jpeg,jpg,png|max:10240",
        ];
    }

    public function failedValidation(Validator $validator) {
        if($this->expectsJson()) {
            $response = new Response($validator->errors(),422);

            throw new ValidationException($validator, $response);
        }
    }
}
