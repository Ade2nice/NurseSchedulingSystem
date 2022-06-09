@extends('layouts.dashboard')
@section('title')
Dashboard
@endsection
@section('content')

@if (session('mssg'))
<div class="alert alert-success" role="alert">
{{ session('mssg') }}
</div>
@endif

<div class="content">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header card-header-info" id="subtitle">
<h3 class="card-title" id="scheduleNameTransform">  SCHEDULE FOR {{$nurseList->firstName}} {{$nurseList->surname}}</h3>
</div>
<div class="card-body">
<form method ="POST"  action ="/dashboard-schedule/{{$nurseList->id}}">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-4">
    <div id="form-rows">
     <p id="error">@error('monday') {{$message}} @enderror </p>
    <label for="firstname">Monday</label> <br>
    <select name="monday" id="gender">
    <option value=""> Select</option>
      <option value="Morning Duty"> Morning Duty</option>
      <option value="Evening Duty"> Evening Duty</option>
      <option value="Off Duty"> Off Duty</option>
    </select>
     </div>
     <div id="form-rows">
     <p id="error">@error('thursday') {{$message}} @enderror </p>
    <label for="thursday">Thursday</label> <br>
    <select name="thursday" id="gender">
    <option value=""> Select</option>
      <option value="Morning Duty"> Morning Duty</option>
      <option value="Evening Duty"> Evening Duty</option>
      <option value="Off Duty"> Off Duty</option>
    </select>
     </div>
     <div id="form-rows">
     <p id="error">@error('sunday') {{$message}} @enderror </p>
    <label for="firstname">Sunday</label> <br>
    <select name="sunday" id="gender">
    <option value=""> Select</option>
      <option value="Morning Duty"> Morning Duty</option>
      <option value="Evening Duty"> Evening Duty</option>
      <option value="Off Duty"> Off Duty</option>
    </select>
     </div>
     </div>
     
     <div class="col-md-4">
     <div id="form-rows">
     <p id="error">@error('tuesday') {{$message}} @enderror </p>
    <label for="tuesday">Tuesday</label> <br>
    <select name="tuesday" id="gender">
    <option value=""> Select</option>
      <option value="Morning Duty"> Morning Duty</option>
      <option value="Evening Duty"> Evening Duty</option>
      <option value="Off Duty"> Off Duty</option>
    </select>
     </div>
     <div id="form-rows">
     <p id="error">@error('friday') {{$message}} @enderror </p>
    <label for="friday">Friday</label> <br>
    <select name="friday" id="gender">
    <option value=""> Select</option>
      <option value="Morning Duty"> Morning Duty</option>
      <option value="Evening Duty"> Evening Duty</option>
      <option value="Off Duty"> Off Duty</option>
    </select>
     </div>
     </div>
     <div class="col-md-4">
     <div id="form-rows">
     <p id="error">@error('wednesday') {{$message}} @enderror </p>
    <label for="wednesday">Wednesday</label> <br>
    <select name="wednesday" id="gender">
    <option value=""> Select</option>
      <option value="Morning Duty"> Morning Duty</option>
      <option value="Evening Duty"> Evening Duty</option>
      <option value="Off Duty"> Off Duty</option>
    </select>
     </div>
     <div id="form-rows">
     <p id="error">@error('saturday') {{$message}} @enderror </p>
    <label for="Saturday">Saturday</label> <br>
    <select name="saturday" id="gender">
    <option value=""> Select</option>
      <option value="Morning Duty"> Morning Duty</option>
      <option value="Evening Duty"> Evening Duty</option>
      <option value="Off Duty"> Off Duty</option>
    </select>
     </div>
     </div>
</div>
     <button type="submit" class="btn btn-info">SCHEDULE NURSE</button>
</form>

</div>
</div>
</div>
</div>
</div>
</div>
@endsection