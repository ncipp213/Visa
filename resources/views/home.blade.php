@extends('layouts.app')

@section('content')
<!-- ===== SECTION 1: HERO (Apple-style dengan Background Gradient) ===== -->
<section id="home" class="relative min-h-[90vh] flex items-center justify-center overflow-hidden">
    <!-- Dynamic Gradient Background -->
    <div class="absolute inset-0 bg-gradient-to-br from-blue-50 via-white to-indigo-50 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 animate-gradient"></div>
    
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-blue-200 dark:bg-blue-900/20 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-float"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-purple-200 dark:bg-purple-900/20 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-float" style="animation-delay: 2s"></div>
        <div class="absolute top-3/4 left-1/2 w-48 h-48 bg-pink-200 dark:bg-pink-900/20 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-float" style="animation-delay: 4s"></div>
    </div>
    
    <!-- Content Container -->
    <div class="container relative mx-auto px-4 text-center z-10">
        <!-- Badge -->
        <div class="inline-flex items-center px-4 py-2 rounded-full bg-blue-100 dark:bg-blue-900/30 text-blue-800 dark:text-blue-300 text-sm font-medium mb-8 animate-fade-in-up">
            <i class="fas fa-check-circle mr-2"></i>
            Trusted by 200+ Successful Clients
        </div>
        
        <!-- Main Headline -->
        <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold mb-6 leading-tight animate-fade-in-up">
            <span class="block">Global Visas.</span>
            <span class="block mt-2">
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-indigo-600 dark:from-blue-400 dark:to-indigo-400">
                    Faster. Transparent. Trusted.
                </span>
            </span>
        </h1>
        
        <!-- Subtitle -->
        <p class="text-xl md:text-2xl text-gray-600 dark:text-gray-300 mb-10 max-w-3xl mx-auto animate-fade-in-up" style="animation-delay: 0.1s">
            Student | Work | Business | Visit | Investment Visas – Worldwide
        </p>
        
        <!-- Stats Bar -->
        <div class="flex flex-wrap justify-center gap-8 mb-12 animate-fade-in-up" style="animation-delay: 0.2s">
            <div class="text-center">
                <div class="text-3xl md:text-4xl font-bold text-blue-600 dark:text-blue-400 mb-2 counter" data-target="200">0</div>
                <div class="text-gray-600 dark:text-gray-400 text-sm uppercase tracking-wider">Successful Visas</div>
            </div>
            <div class="hidden sm:block text-center">
                <div class="text-3xl md:text-4xl font-bold text-green-600 dark:text-green-400 mb-2 counter" data-target="4">0</div>
                <div class="text-gray-600 dark:text-gray-400 text-sm uppercase tracking-wider">Countries</div>
            </div>
            <div class="text-center">
                <div class="text-3xl md:text-4xl font-bold text-purple-600 dark:text-purple-400 mb-2 counter" data-target="98">0</div>
                <div class="text-gray-600 dark:text-gray-400 text-sm uppercase tracking-wider">Success Rate</div>
            </div>
            <div class="hidden sm:block text-center">
                <div class="text-3xl md:text-4xl font-bold text-yellow-600 dark:text-yellow-400 mb-2 counter" data-target="24">0</div>
                <div class="text-gray-600 dark:text-gray-400 text-sm uppercase tracking-wider"> Support</div>
            </div>
        </div>
        
        <!-- CTA Buttons -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center animate-fade-in-up" style="animation-delay: 0.3s">
            <a href="#matcher" 
               class="group bg-white dark:bg-gray-800 text-gray-900 dark:text-white px-8 py-4 rounded-xl font-semibold text-lg transition duration-300 shadow-lg hover:shadow-xl hover-lift inline-flex items-center justify-center border border-gray-200 dark:border-gray-700">
                <i class="fas fa-search mr-3 text-blue-500 group-hover:scale-110 transition"></i> 
                Check Visa Eligibility
            </a>
            <a href="https://wa.me/6512345678" 
               class="group bg-gradient-to-r from-green-500 to-emerald-600 text-white px-8 py-4 rounded-xl font-semibold text-lg transition duration-300 shadow-lg hover:shadow-xl hover-lift inline-flex items-center justify-center">
                <i class="fab fa-whatsapp mr-3 group-hover:scale-110 transition"></i> 
                WhatsApp Consultation
            </a>
        </div>
        
        <!-- Scroll Indicator -->
        <div class="mt-20 animate-bounce">
            <a href="#matcher" class="inline-block">
                <i class="fas fa-chevron-down text-gray-400 dark:text-gray-500 text-xl"></i>
            </a>
        </div>
    </div>
