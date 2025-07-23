<?php

namespace App\Models;
use App\Models\products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class productsModel extends Model
{
    use HasFactory;
    protected $fillable=["id","product_name","description","color","image","price","discount"];
    protected $table="products";
}
