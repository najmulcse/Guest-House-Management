@extends('layout')

@section('body-content')
  <div class="jumbotron">
  
    <form class="form-inline" method="POST" action="{{route('checkValidity')}}">
            {{ csrf_field() }}

          <dir>
            @if(session('msg'))
                <div class="alert alert-danger">
                  {{session('msg')}}
                </div>
            @endif
          </dir>
          <div class="form-group @if($errors->has('arriving_date')) has-error @endif">
              <label >Arriving Date</label>
              <input type="date" class="form-control"  name ="arriving_date" id="exampleInputEmail3" value="{{old('arriving_date')}}">
              {!!$errors->first('arriving_date','<span class="help-block">:message</span>')!!}
          </div>

          <div class="form-group @if($errors->has('leaving_date')) has-error @endif">
              <label class="">Leaving Date</label>
              <input type="date" class="form-control" name="leaving_date" id="exampleInputPassword3" value="{{old('leaving_date')}}">
              {!!$errors->first('leaving_date','<span class="help-block">:message</span>')!!}
          </div>

          <div class="form-group @if($errors->has('room')) has-error @endif">
             <div class="dropdown">

                 <select class="btn btn-md" name="room">
                    <option value="" selected="">SELECT ROOM</option>
                    <option value="small" >SMALL</option>
                    <option value="medium" >MEDIUM</option>
                    <option value="large">LARGE</option>
                    <option value="extra_large">EXTRA LARGE</option>
                </select>
                {!!$errors->first('room','<span class="help-block">:message</span>')!!}
            </div>
            
        </div>
        <div class="form-group">

          <button type="submit" class="btn btn-primary">Check Validity</button>
        </div>
           
 
    </form>
  
   </div>
@endsection
