<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Menampilkan semua task
    public function index()
    {
        $tasks = Task::latest()->get();
        return view('tasks', compact('tasks'));
    }

    // Dashboard
    public function dashboard()
    {
        $totalTasks = Task::count();

        $completedTasks = Task::where('completed', 1)->count();
        $pendingTasks = Task::where('completed', 0)->count();

        return view('dashboard', compact(
            'totalTasks',
            'completedTasks',
            'pendingTasks'
        ));
    }

    // Form tambah task
    public function create()
    {
        return view('create-task');
    }

    // Simpan task
    public function store(Request $request)
    {
        Task::create([
            'name' => $request->name,
            'tasks' => $request->tasks,
            'category' => $request->category,
            'date' => $request->date,
            'completed' => $request->has('completed') ? 1 : 0,
        ]);

        return redirect('/tasks');
    }

    // TOGGLE CHECKLIST
    public function toggle($id)
    {
        $task = Task::findOrFail($id);

        $task->completed = !$task->completed;
        $task->save();

        return redirect()->back();
    }

    // DELETE TASK
    public function destroy($id)
    {
        $task = Task::findOrFail($id);

        $task->delete();

        return redirect()->back();
    }

    public function completed()
    {
        $tasks = Task::where('completed', 1)->latest()->get();

        return view('tasks-completed', compact('tasks'));
    }
}