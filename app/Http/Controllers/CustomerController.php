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

  public function add(Request $request) {
    //ensure auth
    $token = \Cookie::get('token');
    if(!$token) { return redirect('/'); }

    return view('customers.add');
  }

  public function create(Request $request) {
    //ensure auth
    $token = \Cookie::get('token');
    if(!$token) { return redirect('/'); }

    $customer = new Customer;
    $customer->dob = $request->get('dob');
    $customer->name = $request->get('name');
    $customer->phone = $request->get('phone');
    $customer->gender = $request->get('gender');
    $customer->address = $request->get('address');
    $customer->occupation = $request->get('occupation');
    $customer->save();

    return redirect('/customers');
  }

  public function update(Request $request) {
    //ensure auth
    $token = \Cookie::get('token');
    if(!$token) { return redirect('/'); }

    $phone = $request->get('old_phone');
    $customer = Customer::where('phone', $phone)->first();
    $customer->dob = $request->get('dob');
    $customer->name = $request->get('name');
    $customer->phone = $request->get('phone');
    $customer->gender = $request->get('gender');
    $customer->address = $request->get('address');
    $customer->occupation = $request->get('occupation');
    $customer->save();

    return redirect('/customers');
  }

  public function view($phone) {
    //ensure auth
    $token = \Cookie::get('token');
    if(!$token) { return redirect('/'); }

    $personal = [
      'name', 'first_name', 'last_name',
      'dob', 'gender', 'date_of_birth',
      'phone', 'mobile_number', 'phone_number',
      'address', 'occupation',
      'nationality', 'passport_number', 'emirates_id'
    ];
    $customer = Customer::where('phone', $phone)
      ->first($personal)
      ->toArray();
      /*
    $customer = Customer::where('phone', $phone)
      ->first(['name', 'gender', 'dob', 'phone', 'address', 'occupation'])
      ->toArray();
    $customer = Customer::where('phone', $phone)
      ->first(['name', 'gender', 'dob', 'phone', 'address', 'occupation'])
      ->toArray();
      */
    $res = [ 'customer' => $customer ];
    return view('customers.view', $res);
  }

  public function delete($phone) {
    //ensure auth
    $token = \Cookie::get('token');
    if(!$token) { return redirect('/'); }

    $customer = Customer::where('phone', $phone)->delete();
    $res = [ 'customer' => $customer ];
    return redirect('/customers');
  }

  public function edit($phone) {
    //ensure auth
    $token = \Cookie::get('token');
    if(!$token) { return redirect('/'); }

    $customer = Customer::where('phone', $phone)
      ->first()
      ->toArray();

    $res = [ 'customer' => $customer ];
    return view('customers.edit', $res);
  }

}
