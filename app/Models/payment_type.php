<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment_type extends Model
{
    use HasFactory;

    protected $fillable = [
        'registration_id',
        'course_fee_payment_method',
        'invoice_request',
    ];

    /**
     * Get the registration associated with the payment type.
     */
    public function registration()
    {
        return $this->belongsTo(Registration::class);
    }
}
