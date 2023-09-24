@extends('layouts.main')

@section('container')
    <h1 class="text-center font-bold my-6 text-4xl">Tambah User Baru</h1>
    <form action="/dashboard/user/create" method="post">
        @csrf
        <div class="grid grid-cols-2 gap-4 p-5">
            <div>
                <label for="nama" class="block mb-2 text-sm font-medium">Nama Lengkap</label>
                <input type="text" id="nama_lengkap" name="nama_lengkap"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Example : Muhammad Hilman Nursalam" required>
            </div>
            <div>
                <label for="kelas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kelas</label>
                <select id="kelas" name="kelas"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Pilih Kelas</option>
                    <option value="US">-</option>
                    <option value="CA">-</option>
                    <option value="FR">France</option>
                    <option value="DE">Germany</option>
                </select>
            </div>
            <div>
                <label for="username" class="block mb-2 text-sm font-medium">Username</label>
                <input type="text" id="username" name="username"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Example: eginugroho" required>
            </div>
            <div>
                <label for="email" class="block mb-2 text-sm font-medium">Email</label>
                <input type="email" id="email" name="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Example: eginugroho@gmail.com" required>
            </div>
            <div>
                <label for="password" class="block mb-2 text-sm font-medium">Password</label>
                <input type="password" id="password" name="password"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Example: eginugroho@gmail.com" required>
            </div>
            <div>
                <label for="confirmpass" class="block mb-2 text-sm font-medium">Confirm Password</label>
                <input type="confirmpass" id="confirmpass" name="confirmpass"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Example: eginugroho@gmail.com" required>
            </div>
        </div>
        <div class="px-5">
            <div class="mb-5">
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Level</label>
                <select id="countries"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Pilih Level</option>
                    <option value="US">Peserta</option>
                    <option value="CA">Guru</option>
                    <option value="FR">Administrator</option>
                </select>

            </div>
            <button type="submit"
                class="w-full focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Submit</button>
        </div>
    </form>
@endsection

@section('script')
@endsection
