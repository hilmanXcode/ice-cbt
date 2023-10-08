@extends('layouts.main')

@section('container')
    <div class="p-10">
        <h1 class="text-center font-bold my-6 text-4xl">Tambah Kelas Baru</h1>
        <form action="/dashboard/kelas/create" method="post">
            @csrf
            <div class="grid p-5">
                <div>
                    <label for="kelas" class="block mb-2 text-sm font-medium">Nama Kelas</label>
                    <input type="text" id="kelas" name="kelas"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Example : XII RPL 2">
                    <button type="submit"
                        class="w-full mt-6 focus:outline-none text-white bg-[#0f172a] hover:bg-[#0f172a]/90 rounded-md py-3">Submit</button>
                </div>
            </div>
        </form>
    </div>
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
    </script>
@endsection
