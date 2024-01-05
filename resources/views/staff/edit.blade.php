@extends('layouts.main')

@section('container')
    <h1 class="text-center font-bold my-6 text-4xl">Edit Staff</h1>
    <form action="/dashboard/staff/{{ $dataUser->id }}/edit" method="post">
        @csrf
        <div class="grid grid-cols-2 gap-4 p-5">
            <div>
                @if ($errors->get('nama_lengkap'))
                    <label for="nama_lengkap" class="block mb-2 text-sm font-medium text-red-700 dark:text-red-500">Nama
                        Lengkap</label>
                    <input type="text" id="nama_lengkap" name="nama_lengkap"
                        class="bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-red-100 dark:border-red-400"
                        placeholder="Example : Muhammad Hilman Nursalam" value="{{ $dataUser->nama_lengkap }}" required>
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span>
                        @foreach ($errors->get('nama_lengkap') as $message)
                            {{ $message }}
                        @endforeach
                    </p>
                @else
                    <label for="nama_lengkap" class="block mb-2 text-sm font-medium">Nama Lengkap</label>
                    <input type="text" id="nama_lengkap" name="nama_lengkap"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Example : Muhammad Hilman Nursalam" value="{{ $dataUser->nama_lengkap }}" required>
                @endif

            </div>
            <div>
                @if ($errors->get('username'))
                    <label for="username"
                        class="block mb-2 text-sm font-medium text-red-700 dark:text-red-500">Username</label>
                    <input type="text" id="username" name="username"
                        class="bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-red-100 dark:border-red-400"
                        placeholder="Example : hilmanxcode" value="{{ $dataUser->username }}" required>
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span>
                        @foreach ($errors->get('username') as $message)
                            {{ $message }}
                        @endforeach
                    </p>
                @else
                    <label for="username" class="block mb-2 text-sm font-medium">Username</label>
                    <input type="text" id="text" name="username"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Example: hilmanxcode" value="{{ $dataUser->username }}" required>
                @endif
            </div>
            <div>
                @if ($errors->get('password'))
                    <label for="password" class="block mb-2 text-sm font-medium text-red-700 dark:text-red-500">Change
                        Password</label>
                    <input type="password" id="password" name="password"
                        class="bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-red-100 dark:border-red-400"
                        placeholder="Example : hilmanxcode@gmail.com" value="{{ old('password') }}">
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span>
                        @foreach ($errors->get('password') as $message)
                            {{ $message }}
                        @endforeach
                    </p>
                @else
                    <label for="password" class="block mb-2 text-sm font-medium">Change Password</label>
                    <input type="password" id="password" name="password"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @endif
            </div>
            <div>
                <label for="confirmpass" id="confirmpassHeader" class="block mb-2 text-sm font-medium">Confirm Change
                    Password</label>
                <input type="password" id="confirmpass" name="confirmpass"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <p id="errormsgpass" class="mt-2 text-sm text-red-600 dark:text-red-500 hidden"><span
                        class="font-medium">Confirm
                        Password Doesn't
                        match</span></p>

            </div>
        </div>
        <div class="px-5">
            <button type="submit"
                class="w-full focus:outline-none text-white bg-[#0f172a] hover:bg-[#0f172a]/90 font-medium rounded-lg text-sm px-5 py-2.5 mb-2">Submit</button>
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
