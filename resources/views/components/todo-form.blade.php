<form method="POST" action="{{ $action }}">
    @csrf
    @if(isset($method) && $method === 'PUT')
        @method('PUT')
    @endif
    <input type="text" name="title" value="{{ $todo->title ?? '' }}" placeholder="タスクを入力する" required>
    <input type="submit" value="保存する">
</form>
