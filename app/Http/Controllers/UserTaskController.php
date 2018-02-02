<?php

namespace App\Http\Controllers;

use App\Task;
use App\User;
use Illuminate\Http\Request;

class UserTaskController extends Controller
{
    //
	public function userTasks($id) {
		return view('userTasks', ['user' => User::findOrFail($id), 'tasks' => Task::where('contractor', $id)->get()]);
	}
}
