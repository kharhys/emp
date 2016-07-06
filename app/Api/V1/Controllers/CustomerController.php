<?php

namespace App\Api\V1\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use JWTAuth;
use App\Customer;
use Dingo\Api\Routing\Helpers;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    //attach Helpers
    use Helpers;

    public function index()
    {
        return Customer::all()->toArray();
    }

    public function welcome()
    {
        //return Customer::all()->toArray();
        return view('welcome');
    }

    public function store(Request $request)
    {
        //$currentUser = JWTAuth::parseToken()->authenticate();

        $customer = new Customer;

        $customer->name = $request->get('name');
        $customer->gender = $request->get('gender');
        $customer->occupation = $request->get('occupation');
        $customer->address = $request->get('address');
        $customer->phone = $request->get('phone');
        $customer->dob = $request->get('dob');

        if($customer->save())
            return $this->response->created();
        else
            return $this->response->error('could_not_create_customer', 500);
    }
}
