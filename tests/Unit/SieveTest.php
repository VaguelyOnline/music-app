<?php

namespace Tests\Unit;

use App\Services\Sieve;
use PHPUnit\Framework\TestCase;

class SieveTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_sieve()
    {
        $sieve = new Sieve(5);
        $primes = $sieve->getPrimes();

        $this->assertCount(3, $primes);
        $this->assertEquals($primes, [2, 3, 5]);
    }

    public function test_sieve2()
    {
        $sieve = new Sieve(7);
        $primes = $sieve->getPrimes();

        $this->assertCount(4, $primes);
        $this->assertEquals($primes, [2, 3, 5, 7]);
    }

    public function test_sieve_for_zero()
    {
        $sieve = new Sieve(0);
        $primes = $sieve->getPrimes();

        $this->assertCount(0, $primes);
        $this->assertEquals($primes, []);
    }

    public function test_sieve_for_large()
    {
        $sieve = new Sieve(1000);
        $primes = $sieve->getPrimes();

        $this->assertCount(168, $primes);
    }

    public function test_sieve_for_very_large()
    {
        $sieve = new Sieve(500000);
        $primes = $sieve->getPrimes();

        $this->assertNotEmpty($primes);
    }
}
