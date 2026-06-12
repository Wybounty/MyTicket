<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Produit extends Model
{
    public $timestamps = false;

    protected $primaryKey = 'id_produit';

    protected $fillable = [
        'reference',
        'nom_produit',
        'description',
        'image',
        'id_type_produit',
    ];

    /** @return BelongsTo<TypeProduit, $this> */
    public function typeProduit(): BelongsTo
    {
        return $this->belongsTo(TypeProduit::class, 'id_type_produit', 'id_type_produit');
    }

    /** @return HasMany<Ticket, $this> */
    public function tickets(): HasMany
    {
        return $this->hasMany(Ticket::class, 'id_produit', 'id_produit');
    }
}
