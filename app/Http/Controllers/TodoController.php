<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(){

        $todos = Todo::all() ;
//        return $todos;
        return view('todos.index', compact('todos')); //passing data from Todos table
    }


    public function create(){
        return view('todos.create');
    }
    public function store(Request $request){
//        dd($request->all()); //shows dump data

        $request->validate([
            'title'=>'required|min:3|max:50'
        ]);

        Todo::create($request->all());
        return redirect(route('todo.index'));


    }


    public function edit($id){

        $todo = Todo::find($id);
        return view('todos.edit', compact('todo'));
    }

    public function update(Request $request, $id){

        $request->validate([
            'title'=>'required|min:3|max:50'
        ]);


        $todo = Todo::find($id);
        $todo->update([
            'title' => $request->title
        ]);
        return redirect(route('todo.index'));

    }



    public function destroy($id){
        $todo = Todo::find($id);
        $todo->delete();

        return redirect(route('todo.index'));
    }



}
