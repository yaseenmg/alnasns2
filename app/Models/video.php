<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    protected $table = "videos";
    protected $fillable = ['url', 'title', 'details', 'created_at', 'updated_at'];
    protected $hidden = ['created_at, updated_at'];
}
