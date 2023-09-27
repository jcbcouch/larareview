<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;


class TodoController extends Controller
{
    public function index () {
        return view('todos.index', [
            'todos' => Todo::all()
        ]);
    }

    public function show(Todo $todo) {
        return view('todos.show', [
            'todo' => $todo
        ]);
    }

    public function create() {
        return view('todos.create');
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'task' => 'required'
        ]);

        Todo::create($formFields);

        return redirect('/todos')->with('message', 'Listing created successfully!');
    }

    public function edit(Todo $todo) {
        return view('todos.edit', ['todo' => $todo]);
    }

    public function update(Request $request, Todo $todo) { 
        $formFields = $request->validate([
            'task' => 'required'
        ]);

        $todo->update($formFields);

        return redirect('/todos')->with('message', 'Listing updated successfully!');
    }
}
