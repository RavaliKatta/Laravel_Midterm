<?php
namespace Tests\Unit;
use Tests\TestCase;
use App\Car;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
class InsertCarTest extends TestCase
{
    use DatabaseTransactions;
    public function testInsertCar()
    {
        $car = new Car();
        $car->make = 'ford';
        $car->model = 'figo';
        $car->year = 2017;
        $car->user_id=51;
        $this->assertTrue($car->save());
    }
}
