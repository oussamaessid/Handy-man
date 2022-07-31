@extends('provider.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Provider Page</div>
  <div class="card-body">
      
      <form action="{{ url('provider') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop