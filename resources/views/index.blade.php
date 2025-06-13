Hi Folks!

{{-- @if (count($tasks)) --}}
    @forelse ($tasks as $task)
        <div>
            <a href="{{ route('tasks.show', ['id' => $task->id]) }}"> {{$task->title}}</a>
        </div>
    @empty
        <div>There is not task.</div>

    @endforelse
{{-- @else --}}
{{-- @endif --}}
