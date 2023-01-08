@extends('layouts.app')

@section('content')
    <div>
        <div class="mt-9 mx-auto max-w-md p-5 border w-full">
            <ul>
                <li class="text-xl text-center capitalize text-slate-700 mb-3">{{ $note->title }}</li>
                <li class="text-center">{{ $note->body }}</li>
            </ul>
            <div class="flex justify-between items-center mt-4">
                <a href="{{ $note->id }}/edit" class="text-green-700 font-bold hover:text-green-900 italic ml-5">Edit</a>
                <form action="{{ $note->id }}" method="post">
                    @csrf
                    @method('delete')
                    <button class="text-red-700 font-bold mr-5 italic hover:text-red-900" type="submit">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection
