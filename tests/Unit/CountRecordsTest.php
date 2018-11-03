<?php

namespace Tests\Unit;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CountRecordsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCountUser(){
        $count = User::count();
        $this->assertEquals(50, $count);
    }
}
