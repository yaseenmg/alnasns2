<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class slider extends Model
{
    protected $table = "sliders";
    protected $fillable = ['photo', 'created_at', 'updated_at'];
    protected $hidden = ['created_at, updated_at'];
}
