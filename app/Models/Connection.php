<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Connection extends Model
{
    /** @use HasFactory<\Database\Factories\ConnectionFactory> */
    use HasFactory;
    protected $fillable = [
        'is_accepted',
        'user_id',
        'user_id2'
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
