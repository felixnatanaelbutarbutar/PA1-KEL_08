<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lingkungan extends Model
{
    use HasFactory;

    protected $fillable = ['nama'];

    public function kepalaKeluargas()
    {
        return $this->hasMany(KepalaKeluarga::class);
    }
}
