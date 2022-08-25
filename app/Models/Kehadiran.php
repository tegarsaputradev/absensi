<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kehadiran extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'user_username',
        'tanggal_kehadiran',
        'ket_kehadiran',
        'jam_datang',
        'jam_pulang',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}