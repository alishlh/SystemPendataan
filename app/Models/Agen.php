<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agen extends Model
{
    protected $fillable = [
        'nama_agen',
        'kontak_agen',
        'no_rekening',
        'email_agen'
    ];
}
