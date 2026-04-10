<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['name'])]
class Technician extends Model
{
    use HasFactory;

    /**
     * Get the appointments for the technician.
     */
    public function appointments(): HasMany
    {
        return $this->hasMany(Appointment::class);
    }
}

