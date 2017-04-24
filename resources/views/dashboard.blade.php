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
        <h1>Dashboard</h1>
      </div>
    </div>
</div>
@endsection
