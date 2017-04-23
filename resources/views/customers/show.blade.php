@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row" id="customers">
      <div class="col-md-3">
        <ul class="nav nav-pills nav-stacked">
            <li>MAIN</li>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Customers</a></li>
            <li><a href="#">Vehicles</a></li>
            <li><a href="#">Quotes</a></li>
            <li>MORE</li>
            <li><a href="#">Support</a></li>
        </ul>
      </div>
      <div class="col-md-9">
        <div class="actions">
          <button type="button" class="btn btn-default"><a href="{{ url('/customers/') }}">Back</a></button>
        </div>

        <div class="customer-info">
          <h1>{{ $customer->name }}</h1>
          <p>{{ $customer->email }}</p>
          <p>{{ $customer->phone_number }}</p>
        </div>

        @unless ($customer->vehicles->isEmpty())
        <div class="customer-vehicle">
          <h2>Vehicles</h2>
          <table class="table">
            <tr>
              <th>Registration</th>
              <th>Make</th>
              <th>Model</th>
              <th>Year of Manufacture</th>
              <th>Actions</th>
            </tr>
            @foreach($customer->vehicles as $vehicle)
            <tr>
              <td>{{ $vehicle->registration }}</td>
              <td>{{ $vehicle->make }}</td>
              <td>{{ $vehicle->model }}</td>
              <td>{{ $vehicle->year_of_manufacture }}</td>
              <td><a href="{{ url('/vehicles', $vehicle->id )}}">View</a></td>
            </tr>
            @endforeach
          </table>
          @endunless
        </div>


      </div>
    </div>
</div>
@endsection
