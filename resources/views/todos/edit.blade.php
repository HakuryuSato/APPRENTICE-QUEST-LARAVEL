<div class="container">
  <h1>タスクの編集</h1>
  <form method="POST" action="/todos/{{ $todo->id }}">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{ $todo->title }}" required>
    <input type="submit" value="保存する">
  </form>
</div>