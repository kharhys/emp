<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //mass assignable
    protected $fillable = ['name', 'gender', 'dob', 'occupation', 'address', 'phone'];
}
