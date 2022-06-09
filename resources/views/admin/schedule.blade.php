@extends('layouts.dashboard')
@section('title')
Nurse Schedule
@endsection
@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-info" id="subtitle">
                  <h3 class="card-title"> VIEW SCHEDULED NURSES  </h3>
                  </div>
                <div class="card-body">
      

      <table class="table">
                <thead class="text-info">
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
                    @foreach($schedule as $row)
                    <tbody>
                    <tr>
                        <td>
                        {{$row->firstName}}, {{$row->surname}}
                        </td>
                        <td>
                        {{$row->monday}}
                        </td>
                        <td>
                        {{$row->tuesday}}
                        </td>
                        <td>
                                              
                        {{$row->wednesday}}
                       
                      </td>
                     
                        <td>
                        {{$row->thursday}}
                        </td>
                        <td>
                        {{$row->friday}}
                        </td>
                        <td>
                        {{$row->saturday}}
                        </td>
                        <td>
                        {{$row->sunday}}
                        </td>
                      </tr>
                      </tbody>
                      @endforeach
                        </table>
      
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
</div>
</div>

@endsection
@section('scripts')

@endsection