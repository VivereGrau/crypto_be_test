<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class market extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'currency_id',
        'user_id',
        'action',
        'total',
        'price',
    ];
    public function currency(){
        return $this->belongsTo(currency::class);
    }
    public function user(){
        return $this->belongsTo(user::class);
    }
}
