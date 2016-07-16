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
    if(!$input) { return view('customers.index'); }

    $phone = explode("=", $input)[1];
    $customer = Customer::where('phone_number', $phone)->first();

    if(!$customer) { return view('customers.add');}

    return redirect('customers/view', [ 'phone' => $customer['phone_number'] ]);

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
    $this->store($customer, $request);
    return redirect('/customers');
  }

  public function update(Request $request) {
    //ensure auth
    $token = \Cookie::get('token');
    if(!$token) { return redirect('/'); }

    $phone = $request->get('old_phone');
    $customer = Customer::where('phone_number', $phone)->first();
    $this->store($customer, $request);

    return redirect('/customers');
  }

  public function view($phone) {
    //ensure auth
    $token = \Cookie::get('token');
    if(!$token) { return redirect('/'); }

    $_pers = [
      'first_name', 'last_name', 'date_of_birth',
      'mobile_number', 'phone_number', 'address_one',
      'nationality', 'passport_number', 'emirates_id'
    ];
    $_prop = [
      'tower_name', 'apartment_number', 'area_sq_ft',
      'contract_date', 'address_one', 'address_two',
      'city', 'postal_address', 'email_address'
    ];
    $_att = [ 'passport_attachment', 'contract_attachment' ];

    $personal = Customer::where('phone_number', $phone)->first($_pers)->toArray();
    $property = Customer::where('phone_number', $phone)->first($_prop)->toArray();
    $attachment = Customer::where('phone_number', $phone)->first($_att)->toArray();

    $res = [
      'personal' => $personal,
      'property' => $property,
      'attachment' => $attachment,
    ];
    return view('customers.view', $res);
  }

  public function delete($phone) {
    //ensure auth
    $token = \Cookie::get('token');
    if(!$token) { return redirect('/'); }

    $customer = Customer::where('phone_number', $phone)->delete();
    $res = [ 'customer' => $customer ];
    return redirect('/customers');
  }

  public function edit($phone) {
    //ensure auth
    $token = \Cookie::get('token');
    if(!$token) { return redirect('/'); }

    $customer = Customer::where('phone_number', $phone)
      ->first()
      ->toArray();

    $res = [ 'customer' => $customer ];
    return view('customers.edit', $res);
  }

  private function store($customer, $request) {

    $customer->dob = $request->get('dob');
    $customer->name = $request->get('name');
    $customer->city = $request->get('city');
    $customer->phone = $request->get('phone');
    $customer->gender = $request->get('gender');
    $customer->address = $request->get('address');
    $customer->last_name = $request->get('last_name');
    $customer->first_name = $request->get('first_name');
    $customer->occupation = $request->get('occupation');
    $customer->tower_name = $request->get('tower_name');
    $customer->area_sq_ft = $request->get('area_sq_ft');
    $customer->address_two = $request->get('address_two');
    $customer->emirates_id = $request->get('emirates_id');
    $customer->nationality = $request->get('nationality');
    $customer->address_one = $request->get('address_one');
    $customer->phone_number = $request->get('phone_number');
    $customer->email_address = $request->get('email_address');
    $customer->date_of_birth = $request->get('date_of_birth');
    $customer->mobile_number = $request->get('mobile_number');
    $customer->contract_date = $request->get('contract_date');
    $customer->postal_address = $request->get('postal_address');
    $customer->passport_number = $request->get('passport_number');
    $customer->apartment_number = $request->get('apartment_number');
    //$customer->passport_attachment = $request->get('passport_attachment');
    //$customer->contract_attachment = $request->get('contract_attachment');

    $customer->save();
  }

}
