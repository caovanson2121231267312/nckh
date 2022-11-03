<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;
    protected $table='discounts';
    protected $fillable = [
        'sale',
        'saletime',
        'product_id',
    ];
    public function products()
    {
        return $this->belongsTo('App\Models\Product');
    }
}