</section>

<!-- ===== SECTION 2: SMART VISA MATCHER ===== -->
<section id="matcher" class="py-20 bg-gray-50 dark:bg-gray-800/30">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Find Your Visa in 30 Seconds</h2>
                <p class="text-gray-600 dark:text-gray-400">Get instant, personalized guidance based on your profile.</p>
            </div>
            
            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-6 md:p-8 hover-lift">
                <form id="visaMatcherForm">
                    <div class="grid md:grid-cols-3 gap-6 mb-8">
                        <div>
                            <label class="block text-gray-700 dark:text-gray-300 mb-2 font-medium">
                                <i class="fas fa-globe-americas mr-2 text-blue-500"></i>Destination Country
                            </label>
                            <select class="w-full p-3 border border-gray-300 dark:border-gray-600 rounded-lg bg-transparent focus:ring-2 focus:ring-blue-500 focus:border-transparent transition appearance-none">
                                <option value="">Select Country</option>
                                <option>🇨🇦 Canada</option>
                                <option>🇦🇺 Australia</option>
                                <option>🇬🇧 United Kingdom</option>
                                <option>🇺🇸 United States</option>
                                <option>🇩🇪 Germany</option>
                                <option>🇸🇬 Singapore</option>
                                <option>🇯🇵 Japan</option>
                                <option>🇰🇷 South Korea</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-gray-700 dark:text-gray-300 mb-2 font-medium">
                                <i class="fas fa-briefcase mr-2 text-blue-500"></i>Visa Purpose
                            </label>
                            <select class="w-full p-3 border border-gray-300 dark:border-gray-600 rounded-lg bg-transparent focus:ring-2 focus:ring-blue-500 focus:border-transparent transition">
                                <option value="">Select Purpose</option>
                                <option>🎓 Study</option>
                                <option>💼 Work</option>
                                <option>🏢 Business</option>
                                <option>✈️ Visit/Tourism</option>
                                <option>💰 Investment</option>
                                <option>👨‍👩‍👧‍👦 Family</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-gray-700 dark:text-gray-300 mb-2 font-medium">
                                <i class="fas fa-passport mr-2 text-blue-500"></i>Your Nationality
                            </label>
                            <select class="w-full p-3 border border-gray-300 dark:border-gray-600 rounded-lg bg-transparent focus:ring-2 focus:ring-blue-500 focus:border-transparent transition">
                                <option value="">Select Nationality</option>
                                <option>🇮🇩 Indonesian</option>
                                <option>🇮🇳 Indian</option>
                                <option>🇻🇳 Vietnamese</option>
                                <option>🇨🇳 Chinese</option>
                                <option>🇵🇭 Philippine</option>
                                <option>🇲🇾 Malaysian</option>
                                <option>🇹🇭 Thai</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="text-center">
                        <button type="submit" 
                                class="group bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white px-10 py-4 rounded-xl font-bold text-lg transition duration-300 shadow-lg hover:shadow-xl inline-flex items-center justify-center">
                            <i class="fas fa-search mr-2 group-hover:scale-110 transition"></i> 
                            Find My Visa Options
                        </button>
                    </div>
                </form>
                
                <div id="results" class="mt-8"></div>
            </div>
            
            <!-- Quick Stats -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-12">
                <div class="text-center p-4 bg-white dark:bg-gray-800 rounded-xl shadow-sm">
                    <div class="text-2xl font-bold text-blue-600 dark:text-blue-400">15+</div>
                    <div class="text-sm text-gray-600 dark:text-gray-400">Countries Covered</div>
                </div>
                <div class="text-center p-4 bg-white dark:bg-gray-800 rounded-xl shadow-sm">
                    <div class="text-2xl font-bold text-green-600 dark:text-green-400">30+</div>
                    <div class="text-sm text-gray-600 dark:text-gray-400">Visa Types</div>
                </div>
                <div class="text-center p-4 bg-white dark:bg-gray-800 rounded-xl shadow-sm">
                    <div class="text-2xl font-bold text-purple-600 dark:text-purple-400">85%</div>
                    <div class="text-sm text-gray-600 dark:text-gray-400">Approval Rate</div>
                </div>
                <div class="text-center p-4 bg-white dark:bg-gray-800 rounded-xl shadow-sm">
                    <div class="text-2xl font-bold text-yellow-600 dark:text-yellow-400">48h</div>
                    <div class="text-sm text-gray-600 dark:text-gray-400">Response Time</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== SECTION 3: WHY CHOOSE US (Apple-style Cards) ===== -->
