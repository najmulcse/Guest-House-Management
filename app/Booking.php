<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'name', 'salaryID', 'designation','department','email','arriving_date','	leaving_date','room_id','status',
    ];

    function room(){
        return $this->belongsTo('App\Room');
    }

    function user()
    {
    	return $this->belongsTo('App\User');
    }
}
