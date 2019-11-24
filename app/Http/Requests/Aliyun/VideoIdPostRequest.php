<?php

namespace App\Http\Requests\Aliyun;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class VideoIdPostRequest extends FormRequest
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
            'video_id' => 'required|string',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw (new HttpResponseException(response()->fail(422, '参数错误！', $validator->errors()->all(), 422)));
    }
}
