<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
	public function getAll() {
		return view('tasks', ['tasks' => Task::all()]);
	}	
	
}
