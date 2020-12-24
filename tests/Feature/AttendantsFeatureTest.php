<?php

namespace Test\Feature;

use DB;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AttendantsFeatureTest extends TestCase

{
	use RefreshDatabasel;

	@return

	public function a_user_can_see_the_list_of_attendants()
	{
		$this->createUserType();

		$user =factory(\App\User::class)->create();

		$this->loginUser($user);

		$this->createAttendant();

		$attendant = factory(\App\Attendant::class)->create();

		$response = $this->get('/attendants');

		$response->assertSee($attendant->name);
	}


}
