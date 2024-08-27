
<head>
  <link rel="stylesheet" href="{{ asset('css/todo.css') }}">
</head>

<div class="container">
  <h1>タスクの編集</h1>
  <x-todo-form :action="route('todos.update', $todo->id)" method="PUT" :todo="$todo" />
</div>