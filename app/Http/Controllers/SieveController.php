<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSieveRequest;
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

    public function queueSieveCalculation(StoreSieveRequest $request)
    {
        // Store an instance of the SieveJob -> In the database, status: pending

        // does the job need any more data for it to do it's thing??
        ProcessSieve::dispatch($request->validated('size'));
    }

    public function apiJobs()
    {
        // API resource class anyone?? 
        return SieveJob::all();
    }

    public function create() 
    {
        return view('sieves.create');
    }

}
