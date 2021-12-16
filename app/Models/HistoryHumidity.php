<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryHumidity extends Model
{
    use HasFactory;

    protected $table = 'history_humidity';
    protected $fillable = [
        'id',
        'city_id',
        'humidity',
        'state'
    ];

    public function city(){
        return $this->belongsTo(City::class, 'city_id', 'id');
    }
}
