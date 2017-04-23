<?php

namespace ScreenTec\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function support() {
      return view('support');
    }
}
