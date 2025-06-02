<!DOCTYPE html>
<html lang="id">
@include('structure.header')
<body class="gradient-bg min-h-screen text-gray-100 font-sans">
    <!-- Navigation -->
    @include('components.navbar')

    <!-- Hero Section -->
    <section class="container mx-auto px-6 py-20 md:py-28 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-6">
            <span class="bg-gradient-to-r from-blue-400 to-blue-600 bg-clip-text text-transparent">Tentang</span> 
            <span class="text-white">DigitalMastery</span>
        </h1>
        <p class="text-xl text-gray-300 max-w-2xl mx-auto">
            Memimpin transformasi digital di Indonesia melalui pendidikan dan pelatihan berkualitas tinggi
        </p>
    </section>

    <!-- About Section -->
    <section class="container mx-auto px-6 py-16 max-w-5xl">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl font-bold mb-6">Visi Kami</h2>
                <p class="text-gray-300 mb-6">
                    DigitalMastery hadir untuk membekali masyarakat Indonesia dengan keterampilan digital yang dibutuhkan di era revolusi industri 4.0. Kami percaya bahwa setiap individu berhak mendapatkan akses pendidikan teknologi yang berkualitas.
                </p>
                <p class="text-gray-300">
                    Sejak berdiri pada tahun 2018, kami telah melatih lebih dari 10.000 profesional dan membantu ratusan perusahaan dalam transformasi digital mereka.
                </p>
            </div>
            <div class="bg-black/30 border border-blue-400/30 rounded-xl overflow-hidden">
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                     alt="Team DigitalMastery" 
                     class="w-full h-auto object-cover">
            </div>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="py-16 bg-black/30 backdrop-blur-sm">
        <div class="container mx-auto px-6 max-w-5xl">
            <h2 class="text-3xl font-bold text-center mb-12">Misi Kami</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="card-gradient p-6 rounded-xl border border-blue-400/30">
                    <div class="w-14 h-14 bg-blue-600 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-graduation-cap text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Pendidikan Berkualitas</h3>
                    <p class="text-gray-300">
                        Menyediakan kurikulum berbasis industri yang dirancang oleh praktisi ahli di bidangnya.
                    </p>
                </div>
                
                <div class="card-gradient p-6 rounded-xl border border-blue-400/30">
                    <div class="w-14 h-14 bg-blue-600 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-bolt text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Akses Merata</h3>
                    <p class="text-gray-300">
                        Membuka kesempatan belajar bagi semua kalangan dengan berbagai program beasiswa.
                    </p>
                </div>
                
                <div class="card-gradient p-6 rounded-xl border border-blue-400/30">
                    <div class="w-14 h-14 bg-blue-600 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-hands-helping text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Kolaborasi Industri</h3>
                    <p class="text-gray-300">
                        Menjembatani kesenjangan antara dunia pendidikan dengan kebutuhan industri digital.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline Section -->
    <section id="events" class="container mx-auto px-6 py-16 max-w-3xl">
        <h2 class="text-3xl font-bold text-center mb-12">Perjalanan Kami</h2>
        
        <div class="relative timeline pl-16">
            <!-- Timeline Item 1 -->
            <div class="relative mb-12 timeline-item">
                <div class="card-gradient p-6 rounded-xl border border-blue-400/30">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-xl font-semibold">Pendirian DigitalMastery</h3>
                        <span class="bg-blue-600 text-white text-sm px-3 py-1 rounded-full">2018</span>
                    </div>
                    <p class="text-gray-300">
                        Didirikan oleh 3 profesional digital dengan misi meningkatkan literasi digital di Indonesia. Workshop pertama di Jakarta dihadiri 50 peserta.
                    </p>
                </div>
            </div>
            
            <!-- Timeline Item 2 -->
            <div class="relative mb-12 timeline-item">
                <div class="card-gradient p-6 rounded-xl border border-blue-400/30">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-xl font-semibold">Ekspansi ke 5 Kota</h3>
                        <span class="bg-blue-600 text-white text-sm px-3 py-1 rounded-full">2019</span>
                    </div>
                    <p class="text-gray-300">
                        Membuka cabang di Surabaya, Bandung, Medan, dan Makassar. Meluncurkan program sertifikasi pertama untuk Digital Marketing.
                    </p>
                </div>
            </div>
            
            <!-- Timeline Item 3 -->
            <div class="relative mb-12 timeline-item">
                <div class="card-gradient p-6 rounded-xl border border-blue-400/30">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-xl font-semibold">Peluncuran Platform Online</h3>
                        <span class="bg-blue-600 text-white text-sm px-3 py-1 rounded-full">2020</span>
                    </div>
                    <p class="text-gray-300">
                        Menghadapi pandemi, kami meluncurkan platform pembelajaran online dengan 20 kursus digital dan menjangkau 5.000 pengguna dalam 3 bulan.
                    </p>
                </div>
            </div>
            
            <!-- Timeline Item 4 -->
            <div class="relative mb-12 timeline-item">
                <div class="card-gradient p-6 rounded-xl border border-blue-400/30">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-xl font-semibold">Kemitraan Strategis</h3>
                        <span class="bg-blue-600 text-white text-sm px-3 py-1 rounded-full">2021</span>
                    </div>
                    <p class="text-gray-300">
                        Bermitra dengan Kementerian Komunikasi dan Informatika serta 10 perusahaan teknologi terkemuka untuk program pelatihan massal.
                    </p>
                </div>
            </div>
            
            <!-- Timeline Item 5 -->
            <div class="relative timeline-item">
                <div class="card-gradient p-6 rounded-xl border border-blue-400/30">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-xl font-semibold">DigitalMastery Awards</h3>
                        <span class="bg-blue-600 text-white text-sm px-3 py-1 rounded-full">2023</span>
                    </div>
                    <p class="text-gray-300">
                        Meraih penghargaan sebagai "Lembaga Pelatihan Digital Terbaik" dari KADIN Indonesia. Telah melatih lebih dari 10.000 peserta.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="py-16 bg-black/30 backdrop-blur-sm">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">Tim Kami</h2>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 max-w-6xl mx-auto">
                <!-- Team Member 1 -->
                <div class="card-gradient rounded-xl overflow-hidden border border-blue-400/30 transform hover:scale-105 transition duration-300">
                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" 
                         alt="Budi Santoso" 
                         class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold">Budi Santoso</h3>
                        <p class="text-blue-400 mb-3">Founder & CEO</p>
                        <p class="text-gray-300 text-sm">
                            Mantan direktur teknologi di perusahaan unicorn Indonesia dengan pengalaman 15 tahun di industri digital.
                        </p>
                        <div class="flex space-x-3 mt-4">
                            <a href="#" class="text-blue-400 hover:text-blue-300">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="text-blue-400 hover:text-blue-300">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Team Member 2 -->
                <div class="card-gradient rounded-xl overflow-hidden border border-blue-400/30 transform hover:scale-105 transition duration-300">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" 
                         alt="Anita Wijaya" 
                         class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold">Anita Wijaya</h3>
                        <p class="text-blue-400 mb-3">Chief Learning Officer</p>
                        <p class="text-gray-300 text-sm">
                            Pakar kurikulum digital dengan sertifikasi internasional dan pengalaman mengajar di 5 negara Asia.
                        </p>
                        <div class="flex space-x-3 mt-4">
                            <a href="#" class="text-blue-400 hover:text-blue-300">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="text-blue-400 hover:text-blue-300">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Team Member 3 -->
                <div class="card-gradient rounded-xl overflow-hidden border border-blue-400/30 transform hover:scale-105 transition duration-300">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" 
                         alt="Rudi Hermawan" 
                         class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold">Rudi Hermawan</h3>
                        <p class="text-blue-400 mb-3">Head of Technology</p>
                        <p class="text-gray-300 text-sm">
                            Full-stack developer dan arsitek sistem dengan spesialisasi dalam pengembangan platform e-learning.
                        </p>
                        <div class="flex space-x-3 mt-4">
                            <a href="#" class="text-blue-400 hover:text-blue-300">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="text-blue-400 hover:text-blue-300">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Team Member 4 -->
                <div class="card-gradient rounded-xl overflow-hidden border border-blue-400/30 transform hover:scale-105 transition duration-300">
                    <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" 
                         alt="Dewi Kartika" 
                         class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold">Dewi Kartika</h3>
                        <p class="text-blue-400 mb-3">Head of Operations</p>
                        <p class="text-gray-300 text-sm">
                            Ahli manajemen operasional dengan pengalaman membangun jaringan pelatihan di 15 kota di Indonesia.
                        </p>
                        <div class="flex space-x-3 mt-4">
                            <a href="#" class="text-blue-400 hover:text-blue-300">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="text-blue-400 hover:text-blue-300">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('components.footer')

    <script>
        // Mobile menu toggle functionality would go here
        document.querySelector('.md\\:hidden').addEventListener('click', function() {
            // This would toggle a mobile menu
            alert('Mobile menu would open here in a full implementation');
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            });
        });
    </script>
</body>
</html>