<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class improvement extends Model
{
    use HasFactory;
    protected $fillable=["id","users_id","Adress","Phone","Desired_product","Feedback"];
    protected $table="improvements";
}
