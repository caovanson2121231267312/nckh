<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|min:3',
            'email' => 'required|email',
        ];
    }
    public function messages(){
        return [
            'name.required'=>"Tên không được để trống",
            'name.min'=>"Tên phải có tối thiểu 3 ký tự",
            'email.email'=>"email không đúng định dạng",
        ];
    }
    // protected function failedValidation(Validator $validator)
    // {

    //     $errors = (new ValidationException($validator))->errors();
    //     throw new HttpResponseException(response()->json(
    //         [
    //             'error' => $errors,
    //             'status_code' => 422,
    //         ], JsonResponse::HTTP_UNPROCESSABLE_ENTITY));
    // }
}
