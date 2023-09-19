<button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
    </svg>
    </button>
        
    <aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-blue-600 dark:bg-gray-800">
            <a href="https://flowbite.com/" class="flex items-center pl-2.5 mb-5">
                <img src="http://localhost:8000/img/ice-cube.png" class="h-6 mr-3 sm:h-7" alt="Ice CBT Logo" />
                <span class="self-center text-[16px] font-semibold whitespace-nowrap text-white">Ice CBT</span>
            </a>
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="#" class="flex items-center p-2 rounded-lg text-white hover:bg-gray-900 group">
                    <img src="http://localhost:8000/img/home.svg" class="w-5 h-5 text-slate-100 transition duration-75 dark:text-gray-400 group-hover:text-slate-50 dark:group-hover:text-white" aria-hidden="true"/>
                    <span class="ml-3">Home</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 rounded-lg text-white hover:bg-gray-900 group">
                    <img src="http://localhost:8000/img/books.png" class="w-5 h-5 text-slate-100 transition duration-75 dark:text-gray-400 group-hover:text-slate-50 dark:group-hover:text-white" aria-hidden="true"/>
                    <span class="ml-3">Bank Soal</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 rounded-lg text-white hover:bg-gray-900 group">
                    <img src="http://localhost:8000/img/clock.svg" class="w-5 h-5 text-slate-100 transition duration-75 dark:text-gray-400 group-hover:text-slate-50 dark:group-hover:text-white" aria-hidden="true"/>
                    <span class="ml-3">Jadwal Ujian</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 rounded-lg text-white hover:bg-gray-900 group">
                    <img src="http://localhost:8000/img/user.png" class="w-5 h-5 text-slate-100 transition duration-75 dark:text-gray-400 group-hover:text-slate-50 dark:group-hover:text-white" aria-hidden="true" />
                    <span class="ml-3">Tambah User</span>
                    </a>
                </li>
                <ul class="pt-4 mt-4 space-y-2 font-medium border-t border-gray-200 dark:border-gray-700">
                    <li>
                        <a href="#" class="flex items-center p-2 rounded-lg text-white hover:bg-gray-900 group">
                        <img src="http://localhost:8000/img/logout.png" class="w-5 h-5 text-slate-100 transition duration-75 dark:text-gray-400 group-hover:text-slate-50 dark:group-hover:text-white" aria-hidden="true" />
                        <span class="ml-3">Logout</span>
                        </a>
                    </li>
                </ul>
            </ul>
        </div>
    </aside>