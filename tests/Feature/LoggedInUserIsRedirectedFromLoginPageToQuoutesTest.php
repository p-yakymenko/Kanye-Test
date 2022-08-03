<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\User;

class LoggedInUserIsRedirectedFromLoginPageToQuoutesTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_logged_in_user_is_redirected_from_login_page_to_quoutes()
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->get('/login');

        $response->assertRedirect('/');
    }
}
