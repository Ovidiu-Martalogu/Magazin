<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suggestions extends Model
{
    use HasFactory;
    protected $fillable=["id","FullName","Adress","Phone","Suggestions","Improvements"];
    protected $table="suggestions";
   
}
