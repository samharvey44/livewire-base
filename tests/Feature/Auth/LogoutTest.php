<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LogoutTest extends TestCase
{
    use RefreshDatabase;

    public function test_an_authenticated_user_is_logged_out_successfully()
    {
        $this->actingAs(User::factory()->create());

        $this->post(route('logout'))->assertRedirect(route('login'));

        $this->assertGuest();
    }
}
