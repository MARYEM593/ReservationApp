<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelConfiguration extends Model
{
    use HasFactory;
    protected $fillable = ['age_group', 'max_persons'];
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
