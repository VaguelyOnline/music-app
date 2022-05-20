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
        ProcessSieve::dispatch($request->validated('size'));
    }

    public function apiJobs()
    {
        return SieveJob::all();
    }

    public function create() 
    {
        return view('sieves.create');
    }

}
