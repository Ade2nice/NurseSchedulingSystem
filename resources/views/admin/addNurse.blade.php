<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
@extends('layouts.dashboard')
@section('title')
Add Nurses
@endsection
@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-info" id="subtitle">
                  <h4 class="card-title"> ADD NURSE</h4>
                  
                </div>
 @if (session('status'))
<div class="alert alert-info" role="alert">
{{ session('status') }}
</div>
 @endif
<div class="card-body">

<form method ="POST"  action ="/addNurse">
  @csrf
  <div id="form-rows">
  <p id="error">@error('firstname') {{$message}} @enderror </p>
    <label for="firstname">First Name</label> <br>
    <input type="text" placeholder="First Name" name="firstName">
     </div>
     <div id="form-rows">
     <p id="error">@error('surname') {{$message}} @enderror </p>
    <label for="Surname">Surname</label> <br>
    <input type="text" placeholder="Surname" name="surname">
     </div>
     <div id="form-rows">
     <p id="error">@error('email') {{$message}} @enderror </p>
    <label for="Email">Email</label> <br>
    <input type="email" name="email" id="" placeholder="Email"> 
     </div>
     <div id="form-rows">
     <p id="error"> @error('phone') {{$message}} @enderror </p>
    <label for="firstname">Phone Number</label> <br>
    <input type="text" placeholder="Phone Number" name="phone">
     </div>
     <div id="form-rows">
     <p id="error">@error('gender') {{$message}} @enderror </p>
    <label for="firstname">Gender</label> <br>
    <select name="gender" id="gender">
    <option value=""> Select</option>
      <option value="male"> Male</option>
      <option value="female"> Female</option>
    </select>
     </div>
     <div id="form-rows">
     <p id="error">@error('password') {{$message}} @enderror </p>
    <label for="Default NurseP">Default Nurse Password</label> <br>
    <input type="text" placeholder="Set Default Password" name="password" id="default">
     </div>
     <div id="form-rows">
     <p id="error">@error('address') {{$message}} @enderror </p>
    <label for="firstname">Address</label> <br>
   <textarea name="address" id="address" cols="30" rows="3" placeholder="Address">

   </textarea>
     </div>
  <button type="submit" class="btn btn-info">ADD NURSE</button>
</form>
</div>
</div>
</div>


@endsection