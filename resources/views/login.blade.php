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
                            <h1 class="text-2xl font-bold mb-2">Masuk ke Akun Anda</h1>
                            <p class="text-gray-400">Silakan isi detail login Anda untuk melanjutkan</p>
                        </div>
        
                        <form id="loginForm" class="space-y-6">
                            <div>
                                <label for="email" class="block text-sm font-medium mb-2">Alamat Email</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <i class="fas fa-envelope text-gray-400"></i>
                                    </div>
                                    <input type="email" id="email" name="email" 
                                        class="input-field pl-10 w-full px-4 py-3 rounded-lg focus:outline-none" 
                                        placeholder="nama@email.com" required>
                                </div>
                            </div>
        
                            <div>
                                <label for="password" class="block text-sm font-medium mb-2">Kata Sandi</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <i class="fas fa-lock text-gray-400"></i>
                                    </div>
                                    <input type="password" id="password" name="password" 
                                        class="input-field pl-10 w-full px-4 py-3 rounded-lg focus:outline-none" 
                                        placeholder="••••••••" required>
                                    <button type="button" id="togglePassword" class="absolute right-3 top-3 text-gray-400 hover:text-blue-400">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>
        
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <input id="remember-me" type="checkbox" 
                                        class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                    <label for="remember-me" class="ml-2 block text-sm text-gray-300">
                                        Ingat saya
                                    </label>
                                </div>
                            </div>
        
                            <button type="submit" 
                                class="btn-glow w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-lg transition duration-300">
                                <i class="fas fa-sign-in-alt mr-2"></i> Masuk
                            </button>
                        </form>
        
                        <div class="mt-8 text-center text-sm text-gray-400">
                            Belum punya akun? 
                            <a href="#" class="font-medium text-blue-400 hover:text-blue-300">
                                Daftar sekarang
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
        
                // Form submit handler
                document.getElementById('loginForm').addEventListener('submit', function(e) {
                    e.preventDefault();
                    // Here you would typically send the form data to your server
                    const email = document.getElementById('email').value;
                    const password = document.getElementById('password').value;
                    
                    console.log('Login attempt:', { email, password });
                    
                    // Simulate login processing
                    const submitBtn = this.querySelector('button[type="submit"]');
                    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i> Memproses...';
                    submitBtn.disabled = true;
                    
                    // Simulate API call
                    setTimeout(() => {
                        submitBtn.innerHTML = '<i class="fas fa-sign-in-alt mr-2"></i> Masuk';
                        submitBtn.disabled = false;
                        
                        // For demo purposes, just show a success message
                        alert('Anda akan diarahkan ke dashboard setelah berhasil login');
                        // In real app, you would redirect like:
                        // window.location.href = 'dashboard.html';
                    }, 1500);
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