<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller {

    public function index(Request $request) {
      print_r($request->getQueryString());
      return view('welcome');
    }

}
