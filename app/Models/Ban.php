<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Ban extends Model
{
    use HasFactory;

    protected $fillable = [
        'request_id',
    ];

    public function request() : BelongsTo
    {
        return $this->belongsTo(Request::class);
    }

}
