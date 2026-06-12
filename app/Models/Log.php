<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Log extends Model
{
    public $timestamps = false;

    protected $primaryKey = 'id_log';

    protected $fillable = [
        'action',
        'description',
        'date_action',
        'id_user',
        'id_ticket',
    ];

    protected function casts(): array
    {
        return [
            'date_action' => 'datetime',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function ticket(): BelongsTo
    {
        return $this->belongsTo(Ticket::class, 'id_ticket', 'id_ticket');
    }
}
