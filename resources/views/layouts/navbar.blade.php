<navbar class="w-full min-h-screen text-gray-900 bg-gradient-to-br from-transparent to-yellow-100">
        <nav class="flex justify-between items-center pt-8 pb-3  px-6 mx-auto max-w-screen-xl xl:px-0">
          <button
            class="sidebar-open block md:hidden relative z-30 focus:outline-none transform  -translate-x-1/2 -translate-y-1/2 active:scale-75 transition-transform mt-5">
            <svg xmlns="http://www.w3.org/2000/svg" class="btn-open h-5 w-5 transform transition duration-500 ease-in-out"
              viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd"
                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                clip-rule="evenodd" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg"
              class="btn-close hidden h-5 w-5 transform transition duration-500 ease-in-out" viewBox="0 0 20 20"
              fill="currentColor">
              <path fill-rule="evenodd"
                d="M3 7a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 13a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                clip-rule="evenodd" />
            </svg>
          </button>
          <a href="#" class="text-3xl md:text-4xl font-bold tracking-wide">
            NFZ <span class="text-yellow-500">Laundry</span>
          </a>
          <div
            class="menu-resposive hidden fixed flex inset-0 transition-all bg-white/70 backdrop-blur-xl z-20 md:static md:bg-transparent md:flex items-center justify-center space-y-8 md:space-y-0 flex-col md:flex-row md:space-x-8 -mt-56 md:mt-0 ">
            <ul class="flex flex-col md:flex-row items-center space-y-6 md:space-y-0 md:space-x-6 lg:md:-x-8">
                <li class="text-lg md:text-base lg:text-lg font-medium group">
                <a href="{{ route('dashboard') }}">Dashboard</a>
                <div
                    class="h-0.5 bg-yellow-500 scale-x-0 group-hover:scale-100 transition-transform origin-left rounded-full duration-300 ease-out">
                </div>
                </li>
                <li class="text-lg md:text-base lg:text-lg font-medium group">
                <a href="{{ route('karyawan.index') }}">Karyawan</a>
                <div
                    class="h-0.5 bg-yellow-500 scale-x-0 group-hover:scale-100 transition-transform origin-left rounded-full duration-300 ease-out">
                </div>
                </li>
                <li class="text-lg md:text-base lg:text-lg font-medium group">
                <a href="{{ route('pelanggan.index') }}">Pelanggan</a>
                <div
                    class="h-0.5 bg-yellow-500 scale-x-0 group-hover:scale-100 transition-transform origin-left rounded-full duration-300 ease-out">
                </div>
                </li>
                <li class="text-lg md:text-base lg:text-lg font-medium group">
                <a href="{{ route('cucian.index') }}">Cucian</a>
                <div
                    class="h-0.5 bg-yellow-500 scale-x-0 group-hover:scale-100 transition-transform origin-left rounded-full duration-300 ease-out">
                </div>
                </li>
                <li class="text-lg md:text-base lg:text-lg font-medium group">
                <a href="{{ route('transaksi.index') }}">Transaksi</a>
                <div
                    class="h-0.5 bg-yellow-500 scale-x-0 group-hover:scale-100 transition-transform origin-left rounded-full duration-300 ease-out">
                </div>
                </li>
                <li class="text-lg md:text-base lg:text-lg font-medium group">
                    <div class="relative text-sm">
                        <button id="userButton" class="flex items-center focus:outline-none mr-3">
                            <img class="w-8 h-8 rounded-full mr-4" src="https://images7.alphacoders.com/117/1179584.jpg" alt="Avatar of User"> 
                            {{-- <span class="hidden md:inline-block">Hi, {{ auth()->user()->name }}</span> --}}
                            <svg class="h-2" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 129 129">
                                <g>
                                    <path d="m121.3,34.6c-1.6-1.6-4.2-1.6-5.8,0l-51,51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z" />
                                </g>
                            </svg>
                        </button>
                        <div id="userMenu" class="bg-white rounded shadow-md mt-2 absolute mt-12 top-0 right-0 min-w-full overflow-auto z-30 invisible">
                            <ul class="list-reset">
                                <li><a href="{{ route('profile.edit') }}" class="px-4 py-2 block text-gray-900 hover:bg-gray-400 no-underline hover:no-underline">Profile</a></li>
                                <li><a href="{{ route('outlet.edit') }}" class="px-4 py-2 block text-gray-900 hover:bg-gray-400 no-underline hover:no-underline">Outlet</a></li>
                                <li>
                                    <hr class="border-t mx-2 border-gray-400">
                                </li>
                                <li>
                                    <form action="{{ route('logout') }}" method="post" class="w-full px-4 py-2 block text-gray-900 hover:bg-gray-400 no-underline hover:no-underline">
                                        @csrf
                                        <button type="submit" class="w-full text-start">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
          </div>
        </nav>
      </navbar>