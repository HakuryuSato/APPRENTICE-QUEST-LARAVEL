<form method="POST" action="{{ $action }}" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="delete" onclick="return confirm('本当に削除していいですか？')">削除</button>
</form>