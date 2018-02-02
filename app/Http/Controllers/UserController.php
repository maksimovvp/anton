<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
	public function getAll() {
		return view('users', ['users' => User::all()]);
	}
}
