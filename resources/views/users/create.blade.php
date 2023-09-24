@extends('layouts.main')

@section('container')
    <h1 class="text-center font-bold my-6 text-4xl">Tambah User Baru</h1>
    <form action="/dashboard/users/create" method="post">
        @csrf
        <div class="grid grid-cols-2 gap-4 p-5">
            <div>
                @if ($errors->get('nama_lengkap'))
                    <label for="nama_lengkap" class="block mb-2 text-sm font-medium text-red-700 dark:text-red-500">Nama
                        Lengkap</label>
                    <input type="text" id="nama_lengkap" name="nama_lengkap"
                        class="bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-red-100 dark:border-red-400"
                        placeholder="Example : Muhammad Hilman Nursalam" value="{{ old('nama_lengkap') }}" required>
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span>
                        @foreach ($errors->get('nama_lengkap') as $message)
                            {{ $message }}
                        @endforeach
                    </p>
                @else
                    <label for="nama_lengkap" class="block mb-2 text-sm font-medium">Nama Lengkap</label>
                    <input type="text" id="nama_lengkap" name="nama_lengkap"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Example : Muhammad Hilman Nursalam" required>
                @endif

            </div>
            <div>
                @if ($errors->get('kelas'))
                    <label for="kelas" class="block mb-2 text-sm font-medium text-red-700 dark:text-white">Kelas</label>
                    <select id="kelas" name="kelas"
                        class="bg-gray-50 border border-red-500 text-red-700 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Pilih Kelas</option>
                        @foreach ($dataKelas as $kelas)
                            <option value="{{ $kelas->id }}">{{ $kelas->namaKelas }}</option>
                        @endforeach
                    </select>
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span>
                        @foreach ($errors->get('kelas') as $message)
                            {{ $message }}
                        @endforeach
                    </p>
                @else
                    <label for="kelas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kelas</label>
                    <select id="kelas" name="kelas"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Pilih Kelas</option>
                        @foreach ($dataKelas as $kelas)
                            <option value="{{ $kelas->id }}">{{ $kelas->namaKelas }}</option>
                        @endforeach
                    </select>
                @endif
            </div>
            <div>
                @if ($errors->get('username'))
                    <label for="username"
                        class="block mb-2 text-sm font-medium text-red-700 dark:text-red-500">Username</label>
                    <input type="text" id="username" name="username"
                        class="bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-red-100 dark:border-red-400"
                        placeholder="Example : hilmanxcode" value="{{ old('username') }}" required>
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span>
                        @foreach ($errors->get('username') as $message)
                            {{ $message }}
                        @endforeach
                    </p>
                @else
                    <label for="username" class="block mb-2 text-sm font-medium">Username</label>
                    <input type="text" id="text" name="username"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Example: hilmanxcode" required>
                @endif
            </div>
            <div>
                @if ($errors->get('email'))
                    <label for="email"
                        class="block mb-2 text-sm font-medium text-red-700 dark:text-red-500">Email</label>
                    <input type="email" id="email" name="email"
                        class="bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-red-100 dark:border-red-400"
                        placeholder="Example : hilmanxcode@gmail.com" value="{{ old('email') }}" required>
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span>
                        @foreach ($errors->get('email') as $message)
                            {{ $message }}
                        @endforeach
                    </p>
                @else
                    <label for="email" class="block mb-2 text-sm font-medium">Email</label>
                    <input type="email" id="email" name="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Example: hilmanxcode@gmail.com" required>
                @endif
            </div>
            <div>
                @if ($errors->get('password'))
                    <label for="password"
                        class="block mb-2 text-sm font-medium text-red-700 dark:text-red-500">Password</label>
                    <input type="password" id="password" name="password"
                        class="bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-red-100 dark:border-red-400"
                        placeholder="Example : hilmanxcode@gmail.com" value="{{ old('password') }}" required>
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span>
                        @foreach ($errors->get('password') as $message)
                            {{ $message }}
                        @endforeach
                    </p>
                @else
                    <label for="password" class="block mb-2 text-sm font-medium">Password</label>
                    <input type="password" id="password" name="password"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required>
                @endif
            </div>
            <div>
                <label for="confirmpass" id="confirmpassHeader" class="block mb-2 text-sm font-medium">Confirm
                    Password</label>
                <input type="password" id="confirmpass" name="confirmpass"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
                <p id="errormsgpass" class="mt-2 text-sm text-red-600 dark:text-red-500 hidden"><span
                        class="font-medium">Confirm
                        Password Doesn't
                        match</span></p>

            </div>
        </div>
        <div class="px-5">
            <div class="mb-5">
                @if ($errors->get('level'))
                    <label for="level" class="block mb-2 text-sm font-medium text-red-700 dark:text-white">Level</label>
                    <select id="level" name="level"
                        class="bg-gray-50 border border-red-600 text-red-700 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Pilih Level</option>
                        <option value="1">Peserta</option>
                        <option value="2">Guru</option>
                        <option value="3">Administrator</option>
                    </select>
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span>
                        @foreach ($errors->get('level') as $message)
                            {{ $message }}
                        @endforeach
                    </p>
                @else
                    <label for="level"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Level</label>
                    <select id="level" name="level"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Pilih Level</option>
                        <option value="1">Peserta</option>
                        <option value="2">Guru</option>
                        <option value="3">Administrator</option>
                    </select>
                @endif

            </div>
            <button type="submit"
                class="w-full focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Submit</button>
        </div>
    </form>
@endsection

@section('script')
    <script>
        const password = document.querySelector('#password');
        const confirmpass = document.querySelector('#confirmpass');
        const texterror = document.querySelector('#errormsgpass');
        const confirmpassHead = document.querySelector('#confirmpassHeader');
        confirmpass.addEventListener("keyup", () => {
            if (confirmpass.value != password.value) {
                texterror.classList.replace('hidden', 'block');
                confirmpassHead.classList.add('text-red-600');
                confirmpass.classList.replace('focus:ring-blue-500', 'focus:ring-red-600');
                confirmpass.classList.replace('focus:border-blue-500', 'focus:border-red-600');
            } else {
                texterror.classList.replace('block', 'hidden');
                confirmpassHead.classList.remove('text-red-600');
                confirmpass.classList.replace('focus:ring-red-600', 'focus:ring-blue-500');
                confirmpass.classList.replace('focus:border-red-600', 'focus:border-blue-500');
            }
        })
    </script>
@endsection
