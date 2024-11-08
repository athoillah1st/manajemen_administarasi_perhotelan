<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Department extends Model
{
    use HasFactory;

    // Tentukan kolom yang dapat diisi (fillable) melalui form atau request
    protected $fillable = [
        'name',
        'description',
    ];

    /**
     * Relasi ke model AssetResponsible
     * Setiap departemen dapat memiliki banyak penanggung jawab aset
     */
    public function responsibles()
    {
        return $this->hasMany(AssetResponsible::class);
    }

    /**
     * Relasi ke model Asset atau model lain yang memerlukan referensi ke departemen
     */
    // public function assets()
    // {
    //     return $this->hasMany(Asset::class);
    // }
}
