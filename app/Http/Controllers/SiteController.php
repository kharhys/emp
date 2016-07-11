<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller {

    public function index() {
      print_r(Request::getQueryString());
      return view('welcome');
    }

}
