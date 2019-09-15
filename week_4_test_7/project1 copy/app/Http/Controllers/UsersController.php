<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index() {
        // uzima sve korisnike
        return view('users', [ 'users' => User::all()]);
    }

    
}
