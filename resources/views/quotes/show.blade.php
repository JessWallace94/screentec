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
          <button type="button" class="btn btn-default"><a href="{{ url('/quotes/') }}">Back</a></button>
        </div>

        <div class="quote-info">
          <h2>Quote</h2>
          <h4>Customer Information</h4>
          <table class="table">
            <tr>
              <th>ID</th>
              <th>Customer ID</th>
              <th>Address</th>
              <th>Date Requested</th>
            </tr>
            <tr>
              <td>{{ $quote->id }}</td>
              <td>{{ $quote->customer_id }}</td>
              <td>{{ $quote->address }}</td>
              <td>{{ $quote->date_requested }}</td>
            </tr>
          </table>
          <h4>Quote Information</h4>
          <table class="table">
            <tr>
              <th>Item Description</th>
              <th>Quantity</th>
              <th>Amount</th>
              <th>Total</th>
            </tr>
            @foreach($quote->lineitems as $lineitem)
            <tr>
              <td>{{ $lineitem->item_description }}</td>
              <td>{{ $lineitem->quantity }}</td>
              <td>{{ $lineitem->amount }}</td>
              <td>Total Amount</td>
            </tr>
            @endforeach
          </table>
          <div class="actions">
            <button type="button" class="btn btn-default"><a href="{{ url('/line_items/create') }}">Add Line Item</a></button>
          </div>


        </div>


        <!--@unless ($customer->vehicles->isEmpty())
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
        </div>-->






      </div>
    </div>
</div>
@endsection
