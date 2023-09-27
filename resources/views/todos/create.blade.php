        <form method="POST" action="/todos">
        @csrf
        <div>
          <label for="task">task</label>
          <input type="text" name="task" value="{{old('task')}}" />
          
          @error('task')
          <p>{{$message}}</p>
          @enderror
          
        </div>
  
  
        <div>
          <button>
            Create Task
          </button>
  
          <a href="/todos"> todos </a>
        </div>
      </form>

  