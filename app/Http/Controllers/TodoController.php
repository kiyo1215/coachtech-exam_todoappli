<?php

namespace App\Http\Controllers;

use App\Models\Todolist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\TodoRequest;

class TodoController extends Controller
{
    /**
     * トップページ
     * 
     * @return view
     */
    public function top(Request $request)
    {
        // $todolists = Todolist::all();
        $todolists = DB::table('todolists')->get();
        // dd($todolists);
        return view('todo.top', ['todolists' => $todolists]);
    }
    public function create(TodoRequest $request)
    {
        // $this->validate($request, Todolist::$rules);
        // $form = $request->all();
        // Todokist::create($form);
        // return redirect('/');
        $param = [
            'content' => $request->content,
        ];
        DB::table('todolists')->insert($param);
        return redirect('/');
    }
    // public function update(Request $request)
    // {

    // }
    // public function delete(Request $request)
    // {

    // }
}
