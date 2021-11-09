<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>todo</title>
  <link rel="stylesheet" href="{{ asset('css/app.reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
<!-- @extends('layout') -->
@section('content')
  <div class="todo">
    <h1>Todo List</h1>
    <form method="POST" action="{{route('todocreate')}}">
  @csrf
      <div class="add-form">
        <input type="text" class="add-text" name="content">
        <button class="add-button" tyoe="submit">追加</button>
      </div>
    </form>
  <table>
    <tbody>
      <tr>
        <th class="date">作成日</th>
        <th class="task-name">タスク名</th>
        <th class="update-th">更新</th>
        <th class="delete-th">削除</th>
      </tr>
      @foreach($todolists as $todolist)
      <tr>
        <td class="date">{{$todolist->created_at}}</td>

        <td class="task-name">
        <form method="post" action="/todo/update">
        @csrf
          <input type="text" class="task" name="content" value="{{$todolist->content}}">
        
        </td>
        <td class="update-button">
          <button class="update" type="submit" onclick=>更新</button>
        </form>
        </td>

        <td class="delete-button">
        <form method="post" action="/todo/delete">
        <input type="hidden" name="id" value="{{$todolist->id}}">
        @csrf
        <button class="delete" type="submit" onclick=>削除</button>
        </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection

</body>

</html>

