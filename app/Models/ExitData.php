<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExitData extends Model
{
    protected $fillable = [
        'grub_id',
        'agen_id',
        'kode_booking',
        'nama',
        'no_passport',
        'status_pembayaran',
        'nominal_pembayaran',
        'seat_number'
    ];

    protected $casts = [
        'nominal_pembayaran' => 'decimal:2',
    ];

    public function grub()
    {
        return $this->belongsTo(Grub::class);
    }
    public function agen()
    {
        return $this->belongsTo(Agen::class);
    }
}
