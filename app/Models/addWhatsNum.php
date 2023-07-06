<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addWhatsNum extends Model
{
    protected $table = "whatsNum";
    protected $fillable = ['phone', 'created_at', 'updated_at'];
    protected $hidden = ['created_at, updated_at'];
}
