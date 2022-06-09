@extends('layouts.nurselayout')
@section('title')
Profile
@endsection
@section('content')
<div class="content">
<div class="card">
<div class="card-header" id="nurseP">
<h1> NURSE PROFILE </h1>
</div>
<div class="card-body">
<div class="row">
<div class="col-md-6" id="nursedetail">
<p> Firstname:    {{Auth::user()->firstName}} </p> <br>
<p> Surname:      {{Auth::user()->surname}}</p> <br>
<p> Email:        {{Auth::user()->email}} </p> <br>
<p> Phone Number: {{Auth::user()->phone}} </p> <br>
<p> Address:      {{Auth::user()->address}} </p> <br>
<p> Gender:       {{Auth::user()->gender}} </p>
</div>
<div class="col-md-6">
<img src="/images/defaultNurse.jpg" style="border-radius:20px;border:3px solid #335ACB;">
</div>
</div>
</div>
</div>
</div>
@endsection