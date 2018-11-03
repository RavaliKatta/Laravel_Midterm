<?php

namespace Tests\Unit;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class InsertUserTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUsers()
    {
        $user = new User();
        $user->name = 'Ravali Katta';
        $user->email = 'Katta@gmail.com';
        $user->email_verified_at = now();
        $user->password = 'katta';
        $user->remember_token = str_random(10);
        $this->assertTrue($user->save());

    }

}
