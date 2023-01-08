@extends('layouts.app')

@section('content')
    <div class="flex flex-col md:flex-row justify-center items-center">
        <form action="/crud" method="post" class=" h-96 mt-9 md:mr-4 max-w-md p-5 border w-full">
            @csrf
            <h2 class="text-2xl mb-1 font-semibold text-center capitalize">create new note</h2>
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
                class="rounded-lg w-full py-2 px-3 border border-gray-300 mb-2 focus:outline-none">
            <div class="flex justify-between align-center">
                <label class="mb-2" for="body">Body</label>
                @error('body')
                    <div class="text-red-500 font-light">{{ $message }}</div>
                @enderror
            </div>
            <textarea name="body"
                class="rounded-lg w-full py-2 px-3 border h-28 appearance-none resize-none border-gray-300 mb-2 focus:outline-none"></textarea>
            <input type="submit" value="Submit"
                class="bg-green-800 w-full rounded-lg py-2 px-3 text-white font-bold cursor-pointer hover:bg-green-700">
        </form>
        <div class="mt-9 max-w-md h-96 p-5 border w-full overflow-scroll">
            <h2 class="text-xl mb-1 text-center capitalize">Saved notes</h2>
            @forelse ($notes as $note)
                <ul>
                    <li class="border-b border-gray-300 pb-1 mb-1 text-slate-700 cursor-pointer hover:text-slate-900"><a
                            href="crud/{{ $note->id }}">{{ $note->title }}</a></li>
                </ul>
            @empty
                <p class="">Oops, you haven't saved any note yet, kindly use the form above!!!</p>
            @endforelse
        </div>
    </div>
@endsection
