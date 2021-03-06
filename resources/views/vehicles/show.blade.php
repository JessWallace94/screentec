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
        <div class="actions">
          <button type="button" class="btn btn-default"><a href="{{ url('/vehicles/') }}">Back</a></button>
        </div>

        <div class="vehicle-info">
          <h1>{{ $vehicle->registration }}</h1>
          <p>{{ $vehicle->make }}</p>
          <p>{{ $vehicle->model }}</p>
          <p>{{ $vehicle->year_of_manufacture }}</p>
        </div>

        @unless ($vehicle->customers->isEmpty())
        <div class="customer-vehicle">
          <h2>Customer</h2>
          <table class="table">
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Phone Number</th>
              <th>Actions</th>
            </tr>
            @foreach($vehicle->customers as $customer)
            <tr>
              <td>{{ $customer->name }}</td>
              <td>{{ $customer->email }}</td>
              <td>{{ $customer->phone_number }}</td>
              <td><a href="{{ url('/customers', $customer->id )}}">View</a></td>
            </tr>
            @endforeach
          </table>
          @endunless
        </div>

      </div>
    </div>
</div>
@endsection
