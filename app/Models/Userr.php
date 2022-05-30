<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Userr extends Model
{
    use SoftDeletes;
    protected $table ="userr";
    protected $fillable = [
        'name',
        'username',
        'level',
        'email',
        'email_verified_at',
        'password',
        'phone',
        'dateofbirth',
        'gender'

    ];
    protected $hidden;

}
