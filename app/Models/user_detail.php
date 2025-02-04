<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_detail extends Model
{
    use HasFactory;

    protected $fillable = [
        'registration_id',
        'location',
        'timezone',
        'availability',
        'emergency_contact_name',
        'referral_code',
        'alternative_email',
        'preferred_comm_type',
    ];

    /**
     * Get the registration associated with the user details.
     */
    public function registration()
    {
        return $this->belongsTo(Registration::class);
    }
}
