@extends('layouts.nurselayout')
@section('title')
Nurse Schedule
@endsection
@section('content')
<div class="content">
<div class="card">
<div class="card-header" id="nurseP">
<h1> APPLY FOR RE-SCHEDULE </h1>
</div>
<div class="card-body">
<div>
<h3 id="mssgschedule"> <marquee> {{session ('mssg')}} </marquee></h3>
</div>
<form action="/nurse/schedule/" method="POST">
@csrf
    <div id ="form-rows">
    <p id="error">@error('firstName') {{$message}} @enderror </p>
    <label for="Re-Schedule Application" id="rescheduleform"> First Name </label> <br> 
    <input type="text" id="Semail" placeholder="firstname" name="firstName"> </input>
    </div>
    <div id ="form-rows">
    <p id="error">@error('surname') {{$message}} @enderror </p>
    <label for="Re-Schedule Application" id="rescheduleform"> Surname </label> <br> 
    <input type="text" id="Semail" placeholder="surname" name="surname"> </input>
    </div>
    <div id ="form-rows">
    <p id="error">@error('email') {{$message}} @enderror </p>
    <label for="Re-Schedule Application" id="rescheduleform"> Email </label> <br> 
    <input type="text" id="Semail" placeholder="email" name="email"> </input>
    </div>
    <div id ="form-rows">
    <p id="error">@error('reschedule_reason') {{$message}} @enderror </p>
    <label for="Reason for Application " id="rescheduleform"> Reason for Application </label> <br> 
    <textarea type="text" id="Semail" cols="30" rows="3"name="reschedule_reason"> </textarea>
    </div>
    <button type="submit" class="btn btn-primary">SUBMIT</button>
    </form>
</div>
</div>
</div>
@endsection