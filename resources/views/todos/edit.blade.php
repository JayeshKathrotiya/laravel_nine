@extends('todos.layout')

@section('content')
    <div class="flex justify-between border-b pb-4 px-4">
        <h1 class="text-2xl">Update this todo list</h1>
        <a href="{{ route('todo.index') }}" class="mx-5 text-blue-400 rounded cursor-pointer text-white py-2"><span
                class="fas fa-arrow-left"></span></a>
    </div>

    <x-alert />
    <form action="{{ route('todo.update', ['todo' => $todo->id]) }}" method="post" class="py-5">
        @csrf
        @method('patch')
        <input type="text" name="title" value="{{ $todo->title }}" class="py-2 px-2 border rounded" />
        <input type="submit" value="Update" class="p-2 border rounded" />
    </form>

@endsection
