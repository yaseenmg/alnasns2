<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    protected $table = "projects";
    protected $fillable = ['photo', 'created_at', 'updated_at'];
    protected $hidden = ['created_at, updated_at'];
}
