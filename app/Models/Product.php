<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Store;

class Product extends Model
{
    use HasFactory;

    protected $table =  "products";

    protected $fillable = ['name', 'description', 'price'];  

    public function getPriceAttribute() {
        return $this->attributes['price'] / 100;
    }

    public function setPriceAttribute($attr) {
        return $this->attributes['price'] = $attr * 100;
    }

    public function store() {
        return $this->belongsTo(Store::class);
    }
}
