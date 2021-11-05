<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>todo</title>
  <link rel="stylesheet" href="{{ asset('/public/css/app.reset.css') }}">
  <link rel="stylesheet" href="{{ asset('/public/css/app.css') }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
  <div class="todo">
    <h1>Todo List</h1>
    <form method="POST" action="#">
      <div class="add-form">
        <input type="text" class="add-text">
        <button class="add-button">追加</button>
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
      <tr>
        <td class="date">####</td>
        <td class="task-name"><input type="text" class="task"></td>
        <td class="update-button"><button class="update">更新</button></td>
        <td class="delete-button"><button class="delete">削除</button></td>
      </tr>
      <tr>
        <td class="date">####</td>
        <td class="task-name"><input type="text" class="task"></td>
        <td class="update-button"><button class="update">更新</button></td>
        <td class="delete-button"><button class="delete">削除</button></td>
      </tr>
      <tr>
        <td class="date">####</td>
        <td class="task-name"><input type="text" class="task"></td>
        <td><button class="update">更新</button></td>
        <td><button class="delete">削除</button></td>
      </tr>
      <tr>
        <td class="date">####</td>
        <td class="task-name"><input type="text" class="task"></td>
        <td class="update-button"><button class="update">更新</button></td>
        <td class="delete-button"><button class="delete">削除</button></td>
      </tr>
      
    </tbody>
  </table>
  </div>

</body>

</html>

