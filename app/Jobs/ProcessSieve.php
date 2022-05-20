<?php

namespace App\Jobs;

use App\Services\Sieve;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ProcessSieve implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private $sieve = null;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->sieve = new Sieve(25);
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        echo 'Handling the job!';
        $this->sieve->getPrimes();
        
        // show the primes 





    }
}
