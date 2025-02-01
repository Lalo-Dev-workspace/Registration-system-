<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'registration_id',
        'relevant_skills_or_pre_experience',
        'git_profile',
        'telegram_profile',
        'linkedin_profile',
    ];

    /**
     * Get the registration associated with the experience data.
     */
    public function registration()
    {
        return $this->belongsTo(Registration::class);
    }
}
