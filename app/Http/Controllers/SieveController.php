<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessSieve;
use Illuminate\Http\Request;
use App\Models\SieveJob;

class SieveController extends Controller
{
    // Display the status of all current jobs
    public function jobs()
    {
        return view('sieves.jobs');
    }


    public function queueSieveCalculation(Request $request)
    {
        ProcessSieve::dispatch();
    }

    public function apiJobs()
    {
        return SieveJob::all();
    }
}
