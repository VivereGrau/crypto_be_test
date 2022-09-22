<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class wallet extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'currency_id',
        'user_id',
        'total',
    ];
    public function currency(){
        return $this->belongsTo(currency::class);
    }
    public function user(){
        return $this->belongsTo(user::class);
    }
}
