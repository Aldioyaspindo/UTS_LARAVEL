<header class="fixed top-0 left-0 w-full flex items-center justify-between px-8 py-4 bg-white shadow z-50">
    <div class="flex items-center space-x-2">
        <img src="{{ asset('image/LOGO 2.png') }}" alt="Logo" class="w-[12rem]">
    </div>

    <nav class="flex space-x-8 text-gray-800 font-medium text-[20px]">
        <a href="{{ route('donasi.home') }}" class="hover:text-[#0367fc]">Beranda</a>
        <a href="{{ route('donasi.index') }}" class="hover:text-[#0367fc]">Donatur Service</a>
        <a href="#" class="hover:text-[#0367fc]">Tentang Kami</a>
    </nav>

    <div class="flex space-x-4">
        <a href="{{ route('donasi.create') }}" class="bg-green-400 text-white px-6 py-3 font-bold rounded hover:bg-green-700 transition">
            Ayo Donasi
        </a>
    </div>
</header>
