<?php

namespace App\Models\System;

use App\Traits\UUIDAsPrimaryKey;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class JenjangPendidikanMadrasah extends Model
{
    use HasFactory, UUIDAsPrimaryKey, SoftDeletes;

    protected $guarded;

    public function tingkatKelasMadrasahs()
    {
        return $this->hasMany(TingkatKelasMadrasah::class, 'id_jenjang_pendidikan');
    }
}
