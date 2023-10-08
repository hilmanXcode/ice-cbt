<button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar"
    type="button"
    class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd"
            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
        </path>
    </svg>
</button>

<aside id="default-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0 sm:border-r-2"
    aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-white">
        <a href="/dashboard" class="flex items-center pl-2.5 mb-5">
            <img src="{{ env('APP_URL') }}/img/logo-smk.png" class="h-6 mr-3 sm:h-7" alt="Ice CBT Logo" />
            <span class="self-center text-[16px] font-semibold whitespace-nowrap">SMK PGRI Telagasari</span>
        </a>
        <ul class="space-y-2 font-medium">
            <li>
                <a href="/dashboard"
                    class="flex font-medium items-center p-2 rounded-md {{ $page === 'Home' ? 'bg-[#0f172a] text-white hover:bg-[#0f172a]/90' : 'text-slate-800 hover:bg-slate-50' }} group">
                    <img src="{{ env('APP_URL') }}/img/home.svg" class="w-5 h-5 transition duration-75"
                        aria-hidden="true" />
                    <span class="ml-3">Home</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 rounded-md text-slate-800 hover:bg-slate-50 group">
                    <img src="{{ env('APP_URL') }}/img/books.png" class="w-5 h-5 text-slate-100 transition duration-75"
                        aria-hidden="true" />
                    <span class="ml-3">Bank Soal</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 rounded-md text-slate-800 hover:bg-slate-50 group">
                    <img src="{{ env('APP_URL') }}/img/clock.svg" class="w-5 h-5 text-slate-100 transition duration-75"
                        aria-hidden="true" />
                    <span class="ml-3">Jadwal Ujian</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 rounded-md text-slate-800 hover:bg-slate-50 group">
                    <img src="{{ env('APP_URL') }}/img/books.png" class="w-5 h-5 text-slate-100 transition duration-75"
                        aria-hidden="true" />
                    <span class="ml-3">Mata Pelajaran</span>
                </a>
            </li>
            <li>
                <a href="/dashboard/kelas"
                    class="flex items-center {{ $page === 'Kelas' ? 'bg-[#0f172a] text-white hover:bg-[#0f172a]/90' : 'text-slate-800 hover:bg-slate-50' }} p-2 rounded-md group">
                    <img src="{{ env('APP_URL') }}/img/class.png" class="w-5 h-5 text-slate-100 transition duration-75"
                        aria-hidden="true" />
                    <span class="ml-3">Kelas</span>
                </a>
            </li>
            <li>
                <a href="/dashboard/users"
                    class="flex items-center {{ $page === 'Users' ? 'bg-[#0f172a] text-white hover:bg-[#0f172a]/90' : 'text-slate-800 hover:bg-slate-50' }} p-2 rounded-md group">
                    <img src="{{ env('APP_URL') }}/img/users.png" class="w-5 h-5 text-slate-100 transition duration-75"
                        aria-hidden="true" />
                    <span class="ml-3">Siswa</span>
                </a>
            </li>
            <li>
                <a href="/dashboard/staff"
                    class="flex items-center {{ $page === 'Staff' ? 'bg-[#0f172a] text-white hover:bg-[#0f172a]/90' : 'text-slate-800 hover:bg-slate-50' }} p-2 rounded-md group">
                    <img src="{{ env('APP_URL') }}/img/user.png" class="w-5 h-5 text-slate-100 transition duration-75"
                        aria-hidden="true" />
                    <span class="ml-3">Staff</span>
                </a>
            </li>
            <ul class="pt-4 mt-4 space-y-2 font-medium border-t border-gray-200 dark:border-gray-700">
                <li>
                    <form action="/auth/logout" method="post">
                        @csrf
                        <button type="submit"
                            class="flex items-center w-full p-2 rounded-md text-slate-800 hover:bg-slate-50 group">
                            <img src="{{ env('APP_URL') }}/img/logout.png"
                                class="w-5 h-5 text-slate-100 transition duration-75" aria-hidden="true" />
                            <span class="ml-3">Logout</span>
                        </button>
                    </form>
                </li>
            </ul>
        </ul>
    </div>
</aside>
