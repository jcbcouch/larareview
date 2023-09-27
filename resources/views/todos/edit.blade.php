<form method="POST" action="/todos/{{$todo->id}}">
    @csrf
    <div>
      <label for="task">task</label>
      <input type="text" name="task" value="{{$todo->task}}" />
      
      @error('task')
      <p>{{$message}}</p>
      @enderror
      
    </div>


    <div>
      <button>
        Update Task
      </button>

      <a href="/todos"> todos </a>
    </div>
  </form>

