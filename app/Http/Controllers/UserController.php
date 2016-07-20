<?php

namespace App\Http\Controllers;

use App\User;
use App\Tower;
use App\Customer;
use App\Apartment;
use App\Nationality;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCustomerRequest;

class UserController extends Controller {

  public function index(Request $request) {
    //ensure auth
    $token = \Cookie::get('token');
    if(!$token) { return redirect('/'); }

    $users = User::all();

    return view('users.index', [ 'users' => $users ]);
  }

  public function add(Request $request) {
    //ensure auth
    $token = \Cookie::get('token');
    if(!$token) { return redirect('/'); }
    exit();
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

    $uuid = $request->get('uuid');
    $user = User::where('id', $uuid)->first();
    $this->store($user, $request);

    return redirect('/users')->with('notification', 'User details updated successfully');
  }

  public function view($uuid) {
    //ensure auth
    $token = \Cookie::get('token');
    if(!$token) { return redirect('/'); }

    $user = User::where('id', $uuid)->first();
    return view('users.view', [ 'user' => $user ]);
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

  public function edit($uuid) {
    //ensure auth
    $token = \Cookie::get('token');
    if(!$token) { return redirect('/'); }

    if ( !User::where('id', $uuid)->exists() )
      return redirect('/users')->with('notification', 'User not found');


    $user = User::where('id', $uuid)->first()->toArray();

    $res = [
      'user' => $user,
    ];
    return view('users.edit', $res);
  }

  private function store($user, $request) {

    $user->name = $request->get('name');
    $user->email = $request->get('email');

    $user->save();
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
