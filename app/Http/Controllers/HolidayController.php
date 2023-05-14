<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HolidayController extends Controller
{
    //希望休入力ページの表示
    public function create() {
      return view('holidayCreate');
    }
}


