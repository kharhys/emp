<?php

namespace App\Http\Controllers;

use JWTAuth;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller {

  public function index(Request $request) {
    return view('landing', [ 'response' => 'Login to Continue']);
  }

  public function login(Request $request) {
    $credentials = $request->only(['email', 'password']);

    $validator = Validator::make($credentials, [
      'email' => 'required',
      'password' => 'required',
    ]);

    if($validator->fails()) {
      return view('landing', [ 'response' => 'Error: Validation Http Exception']);
    }

    try {
      if (! $token = JWTAuth::attempt($credentials)) {
        return view('landing', [ 'response' => 'Error: Incorrect Credentials']);
      }
    } catch (JWTException $e) {
      return view('landing', [ 'response' => 'could_not_create_token']);
    }
    $cookie = \Cookie::make('token', $token, 60);
    return redirect('customers')->withCookie($cookie);
  }

}
