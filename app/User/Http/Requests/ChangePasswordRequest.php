<?php
namespace App\User\Http\Requests;

use App\Http\Requests\Request;

class ChangePasswordRequest extends Request
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
            'old_password' => 'required|max:255',
            'password' => 'required|confirmed|min:6',
        ];
    }


    public function messages()
    {
        return [
            'old_password.required' => 'The old password field is required',
            'password.required' => 'The new password field is required',
            'password.confirmed' => 'The new password does not match the confirmed new password',
            'password.min:6' => 'The password must be greater then 6 characters'
        ];
    }


}
