<h1>todos</h1>
@foreach ($todos as $todo)
<a href='/todos/{{$todo->id}}'>{{$todo->task}}</a> <br>
@endforeach

<a href='/todos/create'>new todo</a>
</div>