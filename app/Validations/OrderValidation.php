<?php

namespace App\Validations;

use Illuminate\Support\Facades\Validator;

/**
 * Class OrderValidation
 *
 * Provides methods for validating order creation data.
 *
 * @package App\Validations
 */
class OrderValidation
{

    /**
     * Validates the creation data of an order.
     *
     * @param array $data The data to validate.
     * @return \Illuminate\Contracts\Validation\Validator The Laravel validator.
     * @throws \Illuminate\Validation\ValidationException If validation fails.
     */

    public static function validateOrderCreation($data)
    {
        $rules = [
            'user_id' => ['required', 'integer', 'exists:users,id'],
            'total_amount' => ['required', 'numeric', 'min:0'],
        ];

        $validator = Validator::make($data, $rules);
        return $validator;
    }
}
