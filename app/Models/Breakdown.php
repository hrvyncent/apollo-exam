<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Breakdown extends Model
{
    use HasFactory;

    protected $fillable = ['values' ,'random_id'];

    /**
     * Belongs to relationship with Random model.
     */
    public function random() : BelongsTo
    {
        return $this->belongsTo(Random::class,'random_id');
    }
}
