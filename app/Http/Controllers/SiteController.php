<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller {

    public function index(Request $request) {
      $input = $request->getQueryString();
      $phone = explode("=", $input)[1];

      $customers = Customer::all()->toArray();
      $customer = Customer::where('phone', $phone)->first();

      return view('welcome', [ 'customers' => $customers, 'customer' => $customer]);
    }

}
