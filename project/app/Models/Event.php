<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'title',
        'description',
        'date',
        'place',
        'NDP',
        'price',
        'acceptance',
        'category_id',
        'organizer_id',

    ];
    protected $with = [
        'category',

    ];




    public function category()
    {
        return  $this->belongsTo(Category::class);
    }

    public function bookings()
    {
        return  $this->hasMany(Booking::class);
    }
}
