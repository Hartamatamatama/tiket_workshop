<nav class="sticky top-0 z-50 backdrop-blur-md bg-[rgba(17, 24, 39, 0.8)] border-b-[1px] border-[rgba(59, 130, 246, 0.2)] py-4">
    <div class="container mx-auto px-6">
        <div class="flex md:flex-row md:justify-between items-center flex-col">
            <div class="text-2xl font-bold bg-gradient-to-r from-blue-400 to-blue-600 bg-clip-text text-transparent">
                DIGITAL<span class="text-white">MASTERY</span>
            </div>

            <div class="h-3 md:hidden"></div>

            <div class="flex md:flex space-x-5 items-center">
                @guest
                    <a href="{{ route('landing') }}" class="hover:text-blue-400 transition {{ is_active('/') }}">Beranda</a>
                    <a href="{{ route('about') }}" class="hover:text-blue-400 transition {{ is_active('about') }}">Tentang</a>
                    <a href="{{ route('tickets') }}" class="hover:text-blue-400 transition {{ is_active('tickets') }}">Tiket</a>
                    <a href="{{ route('login') }}" class="text-center text-white bg-blue-500 px-6 py-2 ads rounded-full font-bold cursor-pointer hover:bg-blue-700 hidden md:block">Masuk</a>
                    <a href="{{ route('register') }}" class="text-center text-blue-500 border-2 border-blue-500 px-6 py-2 rounded-full font-bold cursor-pointer hover:text-white hover:bg-blue-500 transition-all hidden md:block">Daftar</a>
                @endguest

                @auth
                    <a href="{{ route('user.dashboard') }}" class="hover:text-blue-400 transition {{ is_active('user/dashboard') }}">Beranda</a>
                    <a href="{{ route('landing') }}" class="hover:text-blue-400 transition {{ is_active('bookings') }}">Booking</a>
                    <a href="{{ route('landing') }}" class="hover:text-blue-400 transition {{ is_active('payments') }}">Pembayaran</a>
                    <a href="{{ route('landing') }}" class="hover:text-blue-400 transition {{ is_active('reviews') }}">Reviews</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-center text-white bg-blue-500 px-4 py-2 rounded-full font-bold hover:bg-blue-700 hidden md:block transition-all">
                            Logout
                        </button>
                    </form>
                @endauth
            </div>
        </div>

        <!-- Mobile menu -->
        <div class="md:hidden h-3"></div>
        <div class="md:hidden grid grid-cols-2 gap-2">
            @guest
                <span class="text-center text-white bg-blue-500 p-1.5 rounded-full font-bold cursor-pointer hover:bg-blue-700">
                    <a href="{{ route('login') }}">Masuk</a>
                </span>
                <span class="text-center text-blue-500 border-2 border-blue-500 p-1.5 rounded-full font-bold cursor-pointer hover:text-white hover:bg-blue-500 transition-all">
                    <a href="{{ route('register') }}">Daftar</a>
                </span>
            @endguest

            @auth
                <form method="POST" action="{{ route('logout') }}" class="justify-items-end flex">
                    @csrf
                    <button type="submit" class="hover:text-blue-400 transition text-right">
                        Logout
                    </button>
                </form>
            @endauth
        </div>
    </div>
</nav>
