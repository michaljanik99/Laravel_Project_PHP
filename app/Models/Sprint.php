<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sprint extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "Sprints";
    protected $primaryKey = "Id";
}
