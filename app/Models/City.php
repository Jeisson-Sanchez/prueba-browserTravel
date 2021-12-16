<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $table = 'cities';
    protected $fillable = [
        'id',
        'name',
        'code',
        'latitude',
        'length',
        'country_id',
        'state'
    ];

    public function country(){
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }
}
