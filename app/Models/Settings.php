<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $fillable=[
        'short_des',
        'description',
        'shipping',
        'warrenty',
        'payment',
        'return',
        'photo',
        'print_on_paper',
        'print_on_canvas',
        'about_paintings',
        'address',
        'phone',
        'email',
        'logo'
    ];
}
