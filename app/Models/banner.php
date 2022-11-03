<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class banner extends Model
{
    use HasFactory,SoftDeletes;
    protected $table='banners';
    protected $fillable = [
        'title',
        'img',
        'position',
        'url',
    ];
}
