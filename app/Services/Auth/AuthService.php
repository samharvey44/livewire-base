<?php

namespace App\Services\Auth;

class AuthService
{
    public function login(string $email, string $password, bool $remember): bool
    {
        $success = auth()->attempt([
            'email' => $email,
            'password' => $password,
        ], $remember);

        if ($success) {
            session()->regenerate();
        }

        return $success;
    }

    public function logout(): void
    {
        auth()->logout();

        session()->invalidate();
        session()->regenerateToken();
    }
}
