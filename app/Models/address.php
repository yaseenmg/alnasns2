<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class address extends Model
{
    protected $table = "addresses";
    protected $fillable = ['address', 'created_at', 'updated_at'];
    protected $hidden = ['created_at, updated_at'];
}
