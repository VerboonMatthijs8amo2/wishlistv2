<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    protected $fillable = [
        'gebruikersnaam', 'name', 'description', 'price', 'storeurl', 'image'
    ];


}
