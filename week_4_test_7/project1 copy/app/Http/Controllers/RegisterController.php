<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index() {
        return view('register', ['error' => false ]);
    }

    public function store(Request $request) {

        $userData = $request->only(['name', 'lastname', 'email', 'password']);

        if(!User::create($userData)) {
            return view('register', ['error'=> true, 'Faild creating user!']);
        }
       
        return view('register')->with('greeting', 'hello, your registration is successful!!!');
    }

    public function edit($id) {
        // selectujem jednog korisnika iz baze
        $user = User::where('id', $id)->first();
        //prikazali podatke
        return view('edit', compact('user'));
    }

    public function update($id, Request $request) {
        
        $data = $request->only(['name', 'lastname', 'email']);
        //eloquent koristimo da pisemo query-ije rucno
        $user = User::where('id', $id)->first();
        $user->name = $data['name'];
        $user->lastname = $data['lastname'];
        $user->email = $data['email'];
        //izvrsava query na baza
        $user->save();


        return redirect('/users');
    }
    
    public function destroy($id) {

        $user = User::find($id);
        $user->delete();

        return redirect('/users');

    }
}
