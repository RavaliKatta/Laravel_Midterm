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
        $user=User::all();
        $user->count();
        $this->assertEquals(50,count($user),"Should return 50 users");
    }
}
