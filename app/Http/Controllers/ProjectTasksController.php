<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;

class ProjectTasksController extends Controller
{
    public function update(Task $task){
        $task->update([
            'completed' => request()->has('completed'),
        ]);
        // return redirect("project/$task->project_id");
        return back();
    }
}
