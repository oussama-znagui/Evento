<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'event_id',
        'customer_id',
        'isApproved',
    ];
    protected $with = [

        'customer',

    ];

    public function customer()
    {
        return  $this->belongsTo(Customer::class);
    }
    public function event()
    {
        return  $this->belongsTo(Event::class);
    }
}
