<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => [
                'required',
                'string',
                'max:255',
            ],

            'email' => [
                'required',
                'email',
                'max:255',
                'unique:accounts,email',
            ],

            'password' => [
                'required',
                'string',
                'min:8',
                'confirmed',
            ],

            'position' => [
                'required',
                'string',
                'max:100',
            ],
        ]);

        $defaultRole = Role::where('name', 'staff')->firstOrFail();

        $account = Account::create([
            'full_name' => $validated['full_name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'position' => $validated['position'],
            'role_id' => $defaultRole->id,
        ]);

        return response()->json([
            'message' => 'Account berhasil dibuat.',
            'account' => $account,
        ], 201);
    }
}