<section class="py-20 bg-white dark:bg-gray-900">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Why Choose Universal Immigration</h2>
            <p class="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">Built on trust, driven by results, designed for your success.</p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="p-6 rounded-2xl border border-gray-200 dark:border-gray-700 hover-lift">
                <div class="w-14 h-14 rounded-xl bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center mb-4">
                    <i class="fas fa-bolt text-blue-600 dark:text-blue-400 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-2">Fast Processing</h3>
                <p class="text-gray-600 dark:text-gray-400">Average approval in 3-4 weeks with our expedited channels.</p>
            </div>
            
            <div class="p-6 rounded-2xl border border-gray-200 dark:border-gray-700 hover-lift">
                <div class="w-14 h-14 rounded-xl bg-green-100 dark:bg-green-900/30 flex items-center justify-center mb-4">
                    <i class="fas fa-shield-alt text-green-600 dark:text-green-400 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-2">100% Legal</h3>
                <p class="text-gray-600 dark:text-gray-400">Government-compliant processing with no hidden surprises.</p>
            </div>
            
            <div class="p-6 rounded-2xl border border-gray-200 dark:border-gray-700 hover-lift">
                <div class="w-14 h-14 rounded-xl bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center mb-4">
                    <i class="fas fa-handshake text-purple-600 dark:text-purple-400 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-2">Transparent Pricing</h3>
                <p class="text-gray-600 dark:text-gray-400">No hidden fees. All costs explained upfront with price guarantee.</p>
            </div>
            
            <div class="p-6 rounded-2xl border border-gray-200 dark:border-gray-700 hover-lift">
                <div class="w-14 h-14 rounded-xl bg-red-100 dark:bg-red-900/30 flex items-center justify-center mb-4">
                    <i class="fas fa-headset text-red-600 dark:text-red-400 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-2">24/7 Support</h3>
                <p class="text-gray-600 dark:text-gray-400">Dedicated consultant available via WhatsApp, email, and phone.</p>
            </div>
        </div>
        
        <!-- Founder Quote -->
        <div class="mt-16 max-w-3xl mx-auto p-8 rounded-2xl bg-gradient-to-r from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 border border-blue-100 dark:border-gray-700">
            <div class="flex items-start">
                <div class="flex-shrink-0 mr-4">
                    <div class="w-12 h-12 rounded-full bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center">
                        <i class="fas fa-quote-left text-white text-sm"></i>
                    </div>
                </div>
                <div>
                    <blockquote class="text-xl italic text-gray-800 dark:text-gray-200">
                        "We don't make false promises — we provide clear pathways. Our mission is to simplify global mobility through transparent, efficient, and ethical visa consultancy."
                    </blockquote>
                    <div class="mt-4 flex items-center">
                        <div>
                            <div class="font-bold">Parth Trivedi</div>
                            <div class="text-sm text-gray-600 dark:text-gray-400">Founder & CEO</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== SECTION 4: OUR VISA SERVICES (2 BAGIAN SEPERTI PERMINTAAN) ===== -->
