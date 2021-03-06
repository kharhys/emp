<?php

namespace App\Http\Controllers;

use App\Tower;
use App\Customer;
use App\Apartment;
use App\Nationality;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCustomerRequest;

class CustomerController extends Controller {

  public function index(Request $request) {
    //ensure auth
    $token = \Cookie::get('token');
    if(!$token) { return redirect('/'); }

    $qs = $_SERVER["QUERY_STRING"];
    $customers = Customer::all();

    if(!$qs)
      return view('customers.index', [ 'customers' => $customers ]);

    $pn = explode("=", $qs)[1];
    $phone = substr($pn, 1, -1);

    $customer = Customer::where('phone_number', $phone)->first();
    if(!$customer)
      return redirect("/customers/newpopup");

    return redirect("/customers/showpopup/".$phone);

  }

  public function add(Request $request) {
    //ensure auth
    $token = \Cookie::get('token');
    if(!$token) { return redirect('/'); }

    $res = [
      'towers' => Tower::all(),
      'apartments' => Apartment::all(),
      'countries' => Nationality::all(),
    ];
    return view('customers.add', $res);
  }

  public function newpopup(Request $request) {
    //ensure auth
    $token = \Cookie::get('token');
    if(!$token) { return redirect('/'); }

    $res = [
      'towers' => Tower::all(),
      'customers' => Customer::all(),
      'apartments' => Apartment::all(),
      'countries' => Nationality::all(),
    ];
    return view('customers.newpopup', $res);
  }

  public function create(StoreCustomerRequest $request) {
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

    $res = $this->fetch($phone);
    return view('customers.view', $res);
  }

  public function showpopup($phone) {
    //ensure auth
    $token = \Cookie::get('token');
    if(!$token) { return redirect('/'); }

    $res = $this->fetch($phone);
    return view('customers.showpopup', $res);
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

    if ( !Customer::where('phone_number', $phone)->exists() )
      return redirect('/customers')->with('notification', 'Customer not found');


    $customer = Customer::where('phone_number', $phone)
      ->first()
      ->toArray();

    $res = [
      'customer' => $customer,
      'towers' => Tower::all(),
      'apartments' => Apartment::all(),
      'countries' => Nationality::all(),
    ];
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

  private function fetch ($phone) {
    if ( !Customer::where('phone_number', $phone)->exists() )
      return redirect('/customers')->with('notification', 'Customer not found');

    $_pers = [
      'first_name', 'last_name', 'date_of_birth',
      'mobile_number', 'phone_number', 'address_one',
      'passport_number', 'emirates_id'
    ];
    $_prop = [
      'apartment_number', 'area_sq_ft',
      'contract_date', 'address_one', 'address_two',
      'city', 'postal_address', 'email_address'
    ];
    $_att = [ 'passport_attachment', 'contract_attachment' ];

    $customer = Customer::where('phone_number', $phone)->first();

    $personal = Customer::where('phone_number', $phone)->first($_pers)->toArray();
    $personal['nationality'] = $customer->nationalityName();

    $property = Customer::where('phone_number', $phone)->first($_prop)->toArray();
    $property['tower_name'] = $customer->towerName();
    return [
      'customers' => Customer::all(),
      'personal' => $personal,
      'property' => $property,
      'attachment' => Customer::where('phone_number', $phone)->first($_att)->toArray(),
    ];
  }

}
