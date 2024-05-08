<?php

namespace App\Validations;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

/**
 * Class UserValidation
 *
 * Provides methods for validating user data.
 *
 * @package App\Validations
 */
class UserValidation
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }


    /**
     * Validates data for creating a user.
     *
     * @param array $data The data to validate.
     * @return \Illuminate\Contracts\Validation\Validator The Laravel validator.
     */
    public static function validateUserCreation($data)
    {
        $rules = [
            'name' => ['required', 'string', 'max:100'],
            'first_surname' => ['required', 'string', 'max:100'],
            'second_surname' => ['required', 'string', 'max:100'],
            'dni' => 'required|string|max:9|regex:/^\d{8}[a-zA-Z]$/',
            'postal_code' => 'required|digits:5|regex:/^[0-9][0-9]+$/',
            'city' => 'required|string|max:255',
            'email' => ['required', 'string', 'email', 'max:100', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'address' => ['nullable', 'string', 'max:255'],
            'phone_number' => ['nullable', 'string', 'max:20'],
            'birthdate' => ['nullable', 'date'],
            'profile_picture' => ['nullable', 'string', 'max:255'],
            'role' => ['required', 'string', 'in:admin,customer'],
            'is_active' => ['required', 'boolean'],
        ];
        

        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }

        return $validator;
    }


    /**
     * Validates the update data of a user.
     *
     * @param array $data The data to validate.
     * @return \Illuminate\Contracts\Validation\Validator The Laravel validator.
     * @throws \Illuminate\Validation\ValidationException If validation fails.
     */

    public static function validateUserUpdate($data)
    {

        $rules = [
            'name' => ['required', 'string', 'max:100'],
            'first_surname' => ['required', 'string', 'max:100'],
            'second_surname' => ['required', 'string', 'max:100'],
            'dni' => 'required|string|max:9|regex:/^\d{8}[a-zA-Z]$/',
            'postal_code' => 'required|digits:5|regex:/^[0-9][0-9]+$/',
            'city' => 'required|string|max:255',
            'email' => ['sometimes', 'string', 'email', 'max:100', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'address' => ['nullable', 'string', 'max:255'],
            'phone_number' => ['nullable', 'string', 'max:20'],
            'birthdate' => ['nullable', 'date'],
            'profile_picture' => ['nullable', 'string', 'max:255'],
            'role' => ['required', 'string', 'in:admin,customer'],
            'is_active' => ['required', 'boolean'],
        ];


        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }

        return $validator;
    }
}
