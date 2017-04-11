<?php


namespace ScreenTec\Http\Controllers;

use ScreenTec\Models\Vehicle;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('dashboard');
    }
}
