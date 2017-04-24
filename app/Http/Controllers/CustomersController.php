<?php

namespace ScreenTec\Http\Controllers;
use ScreenTec\Models\Customer;
use ScreenTec\Models\Vehicle;

use Auth;
use Illuminate\Http\Request;
use ScreenTec\Http\Requests\CustomerRequest;

class CustomersController extends Controller
{
    /**
     * Show all customers
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
      $customers = Customer::all();
      //$customers = Customer::latest('created_at')->get();
      return view('customers.index')->with('customers', $customers);
    }

    /**
     * Show an individual customer.
     *
     * @return \Illuminate\Http\Response
     */

    public function show($id) {
      $customer = Customer::find($id);

      return view('customers.show')->with('customer', $customer);
    }

    /**
     * Create a new customer
     *
     * @return \Illuminate\Http\Response
     */

    public function create() {
      $vehicles = Vehicle::pluck('registration', 'id');
      return view('customers.create', compact('vehicles'));
    }

    /**
     * Save a new customer
     *
     * @return \Illuminate\Http\Response
     */

    public function store(CustomerRequest $request) {

      // Creating a customer and associating it with authenticated user
      $customer = Auth::user()->customers()->create($request->all());

      // Updating the pivot table
      $customer->vehicles()->attach($request->input('vehicles'));

      flash('Your customer has been created')->important();
      return redirect('customers');
    }

    /**
     * Edit an existing customer
     *
     * @return \Illuminate\Http\Response
     */

    public function edit($id) {
      $customer = Customer::findOrFail($id);
      $vehicles = Vehicle::pluck('registration', 'id');
      return view('customers.edit', compact('customer', 'vehicles'));
    }

    /**
     * Update an existing customer
     *
     * @return \Illuminate\Http\Response
     */
    public function update($id, CustomerRequest $request) {
      $customer = Customer::findOrFail($id);
      $customer->update($request->all());

      $customer->vehicles()->sync($request->input('vehicles'));
      return redirect('customers');
    }

    /**
     * Delete a customer and it's pivot relation
     *
     * @return \Illuminate\Http\Response
     */

     public function destroy($id) {
       $customer = Customer::findOrFail($id);
       $customer->vehicles()-detach();
     }



}
