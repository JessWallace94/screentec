<?php

namespace ScreenTec\Http\Controllers;
use ScreenTec\Models\LineItem;
use ScreenTec\Models\Quote;

use Illuminate\Http\Request;

class LineItemsController extends Controller
{
  public function create() {
    $quote = Quote::pluck('id', 'id');
    return view('lineitems.create', compact('quote'));
  }

  public function store($quote_id, Request $request) {
    $lineItem = new LineItem($request->all());
    $lineItem->quote()->associate($quote_id)->save();
    return redirect('quotes');
  }



}
