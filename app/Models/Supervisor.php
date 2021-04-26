<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{
    use HasFactory;

    protected $table = 'supervisor';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id', 'nama', 'telepon', 'no_pegawai', 'foto'
    ];
}
