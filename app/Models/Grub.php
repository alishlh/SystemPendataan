<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grub extends Model
{
    protected $fillable = [
        'nama_grub',
        'tanggal_keberangkatan',
        'lokasi_keberangkatan',
        'seats_available',
        'seats_booked',
        'status'
    ];

    protected $casts = [
        'tanggal_keberangkatan' => 'date',
    ];

    public function exitData()
    {
        return $this->hasMany(ExitData::class);
    }
}
