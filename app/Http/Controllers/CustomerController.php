<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends Controller {

  public function index(Request $request) {

    //ensure auth
    $token = \Cookie::get('token');
    if(!$token) { return redirect('/'); }

    $input = $request->getQueryString();
    if($input) {
      $phone = explode("=", $input)[1];
      $customer = Customer::where('phone', $phone)->first();
      $customers = Customer::where('phone', '<>', $phone)->get()->toArray();
    } else {
      $customer = null;
      $customers = Customer::all()->toArray();
    }

    $res = [
      'token' => $token,
      'input' => $input,
      'customer' => $customer,
      'customers' => $customers,
    ];
    return view('customers.index', $res);
  }

  public function create(Request $request) {
    //ensure auth
    $token = \Cookie::get('token');
    if(!$token) { return redirect('/'); }

    return view('customers.create');
  }

  public function view($phone) {
    //ensure auth
    $token = \Cookie::get('token');
    if(!$token) { return redirect('/'); }

    $customer = Customer::where('phone', $phone)->first()->toArray();
    $res = [ 'customer' => $customer ];
    return view('customers.view', $res);
  }

}
