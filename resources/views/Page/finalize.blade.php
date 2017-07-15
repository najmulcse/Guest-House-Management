@extends('layout')

@section('body-content')

<div class="container">
        
      <div class="jumbotron">

      <div class="panel-heading">
                 <div class="panel-title text-center">
                    <h2 class="title">Teacher/Offier Information</h2>
                  
                  </div>
              </div> 

              <table class="table table-hover">
                        <tbody>
    <tr>
      <th>Name</th>
      @if($bookings->name)
      <td>{{($bookings->name)}}</td>
      @endif
      
    <tr>
      <th>SalaryID</th>
       @if($bookings->salaryID)
      <td>{{($bookings->salaryID)}}</td>
      @endif
    <tr>
      <th>Department</th>
      @if($bookings->department)
      <td>{{($bookings->department)}}
      @endif
    <tr>
      <th>Designation</th>
      @if($bookings->designation)
      <td>{{($bookings->designation)}}</td>
      @endif
      
    <tr>
      <th>Email</th>
      @if($bookings->email)
      <td>{{($bookings->email)}}</td>
     @endif
    </tr>
     <tr>
      <th>Arriving date</th>
      <td>{{($bookings->arriving_date)}}</td>
     
    </tr>
     <tr>
      <th>Leaving date</th>
      <td>{{($bookings->leaving_date)}}</td>
     
    </tr>
  </tbody>
</table>

<hr>

<p class="text-right">
          
 Teacher/Officer Signature 
           </p>

      
    
           </div>

             <p class="text-right">
          
  <a class="btn btn-md btn-primary" href="{{('#')}}" role="button"><i class="glyphicon glyphicon-forward"></i>Print info</a> 
           </p>


           </div> 



       </div> 
@endsection