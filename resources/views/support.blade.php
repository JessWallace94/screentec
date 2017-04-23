@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row" id="support">
      <div class="col-md-3">
        <ul class="nav nav-pills nav-stacked">
            <li>MAIN</li>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Customers</a></li>
            <li><a href="#">Vehicles</a></li>
            <li><a href="#">Quotes</a></li>
            <li>MORE</li>
            <li><a href="{{ route('support') }}">Support</a></li>
        </ul>
      </div>
      <div class="col-md-9">
        Support
      </div>
    </div>
</div>
@endsection
