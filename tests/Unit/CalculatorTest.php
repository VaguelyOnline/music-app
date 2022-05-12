<?php

namespace Tests\Unit;

use App\Services\CalculatorService;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    private $calculator;

    // Setup some state - creating a project that the tests are going to be working on...
    public function setUp(): void
    {
        $this->calculator = new CalculatorService();
    }

    public function tearDown(): void
    {
        $this->calculator = null;
    }


    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_simple_addition()
    {
        
        $this->assertTrue($this->calculator->add(1, 2) == 3, '1 and 2 is equal to the value of 3');
        $this->assertEquals($this->calculator->add(1, 2), 3);
    }

    public function test_addition_negative_numbers()
    {
        
        $this->assertEquals($this->calculator->add(-1, -2), -3, 'Two negative numbers');
        $this->assertEquals($this->calculator->add(-1, 10), 9, 'First arg negative, second arg pos');
        $this->assertEquals($this->calculator->add(3, -7), -4, 'First arg pos, second negative');
    }

    public function test_large_number_addition()
    {
        
    }

    public function test_calculator_throws_exception_with_non_number_inputs()
    {
    }

    public function test_floating_point_addition()
    {

    }

    public function test_division_by_zero_throws_exception()
    {
        $this->expectException(InvalidArgumentException::class);
        
        $this->calculator->div(1, 0);
    }

    public function test_subtraction()
    {
        
        $this->assertEquals(
            $this->calculator->sub(8, 2), 
            6
        );
    }

    public function test_multiplication()
    {
    }

    public function test_division()
    {
    }
}
