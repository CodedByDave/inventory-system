<?php

namespace App\Services\Auth;

use Illuminate\Support\Facades\Auth;

class LoginService
{
    public function authenticate(array $credentials): ?string
    {
        if (Auth::attempt($credentials)) {
            // Prevent session fixation attacks
            session()->regenerate();

            // Get the authenticated user's role
            $role = Auth::user()->role;

            // Map roles to dashboard routes
            $dashboards = [
                'admin'   => 'admin.dashboard',
                'hr'      => 'hr.dashboard',
                'finance' => 'finance.dashboard',
                'user'    => 'user.dashboard',
            ];

            return $dashboards[$role] ?? null;
        }

        return null;
    }

    public function logout(): void
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
    }
}
