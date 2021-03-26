<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('cadastro');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);

        Auth::login($user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]));

        event(new Registered($user));

        return redirect(RouteServiceProvider::HOME);
    }

    public function destroy($id){
        $usuario = User::find(Auth::id());

        Auth::logout();

        $usuario->delete();
        return redirect()->route('home');
    }

    public function editPassword($id) {
        $user = Auth::user();
        return view('alterar-senha', ['user'=>$user]);
    }

    public function updatePassword($id, Request $request) {
        $user = Auth::user();

        if ($request->password == $request->password_confirmation) {
            $user->password = Hash::make($request->password);
            $user->save();

            return redirect()->route('users.edit', ['user'=>Auth::id()])->with('msg', 'Senha alterada com sucesso');
        } else {
            return redirect()->route('users.edit-password', ['user'=>Auth::id()])->with('msg', 'As senhas são diferentes');
        }
    }
}