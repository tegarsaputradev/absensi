<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public $timestamps = false;
    protected $primaryKey = 'username';
    protected $fillable = [
        'name',
        'tgl_lahir',
        'nipy',
        'email',
        'contact',
        'address',
        'mapel',
        'username',
        'password',
        'jk',
        'is_admin'
    ];

    public function kehadiran()
    {
        return $this->hasMany(Kehadiran::class);
    }

    public function jka_jls()
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
    public function jurnal_ekstra()
    {
        return $this->hasMany(JurnalEkstra::class);
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}