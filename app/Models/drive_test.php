<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class drive_test extends Model
{
    use HasFactory;
    protected $fillable=["drive_id","name","desired_period","product_id"];
    protected $table="drive_tests";
}
