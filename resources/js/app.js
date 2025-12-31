// Import Axios for HTTP requests
import axios from 'axios';
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// Initialize Alpine.js or other JS frameworks if needed
import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

// Your custom JavaScript
document.addEventListener('DOMContentLoaded', function() {
    console.log('Universal Immigration website loaded');
    
    // Mobile menu toggle
    const mobileMenuButton = document.getElementById('mobileMenuButton');
    const mobileMenu = document.getElementById('mobileMenu');
    
    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            mobileMenu.classList.toggle('animate-slide-up');
        });
    }
    
    // Close mobile menu when clicking outside
    document.addEventListener('click', (event) => {
        if (mobileMenu && !mobileMenu.contains(event.target) && 
            mobileMenuButton && !mobileMenuButton.contains(event.target)) {
            mobileMenu.classList.add('hidden');
        }
    });
    
    // Visa Matcher Form Submission
    const visaMatcherForm = document.getElementById('visaMatcherForm');
    const resultsDiv = document.getElementById('results');
    
    if (visaMatcherForm && resultsDiv) {
        visaMatcherForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Show loading animation
            resultsDiv.innerHTML = `
                <div class="text-center py-8">
                    <div class="inline-block animate-spin rounded-full h-12 w-12 border-t-2 border-b-2 border-blue-600"></div>
                    <p class="mt-4 text-gray-600">Finding your visa options...</p>
                </div>
            `;
            
            // Simulate API call
            setTimeout(() => {
                const country = document.querySelector('#visaMatcherForm select:nth-child(1)').value;
                const purpose = document.querySelector('#visaMatcherForm select:nth-child(2)').value;
                
                resultsDiv.innerHTML = `
                    <div class="bg-green-50 dark:bg-green-900/20 border border-green-200 dark:border-green-800 rounded-xl p-6 animate-fade-in">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-xl font-bold text-green-800 dark:text-green-300">✅ Visa Match Found!</h3>
                            <span class="bg-green-100 dark:bg-green-800 text-green-800 dark:text-green-300 px-3 py-1 rounded-full text-sm font-medium">85% Success Probability</span>
                        </div>
                        
                        <div class="grid md:grid-cols-3 gap-4">
                            <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-sm">
                                <h4 class="font-bold text-gray-700 dark:text-gray-300">📋 Eligible Visa Types</h4>
                                <ul class="mt-2 space-y-1">
                                    <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> Student Visa</li>
                                    <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> Work Visa</li>
                                </ul>
                            </div>
                            
                            <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-sm">
                                <h4 class="font-bold text-gray-700 dark:text-gray-300">⏱️ Processing Time</h4>
                                <p class="mt-2 text-lg font-bold text-blue-600 dark:text-blue-400">3-4 Weeks</p>
                            </div>
                            
                            <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-sm">
                                <h4 class="font-bold text-gray-700 dark:text-gray-300">💰 Cost Range</h4>
                                <p class="mt-2 text-lg font-bold text-blue-600 dark:text-blue-400">$500 - $1500</p>
                            </div>
                        </div>
                        
                        <div class="mt-6 text-center">
                            <button class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-medium transition">
                                <i class="fas fa-file-alt mr-2"></i> Get Exact Documents & Cost
                            </button>
                        </div>
                    </div>
                `;
            }, 1500);
        });
    }
    
    // Theme Toggle
    const themeToggle = document.getElementById('themeToggle');
    const sunIcon = document.getElementById('sunIcon');
    const moonIcon = document.getElementById('moonIcon');
    const html = document.documentElement;
    
    if (themeToggle) {
        themeToggle.addEventListener('click', () => {
            html.classList.toggle('dark');
            const isDark = html.classList.contains('dark');
            localStorage.theme = isDark ? 'dark' : 'light';
            
            if (sunIcon && moonIcon) {
                sunIcon.classList.toggle('hidden', isDark);
                moonIcon.classList.toggle('hidden', !isDark);
            }
        });
    }
    
    // Consultation Modal
    const consultationModal = document.getElementById('consultationModal');
    const closeModal = document.getElementById('closeModal');
    
    // Function to open modal (will be called from CTA card)
    window.openConsultationModal = function() {
        if (consultationModal) {
            consultationModal.classList.remove('hidden');
            consultationModal.classList.add('flex');
        }
    }
    
    // Close modal events
    if (closeModal) {
        closeModal.addEventListener('click', () => {
            if (consultationModal) {
                consultationModal.classList.add('hidden');
                consultationModal.classList.remove('flex');
            }
        });
    }
    
    if (consultationModal) {
        consultationModal.addEventListener('click', (e) => {
            if (e.target === consultationModal) {
                consultationModal.classList.add('hidden');
                consultationModal.classList.remove('flex');
            }
        });
    }
    
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 80,
                    behavior: 'smooth'
                });
                // Close mobile menu if open
                if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
                    mobileMenu.classList.add('hidden');
                }
            }
        });
    });
    
    // Service card hover effects
    document.querySelectorAll('.service-card').forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.classList.add('shadow-xl', 'transform', '-translate-y-1');
        });
        
        card.addEventListener('mouseleave', function() {
            this.classList.remove('shadow-xl', 'transform', '-translate-y-1');
        });
    });
    
    // Success card flag animation
    document.querySelectorAll('.success-card').forEach(card => {
        const flag = card.querySelector('.flag');
        if (flag) {
            card.addEventListener('mouseenter', function() {
                flag.classList.remove('opacity-50');
                flag.classList.add('opacity-100', 'scale-110');
            });
            
            card.addEventListener('mouseleave', function() {
                flag.classList.add('opacity-50');
                flag.classList.remove('opacity-100', 'scale-110');
            });
        }
    });
    
    // Counter animation for stats
    const counters = document.querySelectorAll('.counter');
    counters.forEach(counter => {
        const target = parseInt(counter.getAttribute('data-target'));
        const increment = target / 100;
        let current = 0;
        
        const updateCounter = () => {
            if (current < target) {
                current += increment;
                counter.innerText = Math.ceil(current);
                setTimeout(updateCounter, 20);
            } else {
                counter.innerText = target;
            }
        };
        
        // Start counter when element is in viewport
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    updateCounter();
                    observer.unobserve(entry.target);
                }
            });
        });
        
        observer.observe(counter);
    });
});