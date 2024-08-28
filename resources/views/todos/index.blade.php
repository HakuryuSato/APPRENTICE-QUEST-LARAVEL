<link rel="stylesheet" href="{{ asset('/css/style.css') }}">

<div class="container">

  <h1>Todo List</h1>
  <a class="new-task" href="/todos/create">タスクを追加する</a>

  
  <table>
    <thead>
      <tr>
        <th>タスク</th>
        <th>アクション</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($todos as $todo)
      <tr>
        <td>{{ $todo->title }}</td>
        <td>
          <a class="edit" href="{{ route('todos.edit', $todo->id) }}">編集</a>
          <x-delete-form :action="route('todos.destroy', $todo->id)" />
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>