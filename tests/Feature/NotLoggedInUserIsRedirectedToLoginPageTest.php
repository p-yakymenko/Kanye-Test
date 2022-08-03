<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NotLoggedInUserIsRedirectedToLoginPageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_not_logged_in_user_is_redirected_to_login_page()
    {
        $response = $this->get('/');

        $response->assertRedirect('/login');
    }
}
