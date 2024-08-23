<div class="container">
  <h1>タスクの追加</h1>
  <form method="POST" action="/todos">
    @csrf
    <input type="text" name="title" placeholder="タスクを入力する" required>
    <input type="submit" value="保存する">
  </form>
</div>
