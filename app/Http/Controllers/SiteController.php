<?php

namespace App\Http\Controllers;

use JWTAuth;
use Validator;
use App\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller {

  public function index(Request $request) {
    return view('landing', [ 'response' => 'requested']);
  }

  public function login(Request $request) {
    $credentials = $request->only(['email', 'password']);

    $validator = Validator::make($credentials, [
      'email' => 'required',
      'password' => 'required',
    ]);

    if($validator->fails()) {
      return view('landing', [ 'response' => 'Error: Validation Http Exception']);
    }

    try {
      if (! $token = JWTAuth::attempt($credentials)) {
        return view('landing', [ 'response' => 'Error: Incorrect Credentials']);
      }
    } catch (JWTException $e) {
      return view('landing', [ 'response' => 'could_not_create_token']);
    }

    return redirect('customers');
  }

  public function customers(Request $request) {
    $input = $request->getQueryString();

    if($input) {
      $phone = explode("=", $input)[1];
      $customer = Customer::where('phone', $phone)->first();
      $customers = Customer::where('phone', '<>', $phone)->get()->toArray();
    } else {
      $customer = null;
      $customers = Customer::all()->toArray();
    }

    return view('welcome', [ 'customers' => $customers, 'customer' => $customer, 'input' => $input]);
  }

}
