<?php

namespace Tests\Feature\Auth\Livewire;

use App\Livewire\Login;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_view_login_page(): void
    {
        $this->get(route('login'))
            ->assertSuccessful()
            ->assertSeeLivewire(Login::class);
    }

    public function test_a_user_can_login_with_valid_credentials(): void
    {
        $newUser = User::factory()->create();

        Livewire::test(Login::class)
            ->assertSuccessful()
            ->set('email', $newUser->email)
            ->set('password', 'password')
            ->call('login')
            ->assertRedirect(route('home'));

        $this->assertAuthenticatedAs($newUser);
    }

    public function test_a_user_cannot_login_with_invalid_credentials(): void
    {
        $newUser = User::factory()->create();

        Livewire::test(Login::class)
            ->assertSuccessful()
            ->set('email', $newUser->email)
            ->set('password', 'wrong-password')
            ->call('login')
            ->assertDispatched('toast-error', 'Invalid email or password.');

        $this->assertGuest();
    }
}
