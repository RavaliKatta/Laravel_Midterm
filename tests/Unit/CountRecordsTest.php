<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class CountRecordsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCountRecords()
    {
        $count = User::count();
        $this->assertEquals(50, $count);
    }
}
