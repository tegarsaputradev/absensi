<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Signature extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'nama',
        'NIPY',
        'kelas'
    ];
}