@extends('layouts.main')

@section('container')
    {{-- Old --}}
    {{-- <h1 class="font-semibold text-xl mb-4">Selamat Datang {{ auth()->user()->name }}</h1>
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
    </div> --}}

    <div class="grid md:grid-cols-4 grid-cols-2 md:gap-0 gap-1">
        <div class="bg-white h-24 rounded-tl-xl md:rounded-s-xl pt-5 pl-5">
            <div class="flex">
                <div>
                    <img src="{{ env('APP_URL') }}/img/rating.png" alt="">
                </div>
                <div class="ml-2">
                    <h1 class="font-semibold sm:text-sm">Data Nilai</h1>
                    <h1 class="md:text-xl sm:text-base">100</h1>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-tr-xl md:rounded-none md:border-l-2 md:border-[#ecf5fc] h-24 pt-5 pl-5">
            <div class="flex">
                <div>
                    <img src="{{ env('APP_URL') }}/img/book-c.png" alt="">
                </div>
                <div class="ml-2">
                    <h1 class="font-semibold sm:text-sm">Data Soal</h1>
                    <h1 class="md:text-xl sm:text-base">100</h1>
                </div>
            </div>
        </div>
        <div class="bg-white h-24 rounded-bl-xl md:rounded-none md:border-l-2 md:border-[#ecf5fc] pt-5 pl-5">
            <div class="flex">
                <div>
                    <img src="{{ env('APP_URL') }}/img/users-c.png" alt="">
                </div>
                <div class="ml-2">
                    <h1 class="font-semibold sm:text-sm">Data Siswa</h1>
                    <h1 class="md:text-xl sm:text-base">100</h1>
                </div>
            </div>
        </div>
        <div class="bg-white h-24 rounded-br-xl md:rounded-e-xl md:border-l-2 md:border-[#ecf5fc] pt-5 pl-5">
            <div class="flex">
                <div>
                    <img src="{{ env('APP_URL') }}/img/course-c.png" alt="">
                </div>
                <div class="ml-2">
                    <h1 class="font-semibold sm:text-sm">Data Mapel</h1>
                    <h1 class="text-xl sm:text-base">100</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-3 mt-3">
        <div class="h-48 col-span-2 bg-white rounded-xl">
            <div class="flex">
                <div class="p-5">
                    <img src="{{ env('APP_URL') }}/img/mp.png" alt="Megaphone" width="25" height="25">
                </div>
                <div class="mt-5">
                    <h1 class="font-bold">Pengumuman</h1>
                </div>
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
