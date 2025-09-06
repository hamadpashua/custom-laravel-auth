<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConfirmEmail extends Controller
{
    public function confirm(Request $request)
    {
        // Logic to confirm the user's email address
        return view('auth.confirm-email');
    }

    public function verify(Request $request)
    {
        // Logic to handle email verification
        return redirect()->route('dashboard')->with('success', 'Email verified successfully.');
    }
}
