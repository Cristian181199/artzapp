<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DoctorSchedule extends Model
{
    use HasFactory;

    /**
     * Relation (Inverse HasMany, BelongsTo) with User Model
     * Im not sure to call this relation 'doctor'. Should be 'user'?
     */
    public function doctor() : BelongsTo {
        return $this->belongsTo(User::class);
    }
}
