<?php

namespace App\Api\V1\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends Controller {

    public function index() {
        return view('welcome');
    }

}
