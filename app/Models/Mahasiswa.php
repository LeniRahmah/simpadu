<?php

namespace App\Models;

use App\Models\Prodi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mahasiswa extends Model
{
    //
    protected $table = 'mahasiswa';
    protected $primaryKey = 'nim';
    protected $keyType = 'string';

    protected $fillable = [
        'nim',
        'nama',
        'tanggallahir',
        'telp',
        'email',
        'password',
        'foto',
        'id'
    ];
    public function prodi(): BelongsTo
    {
        return $this->belongsTo(Prodi::class, 'id', 'id');
    }
}
