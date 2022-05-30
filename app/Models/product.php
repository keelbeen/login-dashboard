<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class product extends Model
{
    use softDeletes;
    protected $table = "products";

    protected $fillable = [
        'name', 'image', 'price', 'stock', 'weight', 'itemcondition', 'minorder', 'description'
    ];
}
