@extends('layouts.dashboard')
@section('title')
Dashboard
@endsection
@section('content')




<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-info" id="subtitle">
                  <h3 class="card-title">  SCHEDULE OR RE-SCHEDULE NURSE</h3>
                  </div>
                <div class="card-body">
      
   
  <div class="dropdown ">
  <a class="btn btn-info dropdown-toggle " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Select Nurse
  </a>

  <div class="dropdown-menu scrollable-menu" aria-labelledby="dropdownMenuLink">
  @foreach($nurseList as $row)
    <a class="dropdown-item " id="hovers" href="/dashboard-schedule/{{$row->id}}">{{$row->surname}},{{$row->firstName}}</a>
    @endforeach
  </div>
</div>
</div>
<div>
<h3 id="mssgschedule"> <marquee> {{session ('mssg')}} </marquee></h3>
</div>
</div>
</div>
</div>
</div>

@endsection
