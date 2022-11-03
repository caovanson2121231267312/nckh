<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tskt extends Model
{
    use HasFactory;
    protected $table = 'tskts';
    protected $fillable = [
        'name',
        'value',
        'infor_product_id',
    ];
    public $timestamps = FALSE;

}
