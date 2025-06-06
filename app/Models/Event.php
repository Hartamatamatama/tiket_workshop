<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $primaryKey = 'event_id';
    protected $fillable = [
        'title', 'description', 'location', 'date', 'time',
        'price', 'quota', 'status', 'category_id', 'venue_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function venue()
    {
        return $this->belongsTo(Venue::class);
    }

    public function bookings()
    {
        return $this->hasMany(BookingTicket::class, 'event_id');
    }

    public function reviews()
    {
        return $this->hasMany(EventReview::class, 'event_id');
    }
}
