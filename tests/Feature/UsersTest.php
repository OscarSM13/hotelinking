<?php

namespace Tests\Feature;

use App\User;
use App\Code;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\Concerns\InteractsWithDatabase;

class UsersTest extends TestCase{

    use DatabaseTransactions;
	use InteractsWithDatabase;

	public function testCanLogin()
	{
		$user = factory(User::class)->create();

		$response = $this->post('/login', [
			'email' => $user->email,
			'password' => 'secret',
		]);

		$this->assertAuthenticatedAs($user);
    }
    
    public function testUserCode()
	{
		$user = factory(User::class)->create();
		$code = factory(Code::class)->create();

		$response = $this->actingAs($code)->post($code->user_id.'/generateCupon');
		$this->assertDatabaseHas('codes', [
			'user_id' => $user->id,
		]);
	}
}