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
                  <h3 class="card-title">  CONFIRM DELETE APPLICATION</h3>
                  </div>
                   <div class="card-body">
                   
                  <h4> Are you sure you want to delete this application?</h4>
                  <a href ="/reschedule" class="btn btn-success"> CANCEL </a>

                  <form action="/reschedule-delete/{{$list->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                            <button type="submit" class="btn btn-danger">  DELETE REQUEST </button>
                             
                          </form>
                   
                
</div>
</div>
</div>
</div>
</div>
</div>
            @endsection