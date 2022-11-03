<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;
    protected $table = 'vouchers';
    protected $fillable = [
        'title',
        'content',
        'sale',
        'img',
        'detail',
        'time_limit',
    ];
}
