<?php

namespace App\Jobs;

use App\Services\Sieve;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class ProcessSieve implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;  
    
    private int $size;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(int $size)
    {
        $this->size = $size;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $this->sieve = new Sieve($this->size);
        $primes = $this->sieve->getPrimes();
        Log::info($primes);
    }
}
