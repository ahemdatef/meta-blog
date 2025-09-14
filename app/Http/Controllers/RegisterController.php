<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userAttributes = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'confirmed', Password::min(6)],
            'image' => ['required', File::types(['png', 'jpg', 'webp'])],
        ]);

        $imagePath = $request->image->store('avatars', 'public');
        $userAttributes['image'] = $imagePath;

        $user = User::create($userAttributes);

        Auth::login($user);

        return redirect('/');
    }
}
