@extends('layouts.dashboard')
@section('title')
Reschedule Applications
@endsection
@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-info" id="subtitle">
                  <h3 class="card-title">  RESCHEDULE APPLICATIONS</h3>
                  </div>
                   <div class="card-body">
                  
                   <div class="table-responsive">
                    <table class="table">
                  
                    <thead class=" text-info">
                        <th>
                         Email
                        </th>
                        <th>
                          First Name
                        </th>
                        <th>
                          Surname
                        </th>
                        
                        <th>
                          Reschedule Reason
                        </th>
                        <th>
                           RESCHEDULE  
                        </th>
                        <th>
                           DELETE REQUEST  
                        </th>
                        </thead>
                        @forelse($list as $row)
                        
                        <tbody>
                      <tr>
                        <td>
                        {{$row->email}}
                          </td>
                          <td>
                          {{$row->firstName}}
                          </td>
                          <td>
                          {{$row->surname}}
                          </td>
                          
                          <td>
                          {{$row->reschedule_reason}}
                          </td>
                             <td>
                          <a href ="/dashboard" class="btn btn-success"> RESCHEDULE </a> 
                        </td>
                        <td>
                        
                        
                        <a href ="/reschedule-delete/{{$row->id}}" class="btn btn-danger"> DELETE REQUEST</a>  
                             
                         
                        </td>
                        </tr>
                        
                        </tbody>
                        
                       
                        </table>
                        <div>
                        @empty
                       <p id="empty"> No pending application.</p>
                        </div>
                        @endforelse
                        <div>
            <h4 id="mssgschedules">  {{session ('mssg')}} </h4>
            </div>
                </div>
</div>
</div>
</div>
</div>
</div>
            @endsection