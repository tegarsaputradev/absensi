<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurnal extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'id';
    public $fillable = [
        'id',
        'nama_jurnal'
    ];

    public function jurnal_data()
    {
        return $this->hasMany(JurnalData::class);
    }

    public function jurnal_kelas()
    {
        return $this->hasMany(JurnalKelas::class);
    }
    public function jurnal_alquran()
    {
        return $this->hasMany(JurnalAlquran::class);
    }
}