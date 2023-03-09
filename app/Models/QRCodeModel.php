<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QRCodeModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'agency',
        'departure',
        'arrival',
        'date',
        'class',
        'seat_number',
        'passenger_name',
        'passenger_id',
        'passenger_phone',
        'token'
    ];
}
