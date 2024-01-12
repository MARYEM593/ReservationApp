<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = ['hotel_configuration_id', 'ages'];
    protected $casts = [
        'ages' => 'json',
    ];
    public function hotelConfiguration()
    {
        return $this->belongsTo(HotelConfiguration::class);
    }
}
