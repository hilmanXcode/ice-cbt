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
    <div id="notification">
    </div>



    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // @if ($errors->get('username'))
        //     Swal.fire({
        //         icon: 'error',
        //         title: 'Oopss..',
        //         text: "The username field cannot be empty!"
        //     })
        // @endif
        // @if ($errors->get('password'))
        //     Swal.fire({
        //         icon: 'error',
        //         title: 'Oopss..',
        //         text: "The password field cannot be empty!"
        //     })
        // @endif
        // @if ($errors->get('username') && $errors->get('password'))
        //     Swal.fire({
        //         icon: 'error',
        //         title: 'Oopss..',
        //         text: "The fields cannot be empty!"
        //     })
        // @endif
        // @if (session()->has('error'))
        //     Swal.fire({
        //         icon: 'error',
        //         title: 'Oopss..',
        //         text: "{{ session('error') }}"
        //     })
        // @endif

        const notifPlace = document.querySelector('#notification');

        const emptySetNotif = () => {
            notifPlace.innerHTML = '';
        }

        const clearNotif = () => {
            const notif = document.querySelector('#toast-warning');

            notif.classList.replace("animate-slidekan", "animate-slidekanrev")
            notif.classList.replace("right-3", "right-0")
            notif.classList.add("translate-x-full")


            setTimeout(emptySetNotif, 1000)
        }

        @if (session()->has('error'))
            notifPlace.innerHTML = `
        <div id="toast-warning" class="flex animate-slidekan fixed bottom-1 right-3 items-center w-full max-w-xs p-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
    <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-orange-500 bg-orange-100 rounded-lg dark:bg-orange-700 dark:text-orange-200">
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM10 15a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm1-4a1 1 0 0 1-2 0V6a1 1 0 0 1 2 0v5Z"/>
        </svg>
        <span class="sr-only">Warning icon</span>
    </div>
    <div class="ml-3 text-sm font-normal">{{ session('error') }}.</div>
    <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-warning" aria-label="Close">
        <span class="sr-only">Close</span>
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
        </svg>
    </button>
</div>
        `;
            setTimeout(clearNotif, 3000);
        @endif
    </script>
</body>

</html>
