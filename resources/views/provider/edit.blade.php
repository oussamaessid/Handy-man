@extends('provider.layout')
@section('content')

    <div class="card">
        <div class="card-header">Provider Page</div>
        <div class="card-body">

            <form action="{{ url('provider/' .$provider->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" id="id" value="{{$provider->id}}" id="id" />
                <label>Name</label></br>
                <input type="text" name="name" id="name" value="{{$provider->name}}" class="form-control"></br>
                <label>Address</label></br>
                <input type="text" name="address" id="address" value="{{$provider->address}}" class="form-control"></br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