<section id="services" class="py-20 bg-gray-50 dark:bg-gray-800/30">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Our Visa Services</h2>
            <p class="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">Comprehensive solutions tailored to your global ambitions.</p>
        </div>

        <!-- Grid dengan 2 bagian utama -->
        <div class="grid lg:grid-cols-2 gap-12">
            <!-- Bagian 1: Global Visa Solutions -->
            <div>
                <div class="flex items-center mb-8">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center mr-4 shadow-lg">
                        <i class="fas fa-globe-americas text-white text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold">Global Visa Solutions</h3>
                        <p class="text-gray-600 dark:text-gray-400">Worldwide immigration services</p>
                    </div>
                </div>
                
                <div class="space-y-4">
                    @foreach([
                        ['icon' => 'graduation-cap', 'title' => 'Study Visa', 'desc' => 'Pursue education at top universities worldwide', 'color' => 'blue'],
                        ['icon' => 'briefcase', 'title' => 'Work Visa', 'desc' => 'Secure international employment opportunities', 'color' => 'green'],
                        ['icon' => 'plane', 'title' => 'Visit Visa', 'desc' => 'Travel for tourism, business visits, or family', 'color' => 'purple'],
                        ['icon' => 'chart-line', 'title' => 'Business Visa', 'desc' => 'Expand your business operations globally', 'color' => 'yellow'],
                        ['icon' => 'handshake', 'title' => 'Investment Visa', 'desc' => 'Invest or start business overseas', 'color' => 'red']
                    ] as $service)
                    <div class="service-card group p-5 rounded-xl border border-gray-200 dark:border-gray-700 hover:border-{{ $service['color'] }}-300 dark:hover:border-{{ $service['color'] }}-500 transition duration-300 cursor-pointer hover-lift">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 w-12 h-12 rounded-lg bg-{{ $service['color'] }}-100 dark:bg-{{ $service['color'] }}-900/20 flex items-center justify-center mr-4 group-hover:scale-110 transition">
                                <i class="fas fa-{{ $service['icon'] }} text-{{ $service['color'] }}-600 dark:text-{{ $service['color'] }}-400 text-lg"></i>
                            </div>
                            <div class="flex-grow">
                                <h4 class="font-bold text-lg mb-1">{{ $service['title'] }}</h4>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">{{ $service['desc'] }}</p>
                            </div>
                            <div class="opacity-0 group-hover:opacity-100 transition">
                                <i class="fas fa-arrow-right text-gray-400"></i>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Bagian 2: Indonesia Specialized Services -->
            <div>
                <div class="flex items-center mb-8">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-green-500 to-emerald-600 flex items-center justify-center mr-4 shadow-lg">
                        <i class="fas fa-flag text-white text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold">Indonesia Specialized</h3>
                        <p class="text-gray-600 dark:text-gray-400">Complete immigration solutions for Indonesia</p>
                    </div>
                </div>
                
                <div class="space-y-4">
                    @foreach([
                        ['icon' => 'plane', 'title' => 'Visit Visa', 'desc' => 'Short-term visits for tourism or business', 'color' => 'blue'],
                        ['icon' => 'id-card', 'title' => 'KITAS (1 Year)', 'desc' => 'Temporary stay permit for 1 year', 'color' => 'green'],
                        ['icon' => 'money-bill-wave', 'title' => 'Investment KITAS (2 Years)', 'desc' => 'Long-term stay for investors', 'color' => 'yellow'],
                        ['icon' => 'id-card', 'title' => 'Business KITAS (1 Year)', 'desc' => 'For business professionals and directors', 'color' => 'purple'],
                        ['icon' => 'building', 'title' => 'Business Setup', 'desc' => 'Complete company establishment service', 'color' => 'red'],
                        ['icon' => 'file-contract', 'title' => 'C1 Visa', 'desc' => 'For foreign experts and consultants', 'color' => 'indigo'],
                        ['icon' => 'file-alt', 'title' => 'D12 Visa', 'desc' => 'For foreign workers and professionals', 'color' => 'pink']
                    ] as $service)
                    <div class="service-card group p-5 rounded-xl border border-gray-200 dark:border-gray-700 hover:border-{{ $service['color'] }}-300 dark:hover:border-{{ $service['color'] }}-500 transition duration-300 cursor-pointer hover-lift">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 w-12 h-12 rounded-lg bg-{{ $service['color'] }}-100 dark:bg-{{ $service['color'] }}-900/20 flex items-center justify-center mr-4 group-hover:scale-110 transition">
                                <i class="fas fa-{{ $service['icon'] }} text-{{ $service['color'] }}-600 dark:text-{{ $service['color'] }}-400 text-lg"></i>
                            </div>
                            <div class="flex-grow">
                                <h4 class="font-bold text-lg mb-1">{{ $service['title'] }}</h4>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">{{ $service['desc'] }}</p>
                            </div>
                            <div class="opacity-0 group-hover:opacity-100 transition">
                                <i class="fas fa-arrow-right text-gray-400"></i>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        
        <!-- CTA under services -->
        <div class="mt-16 text-center">
            <a href="#contact" class="inline-flex items-center bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white px-8 py-4 rounded-xl font-semibold text-lg transition duration-300 shadow-lg hover:shadow-xl">
                <i class="fas fa-comments mr-3"></i> 
                Get Personalized Visa Consultation
            </a>
        </div>
    </div>
