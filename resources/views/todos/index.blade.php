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
          <a class="edit" href="/todos/{{ $todo->id }}/edit">編集</a>
          <form method="POST" action="/todos/{{ $todo->id }}">
            @csrf
            @method('DELETE')
            <button class="delete" onclick="return confirm('本当に削除していいですか？')">削除</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
