<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Propiedad extends Model
{
    protected $fillable = [
        'zona_id', 
        'direccion', 
        'precio_alquiler', 
        'habitaciones', 
        'disponible', 
        'descripcion'
    ];

    protected $casts = [
        'disponible' => 'boolean',
        'precio_alquiler' => 'decimal:2'
    ];

    public function zona(): BelongsTo
    {
        return $this->belongsTo(Zona::class);
    }
}