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
        <h1>Quotes</h1>
        <button type="button" class="btn btn-default"><a href="{{ url('/quotes/create') }}">Create</a></button>

        <hr>
        <table class="table">
          <tr>
            <th>ID</th>
            <th>Customer Name</th>
            <th>Address</th>
            <th>Date Requested</th>
            <th>Actions</th>
          </tr>
          @foreach($quotes as $quote)
          <tr>
            <td>{{ $quote->id }}</td>
            <td>{{ $quote->customer_id }}</td>
            <td>{{ $quote->address }}</td>
            <td>{{ $quote->date_requested }}</td>
            <td><a href="{{ url('/quotes', $quote->id )}}">View</a></td>
          </tr>
          @endforeach

        </table>

      </div>
    </div>
</div>
@endsection
