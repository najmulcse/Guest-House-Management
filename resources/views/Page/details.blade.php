@extends('layout')

@section('body-content')

 <div class="container">
    <div class="jumbotron">
        <div class="panel-heading">
                 <div class="panel-title text-center">
                    <h2 class="title">Details Confirmation</h2>
                  
                  </div>
        </div> 

          <p class="alert alert-info text-right">
          @if(!empty($checkTeacher))
            <a class="btn btn-primary" href="{{route('finalize',['room_id' =>$rm->id])}}" role="button"><span class="glyphicon glyphicon-plus"></span>Confirm Booking</a>
          @else
           <a class="btn btn-primary" href="{{route('teacherInfo',['room_id' =>$rm->id,'arrive' =>$arrive,'leave'=>$leave])}}" role="button"><span class="glyphicon glyphicon-plus"></span>Next</a>
          @endif 
         </p>



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
