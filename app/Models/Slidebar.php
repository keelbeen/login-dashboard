<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Slidebar extends Model
{
    use softDeletes;
    protected $table ="slidebar";
    protected $fillable = [
        'id',
        'image',

    ];
    protected $hidden;

}
