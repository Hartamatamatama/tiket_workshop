<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('structure.header')
    <body class="gradient-bg min-h-screen text-gray-100 font-sans">
    <!-- Navigation -->
    @include('components.navbar')

    <!-- Hero Section -->
    <section class="container mx-auto px-6 py-16 md:py-24 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-6">
            <span class="bg-gradient-to-r from-blue-400 to-blue-600 bg-clip-text text-transparent">Get Your Ticket</span> 
            <br>for Mastering Dunia Digital
        </h1>
        <p class="text-xl text-gray-300 max-w-2xl mx-auto">
            Secure your spot at the premier digital skills workshop of the year
        </p>
    </section>

    <!-- Ticket Types Section -->
    <section id="ticket-types" class="container mx-auto px-6 py-12">
        <h2 class="text-3xl font-bold text-center mb-12">Choose Your Ticket</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
            <!-- Regular Ticket -->
            <div class="bg-gradient-to-b from-blue-900/30 to-black/50 rounded-xl p-8 border border-blue-400/30 hover:border-blue-500 transition duration-300">
                <h3 class="text-xl font-bold mb-2">Regular</h3>
                <p class="text-gray-400 mb-6">Essential workshop access</p>
                <div class="text-3xl font-bold mb-6">
                    <span class="text-blue-400">IDR 750K</span>
                    <span class="text-sm line-through text-gray-500 ml-2">IDR 1.000K</span>
                </div>
                <ul class="space-y-3 mb-8">
                    <li class="flex items-start">
                        <i class="fas fa-check text-blue-400 mt-1 mr-2"></i>
                        <span>3-day workshop access</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-blue-400 mt-1 mr-2"></i>
                        <span>Digital materials</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-blue-400 mt-1 mr-2"></i>
                        <span>E-certificate</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-times text-gray-500 mt-1 mr-2"></i>
                        <span class="text-gray-500">Exclusive sessions</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-times text-gray-500 mt-1 mr-2"></i>
                        <span class="text-gray-500">Networking lunch</span>
                    </li>
                </ul>
                <button class="w-full bg-blue-600 hover:bg-blue-700 btn-glow text-white py-3 rounded-lg font-semibold transition duration-300">
                    Select Ticket
                </button>
            </div>
            
            <!-- VIP Ticket -->
            <div class="bg-gradient-to-b from-blue-900/50 to-black/50 rounded-xl p-8 border-2 border-blue-500 transform scale-105 relative z-10">
                <div class="absolute top-0 right-0 bg-blue-600 text-white px-4 py-1 rounded-bl-lg rounded-tr-lg text-sm font-semibold">
                    MOST POPULAR
                </div>
                <h3 class="text-xl font-bold mb-2">VIP</h3>
                <p class="text-gray-400 mb-6">Premium workshop experience</p>
                <div class="text-3xl font-bold mb-6">
                    <span class="text-blue-400">IDR 1.250K</span>
                    <span class="text-sm line-through text-gray-500 ml-2">IDR 1.750K</span>
                </div>
                <ul class="space-y-3 mb-8">
                    <li class="flex items-start">
                        <i class="fas fa-check text-blue-400 mt-1 mr-2"></i>
                        <span>All Regular benefits</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-blue-400 mt-1 mr-2"></i>
                        <span>Exclusive sessions</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-blue-400 mt-1 mr-2"></i>
                        <span>Networking lunch</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-blue-400 mt-1 mr-2"></i>
                        <span>Premium certificate</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-blue-400 mt-1 mr-2"></i>
                        <span>Priority seating</span>
                    </li>
                </ul>
                <button class="w-full bg-blue-600 hover:bg-blue-700 btn-glow text-white py-3 rounded-lg font-semibold transition duration-300">
                    Select Ticket
                </button>
            </div>
            
            <!-- Corporate Ticket -->
            <div class="bg-gradient-to-b from-blue-900/30 to-black/50 rounded-xl p-8 border border-blue-400/30 hover:border-blue-500 transition duration-300">
                <h3 class="text-xl font-bold mb-2">Corporate</h3>
                <p class="text-gray-400 mb-6">Team package (5 tickets)</p>
                <div class="text-3xl font-bold mb-6">
                    <span class="text-blue-400">IDR 3.500K</span>
                    <span class="text-sm line-through text-gray-500 ml-2">IDR 5.000K</span>
                </div>
                <ul class="space-y-3 mb-8">
                    <li class="flex items-start">
                        <i class="fas fa-check text-blue-400 mt-1 mr-2"></i>
                        <span>5 VIP tickets</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-blue-400 mt-1 mr-2"></i>
                        <span>Private consultation</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-blue-400 mt-1 mr-2"></i>
                        <span>Company branding</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-blue-400 mt-1 mr-2"></i>
                        <span>Dedicated support</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-blue-400 mt-1 mr-2"></i>
                        <span>Custom invoice</span>
                    </li>
                </ul>
                <button class="w-full bg-blue-600 hover:bg-blue-700 btn-glow text-white py-3 rounded-lg font-semibold transition duration-300">
                    Contact Sales
                </button>
            </div>
        </div>
    </section>

    <!-- Registration Form -->
    <section id="payment" class="container mx-auto px-6 py-16 max-w-4xl">
        <div class="bg-black/30 backdrop-blur-sm border border-blue-400/30 rounded-xl p-8 md:p-12">
            <h2 class="text-3xl font-bold mb-8">Complete Your Registration</h2>
            
            <form id="ticket-form" class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="first-name" class="block text-gray-300 mb-2">First Name</label>
                        <input type="text" id="first-name" class="form-input w-full px-4 py-3 rounded-lg focus:outline-none" required>
                    </div>
                    <div>
                        <label for="last-name" class="block text-gray-300 mb-2">Last Name</label>
                        <input type="text" id="last-name" class="form-input w-full px-4 py-3 rounded-lg focus:outline-none" required>
                    </div>
                </div>
                
                <div>
                    <label for="email" class="block text-gray-300 mb-2">Email Address</label>
                    <input type="email" id="email" class="form-input w-full px-4 py-3 rounded-lg focus:outline-none" required>
                </div>
                
                <div>
                    <label for="phone" class="block text-gray-300 mb-2">Phone Number</label>
                    <input type="tel" id="phone" class="form-input w-full px-4 py-3 rounded-lg focus:outline-none" required>
                </div>
                
                <div>
                    <label for="ticket-type" class="block text-gray-300 mb-2">Ticket Type</label>
                    <select id="ticket-type" class="form-input w-full px-4 py-3 rounded-lg focus:outline-none" required>
                        <option value="" disabled selected>Select your ticket</option>
                        <option value="regular">Regular - IDR 750K</option>
                        <option value="vip">VIP - IDR 1.250K</option>
                        <option value="corporate">Corporate (5 VIP) - IDR 3.500K</option>
                    </select>
                </div>
                
                {{-- <div id="corporate-fields" class="hidden">
                    <h3 class="text-xl font-semibold mb-4">Corporate Information</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="company-name" class="block text-gray-300 mb-2">Company Name</label>
                            <input type="text" id="company-name" class="form-input w-full px-4 py-3 rounded-lg focus:outline-none">
                        </div>
                        <div>
                            <label for="tax-id" class="block text-gray-300 mb-2">Tax ID (NPWP)</label>
                            <input type="text" id="tax-id" class="form-input w-full px-4 py-3 rounded-lg focus:outline-none">
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-gray-300 mb-2">Attendee Names</label>
                        <div id="attendee-container" class="space-y-3">
                            <input type="text" class="form-input w-full px-4 py-3 rounded-lg focus:outline-none attendee-name" placeholder="Attendee 1">
                            <input type="text" class="form-input w-full px-4 py-3 rounded-lg focus:outline-none attendee-name" placeholder="Attendee 2">
                            <input type="text" class="form-input w-full px-4 py-3 rounded-lg focus:outline-none attendee-name" placeholder="Attendee 3">
                            <input type="text" class="form-input w-full px-4 py-3 rounded-lg focus:outline-none attendee-name" placeholder="Attendee 4">
                            <input type="text" class="form-input w-full px-4 py-3 rounded-lg focus:outline-none attendee-name" placeholder="Attendee 5">
                        </div>
                    </div>
                </div> --}}
                
                <div class="pt-4">
                    <div class="flex items-start">
                        <input type="checkbox" id="terms" class="mt-1 mr-3" required>
                        <label for="terms" class="text-gray-300">
                            I agree to the <a href="#" class="text-blue-400 hover:underline">Terms & Conditions</a> and 
                            <a href="#" class="text-blue-400 hover:underline">Privacy Policy</a>. I understand that tickets 
                            are non-refundable but transferable.
                        </label>
                    </div>
                </div>
                
                <div class="pt-6">
                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 btn-glow text-white px-8 py-4 rounded-full font-semibold text-lg transition duration-300">
                        Proceed to Payment
                    </button>
                </div>
            </form>
        </div>
    </section>

    <!-- Payment Methods -->
    <section class="container mx-auto px-6 py-16 max-w-4xl">
        <div class="bg-black/30 backdrop-blur-sm border border-blue-400/30 rounded-xl p-8">
            <h2 class="text-3xl font-bold mb-8">Payment Methods</h2>
            
            <div class="space-y-6">
                <div class="flex items-center justify-between p-4 border border-blue-400/30 rounded-lg hover:border-blue-500 transition cursor-pointer">
                    <div class="flex items-center">
                        <div class="bg-white p-2 rounded-lg mr-4">
                            <img src="https://www.bca.co.id/-/media/Feature/Card/List-Card/Tentang-BCA/Brand-Assets/Logo-BCA/Logo-BCA_Biru.png" alt="BCA" class="h-16 w-20 object-contain">
                        </div>
                        <span>Bank Transfer - BCA</span>
                    </div>
                </div>
                
                <div class="flex items-center justify-between p-4 border border-blue-400/30 rounded-lg hover:border-blue-500 transition cursor-pointer">
                    <div class="flex items-center">
                        <div class="bg-white p-2 rounded-lg mr-4">
                            <img src="https://www.bankmandiri.co.id/documents/20143/44881086/ag-branding-logo-1.png/842d8cf8-b7fb-3014-9620-21f0f88d8377?t=1623309819034" alt="Mandiri" class="h-16 w-20 object-contain">
                        </div>
                        <span>Bank Transfer - Mandiri</span>
                    </div>
                </div>
                
                <div class="flex items-center justify-between p-4 border border-blue-400/30 rounded-lg hover:border-blue-500 transition cursor-pointer">
                    <div class="flex items-center">
                        <div class="bg-white p-2 rounded-lg mr-4">
                            <img src="https://upload.wikimedia.org/wikipedia/id/thumb/5/55/BNI_logo.svg/2560px-BNI_logo.svg.png" alt="BNI" class="h-16 w-20 object-contain">
                        </div>
                        <span>Bank Transfer - BNI</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="container mx-auto px-6 py-16 max-w-4xl">
        <h2 class="text-3xl font-bold text-center mb-12">Frequently Asked Questions</h2>
        
        <div class="space-y-4">
            <div class="bg-black/30 backdrop-blur-sm border border-blue-400/30 rounded-xl p-6">
                <button class="flex justify-between items-center w-full text-left" onclick="toggleFAQ(1)">
                    <h3 class="font-semibold text-lg">What payment methods do you accept?</h3>
                    <i class="fas fa-chevron-down transition-transform duration-300" id="faq-icon-1"></i>
                </button>
                <div class="mt-4 text-gray-300 hidden" id="faq-content-1">
                    We accept all major Indonesian bank transfers (BCA, Mandiri, BNI, BRI), as well as popular e-wallets like Gopay, OVO, and DANA. International credit cards are also accepted (Visa, Mastercard).
                </div>
            </div>
            
            <div class="bg-black/30 backdrop-blur-sm border border-blue-400/30 rounded-xl p-6">
                <button class="flex justify-between items-center w-full text-left" onclick="toggleFAQ(2)">
                    <h3 class="font-semibold text-lg">When will I receive my ticket confirmation?</h3>
                    <i class="fas fa-chevron-down transition-transform duration-300" id="faq-icon-2"></i>
                </button>
                <div class="mt-4 text-gray-300 hidden" id="faq-content-2">
                    For instant payment methods (e-wallets, credit cards), you'll receive your e-ticket immediately after payment. For bank transfers, please allow up to 24 hours for payment verification. All tickets will be sent to your registered email address.
                </div>
            </div>
            
            <div class="bg-black/30 backdrop-blur-sm border border-blue-400/30 rounded-xl p-6">
                <button class="flex justify-between items-center w-full text-left" onclick="toggleFAQ(3)">
                    <h3 class="font-semibold text-lg">Can I transfer my ticket to someone else?</h3>
                    <i class="fas fa-chevron-down transition-transform duration-300" id="faq-icon-3"></i>
                </button>
                <div class="mt-4 text-gray-300 hidden" id="faq-content-3">
                    Yes, tickets are transferable. Please contact our support team at least 48 hours before the event with the new attendee's details (name, email, phone number) so we can update our records and prepare their badge.
                </div>
            </div>
            
            <div class="bg-black/30 backdrop-blur-sm border border-blue-400/30 rounded-xl p-6">
                <button class="flex justify-between items-center w-full text-left" onclick="toggleFAQ(4)">
                    <h3 class="font-semibold text-lg">What is your refund policy?</h3>
                    <i class="fas fa-chevron-down transition-transform duration-300" id="faq-icon-4"></i>
                </button>
                <div class="mt-4 text-gray-300 hidden" id="faq-content-4">
                    Tickets are non-refundable but can be transferred to another person. In exceptional circumstances (e.g., event cancellation), full refunds will be issued automatically. Please see our Terms & Conditions for complete details.
                </div>
            </div>
            
            <div class="bg-black/30 backdrop-blur-sm border border-blue-400/30 rounded-xl p-6">
                <button class="flex justify-between items-center w-full text-left" onclick="toggleFAQ(5)">
                    <h3 class="font-semibold text-lg">Do you offer group discounts?</h3>
                    <i class="fas fa-chevron-down transition-transform duration-300" id="faq-icon-5"></i>
                </button>
                <div class="mt-4 text-gray-300 hidden" id="faq-content-5">
                    Yes! For groups of 5 or more, please contact our sales team for special corporate rates. The Corporate ticket package already includes 5 VIP tickets at a discounted rate. For larger groups (10+), we can create custom packages with additional benefits.
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-gradient-to-r from-blue-900/50 to-blue-800/50 py-16 backdrop-blur-sm mt-12">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Master the Digital World?</h2>
            <p class="text-xl text-gray-300 max-w-2xl mx-auto mb-8">
                Limited seats available. Secure your spot today before prices increase!
            </p>
            <a href="#ticket-types" class="inline-block bg-blue-600 hover:bg-blue-700 btn-glow text-white px-8 py-4 rounded-full font-semibold text-lg transition duration-300">
                Get Your Ticket Now
            </a>
        </div>
    </section>

    <!-- Footer -->
    @include('components.footer')

    <script>
        // Form submission
        document.getElementById('ticket-form').addEventListener('submit', function(e) {
            e.preventDefault();
            // Here you would normally process the form data
            alert('Form submitted! In a real implementation, this would redirect to payment.');
        });

        // FAQ Toggle
        function toggleFAQ(num) {
            const content = document.getElementById(`faq-content-${num}`);
            const icon = document.getElementById(`faq-icon-${num}`);
            
            content.classList.toggle('hidden');
            icon.classList.toggle('transform');
            icon.classList.toggle('rotate-180');
        }
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>
