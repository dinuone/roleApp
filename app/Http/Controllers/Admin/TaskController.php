<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
    $tasks = Task::with('user')->get();
    return view('admin.index',compact('tasks'));
    }
}
