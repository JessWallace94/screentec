<?php

namespace ScreenTec\Http\Controllers;
use ScreenTec\Models\Quote;
use ScreenTec\Models\Customer;

use Auth;
use Illuminate\Http\Request;

class QuotesController extends Controller
{
    public function index() {
      $quotes = Quote::all();
      //$quotes = Quote::lastest('date_requested')->get();
      return view('quotes.index', compact('quotes'));
    }

    public function show($id) {
      $quote = Quote::query()
        ->where('id', $id)
        ->with('customer', 'lineItems')
        ->first();
      return view('quotes.show')
        ->with('quote', $quote)
        ->with('customer', $quote->customer)
        ->with('line_items', $quote->lineitems);
    }

    public function create() {
    $customer = Customer::pluck('name', 'id');
    return view('quotes.create', compact('customer'));
    }

    public function store(Request $request) {
    $quote = new Quote($request->except('customers'));

    $quote->customer()
        ->associate($request->customer)
        ->save();

    flash('Quote has been created')->important();

    return redirect('quotes');
}




}
