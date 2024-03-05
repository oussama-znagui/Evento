<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Customer;
use App\Models\Organizer;
use App\Models\User;
use App\Models\Role;

use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;


class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register', [
            'roles' => Role::All(),
        ]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'role_id' => ['required'],
        ]);


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            

        ]);
        switch ($request->role_id) {
            case 1:
                $user->assignRole('Customer');
                event(new Registered($user));
                Auth::login($user);
                Customer::create([
                    'user_id' => Auth::id(),
                ]);
                break;

            case 2:
                $user->assignRole('Organizer');

                event(new Registered($user));
                Auth::login($user);
                Organizer::create([
                    'user_id' => Auth::id(),
                ]);
                break;

            case 3:
                $user->assignRole('Admin');

                event(new Registered($user));
                Auth::login($user);
                Admin::create([
                    'user_id' => Auth::id(),
                ]);
                break;


            default:
                die;
        }

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
