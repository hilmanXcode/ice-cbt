@extends('layouts.main')

@section('container')
    <h1 class="font-semibold text-xl mb-4">Selamat Datang {{ auth()->user()->name }}</h1>
    <div class="grid grid-cols-2 gap-4 mb-4">
        <div class="flex items-center p-5 h-28 rounded bg-purple-700">
            <img src="http://localhost:8000/img/score.png" alt="books" class="">
            <div class="container ml-4">
                <h1 class="text-white font-bold sm:text-3xl">0</h1>
                <h2 class="text-white">Nilai</h2>
            </div>
        </div>
        <div class="flex items-center p-5 h-24 rounded bg-purple-700">
            <img src="http://localhost:8000/img/books-c.png" alt="books" class="">
            <div class="container ml-4">
                <h1 class="text-white font-bold sm:text-3xl">0</h1>
                <h2 class="text-white">Soal</h2>
            </div>
        </div>
        <div class="flex items-center p-5 h-24 rounded bg-purple-700">
            <img src="http://localhost:8000/img/users.png" alt="books" class="">
            <div class="container ml-4">
                <h1 class="text-white font-bold sm:text-3xl">0</h1>
                <h2 class="text-white">Siswa</h2>
            </div>
        </div>
        <div class="flex items-center p-5 h-24 rounded bg-purple-700">
            <img src="http://localhost:8000/img/books-c.png" alt="books" class="">
            <div class="container ml-4">
                <h1 class="text-white font-bold sm:text-3xl">0</h1>
                <h2 class="text-white">Mata Pelajaran</h2>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        @if (session()->has('success'))
            Swal.fire({
                icon: 'success',
                title: 'Yeay !',
                text: "{{ session('success') }}"
            })
        @endif
    </script>
@endsection
