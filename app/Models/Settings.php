<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $fillable=['short_des','description','shipping','warrenty','payment','return','photo','address','phone','email','logo'];
}
