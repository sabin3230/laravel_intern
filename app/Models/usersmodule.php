<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usersmodule extends Model
{
    protected $fillable = ['name', 'age', 'image', 'bio'];
    use HasFactory;
}
