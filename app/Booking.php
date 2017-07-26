<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $guarded = [''];

    function room(){
        return $this->belongsTo('App\Room');
    }

    function user()
    {
    	return $this->belongsTo('App\User');
    }
    function Bookingdetails()
    {
        return $this->hasMany('App\BookingDetail');
    }
}
