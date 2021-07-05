<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    public $table = "booking";
    protected $fillable = [
        'name', 'email', 'room','number','number_guest','in_out'
    ];
}
