<?php

namespace App;

use App\Tower;
use App\Apartment;
use App\Nationality;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //mass assignable
    protected $fillable = ['name', 'gender', 'dob', 'occupation', 'address', 'phone'];

    public function nationalityName () {
      return Nationality::where('id', $this->attributes['nationality'])->first()->nationality;
    }

    public function towerName () {
      return Tower::where('id', $this->attributes['tower_name'])->first()->name;
    }

    public function apartmentName () {
      return Apartment::where('id', $this->attributes['apartment_number'])->first()->name;
    }

}
