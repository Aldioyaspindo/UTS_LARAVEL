@extends('layouts.main')

@section('title', 'GooCare')

@section('content')

<style>
        @keyframes slide {
          0% {
            transform: translateX(100%);
          }
          100% {
            transform: translateX(-100%);
          }
        }
    
        .animate-slide {
          animation: slide 30s linear infinite;
        }


</style>

    <!-- Hero Section -->
    <section class="flex flex-col md:flex-row items-center justify-between px-[10rem] mb-16 relative mt-[150px]">
        <!-- Text -->
        <div class="max-w-xl space-y-4 z-10 text-white">
            <h2 class="text-4xl md:text-[64px] font-bold leading-tight">
                MARI TUNJUKAN KEPEDULIAN KITA BERSAMA
            </h2>
            <p class="text-1xl font-bold">
                Mari Berdonasi Kepada Saudara Kita Yang Membutuhkan
            </p>
            <br>
            <a href="{{ route('donasi.create') }}" class="bg-green-400 text-white px-6 py-3 font-bold rounded hover:bg-green-700 transition">
                Donasi Sekarang
            </a>
        </div>

        <!-- Image -->
        <div class="mt-10 md:mt-0  w-[30rem]">
            <img src="{{ asset('image/Image MainHead.jpg') }}" alt="Gambar Keluarga" class="w-[750px] md:w-[750px] rounded-[30px]">
        </div>
    </section>

    <!-- Sponsor Logos -->
    <section class="overflow-hidden w-full bg-white py-[10px] mb-16">
        <div class="flex items-center animate-slide">
            <!-- Sponsor logos -->
            <img src="{{ asset('image/Bri logo.png') }}" alt="Sponsor 1" class="h-[30px] mx-8">
            <img src="{{ asset('image/263. BMH.png') }}" alt="Sponsor 2" class="h-[80px] mx-8">
            <img src="{{ asset('image/BNI.png') }}" alt="Sponsor 3" class="h-[25px] mx-8">
            <img src="{{ asset('image/Logo_BAZNAS_RI-Hijau-01.png') }}" alt="Sponsor 4" class="h-16 mx-8">
            <img src="{{ asset('image/paybill-logo-wjbzle-1577680057993.png') }}" alt="Sponsor 5" class="h-[40px] mx-8">
            <!-- Duplicate logos for infinite effect -->
            <img src="{{ asset('image/Bri logo.png') }}" alt="Sponsor 1" class="h-[30px] mx-8">
            <img src="{{ asset('image/263. BMH.png') }}" alt="Sponsor 2" class="h-[80px] mx-8">
            <img src="{{ asset('image/BNI.png') }}" alt="Sponsor 3" class="h-[25px] mx-8">
            <img src="{{ asset('image/Logo_BAZNAS_RI-Hijau-01.png') }}" alt="Sponsor 4" class="h-16 mx-8">
            <img src="{{ asset('image/paybill-logo-wjbzle-1577680057993.png') }}" alt="Sponsor 5" class="h-[40px] mx-8">
        </div>
    </section>

    <!-- Iklan Banner Top -->
    <div class="flex justify-center py-10">
        <div class="w-[60rem] h-[21rem] flex items-center justify-center">
            <a href="#">
                <img src="{{ asset('image/Header Campaign.png') }}" alt="Iklan Promo">
            </a>
        </div>
    </div>

    <div class="rental-kendaraan mt-[50px]">
        <div class="flex flex-col justify-center items-center space-y-4">
            <h1 class="text-center font-bold text-white text-4xl">Campaign</h1>
            <h1 class="text-center font-medium text-white text-lg">Ulurkan Tanganmu ke Mereka Yang Membutuhkan</h1>
        </div>
    </div>

    <div class="py-12 px-8">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Card 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col">
                <img src="{{ asset('image/gempa-bumi.jpg') }}" alt="Gambar 1" class="w-full h-48 object-cover">
                <div class="p-6 flex flex-col flex-grow">
                    <h2 class="text-2xl font-bold mb-2">Donasi Gempa</h2>
                    <p class="text-gray-700 mb-4 flex-grow">Berikan Donasi Kepada Korban Gempa</p>
                    <a href="halaman1.html"
                        class="mt-auto bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700 transition text-center">Selengkapnya</a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col">
                <img src="{{ asset('image/imagesbir.jpg') }}" alt="Gambar 2" class="w-full h-48 object-cover">
                <div class="p-6 flex flex-col flex-grow">
                    <h2 class="text-2xl font-bold mb-2">Donasi pada korban banjir</h2>
                    <p class="text-gray-700 mb-4 flex-grow">Berikan donasi pada korban banjir</p>
                    <a href="halaman2.html"
                        class="mt-auto bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700 transition text-center">Selengkapnya</a>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col">
                <img src="{{ asset('image/NOUQ8Jy6r7gzdS71Z5WYEyLK32W5oFv6EHoQWuiH.jpg') }}" alt="Gambar 3" class="w-full h-48 object-cover">
                <div class="p-6 flex flex-col flex-grow">
                    <h2 class="text-2xl font-bold mb-2">Donasi Pembangunan Masjid</h2>
                    <p class="text-gray-700 mb-4 flex-grow">Berikan Donasi untuk membangun tempat ibadah</p>
                    <a href="halaman3.html"
                        class="mt-auto bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700 transition text-center">Selengkapnya</a>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col">
                <img src="{{ asset('image/imagesskin.jpg') }}" alt="Gambar 4" class="w-full h-48 object-cover">
                <div class="p-6 flex flex-col flex-grow">
                    <h2 class="text-2xl font-bold mb-2">Donasi Fakir Miskin</h2>
                    <p class="text-gray-700 mb-4 flex-grow">Berikan Donasi Kepada mereka yang membutuhkan</p>
                    <a href="halaman4.html"
                        class="mt-auto bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700 transition text-center">Selengkapnya</a>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col">
                <img src="{{ asset('image/megusap-kepala-anak-yatim.jpg') }}" alt="Gambar 5" class="w-full h-48 object-cover">
                <div class="p-6 flex flex-col flex-grow">
                    <h2 class="text-2xl font-bold mb-2">Yatim Piatu</h2>
                    <p class="text-gray-700 mb-4 flex-grow">Berikan Donasi Kepada Anak Anak Kita</p>
                    <a href="halaman5.html"
                        class="mt-auto bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700 transition text-center">Selengkapnya</a>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col">
                <img src="{{ asset('image/WhatsApp-Image-2024-03-04-at-01.04.56-2.jpeg') }}" alt="Gambar 6" class="w-full h-48 object-cover">
                <div class="p-6 flex flex-col flex-grow">
                    <h2 class="text-2xl font-bold mb-2">Donasi Kemanusiaan</h2>
                    <p class="text-gray-700 mb-4 flex-grow">Berikan Donasi kepada mereka yang membutuhkan kita</p>
                    <a href="halaman6.html"
                        class="mt-auto bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700 transition text-center">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Kenapa GooCare -->
    <div class="bg-white">
        <div class="flex flex-col justify-center items-center space-y-4">
            <h1 class="text-center mt-[100px] font-bold text-[#0367fc] text-4xl">Kenapa GooCare ?</h1>
        </div>


        <!-- alasan -->
        <div class="w-full flex justify-center mt-[80px] mb-[100px]">
            <div class="space-y-5">

                <!-- FAQ Container -->
                <div class="space-y-5">

                    <!-- Item 1 -->
                    <div class="bg-[#0367fc] w-[50rem] rounded-[16px] p-5 shadow-lg">
                        <div class="flex items-center justify-between cursor-pointer">
                            <h1 class="text-white text-lg font-medium">GooCare Adalah Platform Donasi Berbasis Website yang
                                ramah untuk pengguna</h1>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="bg-[#0367fc] w-[50rem] rounded-[16px] p-5 shadow-lg">
                        <div class="flex items-center justify-between cursor-pointer">
                            <h1 class="text-white text-lg font-medium">GooCare Membuka jalan untuk semua kalangan dimanapun
                                dan kapan pun untuk melakukan kebaikan</h1>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="bg-[#0367fc] w-[50rem] rounded-[16px] p-5 shadow-lg">
                        <div class="flex items-center justify-between cursor-pointer">
                            <h1 class="text-white text-lg font-medium">GooCare Dapat di percaya karena Campaign yang tepat
                                sasaran, Dana yang disalurkan dapat dilihat secara transparan, Siapa saja dapat menggalang
                                dana dan berdonasi dengan mudah</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section class="max-w-4xl mx-auto py-12 px-6">
            <h2 class="text-4xl font-bold text-center text-blue-600 mb-12">Apa Kata Mereka?</h2>

            <div class="flex items-start mb-12">
                <div class="w-24 h-24 rounded-full bg-gray-300 flex-shrink-0">
                    <img src="{{ asset('image/pngtree-casual-man-flat-design-avatar-profile-picture-vector-png-image_15526568.png') }}" alt="">
                </div>
                <div class="ml-6">
                    <p class="text-blue-600 text-lg font-medium mb-2">
                        “Dengan GooCare Saya bisa menyalurkan tangan ke siapapun dan dimanapun dengan mudah”
                    </p>
                    <p class="font-bold text-black">Budi</p>
                    <p class="text-sm text-black">Pengguna GooCare</p>
                </div>
            </div>

            <div class="flex items-start">
                <div class="w-24 h-24 rounded-full bg-gray-300 flex-shrink-0">
                    <img src="{{ asset('image/Avatar-Profile-Vector-PNG-Photos.png') }}" alt="">
                </div>
                <div class="ml-6">
                    <p class="text-blue-600 text-lg font-medium mb-2">
                        “GooCare Adalah Platform Donasi Dengan Antarmuka Yang jelas dan mudah sehingga berdonasi menjadi
                        lebih mudah”
                    </p>
                    <p class="font-bold text-black">Yanto</p>
                    <p class="text-sm text-black">Pengguna GooCare</p>
                </div>
            </div>

        </section>

        <div class="tawaran flex justify-center items-center mt-12">
            <div class="bg-[#0367fc] w-[55rem] h-[11rem] text-center text-white p-5 rounded-2xl mb-[5rem]">
                <h1 class="font-bold text-4xl">Tunggu Apa Lagi?</h1>
                <p class="text-lg font-bold mb-5">
                    Mari melangkah menuju kebaikan bersama kami
                </p>
                <a href="{{ route('donasi.create') }}" 
                    class="bg-white text-[#0367fc] px-6 py-2 rounded hover:bg-gray-200 transition inline-flex items-center h-12">
                    Donasi Sekarang
                </a>
            </div>
        </div>

    </div>

@endsection