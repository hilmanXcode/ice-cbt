<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ice CBT | Login</title>
    <link rel="icon" href="{{ env('APP_URL') }}/img/ice-icon2.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;600;700;900&family=Poppins:wght@100;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#ecf5fc]">
    <div
        class="font-poppins sm:max-w-4xl w-5/6 h-auto md:mx-14 lg:mx-auto shadow-2xl shadow-[#a3c1f3] my-5 mx-10 sm:mt-16 sm:mx-10 rounded-xl overflow-hidden">
        <div class="grid sm:grid-cols-2">
            <div class="container text-center bg-[#a3c1f3] h-full sm:pt-28">
                <img class="mx-auto" src="http://localhost:8000/img/ice-cube.png" alt="Logo" width="300"
                    height="250">
                <h1 class="text-4xl font-bold">Ice CBT</h1>
                <p class="my-4 sm:mt-2">Aplikasi Ujian Paling Cool</p>
            </div>
            <div class="container p-10 bg-white">
                <form action="/auth/check" method="post">
                    @csrf
                    <h1 class="text-xl sm:mt-16 font-semibold text-center">Login</h1>
                    <div class="w-full mt-4">
                        <label class="block" for="username">Username</label>
                        <input class="w-full mt-1 border-gray-200 p-3 focus:ring-[#a3c1f3] focus:border-[#a3c1f3]"
                            type="text" name="username" id="username" required placeholder="Example : hilmanxcode">
                    </div>
                    <div class="w-full mt-4">
                        <label class="block" for="password">Password</label>
                        <input class="w-full mt-1 border-gray-200 focus:ring-[#a3c1f3] focus:border-[#a3c1f3] p-3"
                            type="password" name="password" id="password" required placeholder="Enter your password">
                        <a class="text-end block mt-2 sm:mt-4 text-sm" href="">Forgot Password ?</a>
                    </div>
                    <button type="submit"
                        class="px-5 py-3 w-full mt-4 sm:mt-14 bg-[#a3c1f3] active:scale-95 transition duration-300 font-semibold">
                        Login
                    </button>
                </form>
            </div>
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
