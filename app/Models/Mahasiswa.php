<?php

namespace App\Models;

use App\Models\Prodi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mahasiswa extends Model
{
    //
    protected $table = 'mahasiswa';

    public function prodi(): BelongsTo
    {
        return $this->belongsTo(Prodi::class, 'id', 'id');
    }
}
