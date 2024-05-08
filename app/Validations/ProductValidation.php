<?php

namespace App\Validations;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

/**
 * Class ProductValidation
 *
 * Provides methods for validating product creation data.
 *
 * @package App\Validations
 */
class ProductValidation
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }


    /**
     * Validates the creation data of a product.
     *
     * @param array $data The data to validate.
     * @return \Illuminate\Contracts\Validation\Validator The Laravel validator.
     * @throws \Illuminate\Validation\ValidationException If validation fails.
     */

    public static function validateProductCreation($data)
    {
        $rules = [
            'name' => ['required', 'string', 'max:100'],
            'description' => ['nullable', 'string'],
            'price' => ['required', 'numeric', 'min:0'],
            'stock' => ['required', 'integer', 'min:0'],
        ];

        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }

        return $validator;
    }
}
