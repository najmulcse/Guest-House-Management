<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookingDetail extends Model
{
	protected $table ="bookingdetails"; 
	protected $guarded = [''];
    function room(){
        return $this->belongsTo('App\Room');
    }

    function Booking()
    {       
     return $this->belongsTo('App\Booking');
    }

}
