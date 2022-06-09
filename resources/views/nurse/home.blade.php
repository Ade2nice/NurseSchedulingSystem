@extends('layouts.nurselayout')
@section('title')
Nurse Dashboard
@endsection
@section('content')
<div class="content">
<div class="card">
<div class="card-header" id="nurseP">
<h1> NURSE DASHBOARD </h1>
</div>
<div class="card-body">
<div class="row">
<div class="col-md-6">
<h4 id="schedule"> MY CURRENT SCHEDULE </h4>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
  VIEW
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"> My Current Schedule</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <table class="table">
                <thead class="text-primary">
                      <th >
                        Nurse
                      </th>
                      <th>
                        Monday
                      </th>
                      <th>
                        Tuesday
                      </th>
                      <th>
                       Wednesday
                      </th>
                      <th>
                        Thursday
                      </th>
                      <th>
                        Friday
                      </th>
                      <th>
                       Saturday
                      </th>
                      <th>
                       Sunday
                      </th>
                    </thead>
                    
                    <tbody>
                    <tr>
                        <td>
                          {{Auth::user()->surname}}, {{Auth::user()->firstName}}
                        </td>
                        <td>
                        {{Auth::user()->monday}}
                        </td>
                        <td>
                        {{Auth::user()->tuesday}}
                        </td>
                        <td>
                                              
                        {{Auth::user()->wednesday}}
                       
                      </td>
                     
                        <td>
                        {{Auth::user()->thursday}}
                        </td>
                        <td>
                        {{Auth::user()->friday}}
                        </td>
                        <td>
                        {{Auth::user()->saturday}}
                        </td>
                        <td>
                        {{Auth::user()->sunday}}
                        </td>
                      </tr>
                      </tbody>
                        </table>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
</div>
      </div>
    </div>
  </div>
</div>

</div>
<div class="col-md-6">
<h4  id="schedule"> VIEW MY PARTNERS </h4>
<!-- Button trigger modal -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
  MY PARTNERS
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">MY PARTNERS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       @foreach($random as $row)
      <p id ="partners"> {{$row->firstName}} {{$row->surname}} <p> 
       @endforeach
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection