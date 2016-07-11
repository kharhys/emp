<?php

namespace App\Api\V1\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller {

    public function index() {
      print_r(Request::getQueryString());
      return view('welcome');
    }

}
