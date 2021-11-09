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
        $todolists = DB::table('todolists')->get();
        // dd($todolists);
        return view('todo.top', ['todolists' => $todolists]);
    }
    public function create(TodoRequest $request)
    {
        $param = [
            'content' => $request->content,
        ];
        DB::table('todolists')->insert($param);
        return redirect('/');
    }
    public function edit(TodoRequest $request)
    {
        // $param = ['content' => $request->content];
        // $todolist = Todolist::find($request->id);
        DB::table('todolists')->where('id', $request->id)->first();
    }
    public function update(TodoRequest $request)
    {
        $param = [
            'content' => $request->content,
        ];
        // $todolist->save();
        DB::table('todolists')->where('id', $request->id)->update($param);
        // DB::table('todolists')->update($param);
        return redirect('/');
    }
    public function remove(Request $request)
    {
        DB::table('todolists')->where('id', $request->id)->first();
    }
    
    public function delete(Request $request)
    {
        // Todolist::destroy(id);
        $param = ['id' => $request->id];
        DB::table('todolists')->where('id', $request->id)->delete();
        return redirect('/');
    }
}
