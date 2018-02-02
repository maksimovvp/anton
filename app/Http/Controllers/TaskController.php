<?php

namespace App\Http\Controllers;

use App\Task;
use App\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
	public function getAll() {
		return view('tasks', ['tasks' => Task::all()]);
	}
	
	public function userTasks($id) {
		return view('userTasks', ['user' => User::findOrFail($id), 'tasks' => Task::where('contractor', $id)->get()]);
	}
}
