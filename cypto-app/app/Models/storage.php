<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class storage extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'currency_id',
        'currency_serial',
    ];

    public function currency(){
        return $this->belongsTo(currency::class);
    }
}
