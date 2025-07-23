<?php

namespace App\Models;
use App\Models\orders;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    use HasFactory;

    protected $fillable=["order_id","product_id","quantity"];
    protected $table="orders";
}
