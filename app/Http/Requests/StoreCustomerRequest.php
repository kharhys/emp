<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreCustomerRequest extends Request
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
            'passport_number' => 'required|integer',
            'date_of_birth' => 'required|date',
            'mobile_number' => 'required|integer',
            'phone_number' => 'required|integer',
            'nationality' => 'required|integer',
            'emirates_id' => 'required|integer',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'apartment_number' => 'required|integer',
            'postal_address' => 'required|string',
            'contract_date' => 'required|date',
            'email_address' => 'required|email',
            'address_one' => 'required|string',
            'address_two' => 'required|string',
            'area_sq_ft' => 'required|integer',
            'tower_name' => 'required|integer',
        ];
    }
}
