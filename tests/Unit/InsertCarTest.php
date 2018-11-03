<?php
namespace Tests\Unit;
use Tests\TestCase;
use App\Car;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
class InsertCarTest extends TestCase
{
    public function testInsertCar()
    {
        $car = new Car();
        $car->make = 'toyota';
        $car->model = 'camry';
        $car->year = 2017;
        $this->assertTrue($car->save());
    }
}
