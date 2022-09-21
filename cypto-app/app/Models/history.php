<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class history extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'currency_id',
        'from_user_id',
        'is_in_system',
        'to_user_id',
        'ref_to_user',
        'to_address',
        'action',
        'total',
        'price',
    ];
}
