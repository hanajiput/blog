<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['nim','nama','fakultas','jurusan','username','password'];
}
