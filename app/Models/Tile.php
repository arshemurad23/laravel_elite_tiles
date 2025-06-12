<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tile extends Model
{

    protected $table = 'tiles';
     public $timestamps = false;
    
    use HasFactory;
}
