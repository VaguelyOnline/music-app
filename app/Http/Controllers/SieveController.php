<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSieveRequest;
use App\Jobs\ProcessSieve;
use Illuminate\Http\Request;

class SieveController extends Controller


{
    public function queueSieveCalculation(StoreSieveRequest $request)
    {
        ProcessSieve::dispatch($request->validated('size'));
    }

    public function create() {
        return view('sieves.create');

    }


}
