@extends('layouts.main')

@section('container')
    <div class="p-10">
        <h1 class="text-center font-bold my-6 text-4xl">Edit Kelas</h1>
        <form action="/dashboard/kelas/{{ $data->id }}/edit" method="post">
            @csrf
            <div class="grid p-5">
                <div>
                    @if ($errors->get('kelas'))
                        <label for="kelas"
                            class="block mb-2 text-sm font-medium text-red-700 dark:text-red-500">Kelas</label>
                        <input type="text" id="kelas" name="kelas"
                            class="bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-red-100 dark:border-red-400"
                            placeholder="Example : XII RPL 2" value="{{ $data->namaKelas }}" required>
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span>
                            @foreach ($errors->get('kelas') as $message)
                                {{ $message }}
                            @endforeach
                        </p>
                    @else
                        <label for="kelas" class="block mb-2 text-sm font-medium">Kelas</label>
                        <input type="text" id="kelas" name="kelas"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Example : XII RPL 2" value="{{ $data->namaKelas }}" required>
                    @endif
                    <button type="submit"
                        class="w-full mt-6 focus:outline-none text-white bg-[#0f172a] hover:bg-[#0f172a]/90 rounded-md py-3">Submit</button>
                </div>
            </div>
        </form>
    </div>
    <div id="notification">

    </div>
@endsection

@section('script')
    <script></script>
@endsection
