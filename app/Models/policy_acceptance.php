<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class policy_acceptance extends Model
{
    use HasFactory;

    protected $fillable = [
        'registration_id',
        'accepted_terms',
        'accepted_privacy_policy',
    ];

    /**
     * Get the registration associated with the policy acceptance.
     */
    public function registration()
    {
        return $this->belongsTo(Registration::class);
    }
}
