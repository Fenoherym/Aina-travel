<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Rules\UpdatePasswordRule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfilController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function update(Request $request)
    {

        $user = User::find(auth()->user()->id);
        $request->validate([
            "name" => ['required'],
            "email" => ['required'],
            "password" => ['required']
        ]);

        if (Hash::check($request->password, $user->password)) {
            $user->update([
                "name" => $request->name,
                "email" => $request->email
            ]);

            return redirect()->back()->with('success', "Modification(s) enregistrés");
        } else {
            return redirect()->back()->with('error', "Mot de passe incorrect");
        }
    }

    public function updatePassword(Request $request)
    {
        $user = User::find(auth()->user()->id);
        $request->validate([
            "old_password" => ['required', new UpdatePasswordRule($request->old_password, $user->password)],
            "password" => ['required'],
            "confirm_password" => ['required']
        ]);

        if ($request->password === $request->confirm_password) {
            $user->update([
                "password" => Hash::make($request->password)
            ]);

            return redirect()->route('dashboard')->with('success', 'Votre mot de passe a été modifié avec succès');
        } else {
            return redirect()->route('dashboard')->with('erreurs', 'Les deux mot de passe ne sont pas identique');
        }
    }
}
