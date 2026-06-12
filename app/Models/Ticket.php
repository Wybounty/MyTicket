<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ticket extends Model
{
    public $timestamps = false;

    protected $primaryKey = 'id_ticket';

    protected $fillable = [
        'reference_ticket',
        'nom_demandeur',
        'prenom_demandeur',
        'email_demandeur',
        'telephone_demandeur',
        'sujet',
        'description',
        'statut',
        'date_creation',
        'date_modification',
        'id_produit',
        'id_user',
    ];

    protected function casts(): array
    {
        return [
            'date_creation' => 'datetime',
            'date_modification' => 'datetime',
        ];
    }

    /** @return BelongsTo<Produit, $this> */
    public function produit(): BelongsTo
    {
        return $this->belongsTo(Produit::class, 'id_produit', 'id_produit');
    }

    /** @return BelongsTo<User, $this> */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    /** @return HasMany<PieceJointe, $this> */
    public function pieceJointes(): HasMany
    {
        return $this->hasMany(PieceJointe::class, 'id_ticket', 'id_ticket');
    }

    /** @return HasMany<Log, $this> */
    public function logs(): HasMany
    {
        return $this->hasMany(Log::class, 'id_ticket', 'id_ticket');
    }
}