</section>

<!-- ===== SECTION 5: VISA SUCCESS WALL (DENGAN BENDERA KECIL) ===== -->
<section id="success" class="py-20 bg-white dark:bg-gray-900">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Real Visas. Real Results.</h2>
            <p class="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">Verified success stories from our clients worldwide.</p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach([
                ['country' => 'Canada', 'type' => 'Study Visa', 'time' => '21 Days', 'flag' => '🇨🇦', 'client' => 'Rina S.', 'icon' => 'graduation-cap', 'color' => 'blue'],
                ['country' => 'Australia', 'type' => 'Visit Visa', 'time' => '14 Days', 'flag' => '🇦🇺', 'client' => 'Ahmad R.', 'icon' => 'plane', 'color' => 'green'],
                ['country' => 'Germany', 'type' => 'Work Visa', 'time' => '30 Days', 'flag' => '🇩🇪', 'client' => 'David L.', 'icon' => 'briefcase', 'color' => 'yellow'],
                ['country' => 'Singapore', 'type' => 'Business Visa', 'time' => '10 Days', 'flag' => '🇸🇬', 'client' => 'Priya K.', 'icon' => 'chart-line', 'color' => 'purple']
            ] as $case)
            <div class="success-card bg-gray-50 dark:bg-gray-800 rounded-2xl p-6 shadow-md hover:shadow-xl transition duration-300 relative overflow-hidden group hover-lift">
                <!-- Bendera kecil di pojok kiri atas -->
                <div class="absolute top-4 left-4 text-3xl flag opacity-50 group-hover:opacity-100 transition duration-300 transform group-hover:scale-110">
                    {{ $case['flag'] }}
                </div>
                
                <!-- Status Badge -->
                <div class="absolute top-4 right-4">
                    <span class="bg-green-100 dark:bg-green-900/30 text-green-800 dark:text-green-300 px-3 py-1 rounded-full text-xs font-medium">
                        Approved
                    </span>
                </div>
                
                <!-- Content dengan padding untuk bendera -->
                <div class="pt-12">
                    <div class="flex items-center mb-4">
                        <div class="w-10 h-10 rounded-lg bg-{{ $case['color'] }}-100 dark:bg-{{ $case['color'] }}-900/20 flex items-center justify-center mr-3">
                            <i class="fas fa-{{ $case['icon'] }} text-{{ $case['color'] }}-600 dark:text-{{ $case['color'] }}-400"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-xl mb-1">{{ $case['country'] }}</h4>
                            <p class="text-gray-600 dark:text-gray-400">{{ $case['type'] }}</p>
                        </div>
                    </div>
                    
                    <p class="text-gray-700 dark:text-gray-300 mb-6">
                        Approved in <strong>{{ $case['time'] }}</strong> for <strong>{{ $case['client'] }}</strong> from Indonesia.
                    </p>
                    
                    <div class="flex justify-between items-center text-sm text-gray-500 dark:text-gray-500">
                        <div class="flex items-center">
                            <i class="far fa-calendar-check mr-2"></i>
                            <span>Dec 2023</span>
                        </div>
                        <div class="flex items-center">
                            <i class="far fa-clock mr-2"></i>
                            <span>{{ $case['time'] }}</span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <!-- View All Button -->
        <div class="text-center mt-10">
            <a href="#" class="inline-flex items-center text-blue-600 dark:text-blue-400 font-medium hover:text-blue-800 dark:hover:text-blue-300 group">
                View All Success Stories
                <i class="fas fa-arrow-right ml-2 group-hover:translate-x-2 transition"></i>
            </a>
        </div>
    </div>
