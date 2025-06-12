<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lead extends Model
{
    protected $table = 'leads';
     public $timestamps = false;
    use HasFactory;
}
