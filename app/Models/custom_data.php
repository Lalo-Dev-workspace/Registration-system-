<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class custom_data extends Model
{
    use HasFactory;

    protected $fillable = [
        'registration_id',
        'how_did_you_hear_about_lalodev',
        'how_committed_are_you',
        'preferred_learning_format',
    ];

    /**
     * Get the registration associated with the custom data.
     */
    public function registration()
    {
        return $this->belongsTo(Registration::class);
    }
}
