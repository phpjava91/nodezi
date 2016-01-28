<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RepairPumpController extends Controller
{
    public function index()
    {
    	return view('repair_pump.index');
    }
}
