<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class StoreRequest extends FormRequest
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

    protected function prepareForValidation()
    {
        $this->merge([
            // 'slug' => Str::slug($this->title)
            // 'slug' => Str::of($this->title)->slug()->append("-adicional"),
            'slug' => str($this->title)->slug()
        ]);
    } 

    public function rules()
    {
        return [
            "title" => "required|min:5|max:500",
            "slug" => "required|min:5|max:500|unique:posts",
            "content" => "required|min:10",
            "category_id" => "required",
            "description" => "required|min:10",
            "posted" => "required",
        ];
    }
}
