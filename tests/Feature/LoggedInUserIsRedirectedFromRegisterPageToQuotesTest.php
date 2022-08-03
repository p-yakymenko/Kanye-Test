<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\User;

class LoggedInUserIsRedirectedFromRegisterPageToQuotesTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_logged_in_user_is_redirected_from_register_page_to_quotes()
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->get('/register');

        $response->assertRedirect('/');
    }
}
