<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    protected $table = "news_s";
    protected $fillable = ['photo', 'title', 'details', 'created_at', 'updated_at'];
    protected $hidden = ['created_at, updated_at'];
}
