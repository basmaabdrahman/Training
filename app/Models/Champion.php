<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Champion extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'img',
        'level',
        'certificate_img',
    ];
}
