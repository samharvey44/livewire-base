<?php

namespace App\Livewire;

use App\Services\Auth\AuthService;
use Illuminate\View\View;
use Livewire\Component;

class Login extends Component
{
    public string $email = '';

    public string $password = '';

    public bool $remember = false;

    public function render(): View
    {
        return view('livewire.auth.login');
    }

    public function login(): void
    {
        $this->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
            'remember' => ['nullable', 'boolean'],
        ]);

        $success = app(AuthService::class)->login(
            $this->email,
            $this->password,
            $this->remember,
        );

        if ($success) {
            $this->redirect(session()->pull('url.intended', route('home')));

            return;
        }

        $this->dispatch('toast-error', 'Invalid email or password.');
    }
}
