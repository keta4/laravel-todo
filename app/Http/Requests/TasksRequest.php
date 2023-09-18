<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TasksRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            //
            'name' => 'required|max:30',
            'content' => 'required'
        ];
    }

    public function messages()
    {
        return [
            //
            'name.required' => 'タスク名は必須です',
            'name.max' => 'タスク名は30文字以内で入力してください',
            'content.required' => 'タスク内容は必須です'
        ];
    }
}
