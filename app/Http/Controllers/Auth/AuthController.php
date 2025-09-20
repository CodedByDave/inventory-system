<?php

namespace App\Http\Controllers\auth;

use App\Services\Auth\LoginService;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * @param LoginService $loginService
     */

    public function __construct(private readonly LoginService $loginService) {}

    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        $dashboardRoute = $this->loginService->authenticate($credentials);

        if ($dashboardRoute) {
            // Store dashboard route in session for JS redirect
            return redirect()->route('login')->with([
                'success' => 'Login successful!',
                'redirectTo' => route($dashboardRoute)
            ]);
        }

        return back()->with('error', 'Invalid email or password.');
    }

    public function logout()
    {
        $this->loginService->logout();

        return redirect()->route('login');
    }
}
