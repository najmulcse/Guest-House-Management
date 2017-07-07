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
      <td>{{($bookings->name)}}</td>
  
      
    <tr>
      <th>SalaryID</th>
      <td>{{($bookings->salaryID)}}</td>
    <tr>
      <th>Department</th>
      <td>{{($bookings->department)}}
    <tr>
      <th>Designation</th>
      <td>{{($bookings->designation)}}</td>
      
    <tr>
      <th>Email</th>
      <td>{{($bookings->email)}}</td>
     
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