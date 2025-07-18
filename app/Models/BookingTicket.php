<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Payment;
use App\Models\Event;

class BookingTicket extends Model
{
    protected $table = 'booking_tickets';
    protected $primaryKey = 'booking_ticket_id';
    protected $fillable = ['user_id', 'event_id', 'quantity', 'total_price', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }

    public function payment()
    {
        return $this->hasOne(Payment::class, 'ticket_id');
    }
}
