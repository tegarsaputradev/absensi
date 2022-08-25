<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TahunAjaran extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'tahun_ajaran'
    ];
}