<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Zona extends Model
{
    protected $fillable = ['nombre', 'ciudad', 'descripcion'];

    public function propiedades(): HasMany
    {
        return $this->hasMany(Propiedad::class);
    }
}