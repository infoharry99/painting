<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table ='testmonial';
    protected $fillable=['name','description','image'];
}
