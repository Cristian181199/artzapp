<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * Relation (HasMany) with DoctorSchedule Model.
     */
    public function doctorSchedules() : HasMany {
        return $this->hasMany(DoctorSchedule::class);
    }

    /**
     * Relations with Appointment Model.
     */
    public function patientAppointments() : HasMany {
        return $this->hasMany(Appointment::class);
    }

    public function doctorAppointments() : HasMany {
        return $this->hasMany(Appointment::class);
    }

    /**
     * Relations with MedicalHistory Model.
     */
    public function patientHistory() : HasMany {
        return $this->hasMany(MedicalHistory::class);
    }

    public function medicHistory() : HasMany {
        return $this->hasMany(MedicalHistory::class);
    }
}
