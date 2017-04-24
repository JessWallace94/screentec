<?php

namespace ScreenTec\Http\Controllers;
use ScreenTec\Models\Vehicle;
use ScreenTec\Models\Customer;

use Auth;
use Illuminate\Http\Request;
use ScreenTec\Http\Requests\VehicleRequest;

class VehiclesController extends Controller
{
    /**
    * Show all vehicles
    *
    * @return IlluminateHttpResponse
    */
    public function index() {
      $vehicles = Vehicle::all();
      return view('vehicles.index')->with('vehicles', $vehicles);
    }

    /**
    * Show a single vehicle
    *
    * @return IlluminateHttpResponse
    */
    public function show($id) {
      $vehicle = Vehicle::find($id);

      return view('vehicles.show')->with('vehicle', $vehicle);
    }

    /**
     * Create a new vehicle
     *
     * @return \Illuminate\Http\Response
     */

    public function create() {
      return view('vehicles.create');
    }

    /**
     * Save a new vehicle
     *
     * @return \Illuminate\Http\Response
     */

    public function store(VehicleRequest $request) {
      // Create a vehicle from data pulled in from form
     $vehicle = Vehicle::create($request->all());

      // Updating the pivot table
      //$customer->vehicles()->attach($request->input('vehicles'));

      flash('Vehicle has been created')->important();
      return redirect('vehicles');
    }

    /**
     * Edit an existing vehicle
     *
     * @return \Illuminate\Http\Response
     */

    public function edit($id) {
      $vehicle = Vehicle::findOrFail($id);
    //  $vehicles = Vehicle::pluck('registration', 'id');
      return view('vehicles.edit', compact('vehicle'));
    }

    /**
     * Update existing vehicle information
     *
     * @return \Illuminate\Http\Response
     */
    public function update($id, VehicleRequest $request) {
      $vehicle = Vehicle::findOrFail($id);
      $vehicle->update($request->all());

    //  $customer->vehicles()->sync($request->input('vehicles'));
      return redirect('vehicles');
    }

    /**
     * Remove the vehicle from the database and pivot
     *
     * @return \Illuminate\Http\Response
     */
     public function destroy($id) {
       $vehicle = Vehicle::findOrFail($id);
       $vehicle->delete();
       flash('Vehicle has been created');
       return redirect('vehicles');
     }



}
