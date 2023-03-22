<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Specialization;
use App\Models\User;
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
        $specializations = Specialization::all();
        return view('auth.register', compact('specializations'));
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
            'surname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'address' => ['required', 'string'],
            'specializations' => ['required', 'array', 'min:1', 'exists:specializations,id']
        ]);

        $user = User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $user->save();

        // dd($request->address);

        $doctor = new Doctor([
            'address' => $request->address,
            'bio' => 'da definire',
            'curriculum' => 'da definire',
            'photo' => 'da definire',
            'phone' => 'da definire',
            'performance' => 'da definire',
            'visibility' => true,
        ]);

        $doctor->user()->associate($user);
        $doctor->save();

        // dd($request->specializations);

        $specializations = $request->specializations;
        foreach ($specializations as $specialization) {
            $doctor->specializations()->attach($specialization);
        }

        Auth::login($user);

        return redirect()->route('admin.doctors.create');
    }
}
