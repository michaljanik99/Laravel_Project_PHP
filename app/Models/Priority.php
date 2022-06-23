<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Priority extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "Priorityes";
    protected $primaryKey = "Id";
}
