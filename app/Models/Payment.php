<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'ticket_id', 'payment_method_id', 'payment_date',
        'proof_of_payment', 'user_id', 'status'
    ];

    public function booking()
    {
        return $this->belongsTo(BookingTicket::class, 'ticket_id');
    }

    public function method()
    {
        return $this->belongsTo(PaymentMethod::class, 'payment_method_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
