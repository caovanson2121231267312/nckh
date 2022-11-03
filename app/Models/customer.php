<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;
class customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'ip_address',
    ];
    public function product()
    {
        return $this->belongsToMany(Product::class,'customer_product');
    }
}
