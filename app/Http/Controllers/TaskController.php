<?php

namespace App\Http\Controllers;

use App\Task;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\TaskRepository;

class TaskController extends Controller
{
    
    public function __construct(TaskRepository $tasks)
    {
        $this->middleware('auth');

        $this->tasks = $tasks;
    }

    
    public function index(Request $request)
    {
        return view('tasks.index', [
            'tasks' => $this->tasks->forUser($request->user()),
        ]);
    }

   
    public function add(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255|unique:tasks',
        ]);

        $request->user()->tasks()->create([
            'name' => $request->name,
        ]);

        /*
        $this->authorize('add',$request->name);

           return redirect('errors.503');
        */
   


        return redirect('tasks');

    


    }

    
    public function destroy(Request $request, Task $task)
    {
        $this->authorize('destroy', $task);

        $task->delete();

        return redirect('/tasks');
        
    }

    



}
