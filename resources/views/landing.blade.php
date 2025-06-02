<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('structure.header')
    <body class="gradient-bg min-h-screen text-gray-100 font-sans w-screen">
    <!-- Navigation -->
    @include('components.navbar')

    <!-- Hero Section -->
    <section id="home" class="container mx-auto px-6 py-20 md:py-32">
        <div class="flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-12 md:mb-0">
                <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                    <span class="bg-gradient-to-r from-blue-400 to-blue-600 bg-clip-text text-transparent">Mastering</span> 
                    <br>Dunia Digital
                </h1>
                <p class="text-xl md:text-2xl text-gray-300 mb-8">
                    Workshop Seminar Eksklusif untuk Menguasai Teknologi Digital Masa Kini
                </p>
                <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                    <a href="#tickets" class="bg-blue-600 hover:bg-blue-700 btn-glow text-white px-8 py-4 rounded-full font-semibold text-lg transition duration-300">
                        Daftar Sekarang
                    </a>
                    <a href="#about" class="border border-blue-400 hover:bg-blue-900/30 text-blue-400 px-8 py-4 rounded-full font-semibold text-lg transition duration-300">
                        Pelajari Lebih Lanjut
                    </a>
                </div>
            </div>
            <div class="md:w-1/2 relative">
                <div class="ticket-gradient rounded-2xl p-8 transform rotate-3">
                    <div class="bg-black/20 backdrop-blur-sm rounded-xl p-6 border border-blue-400/30">
                        <div class="flex justify-between items-center mb-6">
                            <div class="text-blue-400 font-bold text-xl">WORKSHOP</div>
                            <div class="text-yellow-400 font-bold text-xl">VIP</div>
                        </div>
                        <h3 class="text-2xl font-bold mb-2">Mastering Dunia Digital</h3>
                        <p class="text-gray-300 mb-4">25-27 November 2023</p>
                        <div class="flex items-center space-x-2 mb-6">
                            <i class="fas fa-map-marker-alt text-blue-400"></i>
                            <span>Grand Ballroom, Jakarta Convention Center</span>
                        </div>
                        <div class="border-t border-blue-400/30 pt-4 mb-6">
                            <p class="text-sm text-gray-400">Tunjukkan tiket ini saat registrasi</p>
                        </div>
                        <div class="flex justify-between items-center">
                            <div class="text-3xl font-bold text-blue-400">IDR 1.250K</div>
                            <div class="bg-blue-600 px-4 py-2 rounded-full text-sm">Early Bird</div>
                        </div>
                    </div>
                </div>
                <div class="absolute -z-10 w-full h-full bg-blue-500/10 rounded-2xl -rotate-6 top-4 left-0"></div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="container mx-auto px-6 py-20">
        <div class="flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-12 md:mb-0 md:pr-12">
                <h2 class="text-3xl font-bold mb-6">Tentang Workshop Ini</h2>
                <p class="text-gray-300 mb-4">
                    "Mastering Dunia Digital" adalah workshop seminar intensif selama 3 hari yang dirancang untuk membekali peserta dengan keterampilan digital terkini yang dibutuhkan di era transformasi digital.
                </p>
                <p class="text-gray-300 mb-6">
                    Workshop ini akan membahas topik-topik penting seperti digital marketing, analisis data, UX design, artificial intelligence, dan strategi bisnis digital.
                </p>
                <div class="space-y-4">
                    <div class="flex items-start">
                        <div class="bg-blue-600/20 p-2 rounded-full mr-4">
                            <i class="fas fa-check-circle text-blue-400"></i>
                        </div>
                        <p class="text-gray-300">Materi praktis langsung dari praktisi industri</p>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-blue-600/20 p-2 rounded-full mr-4">
                            <i class="fas fa-check-circle text-blue-400"></i>
                        </div>
                        <p class="text-gray-300">Sertifikat resmi yang diakui industri</p>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-blue-600/20 p-2 rounded-full mr-4">
                            <i class="fas fa-check-circle text-blue-400"></i>
                        </div>
                        <p class="text-gray-300">Networking dengan profesional digital</p>
                    </div>
                </div>
            </div>
            <div class="md:w-1/2">
                <div class="bg-black/30 backdrop-blur-sm border border-blue-400/30 rounded-xl p-8">
                    <h3 class="text-2xl font-bold mb-6">Apa yang Akan Anda Pelajari?</h3>
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="bg-blue-600 text-white rounded-full w-8 h-8 flex items-center justify-center mr-4 mt-1 flex-shrink-0">
                                <span>1</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-lg">Strategi Digital Marketing</h4>
                                <p class="text-gray-400">Pelajari cara membangun strategi pemasaran digital yang efektif untuk berbagai platform.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-blue-600 text-white rounded-full w-8 h-8 flex items-center justify-center mr-4 mt-1 flex-shrink-0">
                                <span>2</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-lg">Analisis Data & AI</h4>
                                <p class="text-gray-400">Pahami dasar-dasar analisis data dan penerapan AI dalam bisnis digital.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-blue-600 text-white rounded-full w-8 h-8 flex items-center justify-center mr-4 mt-1 flex-shrink-0">
                                <span>3</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-lg">UX Design & Development</h4>
                                <p class="text-gray-400">Pelajari prinsip-prinsip desain pengalaman pengguna dan pengembangan produk digital.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   

    <!-- Tickets Section -->
    <section id="tickets" class="bg-black/30 py-20 backdrop-blur-sm">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-4">Pilihan Tiket</h2>
            <p class="text-gray-400 text-center max-w-2xl mx-auto mb-12">
                Pilih paket yang sesuai dengan kebutuhan Anda. Diskon early bird berlaku hingga 30 Oktober 2023.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                <!-- Regular Ticket -->
                <div class="bg-gradient-to-b from-blue-900/30 to-black/50 rounded-xl p-8 border border-blue-400/30">
                    <h3 class="text-xl font-bold mb-2">Regular</h3>
                    <p class="text-gray-400 mb-6">Akses ke semua sesi utama</p>
                    <div class="text-3xl font-bold mb-6">
                        <span class="text-blue-400">IDR 750K</span>
                        <span class="text-sm line-through text-gray-500 ml-2">IDR 1.000K</span>
                    </div>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start">
                            <i class="fas fa-check text-blue-400 mt-1 mr-2"></i>
                            <span>Akses 3 hari workshop</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-blue-400 mt-1 mr-2"></i>
                            <span>Materi digital</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-blue-400 mt-1 mr-2"></i>
                            <span>Sertifikat elektronik</span>
                        </li>
                    </ul>
                    <button class="w-full bg-blue-600 hover:bg-blue-700 btn-glow text-white py-3 rounded-lg font-semibold transition duration-300">
                        Pesan Sekarang
                    </button>
                </div>
                <!-- VIP Ticket -->
                <div class="bg-gradient-to-b from-blue-900/50 to-black/50 rounded-xl p-8 border-2 border-blue-500 transform scale-105 relative">
                    <div class="absolute top-0 right-0 bg-blue-600 text-white px-4 py-1 rounded-bl-lg rounded-tr-lg text-sm font-semibold">
                        POPULER
                    </div>
                    <h3 class="text-xl font-bold mb-2">VIP</h3>
                    <p class="text-gray-400 mb-6">Pengalaman workshop premium</p>
                    <div class="text-3xl font-bold mb-6">
                        <span class="text-blue-400">IDR 1.250K</span>
                        <span class="text-sm line-through text-gray-500 ml-2">IDR 1.750K</span>
                    </div>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start">
                            <i class="fas fa-check text-blue-400 mt-1 mr-2"></i>
                            <span>Semua benefit Regular</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-blue-400 mt-1 mr-2"></i>
                            <span>Akses ke sesi eksklusif</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-blue-400 mt-1 mr-2"></i>
                            <span>Networking lunch dengan pembicara</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-blue-400 mt-1 mr-2"></i>
                            <span>Sertifikat fisik premium</span>
                        </li>
                    </ul>
                    <button class="w-full bg-blue-600 hover:bg-blue-700 btn-glow text-white py-3 rounded-lg font-semibold transition duration-300">
                        Pesan Sekarang
                    </button>
                </div>
                <!-- Corporate Ticket -->
                <div class="bg-gradient-to-b from-blue-900/30 to-black/50 rounded-xl p-8 border border-blue-400/30">
                    <h3 class="text-xl font-bold mb-2">Corporate</h3>
                    <p class="text-gray-400 mb-6">Paket untuk tim Anda</p>
                    <div class="text-3xl font-bold mb-6">
                        <span class="text-blue-400">IDR 3.500K</span>
                        <span class="text-sm line-through text-gray-500 ml-2">IDR 5.000K</span>
                    </div>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start">
                            <i class="fas fa-check text-blue-400 mt-1 mr-2"></i>
                            <span>5 tiket VIP</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-blue-400 mt-1 mr-2"></i>
                            <span>Sesi konsultasi privat</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-blue-400 mt-1 mr-2"></i>
                            <span>Company branding di acara</span>
                        </li>
                    </ul>
                    <button class="w-full bg-blue-600 hover:bg-blue-700 btn-glow text-white py-3 rounded-lg font-semibold transition duration-300">
                        Hubungi Kami
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="container mx-auto px-6 py-20">
        <h2 class="text-3xl font-bold text-center mb-12">Apa Kata Peserta Sebelumnya</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            <div class="bg-black/30 backdrop-blur-sm border border-blue-400/30 rounded-xl p-8">
                <div class="flex items-center mb-4">
                    <div class="text-yellow-400 text-xl mr-2">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <p class="text-gray-300 mb-6">
                    "Workshop ini memberikan wawasan praktis yang langsung bisa diterapkan di bisnis saya. Pembicaranya sangat kompeten dan materinya sangat relevan."
                </p>
                <div class="flex items-center">
                    <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                        <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Testimonial" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h4 class="font-semibold">Diana Putri</h4>
                        <p class="text-gray-400 text-sm">Pemilik Bisnis Online</p>
                    </div>
                </div>
            </div>
            <!-- Testimonial 2 -->
            <div class="bg-black/30 backdrop-blur-sm border border-blue-400/30 rounded-xl p-8">
                <div class="flex items-center mb-4">
                    <div class="text-yellow-400 text-xl mr-2">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <p class="text-gray-300 mb-6">
                    "Saya sangat merekomendasikan workshop ini untuk siapa saja yang serius ingin menguasai dunia digital. Investasi yang sangat worth it untuk pengetahuan yang didapat."
                </p>
                <div class="flex items-center">
                    <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                        <img src="https://randomuser.me/api/portraits/men/54.jpg" alt="Testimonial" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h4 class="font-semibold">Rizky Pratama</h4>
                        <p class="text-gray-400 text-sm">Digital Marketer</p>
                    </div>
                </div>
            </div>
            <!-- Testimonial 3 -->
            <div class="bg-black/30 backdrop-blur-sm border border-blue-400/30 rounded-xl p-8">
                <div class="flex items-center mb-4">
                    <div class="text-yellow-400 text-xl mr-2">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <p class="text-gray-300 mb-6">
                    "Networking dengan peserta lain dan pembicara adalah nilai tambah yang besar. Saya mendapatkan banyak insight baru dan bahkan peluang kolaborasi."
                </p>
                <div class="flex items-center">
                    <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                        <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Testimonial" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h4 class="font-semibold">Siti Rahayu</h4>
                        <p class="text-gray-400 text-sm">Product Manager</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-gradient-to-r from-blue-900/50 to-blue-800/50 py-16 backdrop-blur-sm">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Siap Menguasai Dunia Digital?</h2>
            <p class="text-xl text-gray-300 max-w-2xl mx-auto mb-8">
                Daftar sekarang sebelum kuota habis dan dapatkan diskon early bird!
            </p>
            <a href="#tickets" class="inline-block bg-blue-600 hover:bg-blue-700 btn-glow text-white px-8 py-4 rounded-full font-semibold text-lg transition duration-300">
                Daftar Sekarang
            </a>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="container mx-auto px-6 py-20">
        <h2 class="text-3xl font-bold text-center mb-12">Pertanyaan yang Sering Diajukan</h2>
        <div class="max-w-3xl mx-auto">
            <div class="space-y-4">
                <!-- FAQ 1 -->
                <div class="bg-black/30 backdrop-blur-sm border border-blue-400/30 rounded-xl p-6">
                    <button class="flex justify-between items-center w-full text-left" onclick="toggleFAQ(1)">
                        <h3 class="font-semibold text-lg">Apa saja yang perlu dibawa ke acara?</h3>
                        <i class="fas fa-chevron-down transition-transform duration-300" id="faq-icon-1"></i>
                    </button>
                    <div class="mt-4 text-gray-300 hidden" id="faq-content-1">
                        Anda disarankan membawa laptop untuk mengikuti workshop praktik. Selain itu, bawa juga tiket elektronik atau cetakan tiket Anda untuk proses registrasi. Kami akan menyediakan semua materi workshop dalam format digital.
                    </div>
                </div>
                <!-- FAQ 2 -->
                <div class="bg-black/30 backdrop-blur-sm border border-blue-400/30 rounded-xl p-6">
                    <button class="flex justify-between items-center w-full text-left" onclick="toggleFAQ(2)">
                        <h3 class="font-semibold text-lg">Apakah ada penginapan yang direkomendasikan?</h3>
                        <i class="fas fa-chevron-down transition-transform duration-300" id="faq-icon-2"></i>
                    </button>
                    <div class="mt-4 text-gray-300 hidden" id="faq-content-2">
                        Ya, kami memiliki kerja sama dengan beberapa hotel di sekitar venue. Peserta akan mendapatkan diskon khusus. Detail informasi akan dikirim via email setelah pendaftaran.
                    </div>
                </div>
                <!-- FAQ 3 -->
                <div class="bg-black/30 backdrop-blur-sm border border-blue-400/30 rounded-xl p-6">
                    <button class="flex justify-between items-center w-full text-left" onclick="toggleFAQ(3)">
                        <h3 class="font-semibold text-lg">Bagaimana jika saya harus membatalkan kehadiran?</h3>
                        <i class="fas fa-chevron-down transition-transform duration-300" id="faq-icon-3"></i>
                    </button>
                    <div class="mt-4 text-gray-300 hidden" id="faq-content-3">
                        Pembatalan dapat dilakukan maksimal 7 hari sebelum acara dengan pengembalian dana 80%. Untuk pembatalan kurang dari 7 hari, dana tidak dapat dikembalikan namun tiket dapat dialihkan ke orang lain.
                    </div>
                </div>
                <!-- FAQ 4 -->
                <div class="bg-black/30 backdrop-blur-sm border border-blue-400/30 rounded-xl p-6">
                    <button class="flex justify-between items-center w-full text-left" onclick="toggleFAQ(4)">
                        <h3 class="font-semibold text-lg">Apakah ada rekaman sesi yang bisa diakses setelah acara?</h3>
                        <i class="fas fa-chevron-down transition-transform duration-300" id="faq-icon-4"></i>
                    </button>
                    <div class="mt-4 text-gray-300 hidden" id="faq-content-4">
                        Untuk peserta VIP dan Corporate, kami menyediakan rekaman sesi utama yang dapat diakses selama 30 hari setelah acara. Peserta Regular akan mendapatkan rangkuman materi dalam bentuk PDF.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('components.footer')

    <script src="/../js/hamburger.js"></script>
    </script>
</body>
</html>
