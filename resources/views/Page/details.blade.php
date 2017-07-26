@extends('layout')

@section('body-content')

 <div class="container">
    <div class="jumbotron">
        <div class="panel-heading">
                 <div class="panel-title text-center">
                    <h2 class="title">Details Confirmation</h2>
                  
                  </div>
        </div> 

          
          <form action="{{route('finalize',['room_id' =>$rm->id])}}" method="POST" class="form-horizontal" role="form">
            {{csrf_field()}} 
          <input type="hidden" name="arrive" value="{{$arrive}}">
          <input type="hidden" name="leave" value="{{$leave}}">
          <input type="hidden" name="room" value="{{$rm->id}}">
          <input type="hidden" name="roomTypeId" value="{{$roomTypeId}}">
 
          <button class="btn btn-primary pull-right" type="submit"  role="button"><span class="glyphicon glyphicon-plus"></span>Confirm Booking</button>
             
          </form>



        <table class="table table-hover">
            <tbody>
                      <tr>
                             <th>ID</th>
                              <td>{{('1')}}</td>
                      <tr>
                             <th>Arriving Date</th>
                              <td>{{$arrive}}</td>
                      <tr>
                             <th>Leaving Date</th>
                             <td>{{$leave}}</td>
                      <tr>


                              <th>Total Days</th>
                              <td>{{$day}}</td>
                      <tr>
                             <th>Room Name</th>
                             <td>{{$rm->room_name}}</td>
                      <tr>
                              <th>Room Capacity</th>
                              <td>{{$capacity}}</td>
  
    </tr>
  </tbody>
</table>



</div>

</div>

@endsection

{{--    $date = \Carbon\Carbon::parse('2016-09-17 11:00:00');
                              $now =\Carbon\Carbon::now();

                              $diff = $date->diffInDays($now);
                              <td> {{ $diff }} </td>
                              echo $diff;
                        --}}
