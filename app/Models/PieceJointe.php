<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PieceJointe extends Model
{
    public $timestamps = false;

    protected $primaryKey = 'id_piece';

    protected $table = 'piece_jointes';

    protected $fillable = [
        'nom_fichier',
        'chemin_fichier',
        'id_ticket',
    ];

    /** @return BelongsTo<Ticket, $this> */
    public function ticket(): BelongsTo
    {
        return $this->belongsTo(Ticket::class, 'id_ticket', 'id_ticket');
    }
}
