@extends('layouts.main')

@section('container')
<h1 class="font-semibold text-xl mb-4">Selamat Datang Admin</h1>
<div class="grid grid-cols-2 gap-4 mb-4">
    <div class="flex items-center p-5 h-24 rounded bg-teal-400">
        <img src="http://localhost:8000/img/score.png" alt="books" class="">
        <div class="container ml-4">
            <h1 class="text-white font-bold text-xl">Nilai</h1>
            <h2 class="text-white font-semibold">0</h2>
        </div>
    </div>
    <div class="flex items-center p-5 h-24 rounded bg-teal-400">
        <img src="http://localhost:8000/img/books-c.png" alt="books" class="">
        <div class="container ml-4">
            <h1 class="text-white font-bold text-xl">Soal</h1>
            <h2 class="text-white font-semibold">0</h2>
        </div>
    </div>
    <div class="flex items-center p-5 h-24 rounded bg-teal-400">
        <img src="http://localhost:8000/img/users.png" alt="books" class="">
        <div class="container ml-4">
            <h1 class="text-white font-bold text-xl">Siswa</h1>
            <h2 class="text-white font-semibold">0</h2>
        </div>
    </div>
</div>
@endsection