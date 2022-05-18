<?php

namespace App\Services;

class Sieve
{
    private int $size;
    private array $numbers; // array or all numbers 0 - $size -> true / false
    private array $primes = [];  // array of primes
    private bool $initialised = false;

    public function __construct($size)
    {
        $this->size = $size;
    }

    public function getPrimes(): array
    {
        if (!$this->initialised)
            $this->primes = $this->calculatePrimes();

        return $this->primes;
    }

    private function calculatePrimes(): array
    {
        $this->initialised = true;
        $this->numbers = $this->initArray($this->size);
        $this->doSieve();
        
        return $this->extractPrimes();
    }

    // Walk the array, removing (marking false) the multiples, of the current number
    private function doSieve()
    {
        for ($i=2; $i < $this->size / 2; $i++)
            $this->markMultiplesAsFalse($i);
    }

    private function markMultiplesAsFalse($base)
    {
        $currentNumber = 2 * $base;
        while($currentNumber <= $this->size)
        {
            $this->numbers[$currentNumber] = false;

            // advance to the next multiple
            $currentNumber += $base;
        }
    }

    private function extractPrimes(): array
    {
        $primes = [];

        // if the value at the current position is true - add to the primes array
        for ($i = 2; $i < count($this->numbers); $i++)
            if ($this->numbers[$i])
                $primes[] = $i;

        return $primes;
    }

    private function initArray($size)
    {
        $array = [];
        for($i = 0; $i <= $size; $i++)
            $array[] = true;

        return $array;
    }
}