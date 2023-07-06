<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class owner extends Model
{
    protected $table = "owners";
    protected $fillable = ['photo', 'created_at', 'updated_at'];
    protected $hidden = ['created_at, updated_at'];
}
