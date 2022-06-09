@extends('layouts.dashboard')
@section('title')
Nurse List
@endsection
@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-info" id="subtitle">
                  <h4 class="card-title">LIST OF REGISTERED NURSES </h4>
                  </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                  
                    <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          First Name
                        </th>
                        <th>
                          Surname
                        </th>
                        <th>
                         Gender
                        </th>
                        <th>
                          Address
                        </th>
                        <th>
                          Phone Number
                        </th>
                        <th>
                          Email
                        </th>
                      </thead>
                      @foreach ($list as $row)  
                      <tbody>
                      <tr>
                          <td>
                            {{$row->id}}
                          </td>
                          <td>
                          {{$row->firstName}}
                          </td>
                          <td>
                          {{$row->surname}}
                          </td>
                          <td>
                                                
                          {{$row->gender}}
                         
                        </td>
                          
                          <td>
                          {{$row->address}}
                          </td>
                          <td>
                          {{$row->phone}}
                          </td>
                          <td>
                          {{$row->email}}
                          </td>
                        </tr>
                        </tbody>
                        @endforeach
                    </table>
                  </div>
                </div>
              </div>
            </div>
            @endsection