</section>

<!-- ===== SECTION 6: TRANSPARENT PRICING ===== -->
<section id="pricing" class="py-20 bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-900">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Transparent Pricing</h2>
            <p class="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">Clear pricing, no hidden fees, and a lowest price guarantee.</p>
        </div>

        <div class="max-w-5xl mx-auto">
            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-8 hover-lift">
                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Student Visa Pricing -->
                    <div class="text-center p-6 border border-gray-200 dark:border-gray-700 rounded-xl hover:border-blue-300 dark:hover:border-blue-500 transition group">
                        <div class="w-16 h-16 bg-blue-100 dark:bg-blue-900/30 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition">
                            <i class="fas fa-graduation-cap text-blue-600 dark:text-blue-400 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Student Visa</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">Starting from competitive market rates</p>
                        <div class="text-3xl font-bold text-blue-600 dark:text-blue-400 mb-2">$500<span class="text-lg text-gray-500">+</span></div>
                        <ul class="text-left space-y-2 mb-6">
                            <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> Full documentation support</li>
                            <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> University application</li>
                            <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> Interview preparation</li>
                        </ul>
                        <button class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 rounded-lg transition">
                            Get Started
                        </button>
                    </div>
                    
                    <!-- Work Visa Pricing -->
                    <div class="text-center p-6 border border-gray-200 dark:border-gray-700 rounded-xl hover:border-green-300 dark:hover:border-green-500 transition group">
                        <div class="w-16 h-16 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition">
                            <i class="fas fa-briefcase text-green-600 dark:text-green-400 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Work Visa</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">Based on country & profile</p>
                        <div class="text-3xl font-bold text-green-600 dark:text-green-400 mb-2">$800<span class="text-lg text-gray-500">+</span></div>
                        <ul class="text-left space-y-2 mb-6">
                            <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> Job search assistance</li>
                            <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> Legal processing</li>
                            <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> Employer liaison</li>
                        </ul>
                        <button class="w-full bg-green-600 hover:bg-green-700 text-white font-medium py-3 rounded-lg transition">
                            Get Started
                        </button>
                    </div>
                    
                    <!-- Business/Investment Visa Pricing -->
                    <div class="text-center p-6 border border-gray-200 dark:border-gray-700 rounded-xl hover:border-purple-300 dark:hover:border-purple-500 transition group">
                        <div class="w-16 h-16 bg-purple-100 dark:bg-purple-900/30 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition">
                            <i class="fas fa-handshake text-purple-600 dark:text-purple-400 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Business / Investment</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">Customized legal packages</p>
                        <div class="text-3xl font-bold text-purple-600 dark:text-purple-400 mb-2">$1,500<span class="text-lg text-gray-500">+</span></div>
                        <ul class="text-left space-y-2 mb-6">
                            <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> Tailored to your needs</li>
                            <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> Business setup included</li>
                            <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> Legal compliance</li>
                        </ul>
                        <button class="w-full bg-purple-600 hover:bg-purple-700 text-white font-medium py-3 rounded-lg transition">
                            Get Started
                        </button>
                    </div>
                </div>
                
                <!-- Price Guarantee -->
                <div class="mt-10 p-6 bg-blue-50 dark:bg-gray-700/50 rounded-xl border border-blue-100 dark:border-blue-900">
                    <div class="flex flex-col md:flex-row items-center">
                        <div class="flex-shrink-0 mb-4 md:mb-0 md:mr-6">
                            <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-full flex items-center justify-center">
                                <i class="fas fa-shield-alt text-white text-2xl"></i>
                            </div>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold mb-2">Our Price Guarantee</h4>
                            <p class="text-gray-700 dark:text-gray-300">
                                We promise the lowest prices in the market. Found a lower price? We'll match it and give you an additional <strong>10% discount</strong>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== SECTION 7: FOUNDER & LEADERSHIP ===== -->
