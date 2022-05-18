<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SieveControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testAddToSieveQueue()
    {
        $this->post('/sieve', [
            'size' => 1000
        ])->assertStatus(200);
    }
}
