<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chirp extends Model
{
    //
    protected $fillable = [
        'message'];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo

    {
        return $this->belongsTo(User::class);
    }
}
