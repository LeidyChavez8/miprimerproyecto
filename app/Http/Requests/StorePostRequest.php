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
            'name' => 'required|min:10|max:255',
            'slug' => 'required|unique:posts',
            'category' => 'required',
            'content' => 'required',
        ];
    }

    // public function messages(){
    //     return [
    //         'name.required'=> 'The name field is required. (editado)',

    //     ];
    // }
    public function attributes()
    {
        return[
            'name' => 'Post Name+',
            'slug' => 'Post Slug',
            'category' => 'Post Category',
            'content' => 'Post Content',
        ];
    }
}
