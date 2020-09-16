<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    protected $fillable = [
        'name', 'description', 'price', 'storeurl', 'image'
    ];


}
