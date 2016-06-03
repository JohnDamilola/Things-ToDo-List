<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Blogger;

use Illuminate\Support\Facades\Input;

class TaskController extends Controller
{

    public function index()
    {

    }
    public function create()
    {
        return view('task.create');
    }
    public function delete(Request $request)
    {
        $this->authorize('destroy','$task');

        $task->delete();

        return redirect('/');
    }



    public function store(Request $request)
    {
        // dd("created");
        $this->validate($request, [
        		'title'=>'required',
        		'description'=>'required',
        	]);

        	Blogger::create([
        		'title'=>$request->input('title'),
        		'description'=>$request->input('description'),
         	]);
          dd("all is well");
        // return redirect()->route('create')->with('info', 'Account Created');
        // $task = new Blogger;
        // $task->title=Input::get("title");
        // $task->description=Input::get("description");
        // $task->save();

    }

    public function edit()
    {
      //find task
        $task = Blogger::find($id);
        //show the edit form
        return View::make('task.edit')->with('task', $task);
    }

    public function update(Request $request, $id)
    {

      dd("edited");
    }


    public function destroy($id)
    {
        //
    }
}
