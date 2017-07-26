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
      
      <td>{{($booking->user->name)}}</td>
      
    <tr>
      <th>SalaryID</th>
       @if($booking->salaryID)
      <td>{{($booking->salaryID)}}</td>
      @endif
    <tr>
      <th>Department</th>
      @if($booking->department)
      <td>{{($booking->department)}}
      @endif
    <tr>
      <th>Designation</th>
      @if($booking->designation)
      <td>{{($booking->designation)}}</td>
      @endif
      
    <tr>
      <th>Email</th>
     
      <td>{{($booking->user->email)}}</td>
     
    </tr>
     <tr>
      <th>Arriving date</th>
      <td>{{($booking->arriving_date)}}</td>
     
    </tr>
     <tr>
      <th>Leaving date</th>
      <td>{{($booking->leaving_date)}}</td>
     
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