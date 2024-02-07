<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MedicalHistory extends Model
{
    use HasFactory;

    /**
     * Relations with Model User.
     */
    public function patient() : BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function doctor() : BelongsTo {
        return $this->belongsTo(User::class);
    }
}
