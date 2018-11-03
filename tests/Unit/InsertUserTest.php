<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;

class InsertUserTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsertUser()
    {
        $user = new User();
        $user->name = 'Ravali Katta';
        $user->email = 'kattaa@gmail.com';
        $user->email_verified_at = now();
        $user->password = 'katta';
        $user->remember_token = str_random(10);
        $this->assertTrue($user->save());

    }
}
