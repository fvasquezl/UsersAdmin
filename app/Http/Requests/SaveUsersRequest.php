<?php

namespace App\Http\Requests;

use App\Events\UserWasCreated;
use App\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class SaveUsersRequest extends FormRequest
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
       $rules = [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ];

        if ($this->method() === 'PUT') {
            $rules['email'] = ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($this->user)];

            if($this->filled('password'))
            {
                $rules['password'] = ['confirmed','min:6'];
            }
        }

        return $rules;
    }

    public function createUser()
    {
        $this['password'] = Str::random(8);

       return  User::create($this->all());

    }

    public function updateUser($user){

        $user->update($this->all());

        return $user;
    }
}
