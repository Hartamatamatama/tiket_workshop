<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    protected $fillable = ['name', 'account_number', 'account_name'];

    public function payments()
    {
        return $this->hasMany(Payment::class, 'payment_method_id');
    }
}
