<?php

namespace App\Models;
use App\Models\customers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customers extends Model
{
    use HasFactory;
    protected $fillable=["FirstName","LastName","Adress","Phone"];
    protected $table="customers";
}
