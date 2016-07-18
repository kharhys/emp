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
        return false;
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
            'passport_number' => 'required'
            'date_of_birth' => 'required'
            'mobile_number' => 'required'
            'phone_number' => 'required'
            'nationality' => 'required'
            'emirates_id' => 'required'
            'first_name' => 'required'
            'last_name' => 'required'
            'apartment_number' => 'required'
            'postal_address' => 'required'
            'contract_date' => 'required'
            'email_address' => 'required'
            'address_one' => 'required'
            'address_two' => 'required'
            'area_sq_ft' => 'required'
            'tower_name' => 'required'
        ];
    }
}
