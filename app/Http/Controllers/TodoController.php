<?php

namespace App\Http\Controllers;

use App\Models\Todolist;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * トップページ
     * 
     * @return view
     */
    public function top(Request $request)
    {
        return view('todo.top');
    }
}
