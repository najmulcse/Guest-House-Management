<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
       protected $fillable = [
        'room_name', 'roomtype_id', 'room_status',
    ];

      function roomtype(){
        return $this->belongsTo('App\RoomType');
    }
    
    function Booking()
    {
        return $this->hasMany('App\Booking');
    }

}
