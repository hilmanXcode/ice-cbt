@extends('layouts.main')

@section('container')
    <h1 class="text-center font-bold my-6 text-4xl">Edit Kelas</h1>
    <form action="/dashboard/kelas/{{ $data->id }}/edit" method="post">
        @csrf
        <div class="grid p-5">
            <div>
                <label for="kelas" class="block mb-2 text-sm font-medium">Nama Kelas</label>
                <input type="text" id="kelas" name="kelas"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Example : XII RPL 2" value="{{ $data->namaKelas }}">
                <button type="submit"
                    class="w-full mt-6 focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Submit</button>
            </div>
        </div>
    </form>
@endsection

@section('script')
    <script>
        @if ($errors->get('kelas'))
            @foreach ($errors->get('kelas') as $message)

                Swal.fire({
                    icon: 'error',
                    title: 'Oopss..',
                    text: "{{ $message }}"
                })
            @endforeach
        @endif
        @if (session()->has('success'))
            Swal.fire({
                icon: 'success',
                title: 'Yeay !',
                text: "{{ session('success') }}"
            })
        @endif
    </script>
@endsection
