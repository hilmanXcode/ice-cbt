@extends('layouts.main')

@section('container')
    <div class="p-10">
        <h1 class="text-2xl font-semibold text-center mb-3">Data Siswa
        </h1>
        <div class="container text-end pb-2">
            <a href="/dashboard/users/create"
                class="font-semibold px-6 py-2 bg-[#0f172a] hover:bg-[#0f172a]/90 text-white rounded-lg">Tambah Siswa</a>
        </div>
        <div class="mt-5 relative overflow-x-auto shadow-md sm:rounded-lg">
            @if ($data == '[]')
                <h1 class="text-center text-2xl font-medium p-10">Data Kosong Nih..</h1>
            @else
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
                                                class="font-semibold px-6 py-2 bg-red-600 hover:bg-red-700 active:bg-red-800 text-white rounded-lg xyz">Delete</button>
                                        </form>

                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            @endif
        </div>
    </div>

    <div class="w-full max-w-lg border shadow-lg rounded-md bg-white fixed animate-in fade-in hidden translate-x-[-50%] top-[40%] left-[50%] duration-200"
        id="modal">
        <div class="p-5">
            <h1 class="font-semibold text-xl">Hapus {{ $page }} ?</h1>
            <h1 class="font-light mt-2">Apakah kamu yakin ingin menghapus {{ $page }} Ini ?</h1>
            <div class="flex gap-2 justify-end mt-2 flex-wrap">
                <button class="px-5 py-2 bg-black text-white rounded-md" id="yes-clicked">Yes</button>
                <button class="px-5 py-2 border rounded-md" id="no-clicked">No</button>
            </div>

        </div>
    </div>

    <div id="notification">

    </div>
@endsection

@section('script')
    <script>
        $('.xyz').click(function(event) {
            event.preventDefault();
            document.querySelector('#tutup').classList.toggle('hidden');
            document.querySelector('#modal').classList.toggle('hidden');
            document.querySelector('#modal').classList.add('z-50');
        })

        $('#no-clicked').click(function(event) {
            let modal = document.querySelector('#modal');
            modal.classList.replace('animate-in', 'animate-out');
            modal.classList.replace('fade-in', 'fade-out');
            setTimeout(function() {
                modal.classList.toggle('hidden');
                modal.classList.replace('animate-out', 'animate-in');
                modal.classList.replace('fade-out', 'fade-in');
                document.querySelector('#tutup').classList.toggle('hidden');
            }, 200);
        })

        $('#yes-clicked').click(function(event) {
            let form = $('.xyz').closest("form");
            let modal = document.querySelector('#modal');
            modal.classList.replace('animate-in', 'animate-out');
            modal.classList.replace('fade-in', 'fade-out');
            setTimeout(function() {
                modal.classList.toggle('hidden');
                modal.classList.replace('animate-out', 'animate-in');
                modal.classList.replace('fade-out', 'fade-in');
                document.querySelector('#tutup').classList.toggle('hidden');
                form.submit();
            }, 200);
        })


        $('.show-confirm').click(function(event) {

            var form = $(this).closest("form");

            event.preventDefault();

            Swal.fire({
                title: 'Kamu Yakin?',
                text: "Kamu tidak akan bisa mengembalikan data ini!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, saya yakin!'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit()
                }
            })

        });
    </script>
@endsection
