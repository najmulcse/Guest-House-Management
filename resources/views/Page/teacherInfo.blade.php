@extends('layout')

@section('body-content')

 <div class="container">
    <div class="jumbotron">
          <p class="text-right">Please continue to book the room... </p>
        <div class="panel-heading">
                 <div class="panel-title text-center">
                    <h2 class="title">Teacher Information</h2>
                  
                  </div>
        </div> 

         


       <form class="form-horizontal" method="POST" action="{{route('teacherInfoSubmit')}}">
          <dir>
            @if(session('msg'))
                <div class="alert alert-danger">
                  {{session('msg')}}
                </div>
            @endif
          </dir>
            {{ csrf_field() }}

          <input type="hidden" name="arrive" value="{{$arrive}}">
          <input type="hidden" name="leave" value="{{$leave}}">
          <div class="form-group @if($errors->has('name')) has-error @endif">
              <label class="col-sm-4 control-label">Name</label>
               <div class="col-sm-8">
              <input type="text" class="form-control"  name ="name" id="exampleInputEmail3" value="{{old('name')}}">
              </div>
              {!!$errors->first('name','<span class="help-block">:message</span>')!!}
          </div>
          <div class="form-group @if($errors->has('email')) has-error @endif">
              <label class="col-sm-4 control-label">Email</label>
              <div class="col-sm-8">
              <input type="email" class="form-control"  name ="email" id="exampleInputEmail3" value="{{old('email')}}">
              </div>
              {!!$errors->first('email','<span class="help-block">:message</span>')!!}
          </div>
          <div class="form-group @if($errors->has('department')) has-error @endif">
              <label class="col-sm-4 control-label">Department</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="department" id="exampleInputPassword3" value="{{old('leaving_date')}}">
              </div>
              {!!$errors->first('department','<span class="help-block">:message</span>')!!}
          </div>

          <div class="form-group @if($errors->has('designation')) has-error @endif">
             <div class="dropdown">
                <label class="col-sm-4 control-label">Designation</label>
                <div class="col-sm-8">
                 <select class="form-control" name="designation" >
                    <option value="" selected="">Select Designation</option>
                    <option value="teacher" >Teacher</option>
                    <option value="officer" >Officer</option>
                    <option value="Employee">Employee</option>
                    
                </select>
                </div>
                {!!$errors->first('designation','<span class="help-block">:message</span>')!!}
            </div>
            
        </div>
        <div class="form-group">
       <label for="inputPassword3" class="col-sm-4 control-label">Salary ID</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="inputPassword3" placeholder="Salary ID">
        </div>
      </div>
        <div class="form-group">
          <div class="col-sm-offset-4 col-sm-6">
               <button type="submit" class="btn btn-primary">Submit</button>
             </div>
        </div>
           
 
    </form>


</div>

</div>

@endsection

{{--    $date = \Carbon\Carbon::parse('2016-09-17 11:00:00');
                              $now =\Carbon\Carbon::now();

                              $diff = $date->diffInDays($now);
                              <td> {{ $diff }} </td>
                              echo $diff;
                        --}}