<section class="py-20 bg-white dark:bg-gray-900">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Leadership Team</h2>
                <p class="text-gray-600 dark:text-gray-400">Visionaries behind our global mission</p>
            </div>
            
            <div class="bg-gradient-to-r from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-2xl p-8 md:p-12 hover-lift">
                <div class="flex flex-col md:flex-row items-center md:items-start gap-8">
                    <!-- Founder Info -->
                    <div class="text-center md:text-left flex-1">
                        <div class="inline-flex items-center px-4 py-2 rounded-full bg-blue-100 dark:bg-blue-900/30 text-blue-800 dark:text-blue-300 text-sm font-medium mb-4">
                            <i class="fas fa-crown mr-2"></i> Founder & CEO
                        </div>
                        <h3 class="text-2xl font-bold mb-2">Parth Trivedi</h3>
                        <p class="text-gray-700 dark:text-gray-300 mb-4">Partner: Jigar Gohil</p>
                        
                        <blockquote class="text-xl italic text-gray-800 dark:text-gray-200 border-l-4 border-blue-500 pl-4 py-2 my-6">
                            "We don't sell visas. We build global futures."
                        </blockquote>
                        
                        <p class="text-gray-600 dark:text-gray-400 mb-6">
                            With over 15 years of experience in immigration consultancy, our leadership team ensures that every client receives personalized attention and expert guidance throughout their visa journey.
                        </p>
                        
                        <div class="flex space-x-4">
                            <a href="#" class="w-10 h-10 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center hover:bg-blue-100 dark:hover:bg-blue-900/30 transition">
                                <i class="fab fa-linkedin-in text-gray-600 dark:text-gray-400"></i>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center hover:bg-blue-100 dark:hover:bg-blue-900/30 transition">
                                <i class="fab fa-twitter text-gray-600 dark:text-gray-400"></i>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center hover:bg-blue-100 dark:hover:bg-blue-900/30 transition">
                                <i class="fas fa-envelope text-gray-600 dark:text-gray-400"></i>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Stats -->
                    <div class="flex-1">
                        <div class="grid grid-cols-2 gap-4">
                            <div class="bg-white dark:bg-gray-800 p-6 rounded-xl text-center">
                                <div class="text-3xl font-bold text-blue-600 dark:text-blue-400 mb-2">15+</div>
                                <div class="text-gray-700 dark:text-gray-300">Years Experience</div>
                            </div>
                            <div class="bg-white dark:bg-gray-800 p-6 rounded-xl text-center">
                                <div class="text-3xl font-bold text-green-600 dark:text-green-400 mb-2">200+</div>
                                <div class="text-gray-700 dark:text-gray-300">Successful Cases</div>
                            </div>
                            <div class="bg-white dark:bg-gray-800 p-6 rounded-xl text-center">
                                <div class="text-3xl font-bold text-purple-600 dark:text-purple-400 mb-2">98%</div>
                                <div class="text-gray-700 dark:text-gray-300">Success Rate</div>
                            </div>
                            <div class="bg-white dark:bg-gray-800 p-6 rounded-xl text-center">
                                <div class="text-3xl font-bold text-yellow-600 dark:text-yellow-400 mb-2">24/7</div>
                                <div class="text-gray-700 dark:text-gray-300">Support</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== SECTION 8: CTA CONSULTATION CARDS ===== -->
