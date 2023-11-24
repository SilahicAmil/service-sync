<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'vehicle_make',
        'vehicle_model',
        'vehicle_year',
        'vehicle_miles',
        'vehicle_vin',
        'service_name',
        'service_date',
        'service_price',
        'additional_notes',
        'user_id',
    ];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
