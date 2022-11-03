<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    use HasFactory;
    protected $table='orders';
    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'address',
        'note',
        'money',
        'pay',
        'bill',
        'status_id',
    ];
    public function p()
    {
        return $this->belongsToMany(Product::class,'orders_products','order_id', 'product_id')->withPivot('quantity');
    }
}
