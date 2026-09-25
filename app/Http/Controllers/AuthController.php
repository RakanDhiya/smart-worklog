<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Process account login.
     */
    public function login(Request $request)
    {
        $validated = $request->validate(
            [
                'email' => [
                    'required',
                    'email',
                ],

                'password' => [
                    'required',
                    'string',
                ],
            ],
            [
                'email.required' => 'Email wajib diisi.',
                'email.email' => 'Format email tidak valid.',

                'password.required' => 'Password wajib diisi.',
                'password.string' => 'Password harus berupa teks.',
            ]
        );

        $account = Account::with('role')
            ->where('email', $validated['email'])
            ->first();

        /*
        |--------------------------------------------------------------------------
        | Check Account
        |--------------------------------------------------------------------------
        */

        if (! $account) {
            return back()
                ->withErrors([
                    'email' => 'Email atau password salah.',
                ])
                ->withInput(
                    $request->only('email')
                );
        }

        /*
        |--------------------------------------------------------------------------
        | Check Password
        |--------------------------------------------------------------------------
        */

        if (! Hash::check(
            $validated['password'],
            $account->password
        )) {
            return back()
                ->withErrors([
                    'email' => 'Email atau password salah.',
                ])
                ->withInput(
                    $request->only('email')
                );
        }

        /*
        |--------------------------------------------------------------------------
        | Login
        |--------------------------------------------------------------------------
        */

        Auth::login(
            $account,
            $request->boolean('remember')
        );

        /*
        |--------------------------------------------------------------------------
        | Regenerate Session
        |--------------------------------------------------------------------------
        */

        $request->session()->regenerate();

        /*
        |--------------------------------------------------------------------------
        | Redirect
        |--------------------------------------------------------------------------
        */

        return redirect()->intended(
            route('dashboard')
        );
    }

    /**
     * Process account logout.
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()
            ->route('login')
            ->with(
                'success',
                'Anda berhasil logout.'
            );
    }
}
