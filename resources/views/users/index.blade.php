@extends('layouts.main')

@section('container')
    <div class="p-10">
        <h1 class="text-2xl font-semibold text-center mb-3">Data Siswa</h1>
        <div class="container text-end pb-2">
            <a href="/dashboard/users/create"
                class="font-semibold px-6 py-2 bg-[#0f172a] hover:bg-[#0f172a]/90 text-white rounded-lg">Tambah Siswa</a>
        </div>
        <div class="mt-5 relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Lengkap
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Username
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kelas
                        </th>
                        <th scope="col" class="text-center px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $siswa)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4">
                                #{{ $loop->iteration }}
                            </td>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $siswa->nama_lengkap }}
                            </th>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $siswa->username }}
                            </th>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $siswa->kelas->namaKelas }}
                            </th>
                            <td class="no-underline">
                                <div class="container flex justify-center gap-2">
                                    <a href="/dashboard/users/{{ $siswa->id }}/edit"
                                        class="font-semibold px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 active:bg-blue-800">Edit</a>
                                    <form action="{{ route('siswa.delete', $siswa->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="font-semibold px-6 py-2 bg-red-600 hover:bg-red-700 active:bg-red-800 text-white rounded-lg show-confirm">Delete</button>

                                    </form>

                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
    <div id="notification">

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