<section id="contact" class="py-20 bg-gray-50 dark:bg-gray-800/30">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Start Your Visa Journey Today</h2>
            <p class="text-gray-600 dark:text-gray-400">Choose your preferred way to connect with our experts.</p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 max-w-5xl mx-auto">
            <!-- Card 1: Call Now -->
            <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl border border-gray-200 dark:border-gray-700 text-center hover-lift group">
                <div class="w-16 h-16 bg-blue-100 dark:bg-blue-900/30 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition">
                    <i class="fas fa-phone-alt text-blue-600 dark:text-blue-400 text-2xl"></i>
                </div>
                <h4 class="font-bold text-lg mb-2">Call Now</h4>
                <p class="text-gray-600 dark:text-gray-400 text-sm mb-6">Speak directly with our visa specialists.</p>
                <a href="tel:+6512345678" class="inline-block text-blue-600 dark:text-blue-400 font-medium hover:text-blue-800 dark:hover:text-blue-300">
                    +65 1234 5678
                </a>
            </div>

            <!-- Card 2: WhatsApp -->
            <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl border border-gray-200 dark:border-gray-700 text-center hover-lift group">
                <div class="w-16 h-16 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition">
                    <i class="fab fa-whatsapp text-green-600 dark:text-green-400 text-2xl"></i>
                </div>
                <h4 class="font-bold text-lg mb-2">WhatsApp</h4>
                <p class="text-gray-600 dark:text-gray-400 text-sm mb-6">Instant messaging support & queries.</p>
                <a href="https://wa.me/6512345678" class="inline-block bg-green-500 hover:bg-green-600 text-white px-5 py-2 rounded-lg font-medium transition">
                    Message Now
                </a>
            </div>

            <!-- Card 3: Book Free Appointment (TRIGGERS MODAL) -->
            <div onclick="openConsultationModal()" class="bg-gradient-to-br from-blue-500 to-indigo-600 text-white p-8 rounded-2xl text-center hover-lift cursor-pointer transform hover:-translate-y-2 transition duration-300 group">
                <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition">
                    <i class="fas fa-calendar-check text-2xl"></i>
                </div>
                <h4 class="font-bold text-lg mb-2">Book Free Appointment</h4>
                <p class="text-blue-100 text-sm mb-6">Schedule a 30-min free consultation session.</p>
                <button class="bg-white text-blue-600 hover:bg-gray-100 px-5 py-2 rounded-lg font-medium transition">
                    Book Now
                </button>
            </div>

            <!-- Card 4: Visit Office -->
            <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl border border-gray-200 dark:border-gray-700 text-center hover-lift group">
                <div class="w-16 h-16 bg-red-100 dark:bg-red-900/30 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition">
                    <i class="fas fa-map-marker-alt text-red-600 dark:text-red-400 text-2xl"></i>
                </div>
                <h4 class="font-bold text-lg mb-2">Visit Our Office</h4>
                <p class="text-gray-600 dark:text-gray-400 text-sm mb-6">Meet us in person for detailed discussion.</p>
                <a href="#" class="inline-flex items-center text-gray-700 dark:text-gray-300 font-medium group-hover:text-blue-600 dark:group-hover:text-blue-400">
                    View Locations
                    <i class="fas fa-arrow-right ml-2 group-hover:translate-x-2 transition"></i>
                </a>
            </div>
        </div>
        
        <!-- Office Locations -->
        <div class="mt-16 max-w-4xl mx-auto">
            <h3 class="text-2xl font-bold mb-8 text-center">Our Global Offices</h3>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="text-center p-6 bg-white dark:bg-gray-800 rounded-xl">
                    <div class="text-2xl mb-2">🇸🇬</div>
                    <h4 class="font-bold mb-2">Singapore</h4>
                    <p class="text-sm text-gray-600 dark:text-gray-400">101 Market Street</p>
                </div>
                <div class="text-center p-6 bg-white dark:bg-gray-800 rounded-xl">
                    <div class="text-2xl mb-2">🇮🇩</div>
                    <h4 class="font-bold mb-2">Indonesia</h4>
                    <p class="text-sm text-gray-600 dark:text-gray-400">Jakarta Central District</p>
                </div>
                <div class="text-center p-6 bg-white dark:bg-gray-800 rounded-xl">
                    <div class="text-2xl mb-2">🇮🇳</div>
                    <h4 class="font-bold mb-2">India</h4>
                    <p class="text-sm text-gray-600 dark:text-gray-400">Mumbai Business Hub</p>
                </div>
                <div class="text-center p-6 bg-white dark:bg-gray-800 rounded-xl">
                    <div class="text-2xl mb-2">🇻🇳</div>
                    <h4 class="font-bold mb-2">Vietnam</h4>
                    <p class="text-sm text-gray-600 dark:text-gray-400">Ho Chi Minh City Center</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection