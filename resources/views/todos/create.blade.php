<div class="container">
    <h1>新規タスクの作成</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


    <x-todo-form :action="route('todos.store')" />
</div>