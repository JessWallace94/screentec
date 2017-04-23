@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row" id="customers">
      <div class="col-md-3">
        <ul class="nav nav-pills nav-stacked">
            <li>MAIN</li>
            <li><a href="{{ url('/') }}">Dashboard</a></li>
            <li><a href="{{ url('/customers') }}">Customers</a></li>
            <li><a href="{{ url('/vehicles') }}">Vehicles</a></li>
            <li><a href="{{ url('/quotes') }}">Quotes</a></li>
            <li>MORE</li>
            <li><a href="{{ url('/support') }}">Support</a></li>
        </ul>
      </div>
      <div class="col-md-9">
        <h1>Vehicles</h1>
        <button type="button" class="btn btn-default"><a href="{{ url('/vehicles/create') }}">Create</a></button>
        <hr>
        <table class="table">
          <tr>
            <th>ID</th>
            <th>Registration</th>
            <th>Make</th>
            <th>Model</th>
            <th>Year of Manufacture</th>
            <th>Action</th>
          </tr>
          @foreach($vehicles as $vehicle)
          <tr>
            <td>{{ $vehicle->id }}</td>
            <td>{{ $vehicle->registration }}</td>
            <td>{{ $vehicle->make }}</td>
            <td>{{ $vehicle->model }}</td>
            <td>{{ $vehicle->year_of_manufacture }}</td>
            <td><a href="{{ url('/vehicles', $vehicle->id )}}">View</a></td>
          </tr>
          @endforeach

        </table>

      </div>
    </div>
</div>
@endsection
