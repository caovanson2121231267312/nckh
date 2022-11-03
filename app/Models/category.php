<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class category extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'name',
        'parent_id',
        'user_id',
        'file',
    ];
    public function products(){
        return $this->hasMany('App\Models\Product','category_id','id');
        //$this->hasMany(Product::class);
    }
}
