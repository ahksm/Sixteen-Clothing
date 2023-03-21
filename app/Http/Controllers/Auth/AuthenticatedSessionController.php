<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class AuthenticatedSessionController extends Controller
{
    public function index()
    {
        return view('auth.profile');
    }

    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function update(Request $request, $id)
    {
        // Find the user by id
        $user = User::findOrFail($id);

        // Update the user data
        $user->update(
            tap($request->validate([
                'avatar' => 'string|image',
                'name' => 'required|string|max:255',
                'username' => ['required', 'string', 'max:255', Rule::unique('users')->ignore($user->id)],
                'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
                'password' => 'nullable|string|min:8|confirmed',
            ]), function (&$attributes) use ($request) {
                // Only update the password if it was provided
                if (!empty($request->input('password'))) {
                    $attributes['password'] = Hash::make($request->input('password'));
                } else {
                    unset($attributes['password']);
                }
    
                // Handle avatar upload if provided
                if (isset($attributes['avatar'])) {
                    $attributes['avatar'] = request()->file('avatar')->store('users', 'public');
                }
            })
        );
    
        // Redirect back with a success message
        return redirect()->back();
    }
}