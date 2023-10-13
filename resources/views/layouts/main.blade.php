<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ice CBT | Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;600;700;900&family=Poppins:wght@100;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="overflow-x-hidden font-poppin">
    @include('layouts.sidebar')

    <div class="p-4 sm:ml-64">
        <div>
            @yield('container')
        </div>
    </div>

    <div id="tutup" class="fixed inset-0 z-40 bg-background/80 backdrop-blur-sm hidden">
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
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
            modal.classList.replace('slide-in-from-bottom', 'fade-out');
            setTimeout(function() {
                modal.classList.toggle('hidden');
                modal.classList.replace('animate-out', 'animate-in');
                modal.classList.replace('fade-out', 'slide-in-from-bottom');
                document.querySelector('#tutup').classList.toggle('hidden');
            }, 100);
        })

        $('#yes-clicked').click(function(event) {
            let form = $('.xyz').closest("form");
            let modal = document.querySelector('#modal');
            modal.classList.replace('animate-in', 'animate-out');
            modal.classList.replace('slide-in-from-bottom', 'fade-out');
            setTimeout(function() {
                modal.classList.toggle('hidden');
                modal.classList.replace('animate-out', 'animate-in');
                modal.classList.replace('fade-out', 'slide-in-from-bottom');
                document.querySelector('#tutup').classList.toggle('hidden');
                form.submit();
            }, 100);
        })

        const notifPlace = document.querySelector('#notification');

        const emptySetNotif = () => {
            notifPlace.innerHTML = '';
        }

        const clearNotif = () => {
            const notif = document.querySelector('#toast-success');

            notif.classList.replace("animate-slidekan", "animate-slidekanrev")
            notif.classList.replace("right-3", "right-0")
            notif.classList.add("translate-x-full")


            setTimeout(emptySetNotif, 1000)
        }

        @if (session()->has('success'))
            notifPlace.innerHTML = `<div id="toast-success"
    class="flex animate-slidekan fixed bottom-0 right-3 items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800"
    role="alert">
    <div
        class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
            viewBox="0 0 20 20">
            <path
                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
        </svg>
        <span class="sr-only">Check icon</span>
    </div>
    <div class="ml-3 text-sm font-normal">{{ session('success') }}.</div>
    <button type="button"
        class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
        data-dismiss-target="#toast-success" aria-label="Close">
        <span class="sr-only">Close</span>
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
        </svg>
    </button>
</div>`;
            setTimeout(clearNotif, 3000);
        @endif
    </script>
    @yield('script')
</body>

</html>
