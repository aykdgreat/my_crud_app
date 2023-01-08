@extends('layouts.app')

@section('content')
    <div>
        <form action="/crud/{{ $note->id }}" method="post" class="crud-form mt-9 mx-auto max-w-md p-5 border w-full">
            @csrf
            @method('put')
            <h2 class="text-2xl font-semibold text-center capitalize">edit a note</h2>
            @if (session('status'))
                <div class="text-green-500 text-center py-1">
                    {{ session('status') }}
                </div>
            @endif
            <div class="flex justify-between align-center">
                <label class="mb-2 inline" for="title">Title</label>
                @error('title')
                    <div class="text-red-500 font-light">{{ $message }}</div>
                @enderror
            </div>
            <input type="text" name="title"
                class="rounded-lg w-full py-2 px-3 border border-gray-300 mb-2 focus:outline-none"
                value="{{ $note->title }}">
            <div class="flex justify-between align-center">
                <label class="mb-2" for="body">Body</label>
                @error('body')
                    <div class="text-red-500 font-light">{{ $message }}</div>
                @enderror
            </div>
            <textarea name="body"
                class="rounded-lg w-full py-2 px-3 border h-28 appearance-none resize-none border-gray-300 mb-2 focus:outline-none">
                {{ $note->body }}
            </textarea>
            <input type="submit" value="Submit"
                class="bg-green-800 w-full rounded-lg py-2  px-3 text-white font-bold cursor-pointer hover:bg-green-700">
        </form>
    </div>
@endsection
