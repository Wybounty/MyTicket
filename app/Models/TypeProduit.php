<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TypeProduit extends Model
{
    public $timestamps = false;

    protected $primaryKey = 'id_type_produit';

    protected $table = 'type_produits';

    protected $fillable = [
        'libelle',
    ];

    /** @return HasMany<Produit, $this> */
    public function produits(): HasMany
    {
        return $this->hasMany(Produit::class, 'id_type_produit', 'id_type_produit');
    }
}
