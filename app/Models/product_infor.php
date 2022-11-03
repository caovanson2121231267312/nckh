<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_infor extends Model
{
    use HasFactory;
    protected $table = 'product_infor';
    protected $fillable = [
        'name',
        'product_id',
    ];
    public function productinfor()
    {
        return $this->belongsTo('App\Models\Product');
    }
    public function tskt()
    {
        return $this->hasMany('App\Models\tskt','infor_product_id','id');
    }
}
