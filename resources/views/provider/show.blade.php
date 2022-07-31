@extends('provider.layout')
@section('content')


<div class="card">
  <div class="card-header">Provider Page</div>
  <div class="card-body">


        <div class="card-body">
        <h5 class="card-title">Name : {{ $provider->name }}</h5>
        <p class="card-text">Address : {{ $provider->address }}</p>

  </div>

    </hr>

  </div>
</div>
