<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Booking;
use App\Room;
use App\RoomType;
use App\User;
use Auth;
use Carbon\Carbon;

class UserController extends Controller
{
     public function showProfile()
    {
        return view('Page.index');
    }


     public function showlogin()
    {
        return view('Page.login');
    }



    public function showcheck()
    {
        $bookings = Booking::where('user_id',Auth::id())->get();
                return view('Page.check')
                ->with('bookings',$bookings);
    }



    public function showroom_booking()
    {
    	return view('Page.room_booking');
    }



    public function showfinalize()
    {
       $bookings =Booking::first();
       return view('Page.finalize')
       ->with('bookings',$bookings);
    	
    }



    public function showdetails()
    {

      //  $users = User::find(1);
        //$bookings =Booking::find(1);
        //$rooms=Room::find(1);
        //$roomtypes=RoomType::find(1);

         //return view('Page.details',compact('users','bookings',rooms,roomtypes));-->

    	return view('Page.details');
    }


   public function checkValidity(Request $request)
   {
    $rules = [
        'arriving_date'  => 'required',
        'leaving_date'   => 'required',
        'room'           => 'required' 
    ];
    $this->validate($request,$rules);
    $arrive    = Carbon::parse($request->arriving_date) ;
    $leave     = Carbon::parse($request->leaving_date) ;
    if($arrive< Carbon::now())
    {
        return back()->with('msg','Please select a valid date')
                     ->withInput();
    }
    $day = $arrive->diffInDays($leave);
    if( $day== 0)
    {
        $day = $day + 1;
    }
    $room      = $request->room ;
    $roomType      = RoomType::where('room_category',$room)->first();

    $rm    = Room::where('roomtype_id',$roomType->id)
                        ->where('room_status','empty')
                        ->first();
    $capacity = $roomType->room_capacity;
    $checkTeacher = Booking::where('user_id',Auth::id())->first();

    if($rm){
       
         return view('Page.details',compact('arrive','leave','rm','day','capacity','checkTeacher'));
    }else{
         $rm       = Room::where('roomtype_id',$roomType->id)
                        ->where('room_status','booked')
                        ->first();
        $bookings  = Booking::where('room_id',$roomType->id)
                                    ->whereBetween('arriving_date',[$arrive,$leave])
                                    ->orWhereBetween('leaving_date',[$arrive,$leave])
                                    ->first();
        if($bookings)
        {
            $msg ="No availale room is found!";
        }
        else
        {
            return view('Page.details',compact('arrive','leave','rm','day','capacity','checkTeacher')); 
        }
       }

    return back()->with('msg',$msg)
                  ->withInput();




   }


   public function teacherInfo($id,$arrive, $leave)
   {
    return view('Page.teacherInfo',compact('id','arrive','leave'));
   }

   public function teacherInfoSubmit(){

   }
}
