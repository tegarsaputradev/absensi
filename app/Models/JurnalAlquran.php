<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JurnalAlquran extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'jurnal_id',
        'user_username',
        'tanggal_jurnal',
        'kelas',
        'hafalan',
        'jam_mulai',
        'jam_selesai',
        'deskripsi_kegiatan'
    ];

    public function jurnal_id()
    {
        return $this->belongsTo(Jurnal::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}