<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Mail\ForgotPassword;

class PasswordResetLinkController extends Controller
{
    /**
     * Handle sending the reset email.
     */
    public function store(Request $request)
    {
        // Validate email
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        // Generate token
        $token = Str::random(60);

        DB::table('password_reset_tokens')->updateOrInsert(
            ['email' => $request->email],
            ['token' => $token, 'created_at' => now()]
        );


        // Send reset link email
        Mail::to($request->email)->send(new ForgotPassword($token));

        return back()->with('status', 'Password reset link sent!');
    }
}
