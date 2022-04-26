@extends('todos.layout')

@section('content')
    <div class="flex justify-between border-b pb-4 px-4">
        <h1 class="text-2xl">All Your Todos</h1>
        <a href="{{ route('todo.create') }}" class="mx-5 text-blue-400 rounded cursor-pointer text-white py-2"><span
                class="fas fa-plus-circle"></span></a>
    </div>
    <x-alert />
    <ul class="my-5 ">

        @forelse ($todos as $todo)
            <li class="flex justify-between p-2">
                <div>
                    @include('todos.complete-button', ['todo' => $todo])
                </div>

                @if ($todo->completed)
                    <p class="line-through">
                        {{ $todo->title }}
                    </p>
                @else
                    <a class="cursor-pointer" href="{{ route('todo.show',$todo->id) }}">
                        {{ $todo->title }}
                    </a>
                @endif
                <div>
                    <a href="{{ route('todo.edit', $todo->id) }}" class="py-1 px-1 text-indigo-500 cursor-pointer">
                        <span class="fa fa-edit"></span>
                    </a>

                    <span
                        onclick="event.preventDefault();
                                confirm('Are you sure you want to delete this todo?') ? document.getElementById('form-delete-{{ $todo->id }}').submit() : ''"
                        class="py-1 px-1 text-red-500 cursor-pointer fas fa-trash">
                    </span>
                    <form style="display: none" id="{{ 'form-delete-' . $todo->id }}" method="post"
                        action="{{ route('todo.destroy', ['todo' => $todo->id]) }}">
                        @csrf
                        @method('delete')
                    </form>
                </div>
            </li>
        @empty
            <p class="text-center">You have no todos, create one.</p>
        @endforelse
    </ul>
@endsection
