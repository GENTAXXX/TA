<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logbook extends Model
{
    use HasFactory;

    protected $table = 'logbook';
    protected $primaryKey = 'id';
    protected $fillable = [
        'tanggal', 'nama', 'alamat', 'telepon', 'NIDN', 'foto'
    ];
}
