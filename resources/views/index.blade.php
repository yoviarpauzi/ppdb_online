@extends('template.main')

@section('body')
    <header class="fixed h-14 w-screen bg-white z-20" id="header">
        <div class="container">
            <div class="flex justify-between items-center">
                <div class="w-14">
                    <img src="logo.png" alt="image">
                </div>

                <nav class="absolute top-[-100vh] left-0 right-0 text-center py-16 flex transition-all duration-300 shadow-md rounded-sm bg-white lg:top-initial lg:py-0 lg:gap-0 lg:shadow-none lg:rounded-none lg:z-10 lg:bg-transparent"
                    id="nav-menu">
                    <div class="container flex flex-col gap-y-3">
                        <ul class="flex flex-col gap-y-3 lg:flex-row lg:justify-center lg:gap-y-0 lg:gap-x-6">
                            <li>
                                <a href="#home" class="text-sm nav__link">Home</a>
                            </li>
                            <li>
                                <a href="#about" class="text-sm nav__link">About Us</a>
                            </li>
                            <li>
                                <a href="#contact" class="text-sm nav__link">Contact Me</a>
                            </li>
                        </ul>

                        <div class="flex justify-center gap-x-3 lg:hidden">
                            <a href="{{ url('/login') }}">
                                <button
                                    class="bg-white text-sm w-28 py-2 rounded-md shadow-md text-blue-500 shadow-blue-200 hover:bg-blue-500 hover:text-white">Login</button>
                            </a>
                            <a href="{{ url('/registrasi') }}">
                                <button
                                    class="bg-white text-sm w-28 py-2 rounded-md shadow-md text-blue-500 shadow-blue-200 hover:bg-blue-500 hover:text-white">Registrasi</button>
                            </a>
                        </div>

                        <div class="absolute top-1 right-2 lg:hidden md:right-14" id="nav-close">
                            <i class="ri-close-line text-4xl cursor-pointer"></i>
                        </div>
                    </div>
                </nav>

                <div class="hidden lg:flex lg:gap-x-4 lg:z-20">
                    <a href="{{ url('/login') }}">
                        <button
                            class="text-sm w-28 py-1 rounded-md shadow-md text-blue-500 shadow-blue-200 hover:bg-blue-500 hover:text-white">Login</button>
                    </a>
                    <a href="{{ url('/registrasi') }}">
                        <button
                            class="text-sm w-28 py-1 rounded-md shadow-md text-blue-500 shadow-blue-200 hover:bg-blue-500 hover:text-white">Registrasi</button>
                    </a>
                </div>

                <div id="nav-toggle" class="lg:hidden">
                    <i class="ri-menu-line text-2xl font-bold cursor-pointer"></i>
                </div>
            </div>
        </div>
    </header>

    <main>
        {{-- Hero --}}
        <section
            class="w-full h-screen bg-hero bg-no-repeat bg-cover bg-center flex items-center justify-center flex-col bg-fixed"
            id="home">
            <div class="container z-10">
                <div class="text-center text-white">
                    <h1 class="text-4xl font-semibold">Website PPDB Online</h1>
                    <h2 class="text-xl font-semibold mt-1">SMP Putra Perintis</h2>
                    <p class="mt-2 text-sm">Akses dan cari tahu prosedur serta ketentuan informasi pendaftaran<br>SMP
                        Putra
                        Perintis.</p>
                </div>
                <div class="flex justify-center gap-x-6 mt-5 lg:hidden">
                    <a href="{{ url('/login') }}">
                        <button
                            class="text-sm w-28 py-2 rounded-md bg-white text-blue-500 hover:bg-blue-500 hover:text-white">Login</button>
                    </a>
                    <a href="{{ url('/registrasi') }}">
                        <button
                            class="text-sm w-28 py-2 rounded-md bg-white text-blue-500  hover:bg-blue-500 hover:text-white">Registrasi</button>
                    </a>
                </div>
            </div>
        </section>

        {{-- About Us --}}
        <section class="my-12" id="about">
            <div class="container">
                <div class="flex flex-col">
                    <h1 class="text-3xl font-semibold text-center">About Us</h1>
                    <div class="mt-5 text-justify flex flex-col gap-y-3 md:block md:columns-2 lg:px-36">
                        <p>
                            SMP Putra Perintis adalah lembaga pendidikan menengah pertama yang berkomitmen untuk memberikan
                            pendidikan berkualitas tinggi sejak didirikan pada tahun 2020. Sebagai sekolah yang relatif
                            baru, kami bangga menjadi bagian dari perkembangan dan pertumbuhan pendidikan di Indonesia.
                        </p>
                        <p>
                            Visi kami adalah menciptakan lingkungan pembelajaran yang inspiratif dan inklusif, di mana
                            setiap
                            siswa merasa didukung untuk mencapai potensi maksimalnya. Dengan fokus pada pendekatan holistik,
                            kami tidak hanya mengejar keunggulan akademis, tetapi juga berupaya membentuk karakter,
                            kepemimpinan, dan etika yang kuat pada setiap siswa.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        {{-- Contact Us --}}
        <section class="bg-blue-500 py-14" id="contact">
            <div class="container">
                <h1 class="text-white text-3xl font-semibold text-center">Contact Us</h1>
                <div class="flex justify-center">
                    <div class="flex flex-col mt-3 text-white">
                        <div class="flex items-center gap-x-3">
                            <i class="ri-map-pin-line"></i>
                            <p class="text-sm">Kp. Cipicung RT 03 RW 03, Desa Pangkalan, Kec. Cikidang, Kab. Sukabumi
                                Prov. Jawa Barat</p>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <i class="ri-phone-line"></i>
                            <p class="text-sm">+62 896 1234 5678</p>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <i class="ri-mail-line"></i>
                            <p class="text-sm">smpputraperintis@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-blue-400 py-2">
        <div class="container">
            <p class="text-xs text-center">Copyright © SMP Putra Perintis 2023 | IT Development SMP Putra Perintis</p>
        </div>
    </footer>
@endsection

@section('foot')
    @vite('resources/js/index.js')
@endsection
