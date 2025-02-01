<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lalo_related extends Model
{
    use HasFactory;

    protected $fillable = [
        'registration_id',
        'preferred_track',
        'why_join_lalodev',
        'specific_skills_or_knowledge',
        'current_job_role',
        'industry',
    ];

    /**
     * Get the registration associated with the LaloRelated data.
     */
    public function registration()
    {
        return $this->belongsTo(Registration::class);
    }
}
