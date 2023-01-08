<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'AYK\'s Crud App') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    {{-- <script src="{{ asset('js/tailwind-3.js') }}"></script> --}}
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body>
    <div class="container p-8">
        <h1 class="text-center my-4 py-4 border-b-2 border-blue-900 w-1/4 mx-auto text-3xl font-bold">My Lovely Note</h1>
        <p class="text-gray-900 text-center">Welcome, esteemed user. Enjoy!!!!!!!!!!!!</p>