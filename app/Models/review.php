<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    public $table = "review";
    protected $fillable = [
        'name', 'field', 'job','star'
    ];
}
