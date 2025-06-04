<!DOCTYPE html>
<html lang="id" class="dark">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>INTERN360 - Platform Magang Digital</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- SwiperJS CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="bg-white text-gray-800 dark:bg-[#121212] dark:text-gray-100">

    <!-- Navbar -->
    <header class="w-full py-4 px-6 lg:px-12 flex justify-between items-center shadow-sm bg-white/80 dark:bg-[#121212]/80 backdrop-blur-md sticky top-0 z-50 border-b border-gray-200 dark:border-gray-800">
        <!-- Logo -->
        <div class="text-xl font-bold text-indigo-600 dark:text-indigo-400">INTERN360</div>

        <!-- Navigation -->
        <nav class="hidden md:flex items-center space-x-6 text-sm text-gray-700 dark:text-gray-200">
            <a href="#fitur" class="hover:text-indigo-600 dark:hover:text-indigo-400 transition duration-200 font-medium">Fitur</a>
            <a href="#keunggulan" class="hover:text-indigo-600 dark:hover:text-indigo-400 transition duration-200 font-medium">Keunggulan</a>
            <a href="#alur" class="hover:text-indigo-600 dark:hover:text-indigo-400 transition duration-200 font-medium">Alur Kerja</a>
            <a href="#perusahaan" class="hover:text-indigo-600 dark:hover:text-indigo-400 transition duration-200 font-medium">Perusahaan</a>
            <a href="#testimoni" class="hover:text-indigo-600 dark:hover:text-indigo-400 transition duration-200 font-medium">Testimoni</a>
            <a href="#kontak" class="hover:text-indigo-600 dark:hover:text-indigo-400 transition duration-200 font-medium">Kontak</a>

            <a href="{{ route('login') }}"
               class="border border-indigo-600 text-indigo-600 hover:bg-indigo-600 hover:text-white px-4 py-2 rounded text-sm transition">
                Masuk
            </a>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-indigo-50 via-white to-indigo-100 py-24 dark:from-indigo-900 dark:via-gray-900 dark:to-indigo-950">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div>
                <h1 class="text-4xl md:text-5xl font-bold tracking-tight text-gray-800 dark:text-indigo-300 mb-6">
                    Temukan Magang Terbaik untuk Masa Depanmu
                </h1>
                <p class="text-lg text-gray-600 dark:text-gray-300 mb-6">INTERN360 menghubungkan siswa dengan perusahaan terbaik untuk pengalaman magang berkualitas.</p>
                <div class="flex gap-4">
                    <a href="{{ route('register') }}" class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-md shadow transition">
                        Daftar Sekarang
                    </a>
                    <a href="#fitur" class="inline-block border border-indigo-600 text-indigo-600 hover:bg-indigo-50 dark:hover:bg-indigo-900 px-6 py-3 rounded-md transition">
                        Pelajari Lebih
                    </a>
                </div>
            </div>
            <div class="hidden md:block">
                <img src="https://illustrations.popsy.co/amber/digital-nomad.svg" alt="Ilustrasi Magang" class="w-full h-auto" />
            </div>
        </div>
    </section>

    <!-- About Platform -->
    <section class="py-20 bg-white dark:bg-[#1a1a1a]">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div>
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c" alt="Tim Kerja" class="w-full rounded-lg shadow-xl">
            </div>
            <div>
                <h2 class="text-3xl font-bold mb-6 text-gray-800 dark:text-white">
                    Platform Magang <span class="text-indigo-600 dark:text-indigo-400">Terintegrasi</span>
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-300 mb-6">
                    INTERN360 menyederhanakan seluruh proses magang mulai dari pencarian, pendaftaran, hingga monitoring dalam satu platform digital.
                </p>
                <ul class="space-y-4 mb-8">
                    <li class="flex items-start">
                        <svg class="h-6 w-6 text-indigo-500 mr-2 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span class="text-gray-700 dark:text-gray-300">Akses ke ratusan perusahaan mitra</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="h-6 w-6 text-indigo-500 mr-2 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span class="text-gray-700 dark:text-gray-300">Proses pendaftaran yang mudah dan cepat</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="h-6 w-6 text-indigo-500 mr-2 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span class="text-gray-700 dark:text-gray-300">Sistem pelaporan terpusat</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Features -->
    <section id="fitur" class="py-20 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold mb-4 text-gray-800 dark:text-white">Fitur Unggulan</h2>
                <p class="text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">Platform kami dirancang khusus untuk memenuhi kebutuhan magang siswa dan perusahaan</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white dark:bg-gray-800 p-8 rounded-xl shadow-md hover:shadow-lg transition">
                    <div class="bg-indigo-100 dark:bg-indigo-900 w-14 h-14 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-indigo-600 dark:text-indigo-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-800 dark:text-white">Pencarian Cerdas</h3>
                    <p class="text-gray-600 dark:text-gray-300">Temukan perusahaan magang berdasarkan lokasi, bidang, dan preferensi Anda.</p>
                </div>
                
                <div class="bg-white dark:bg-gray-800 p-8 rounded-xl shadow-md hover:shadow-lg transition">
                    <div class="bg-indigo-100 dark:bg-indigo-900 w-14 h-14 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-indigo-600 dark:text-indigo-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-800 dark:text-white">Verifikasi Perusahaan</h3>
                    <p class="text-gray-600 dark:text-gray-300">Semua perusahaan mitra telah melalui proses verifikasi ketat untuk menjamin kualitas.</p>
                </div>
                
                <div class="bg-white dark:bg-gray-800 p-8 rounded-xl shadow-md hover:shadow-lg transition">
                    <div class="bg-indigo-100 dark:bg-indigo-900 w-14 h-14 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-indigo-600 dark:text-indigo-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-800 dark:text-white">Manajemen Waktu</h3>
                    <p class="text-gray-600 dark:text-gray-300">Atur jadwal magang dan pantau perkembangan melalui kalender terintegrasi.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section id="keunggulan" class="py-20 bg-indigo-600 text-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold mb-4">Mengapa Memilih INTERN360?</h2>
                <p class="max-w-2xl mx-auto opacity-90">Kami memberikan pengalaman magang terbaik untuk mempersiapkan karir profesional Anda</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="bg-white/10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold">95%</span>
                    </div>
                    <h3 class="font-semibold mb-2">Tingkat Kepuasan</h3>
                    <p class="text-sm opacity-90">Siswa merasa puas dengan pengalaman magang mereka</p>
                </div>
                
                <div class="text-center">
                    <div class="bg-white/10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold">500+</span>
                    </div>
                    <h3 class="font-semibold mb-2">Perusahaan Mitra</h3>
                    <p class="text-sm opacity-90">Dari berbagai industri dan skala bisnis</p>
                </div>
                
                <div class="text-center">
                    <div class="bg-white/10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold">24/7</span>
                    </div>
                    <h3 class="font-semibold mb-2">Dukungan</h3>
                    <p class="text-sm opacity-90">Tim kami siap membantu kapan saja</p>
                </div>
                
                <div class="text-center">
                    <div class="bg-white/10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold">100%</span>
                    </div>
                    <h3 class="font-semibold mb-2">Gratis</h3>
                    <p class="text-sm opacity-90">Tidak ada biaya untuk siswa dan sekolah</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section id="alur" class="py-20 bg-white dark:bg-[#1a1a1a]">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold mb-4 text-gray-800 dark:text-white">Bagaimana INTERN360 Bekerja?</h2>
                <p class="text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">Hanya perlu 4 langkah mudah untuk memulai magang impian Anda</p>
            </div>
            
            <div class="grid md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="bg-indigo-100 dark:bg-indigo-900 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 text-indigo-600 dark:text-indigo-300 font-bold text-xl">1</div>
                    <h3 class="font-semibold mb-2 text-gray-800 dark:text-white">Buat Akun</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm">Daftar sebagai siswa atau perwakilan sekolah</p>
                </div>
                
                <div class="text-center">
                    <div class="bg-indigo-100 dark:bg-indigo-900 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 text-indigo-600 dark:text-indigo-300 font-bold text-xl">2</div>
                    <h3 class="font-semibold mb-2 text-gray-800 dark:text-white">Lengkapi Profil</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm">Isi data diri dan minat karir Anda</p>
                </div>
                
                <div class="text-center">
                    <div class="bg-indigo-100 dark:bg-indigo-900 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 text-indigo-600 dark:text-indigo-300 font-bold text-xl">3</div>
                    <h3 class="font-semibold mb-2 text-gray-800 dark:text-white">Cari Magang</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm">Temukan perusahaan yang sesuai kriteria</p>
                </div>
                
                <div class="text-center">
                    <div class="bg-indigo-100 dark:bg-indigo-900 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 text-indigo-600 dark:text-indigo-300 font-bold text-xl">4</div>
                    <h3 class="font-semibold mb-2 text-gray-800 dark:text-white">Mulai Magang</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm">Proses pendaftaran dan mulai pengalaman magang</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Partner Companies -->
    <section id="perusahaan" class="py-20 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold mb-4 text-gray-800 dark:text-white">Perusahaan Mitra Kami</h2>
                <p class="text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">Bekerja sama dengan perusahaan terkemuka di berbagai industri</p>
            </div>
            
            <div class="swiper company-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide flex justify-center">
                        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md w-40 h-20 flex items-center justify-center">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/96/Microsoft_logo_%282012%29.svg/2560px-Microsoft_logo_%282012%29.svg.png" alt="Microsoft" class="h-8 object-contain">
                        </div>
                    </div>
                    <div class="swiper-slide flex justify-center">
                        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md w-40 h-20 flex items-center justify-center">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Amazon_icon.svg/2500px-Amazon_icon.svg.png" alt="Amazon" class="h-8 object-contain">
                        </div>
                    </div>
                    <div class="swiper-slide flex justify-center">
                        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md w-40 h-20 flex items-center justify-center">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Apple_logo_black.svg/1667px-Apple_logo_black.svg.png" alt="Apple" class="h-8 object-contain">
                        </div>
                    </div>
                    <div class="swiper-slide flex justify-center">
                        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md w-40 h-20 flex items-center justify-center">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/IBM_logo.svg/2560px-IBM_logo.svg.png" alt="IBM" class="h-8 object-contain">
                        </div>
                    </div>
                    <div class="swiper-slide flex justify-center">
                        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md w-40 h-20 flex items-center justify-center">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/96/SAP_2011_logo.svg/2560px-SAP_2011_logo.svg.png" alt="SAP" class="h-8 object-contain">
                        </div>
                    </div>
                    <div class="swiper-slide flex justify-center">
                        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md w-40 h-20 flex items-center justify-center">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/44/BMW.svg/2048px-BMW.svg.png" alt="BMW" class="h-8 object-contain">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section id="testimoni" class="py-20 bg-indigo-50 dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold mb-4 text-gray-800 dark:text-white">Apa Kata Mereka?</h2>
                <p class="text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">Testimoni dari siswa dan perusahaan mitra kami</p>
            </div>
            
            <div class="swiper testimonial-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="bg-white dark:bg-gray-700 p-8 rounded-xl shadow-md h-full">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-full bg-indigo-100 dark:bg-indigo-900 flex items-center justify-center text-indigo-600 dark:text-indigo-300 font-bold mr-4">AS</div>
                                <div>
                                    <h4 class="font-semibold text-gray-800 dark:text-white">Andi Setiawan</h4>
                                    <p class="text-sm text-gray-600 dark:text-gray-300">Siswa SMK Negeri 2 Jakarta</p>
                                </div>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300 italic">"INTERN360 membantu saya menemukan magang di perusahaan teknologi ternama. Pengalaman yang sangat berharga!"</p>
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                        <div class="bg-white dark:bg-gray-700 p-8 rounded-xl shadow-md h-full">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-full bg-indigo-100 dark:bg-indigo-900 flex items-center justify-center text-indigo-600 dark:text-indigo-300 font-bold mr-4">SR</div>
                                <div>
                                    <h4 class="font-semibold text-gray-800 dark:text-white">Sarah Rahmawati</h4>
                                    <p class="text-sm text-gray-600 dark:text-gray-300">HR Manager, TechSolutions Inc.</p>
                                </div>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300 italic">"Kualitas siswa dari INTERN360 sangat baik. Kami selalu menemukan kandidat magang yang kompeten."</p>
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                        <div class="bg-white dark:bg-gray-700 p-8 rounded-xl shadow-md h-full">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-full bg-indigo-100 dark:bg-indigo-900 flex items-center justify-center text-indigo-600 dark:text-indigo-300 font-bold mr-4">BD</div>
                                <div>
                                    <h4 class="font-semibold text-gray-800 dark:text-white">Budi Darmawan</h4>
                                    <p class="text-sm text-gray-600 dark:text-gray-300">Guru Pembimbing, SMK Harapan Bangsa</p>
                                </div>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300 italic">"Platform ini sangat membantu kami dalam memantau siswa magang. Sistem pelaporannya sangat praktis."</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-indigo-600 text-white">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-6">Siap Memulai Pengalaman Magang Terbaik?</h2>
            <p class="text-lg mb-8 opacity-90 max-w-2xl mx-auto">Bergabunglah dengan ratusan siswa yang telah menemukan magang impian mereka melalui INTERN360</p>
            <a href="{{ route('register') }}" class="inline-block bg-white text-indigo-600 hover:bg-gray-100 px-8 py-3 rounded-lg font-semibold shadow-lg transition">
                Daftar Sekarang - Gratis!
            </a>
        </div>
    </section>

    <!-- Contact -->
    <section id="kontak" class="py-20 bg-white dark:bg-[#1a1a1a]">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-12">
                <div>
                    <h2 class="text-3xl font-bold mb-6 text-gray-800 dark:text-white">Hubungi Kami</h2>
                    <p class="text-gray-600 dark:text-gray-300 mb-8">Punya pertanyaan atau butuh bantuan? Tim kami siap membantu Anda.</p>
                    
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="bg-indigo-100 dark:bg-indigo-900 p-3 rounded-full mr-4">
                                <svg class="w-6 h-6 text-indigo-600 dark:text-indigo-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800 dark:text-white">Email</h3>
                                <p class="text-gray-600 dark:text-gray-400">hello@intern360.id</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="bg-indigo-100 dark:bg-indigo-900 p-3 rounded-full mr-4">
                                <svg class="w-6 h-6 text-indigo-600 dark:text-indigo-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800 dark:text-white">Telepon</h3>
                                <p class="text-gray-600 dark:text-gray-400">+62 812 3456 7890</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="bg-indigo-100 dark:bg-indigo-900 p-3 rounded-full mr-4">
                                <svg class="w-6 h-6 text-indigo-600 dark:text-indigo-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800 dark:text-white">Alamat</h3>
                                <p class="text-gray-600 dark:text-gray-400">Jl. Pendidikan No. 123, Jakarta Selatan, Indonesia</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div>
                    <form class="bg-gray-50 dark:bg-gray-800 p-8 rounded-xl shadow-md">
                        <h3 class="text-xl font-semibold mb-6 text-gray-800 dark:text-white">Kirim Pesan</h3>
                        
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Nama Lengkap</label>
                            <input type="text" id="name" class="w-full px-4 py-2 rounded border border-gray-300 dark:border-gray-600 focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white">
                        </div>
                        
                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Email</label>
                            <input type="email" id="email" class="w-full px-4 py-2 rounded border border-gray-300 dark:border-gray-600 focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white">
                        </div>
                        
                        <div class="mb-4">
                            <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Pesan</label>
                            <textarea id="message" rows="4" class="w-full px-4 py-2 rounded border border-gray-300 dark:border-gray-600 focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white"></textarea>
                        </div>
                        
                        <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white py-2 px-4 rounded transition">
                            Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">INTERN360</h3>
                    <p class="text-gray-400">Platform magang digital terbaik untuk siswa SMK dan perguruan tinggi.</p>
                </div>
                
                <div>
                    <h4 class="font-semibold mb-4">Tautan Cepat</h4>
                    <ul class="space-y-2">
                        <li><a href="#fitur" class="text-gray-400 hover:text-white transition">Fitur</a></li>
                        <li><a href="#keunggulan" class="text-gray-400 hover:text-white transition">Keunggulan</a></li>
                        <li><a href="#perusahaan" class="text-gray-400 hover:text-white transition">Perusahaan</a></li>
                        <li><a href="#testimoni" class="text-gray-400 hover:text-white transition">Testimoni</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="font-semibold mb-4">Perusahaan</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Tentang Kami</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Karir</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Blog</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Kontak</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="font-semibold mb-4">Media Sosial</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123.06s3.057-.01 4.123-.059c1.064-.049 1.791-.218 2.427-.465a4.902 4.902 0 011.772-1.153 4.902 4.902 0 011.153-1.772c.247-.636.416-1.363.465-2.427.047-1.024.06-1.379.06-3.808 0-2.43-.013-2.784-.06-3.808-.049-1.064-.218-1.791-.465-2.427a4.902