<?php

namespace App\Http\Controllers;

use JWTAuth;
use App\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller {

  public function index(Request $request) {
    return view('landing');
  }

  public function login(Request $request) {
    $credentials = $request->only(['email', 'password']);

    $validator = Validator::make($credentials, [
      'email' => 'required',
      'password' => 'required',
    ]);

    if($validator->fails()) {
      throw new ValidationHttpException($validator->errors()->all());
    }

    try {
      if (! $token = JWTAuth::attempt($credentials)) {
        return view('landing', [ 'response' => 'errorUnauthorized']);
      }
    } catch (JWTException $e) {
      return view('landing', [ 'response' => 'could_not_create_token']);
    }

    return view('landing', [ 'response' => $token]);
  }

  public function customers(Request $request) {
    $input = $request->getQueryString();
    $phone = explode("=", $input)[1];

    $customer = Customer::where('phone', $phone)->first();
    $customers = Customer::where('phone', '<>', $phone)->get()->toArray();

    return view('welcome', [ 'customers' => $customers, 'customer' => $customer]);
  }

}
