<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ice CBT | Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;600;700;900&family=Poppins:wght@100;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-blue-600 font-poppins">
    <div class="container mx-auto flex justify-center">
        <div class="mt-32 w-96 h-auto min-h-fit rounded-xl shadow-lg bg-black p-8">
            <h1 class="font-bold text-4xl text-center mt-4 text-white">Login</h1>
            <form action="/auth/check" method="post" class="mt-7">
                @csrf
                <div class="mb-3">
                    <label for="username"
                        class="block mb-2 text-sm font-medium text-white dark:text-white">Username</label>
                    <input type="username" id="username" name="username"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="hilmanxcode" required>
                </div>
                <div class="mb-6">
                    <label for="password"
                        class="block mb-2 text-sm font-medium text-white dark:text-white">Password</label>
                    <input type="password" id="password" name="password"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="********" required>
                </div>
                <button type="submit"
                    class="w-full focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Login</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        @if ($errors->get('username'))
            Swal.fire({
                icon: 'error',
                title: 'Oopss..',
                text: "The username field cannot be empty!"
            })
        @endif
        @if ($errors->get('password'))
            Swal.fire({
                icon: 'error',
                title: 'Oopss..',
                text: "The password field cannot be empty!"
            })
        @endif
        @if ($errors->get('username') && $errors->get('password'))
            Swal.fire({
                icon: 'error',
                title: 'Oopss..',
                text: "The fields cannot be empty!"
            })
        @endif
        @if (session()->has('error'))
            Swal.fire({
                icon: 'error',
                title: 'Oopss..',
                text: "{{ session('error') }}"
            })
        @endif
    </script>
</body>

</html>
