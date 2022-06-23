<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations;
class User extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "Users";
    protected $primaryKey = "Id";
}
