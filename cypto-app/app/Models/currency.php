<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class currency extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'currency_name',
        'type',
    ];

    public function storage(){
        return $this->hasMany(storage::class, "currency_id", "id");
    }
    public function market(){
        return $this->hasMany(market::class, "currency_id", "id");
    }
    public function wallet(){
        return $this->hasMany(wallet::class, "currency_id", "id");
    }
    public function history(){
        return $this->hasMany(history::class, "currency_id", "id");
    }
}
