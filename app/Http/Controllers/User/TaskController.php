<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function create(Request $request)
    {
        $fileds = $request->validate([
            'name'=>'required|string',
            
        ]);

        

        $user = Task::create([
            'name'=>$fileds['name'],
            'user_id'=>auth()->user()->id,
        ]);

        if($user){
            return redirect()->route('user.task.index');
        }
    }

    public function index()
    {
        $tasks= auth()->user()->tasks;
        return view('user.index',compact('tasks'));
    }
}
