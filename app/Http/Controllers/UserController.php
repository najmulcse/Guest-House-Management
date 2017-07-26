<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\BookingDetail;
use App\Booking;
use App\Room;
use App\RoomType;
use App\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class UserController extends Controller
{
  public function __construct()
    {
        $this->middleware('auth');
    }
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



    public function showfinalize(Request $request)
    {

      $arriving_date = $request->arrive;
      $leaving_date  = $request->leave;
      $room          = $request->room;
      $roomTypeId    =$request->roomTypeId;

      $booking = Booking::create([
              'user_id'       => Auth::user()->id,
              'arriving_date' => $arriving_date,
              'leaving_date'  => $leaving_date ,
              'room_id'       => $room,
              ]);
          
              $start_dt = Carbon::parse( $arriving_date)->toDateString();
              $end_dt   = Carbon::parse( $leaving_date)->toDateString();
              $date     = $start_dt ;
      if($booking){
            while(strtotime($date) <= strtotime($end_dt))
            {
             $bookingdetails = BookingDetail::create([
              'booking_id'      =>$booking->id ,
              'booking_date'    => $date,
              'roomtype_id'         => $roomTypeId
              ]);
              $date = date ("Y-m-d", strtotime("+1 day", strtotime($date)));
             }

        return view('Page.finalize',compact('booking'));
                    
       }
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
        $day =  1;
    }
    
    $room      = $request->room ;
    
     $roomType  = RoomType::where('room_category',$room)->first();
     $roomTypeId = $roomType->id;
     $rm    = Room::where('roomtype_id',$roomTypeId)
                         ->first();



   $bookingdetails = BookingDetail::whereBetween(
                            'booking_date',[$request->arriving_date,$request->leaving_date])
                         ->where('roomtype_id',$roomTypeId)
                        ->first();
    // dd($bookingdetails);
    $capacity = $roomType->room_capacity;
    if(!$bookingdetails){
    
       // $roomNumber = Room::where('roomtype_id',$roomType->id)->first()->id;

       return view('Page.details',compact('arrive','leave','rm','roomTypeId','day','capacity','checkTeacher'));
       
    }
    else{
        $msg ="No availale room is found!";
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


   public function cancelBooking($id)
   {
      Booking::findOrFail($id)->delete();
      BookingDetail::where('booking_id',$id)->delete();
      return back()->with('msg'," Booking canceled Successfully.");
   }
}
