<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller {

    public function index(Request $request) {
      $input = $request->getQueryString();
      $phone = explode("=", $input)[1];
      print_r($phone);
      return view('welcome');
    }

}
