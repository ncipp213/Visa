<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universal Immigration Express | Global Visa Consultants</title>
    
    <!-- Theme Detection Script -->
    <script>
        // Deteksi tema preferensi sistem
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
            localStorage.theme = 'dark';
        } else {
            document.documentElement.classList.remove('dark');
            localStorage.theme = 'light';
        }
    </script>
    
    <!-- Vite CSS & JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🌐</text></svg>">
    
    <!-- Preconnect to CDNs -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    
    <!-- Apple-style Meta Tags -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#3b82f6" media="(prefers-color-scheme: light)">
    <meta name="theme-color" content="#1f2937" media="(prefers-color-scheme: dark)">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Global visa consultancy with offices in Singapore, Indonesia, India & Vietnam. 200+ successful visa approvals with lowest price guarantee.">
    <meta name="keywords" content="visa, immigration, study visa, work visa, business visa, investment visa">
    <meta name="author" content="Universal Immigration Express">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Universal Immigration Express | Global Visa Consultants">
    <meta property="og:description" content="Your trusted partner for global visa solutions">
    <meta property="og:type" content="website">
    
    <style>
        /* Fallback styles in case Tailwind doesn't load */
        :root {
            --color-primary: #2563eb;
            --color-surface: #ffffff;
            --color-text: #1f2937;
        }
        
        .dark {
            --color-primary: #3b82f6;
            --color-surface: #111827;
            --color-text: #f9fafb;
        }
        
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            margin: 0;
            padding: 0;
            background-color: var(--color-surface);
            color: var(--color-text);
        }
        
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }
        
        /* Ensure images are responsive */
        img {
            max-width: 100%;
            height: auto;
        }
        
        /* Basic link styling */
        a {
            color: var(--color-primary);
            text-decoration: none;
        }
        
        a:hover {
            text-decoration: underline;
        }
        
        /* Basic button styling */
        button, .btn {
            background-color: var(--color-primary);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 0.375rem;
            border: none;
            cursor: pointer;
            font-weight: 500;
        }
        
        button:hover, .btn:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body class="bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 antialiased overflow-x-hidden">
    <!-- ===== APPLE-STYLE NAVIGATION ===== -->
    <nav class="sticky top-0 z-50 w-full border-b border-gray-200/50 dark:border-gray-800/50 bg-white/95 dark:bg-gray-900/95 backdrop-blur-md supports-[backdrop-filter]:bg-white/60 supports-[backdrop-filter]:dark:bg-gray-900/60">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <!-- Logo - Minimalis seperti Apple -->
                <div class="flex items-center space-x-3">
                    <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center shadow-sm">
                        <i class="fas fa-globe-americas text-white text-sm"></i>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-lg font-bold tracking-tight leading-none">Universal</span>
                        <span class="text-xs text-gray-500 dark:text-gray-400 tracking-wider">IMMIGRATION</span>
                    </div>
                </div>

                <!-- Desktop Menu (Hidden on mobile, visible on lg) - Apple Style -->
                <div class="hidden lg:flex items-center space-x-1">
                    <a href="#home" class="px-4 py-2 text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800">Home</a>
                    <a href="#services" class="px-4 py-2 text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800">Services</a>
                    <a href="#success" class="px-4 py-2 text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800">Success</a>
                    <a href="#pricing" class="px-4 py-2 text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800">Pricing</a>
                    <a href="#contact" class="px-4 py-2 text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800">Contact</a>
                </div>

                <!-- Right Side Actions -->
                <div class="flex items-center space-x-3">
                    <!-- Dark/Light Mode Toggle - Apple Style -->
                    <button id="themeToggle" class="p-2 rounded-full hover:bg-gray-100 dark:hover:bg-gray-800 transition" aria-label="Toggle dark mode">
                        <i id="sunIcon" class="fas fa-sun text-gray-500 dark:text-gray-400 hidden"></i>
                        <i id="moonIcon" class="fas fa-moon text-gray-500 dark:text-gray-400"></i>
                    </button>
                    
                    <!-- CTA Button - Minimal -->
                    <a href="#contact" class="hidden sm:inline-block bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition duration-300 shadow-sm hover:shadow">
                        Free Consult
                    </a>
                    
                    <!-- Mobile Menu Button - Hamburger like Apple -->
                    <button id="mobileMenuButton" class="lg:hidden p-2 rounded-md hover:bg-gray-100 dark:hover:bg-gray-800 transition" aria-label="Open menu">
                        <div class="space-y-1.5">
                            <span class="block w-6 h-0.5 bg-gray-600 dark:bg-gray-400"></span>
                            <span class="block w-6 h-0.5 bg-gray-600 dark:bg-gray-400"></span>
                            <span class="block w-6 h-0.5 bg-gray-600 dark:bg-gray-400"></span>
                        </div>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile Menu (Hidden by default) - Apple Style Dropdown -->
        <div id="mobileMenu" class="lg:hidden hidden border-t border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-900 px-4 py-3 animate-slide-up">
            <div class="flex flex-col space-y-1">
                <a href="#home" class="px-4 py-3 font-medium rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800">Home</a>
                <a href="#services" class="px-4 py-3 font-medium rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800">Services</a>
                <a href="#success" class="px-4 py-3 font-medium rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800">Success Wall</a>
                <a href="#pricing" class="px-4 py-3 font-medium rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800">Pricing</a>
                <a href="#contact" class="px-4 py-3 font-medium rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800">Contact</a>
                <a href="#contact" class="px-4 py-3 mt-2 bg-blue-600 text-white text-center rounded-lg font-medium hover:bg-blue-700">Free Consultation</a>
            </div>
        </div>
    </nav>

    <!-- ===== MAIN CONTENT ===== -->
    <main class="min-h-screen">
        @yield('content')
    </main>

    <!-- ===== FOOTER ===== -->
    <footer class="bg-gray-50 dark:bg-gray-800/50 border-t border-gray-200 dark:border-gray-700/50 py-12">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <div>
                    <div class="flex items-center space-x-2 mb-4">
                        <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center">
                            <i class="fas fa-globe-americas text-white text-sm"></i>
                        </div>
                        <span class="text-lg font-bold">Universal<span class="text-blue-600 dark:text-blue-400">Immigration</span></span>
                    </div>
                    <p class="text-gray-600 dark:text-gray-400 text-sm">
                        Your trusted partner for global visa solutions since 2022.
                    </p>
                </div>
                
                <div>
                    <h4 class="font-bold mb-4">Services</h4>
                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                        <li><a href="#" class="hover:text-blue-600 dark:hover:text-blue-400">Study Visa</a></li>
                        <li><a href="#" class="hover:text-blue-600 dark:hover:text-blue-400">Work Visa</a></li>
                        <li><a href="#" class="hover:text-blue-600 dark:hover:text-blue-400">Business Visa</a></li>
                        <li><a href="#" class="hover:text-blue-600 dark:hover:text-blue-400">Investment Visa</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="font-bold mb-4">Contact</h4>
                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                        <li class="flex items-center">
                            <i class="fas fa-phone mr-2 text-blue-500"></i>
                            <a href="tel:+6512345678" class="hover:text-blue-600 dark:hover:text-blue-400">+65 1234 5678</a>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope mr-2 text-blue-500"></i>
                            <a href="mailto:info@universalimmigration.com" class="hover:text-blue-600 dark:hover:text-blue-400">info@universalimmigration.com</a>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-map-marker-alt mr-2 text-blue-500"></i>
                            <span>Singapore, Indonesia, India, Vietnam</span>
                        </li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="font-bold mb-4">Follow Us</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center hover:bg-blue-100 dark:hover:bg-blue-900/30 transition">
                            <i class="fab fa-facebook-f text-gray-600 dark:text-gray-400"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center hover:bg-blue-100 dark:hover:bg-blue-900/30 transition">
                            <i class="fab fa-twitter text-gray-600 dark:text-gray-400"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center hover:bg-blue-100 dark:hover:bg-blue-900/30 transition">
                            <i class="fab fa-instagram text-gray-600 dark:text-gray-400"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center hover:bg-blue-100 dark:hover:bg-blue-900/30 transition">
                            <i class="fab fa-linkedin-in text-gray-600 dark:text-gray-400"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-200 dark:border-gray-700 pt-8 text-center">
                <p class="text-gray-600 dark:text-gray-400 text-sm">
                    &copy; {{ date('Y') }} Universal Immigration Express. All rights reserved.
                </p>
                <p class="text-xs text-gray-500 dark:text-gray-500 mt-2">
                    Your visa, simplified.
                </p>
            </div>
        </div>
    </footer>

    <!-- ===== MODAL POP-UP: Book Free Consultation ===== -->
    <div id="consultationModal" class="fixed inset-0 z-[100] hidden items-center justify-center p-4 bg-black/50 backdrop-blur-sm animate-fade-in">
        <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-2xl max-w-md w-full max-h-[90vh] overflow-y-auto animate-scale-in">
            <!-- Modal Header -->
            <div class="flex items-center justify-between p-6 border-b border-gray-200 dark:border-gray-700">
                <div>
                    <h3 class="text-xl font-bold">Book Free Consultation</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">30 minutes with our visa expert</p>
                </div>
                <button id="closeModal" class="p-2 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-full transition">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>
            
            <!-- Modal Form -->
            <form class="p-6 space-y-4">
                <div>
                    <label class="block text-sm font-medium mb-2">Full Name *</label>
                    <input type="text" required class="w-full p-3 border border-gray-300 dark:border-gray-600 rounded-lg bg-transparent focus:ring-2 focus:ring-blue-500 focus:border-transparent transition" placeholder="John Doe">
                </div>
                
                <div>
                    <label class="block text-sm font-medium mb-2">Email Address *</label>
                    <input type="email" required class="w-full p-3 border border-gray-300 dark:border-gray-600 rounded-lg bg-transparent focus:ring-2 focus:ring-blue-500 focus:border-transparent transition" placeholder="john@example.com">
                </div>
                
                <div>
                    <label class="block text-sm font-medium mb-2">Phone Number</label>
                    <input type="tel" class="w-full p-3 border border-gray-300 dark:border-gray-600 rounded-lg bg-transparent focus:ring-2 focus:ring-blue-500 focus:border-transparent transition" placeholder="+65 1234 5678">
                </div>
                
                <div>
                    <label class="block text-sm font-medium mb-2">Visa Interest</label>
                    <select class="w-full p-3 border border-gray-300 dark:border-gray-600 rounded-lg bg-transparent focus:ring-2 focus:ring-blue-500 focus:border-transparent transition">
                        <option value="">Select a visa type</option>
                        <option value="study">Study Visa</option>
                        <option value="work">Work Visa</option>
                        <option value="business">Business Visa</option>
                        <option value="visit">Visit Visa</option>
                        <option value="investment">Investment Visa</option>
                    </select>
                </div>
                
                <div>
                    <label class="block text-sm font-medium mb-2">Preferred Date & Time</label>
                    <div class="grid grid-cols-2 gap-3">
                        <input type="date" class="p-3 border border-gray-300 dark:border-gray-600 rounded-lg bg-transparent focus:ring-2 focus:ring-blue-500 focus:border-transparent transition">
                        <select class="p-3 border border-gray-300 dark:border-gray-600 rounded-lg bg-transparent focus:ring-2 focus:ring-blue-500 focus:border-transparent transition">
                            <option value="09:00">09:00 AM</option>
                            <option value="10:00">10:00 AM</option>
                            <option value="11:00">11:00 AM</option>
                            <option value="14:00">02:00 PM</option>
                            <option value="15:00">03:00 PM</option>
                        </select>
                    </div>
                </div>
                
                <div>
                    <label class="block text-sm font-medium mb-2">Additional Notes (Optional)</label>
                    <textarea rows="3" class="w-full p-3 border border-gray-300 dark:border-gray-600 rounded-lg bg-transparent focus:ring-2 focus:ring-blue-500 focus:border-transparent transition" placeholder="Tell us about your specific requirements..."></textarea>
                </div>
                
                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 rounded-lg transition duration-300 shadow-sm hover:shadow">
                    Schedule Free Session
                </button>
                
                <p class="text-center text-xs text-gray-500 dark:text-gray-400">
                    By booking, you agree to our <a href="#" class="text-blue-600 dark:text-blue-400 hover:underline">Privacy Policy</a>
                </p>
            </form>
        </div>
    </div>

    <!-- ===== EXTERNAL JAVASCRIPT (jQuery for simplicity) ===== -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        // Initialize theme icons based on current theme
        document.addEventListener('DOMContentLoaded', function() {
            const isDark = document.documentElement.classList.contains('dark');
            const sunIcon = document.getElementById('sunIcon');
            const moonIcon = document.getElementById('moonIcon');
            
            if (sunIcon && moonIcon) {
                sunIcon.classList.toggle('hidden', isDark);
                moonIcon.classList.toggle('hidden', !isDark);
            }
            
            // Add animation to elements when they come into view
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-fade-in');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);
            
            // Observe all sections
            document.querySelectorAll('section').forEach(section => {
                observer.observe(section);
            });
        });
    </script>
</body>
</html>