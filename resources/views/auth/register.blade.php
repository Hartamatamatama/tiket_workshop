<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('structure.header')
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #1e3a8a 0%, #111827 50%, #000000 100%);
        }
        .btn-glow {
            box-shadow: 0 0 15px rgba(59, 130, 246, 0.7);
            transition: all 0.3s ease;
        }
        .btn-glow:hover {
            box-shadow: 0 0 25px rgba(59, 130, 246, 1);
            transform: translateY(-2px);
        }
        .login-card {
            background: rgba(17, 24, 39, 0.85);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(59, 130, 246, 0.2);
        }
        .input-field {
            background: rgba(31, 41, 55, 0.5);
            transition: all 0.3s;
        }
        .input-field:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.3);
        }
    </style>
        <body class="gradient-bg min-h-screen text-gray-100 font-sans">
            <!-- Navigation -->
            @include('components.navbar')
           
            <!-- Main Content -->
            <main class="flex items-center justify-center py-12 px-4">
                <div class="login-card w-full max-w-md rounded-xl overflow-hidden shadow-2xl">
                    <div class="p-8">
                        <div class="text-center mb-8">
                            <i class="fas fa-user-lock text-5xl text-blue-500 mb-4"></i>
                            <h1 class="text-2xl font-bold mb-2">Daftar Sekarang</h1>
                            <p class="text-gray-400">Silakan isi detail registrasi Anda untuk melanjutkan</p>
                        </div>
        
                        <form id="loginForm" class="space-y-6" method="POST" action="{{ route('register.post') }}">
                            @if ($errors->any())
                                <div class="mb-4 p-4 bg-red-600 bg-opacity-20 text-red-300 rounded-lg text-sm">
                                    <ul class="list-disc pl-5 space-y-1">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @csrf
                            <div>
                                <label for="name" class="block text-sm font-medium mb-2">Nama</label>
                                <div class="relative">
                                <input type="text" id="name" name="name" 
                                    class="input-field pl-10 w-full px-4 py-3 rounded-lg focus:outline-none @error('name') border-red-500 @enderror" 
                                    placeholder="Johnny" value="{{ old('name') }}" required autofocus>
                                @error('name')
                                    <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                                @enderror
                                </div>
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium mb-2">Alamat Email</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <i class="fas fa-envelope text-gray-400"></i>
                                    </div>
                                    <input type="email" id="email" name="email" 
                                        class="input-field pl-10 w-full px-4 py-3 rounded-lg focus:outline-none @error('email') border-red-500 @enderror" 
                                        placeholder="nama@email.com" value="{{ old('email') }}" required>
                                    @error('email')
                                        <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
        
                            <div>
                                <label for="password" class="block text-sm font-medium mb-2">Kata Sandi</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <i class="fas fa-lock text-gray-400"></i>
                                    </div>
                                    <input type="password" id="password" name="password" 
                                        class="input-field pl-10 w-full px-4 py-3 rounded-lg focus:outline-none @error('password') border-red-500 @enderror" 
                                        placeholder="••••••••" required>
                                    @error('password')
                                        <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                    </button>
                                </div>
                            </div>
                            <div>
                                <label for="password_confirmation" class="block text-sm font-medium mb-2">Konfirmasi Kata Sandi</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <i class="fas fa-lock text-gray-400"></i>
                                    </div>
                                    <input type="password" id="password_confirmation" name="password_confirmation" 
                                        class="input-field pl-10 w-full px-4 py-3 rounded-lg focus:outline-none" 
                                        placeholder="••••••••" required>
                                    <button type="button" id="togglePasswordConfimation" class="absolute right-3 top-3 text-gray-400 hover:text-blue-400">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>

                            <input name="role" type="hidden" value="user" required>
        
                            <button type="submit" 
                                class="btn-glow w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-lg transition duration-300">
                                <i class="fas fa-sign-in-alt mr-2"></i> Daftar
                            </button>
                        </form>
        
                        <div class="mt-8 text-center text-sm text-gray-400">
                            Sudah punya akun? 
                            <a href="#" class="font-medium text-blue-400 hover:text-blue-300">
                                Masuk sekarang
                            </a>
                        </div>
                    </div>
                </div>
            </main>
        
            <!-- Footer -->
            @include('components.footer')
        
            <script>
                // Toggle password visibility
                document.getElementById('togglePassword').addEventListener('click', function() {
                    const password = document.getElementById('password');
                    const icon = this.querySelector('i');
                    
                    if (password.type === 'password') {
                        password.type = 'text';
                        icon.classList.replace('fa-eye', 'fa-eye-slash');
                    } else {
                        password.type = 'password';
                        icon.classList.replace('fa-eye-slash', 'fa-eye');
                    }
                    
                });

                document.getElementById('togglePasswordConfimation').addEventListener('click', function() {
                    const passwordConfirmation = document.getElementById('password_confirmation');
                    const icon = this.querySelector('i');
                   
                    if (passwordConfirmation.type === 'password') {
                        passwordConfirmation.type = 'text';
                        icon.classList.replace('fa-eye', 'fa-eye-slash');
                    } else {
                        passwordConfirmation.type = 'password';
                        icon.classList.replace('fa-eye-slash', 'fa-eye');
                    }
                });
        
                // Form submit handler
                document.getElementById('loginForm').addEventListener('submit', function(e) {
                    // Simulate Register processing
                    const submitBtn = this.querySelector('button[type="submit"]');
                    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i> Memproses...';
                    submitBtn.disabled = true;
                });
        
                // Animation for elements when page loads
                document.addEventListener('DOMContentLoaded', () => {
                    const loginCard = document.querySelector('.login-card');
                    loginCard.style.opacity = '0';
                    loginCard.style.transform = 'translateY(20px)';
                    
                    setTimeout(() => {
                        loginCard.style.transition = 'opacity 0.5s, transform 0.5s';
                        loginCard.style.opacity = '1';
                        loginCard.style.transform = 'translateY(0)';
                    }, 100);
                });
            </script>
        </body>
</html>