<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessSieve;
use Illuminate\Http\Request;

class SieveController extends Controller
{
    public function queueSieveCalculation(Request $request)
    {
        ProcessSieve::dispatch();
    }
}
