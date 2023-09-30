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
    <div class="grid lg:grid-cols-3 grid-cols-1 mt-3 gap-2">
        <div class="h-auto lg:col-span-2 bg-white rounded-xl pb-5">
            <div class="flex">
                <div class="p-5">
                    <img src="{{ env('APP_URL') }}/img/mp.png" alt="Megaphone" width="25" height="25">
                </div>
                <div class="mt-5">
                    <h1 class="font-bold">Pengumuman</h1>
                </div>
            </div>
            <div class="flex flex-wrap">
                <div class="w-full px-5 border-l-2 mb-2">
                    <div class="p-5 bg-[#ecf5fc] rounded-xl flex">
                        <div class="my-auto">
                            <img class="ml-5" src="{{ env('APP_URL') }}/img/letter-c.png" alt="Pengumuman" width="30"
                                height="30">
                            <h1 class="ml-5 mt-2 text-sm">Administrator</h1>
                            <h1 class="ml-5 text-[8px] font-semibold">09 September 2023</h1>
                        </div>
                        <div class="my-auto mx-auto">
                            <h1 class="sm:text-sm mb-1 lg:text-base">Judulna
                                panjang
                                pokonamah</h1>
                            <a href=""
                                class="px-2 py-2 block text-center rounded-xl text-white text-sm font-semibold bg-[#5b5b5b] hover:scale-95 transition active:scale-90">Read
                                More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-xl w-full">
            <h1>Hello Dunia</h1>
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
