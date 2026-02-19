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
                class="group bg-white text-gray-900 px-8 py-4 rounded-xl font-semibold text-lg transition duration-300 shadow-lg hover:shadow-xl hover:-translate-y-1 inline-flex items-center justify-center border border-gray-100">
                <i class="fas fa-search mr-3 text-blue-500 group-hover:scale-110 transition"></i>
                Check Visa Eligibility
            </a>

            <a href="https://wa.me/6282128595335"
                class="group bg-gradient-to-r from-green-500 to-emerald-600 text-white px-8 py-4 rounded-xl font-semibold text-lg transition duration-300 shadow-lg hover:shadow-xl hover:-translate-y-1 inline-flex items-center justify-center">
                <i class="fab fa-whatsapp mr-3 group-hover:scale-110 transition"></i>
                WhatsApp Consultation
            </a>

            <a href="javascript:void(0)" onclick="openModal()"
                class="group bg-gradient-to-r from-blue-600 to-emerald-600 text-yellow-400 px-8 py-4 rounded-xl font-semibold text-lg transition duration-300 shadow-lg hover:shadow-xl hover:-translate-y-1 inline-flex items-center justify-center">
                <i class="fas fa-star mr-3 text-yellow-400 group-hover:scale-110 transition"></i>
                Success Stories
            </a>
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
                                <select id="destinationCountry" class="w-full p-3 border border-gray-300 dark:border-gray-600 rounded-lg bg-transparent focus:ring-2 focus:ring-blue-500 focus:border-transparent transition appearance-none">
                                    <option value="">Select Country</option>
                                    <option value="all">All Country</option>
                                    <option value="AF">🇦🇫 Afghanistan</option>
                                    <option value="AL">🇦🇱 Albania</option>
                                    <option value="DZ">🇩🇿 Algeria</option>
                                    <option value="AD">🇦🇩 Andorra</option>
                                    <option value="AO">🇦🇴 Angola</option>
                                    <option value="AG">🇦🇬 Antigua and Barbuda</option>
                                    <option value="AR">🇦🇷 Argentina</option>
                                    <option value="AM">🇦🇲 Armenia</option>
                                    <option value="AU">🇦🇺 Australia</option>
                                    <option value="AT">🇦🇹 Austria</option>
                                    <option value="AZ">🇦🇿 Azerbaijan</option>
                                    <option value="BS">🇧🇸 Bahamas</option>
                                    <option value="BH">🇧🇭 Bahrain</option>
                                    <option value="BD">🇧🇩 Bangladesh</option>
                                    <option value="BB">🇧🇧 Barbados</option>
                                    <option value="BY">🇧🇾 Belarus</option>
                                    <option value="BE">🇧🇪 Belgium</option>
                                    <option value="BZ">🇧🇿 Belize</option>
                                    <option value="BJ">🇧🇯 Benin</option>
                                    <option value="BT">🇧🇹 Bhutan</option>
                                    <option value="BO">🇧🇴 Bolivia</option>
                                    <option value="BA">🇧🇦 Bosnia and Herzegovina</option>
                                    <option value="BW">🇧🇼 Botswana</option>
                                    <option value="BR">🇧🇷 Brazil</option>
                                    <option value="BN">🇧🇳 Brunei</option>
                                    <option value="BG">🇧🇬 Bulgaria</option>
                                    <option value="BF">🇧🇫 Burkina Faso</option>
                                    <option value="BI">🇧🇮 Burundi</option>
                                    <option value="CV">🇨🇻 Cape Verde</option>
                                    <option value="KH">🇰🇭 Cambodia</option>
                                    <option value="CM">🇨🇲 Cameroon</option>
                                    <option value="CA">🇨🇦 Canada</option>
                                    <option value="CF">🇨🇫 Central African Republic</option>
                                    <option value="TD">🇹🇩 Chad</option>
                                    <option value="CL">🇨🇱 Chile</option>
                                    <option value="CN">🇨🇳 China</option>
                                    <option value="CO">🇨🇴 Colombia</option>
                                    <option value="KM">🇰🇲 Comoros</option>
                                    <option value="CG">🇨🇬 Congo - Brazzaville</option>
                                    <option value="CD">🇨🇩 Congo - Kinshasa</option>
                                    <option value="CR">🇨🇷 Costa Rica</option>
                                    <option value="CI">🇨🇮 Côte d’Ivoire</option>
                                    <option value="HR">🇭🇷 Croatia</option>
                                    <option value="CU">🇨🇺 Cuba</option>
                                    <option value="CY">🇨🇾 Cyprus</option>
                                    <option value="CZ">🇨🇿 Czechia</option>
                                    <option value="DK">🇩🇰 Denmark</option>
                                    <option value="DJ">🇩🇯 Djibouti</option>
                                    <option value="DM">🇩🇲 Dominica</option>
                                    <option value="DO">🇩🇴 Dominican Republic</option>
                                    <option value="EC">🇪🇨 Ecuador</option>
                                    <option value="EG">🇪🇬 Egypt</option>
                                    <option value="SV">🇸🇻 El Salvador</option>
                                    <option value="GQ">🇬🇶 Equatorial Guinea</option>
                                    <option value="ER">🇪🇷 Eritrea</option>
                                    <option value="EE">🇪🇪 Estonia</option>
                                    <option value="SZ">🇸🇿 Eswatini</option>
                                    <option value="ET">🇪🇹 Ethiopia</option>
                                    <option value="FJ">🇫🇯 Fiji</option>
                                    <option value="FI">🇫🇮 Finland</option>
                                    <option value="FR">🇫🇷 France</option>
                                    <option value="GA">🇬🇦 Gabon</option>
                                    <option value="GM">🇬🇲 Gambia</option>
                                    <option value="GE">🇬🇪 Georgia</option>
                                    <option value="DE">🇩🇪 Germany</option>
                                    <option value="GH">🇬🇭 Ghana</option>
                                    <option value="GR">🇬🇷 Greece</option>
                                    <option value="GD">🇬🇩 Grenada</option>
                                    <option value="GT">🇬🇹 Guatemala</option>
                                    <option value="GN">🇬🇳 Guinea</option>
                                    <option value="GW">🇬🇼 Guinea-Bissau</option>
                                    <option value="GY">🇬🇾 Guyana</option>
                                    <option value="HT">🇭🇹 Haiti</option>
                                    <option value="HN">🇭🇳 Honduras</option>
                                    <option value="HU">🇭🇺 Hungary</option>
                                    <option value="IS">🇮🇸 Iceland</option>
                                    <option value="IN">🇮🇳 India</option>
                                    <option value="ID">🇮🇩 Indonesia</option>
                                    <option value="IR">🇮🇷 Iran</option>
                                    <option value="IQ">🇮🇶 Iraq</option>
                                    <option value="IE">🇮🇪 Ireland</option>
                                    <option value="IL">🇮🇱 Israel</option>
                                    <option value="IT">🇮🇹 Italy</option>
                                    <option value="JM">🇯🇲 Jamaica</option>
                                    <option value="JP">🇯🇵 Japan</option>
                                    <option value="JO">🇯🇴 Jordan</option>
                                    <option value="KZ">🇰🇿 Kazakhstan</option>
                                    <option value="KE">🇰🇪 Kenya</option>
                                    <option value="KI">🇰🇮 Kiribati</option>
                                    <option value="KP">🇰🇵 North Korea</option>
                                    <option value="KR">🇰🇷 South Korea</option>
                                    <option value="KW">🇰🇼 Kuwait</option>
                                    <option value="KG">🇰🇬 Kyrgyzstan</option>
                                    <option value="LA">🇱🇦 Laos</option>
                                    <option value="LV">🇱🇻 Latvia</option>
                                    <option value="LB">🇱🇧 Lebanon</option>
                                    <option value="LS">🇱🇸 Lesotho</option>
                                    <option value="LR">🇱🇷 Liberia</option>
                                    <option value="LY">🇱🇾 Libya</option>
                                    <option value="LI">🇱🇮 Liechtenstein</option>
                                    <option value="LT">🇱🇹 Lithuania</option>
                                    <option value="LU">🇱🇺 Luxembourg</option>
                                    <option value="MG">🇲🇬 Madagascar</option>
                                    <option value="MW">🇲🇼 Malawi</option>
                                    <option value="MY">🇲🇾 Malaysia</option>
                                    <option value="MV">🇲🇻 Maldives</option>
                                    <option value="ML">🇲🇱 Mali</option>
                                    <option value="MT">🇲🇹 Malta</option>
                                    <option value="MH">🇲🇭 Marshall Islands</option>
                                    <option value="MR">🇲🇷 Mauritania</option>
                                    <option value="MU">🇲🇺 Mauritius</option>
                                    <option value="MX">🇲🇽 Mexico</option>
                                    <option value="FM">🇫🇲 Micronesia</option>
                                    <option value="MD">🇲🇩 Moldova</option>
                                    <option value="MC">🇲🇨 Monaco</option>
                                    <option value="MN">🇲🇳 Mongolia</option>
                                    <option value="ME">🇲🇪 Montenegro</option>
                                    <option value="MA">🇲🇦 Morocco</option>
                                    <option value="MZ">🇲🇿 Mozambique</option>
                                    <option value="MM">🇲🇲 Myanmar</option>
                                    <option value="NA">🇳🇦 Namibia</option>
                                    <option value="NR">🇳🇷 Nauru</option>
                                    <option value="NP">🇳🇵 Nepal</option>
                                    <option value="NL">🇳🇱 Netherlands</option>
                                    <option value="NZ">🇳🇿 New Zealand</option>
                                    <option value="NI">🇳🇮 Nicaragua</option>
                                    <option value="NE">🇳🇪 Niger</option>
                                    <option value="NG">🇳🇬 Nigeria</option>
                                    <option value="MK">🇲🇰 North Macedonia</option>
                                    <option value="NO">🇳🇴 Norway</option>
                                    <option value="OM">🇴🇲 Oman</option>
                                    <option value="PK">🇵🇰 Pakistan</option>
                                    <option value="PW">🇵🇼 Palau</option>
                                    <option value="PA">🇵🇦 Panama</option>
                                    <option value="PG">🇵🇬 Papua New Guinea</option>
                                    <option value="PY">🇵🇾 Paraguay</option>
                                    <option value="PE">🇵🇪 Peru</option>
                                    <option value="PH">🇵🇭 Philippines</option>
                                    <option value="PL">🇵🇱 Poland</option>
                                    <option value="PT">🇵🇹 Portugal</option>
                                    <option value="QA">🇶🇦 Qatar</option>
                                    <option value="RO">🇷🇴 Romania</option>
                                    <option value="RU">🇷🇺 Russia</option>
                                    <option value="RW">🇷🇼 Rwanda</option>
                                    <option value="KN">🇰🇳 Saint Kitts and Nevis</option>
                                    <option value="LC">🇱🇨 Saint Lucia</option>
                                    <option value="VC">🇻🇨 Saint Vincent and the Grenadines</option>
                                    <option value="WS">🇼🇸 Samoa</option>
                                    <option value="SM">🇸🇲 San Marino</option>
                                    <option value="ST">🇸🇹 São Tomé and Príncipe</option>
                                    <option value="SA">🇸🇦 Saudi Arabia</option>
                                    <option value="SN">🇸🇳 Senegal</option>
                                    <option value="SO">🇸🇴 Somalia</option>
                                    <option value="SR">🇸🇷 Suriname</option>
                                    <option value="SS">🇸🇸 South Sudan</option>
                                    <option value="ST">🇸🇹 São Tomé and Príncipe</option>
                                    <option value="SV">🇸🇻 El Salvador</option>
                                    <option value="SX">🇸🇽 Sint Maarten (Dutch part)</option>
                                    <option value="SY">🇸🇾 Syrian Arab Republic</option>
                                    <option value="SZ">🇸🇿 Eswatini</option>
                                    <option value="TC">🇹🇨 Turks and Caicos Islands</option>
                                    <option value="TD">🇹🇩 Chad</option>
                                    <option value="TF">🇹🇫 French Southern Territories</option>
                                    <option value="TG">🇹🇬 Togo</option>
                                    <option value="TH">🇹🇭 Thailand</option>
                                    <option value="TJ">🇹🇯 Tajikistan</option>
                                    <option value="TK">🇹🇰 Tokelau</option>
                                    <option value="TL">🇹🇱 Timor-Leste</option>
                                    <option value="TM">🇹🇲 Turkmenistan</option>
                                    <option value="TN">🇹🇳 Tunisia</option>
                                    <option value="TO">🇹🇴 Tonga</option>
                                    <option value="TR">🇹🇷 Türkiye</option>
                                    <option value="TT">🇹🇹 Trinidad and Tobago</option>
                                    <option value="TV">🇹🇻 Tuvalu</option>
                                    <option value="TW">🇹🇼 Taiwan</option>
                                    <option value="TZ">🇹🇿 Tanzania</option>
                                    <option value="UA">🇺🇦 Ukraine</option>
                                    <option value="UG">🇺🇬 Uganda</option>
                                    <option value="UM">🇺🇲 U.S. Minor Outlying Islands</option>
                                    <option value="US">🇺🇸 United States</option>
                                    <option value="UY">🇺🇾 Uruguay</option>
                                    <option value="UZ">🇺🇿 Uzbekistan</option>
                                    <option value="VA">🇻🇦 Holy See</option>
                                    <option value="VC">🇻🇨 Saint Vincent and the Grenadines</option>
                                    <option value="VE">🇻🇪 Venezuela</option>
                                    <option value="VG">🇻🇬 British Virgin Islands</option>
                                    <option value="VI">🇻🇮 U.S. Virgin Islands</option>
                                    <option value="VN">🇻🇳 Vietnam</option>
                                    <option value="VU">🇻🇺 Vanuatu</option>
                                    <option value="WF">🇼🇫 Wallis and Futuna</option>
                                    <option value="WS">🇼🇸 Samoa</option>
                                    <option value="YE">🇾🇪 Yemen</option>
                                    <option value="YT">🇾🇹 Mayotte</option>
                                    <option value="ZA">🇿🇦 South Africa</option>
                                    <option value="ZM">🇿🇲 Zambia</option>
                                    <option value="ZW">🇿🇼 Zimbabwe</option>
                                </select>
                            </div>
                            
                            <div>
                                <label class="block text-gray-700 dark:text-gray-300 mb-2 font-medium">
                                    <i class="fas fa-briefcase mr-2 text-blue-500"></i>Visa Purpose
                                </label>
                                <select id="visaPurpose" class="w-full p-3 border border-gray-300 dark:border-gray-600 rounded-lg bg-transparent focus:ring-2 focus:ring-blue-500 focus:border-transparent transition">
                                    <option value="">Select Purpose</option>
                                    <option value="study">🎓 Study</option>
                                    <option value="work">💼 Work</option>
                                    <option value="business">🏢 Business</option>
                                    <option value="tourism">✈️ Visit/Tourism</option>
                                    <option value="investment">💰 Investment</option>
                                    <option value="family">👨‍👩‍👧‍👦 Family</option>
                                </select>
                            </div>
                            
                            <div>
                                <label class="block text-gray-700 dark:text-gray-300 mb-2 font-medium">
                                    <i class="fas fa-passport mr-2 text-blue-500"></i>Your Nationality
                                </label>
                                <select id="nationality" class="w-full p-3 border border-gray-300 dark:border-gray-600 rounded-lg bg-transparent focus:ring-2 focus:ring-blue-500 focus:border-transparent transition">
                                    <option value="">Select Nationality</option>
                                    <!-- Options akan diisi oleh JavaScript berdasarkan visa purpose -->
                                </select>
                            </div>
                        </div>
                    </form>
                </div>

                <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const visaPurposeSelect = document.getElementById('visaPurpose');
                    const nationalitySelect = document.getElementById('nationality');
                    
                    // Data negara berdasarkan kategori
                    const allCountries = [
                    {value: 'all', label: 'All Country', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'afghanistan', label: '🇦🇫 Afghanistan', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'albania', label: '🇦🇱 Albania', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'algeria', label: '🇩🇿 Algeria', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'andorra', label: '🇦🇩 Andorra', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'angola', label: '🇦🇴 Angola', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'antigua and barbuda', label: '🇦🇬 Antigua and Barbuda', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'argentina', label: '🇦🇷 Argentina', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'armenia', label: '🇦🇲 Armenia', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'australia', label: '🇦🇺 Australia', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'austria', label: '🇦🇹 Austria', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'azerbaijan', label: '🇦🇿 Azerbaijan', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'bahamas', label: '🇧🇸 Bahamas', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'bahrain', label: '🇧🇭 Bahrain', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'bangladesh', label: '🇧🇩 Bangladesh', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'barbados', label: '🇧🇧 Barbados', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'belarus', label: '🇧🇾 Belarus', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'belgium', label: '🇧🇪 Belgium', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'belize', label: '🇧🇿 Belize', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'benin', label: '🇧🇯 Benin', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'bhutan', label: '🇧🇹 Bhutan', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'bolivia', label: '🇧🇴 Bolivia', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'bosnia and herzegovina', label: '🇧🇦 Bosnia and Herzegovina', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'botswana', label: '🇧🇼 Botswana', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'brazil', label: '🇧🇷 Brazil', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'brunei', label: '🇧🇳 Brunei', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'bulgaria', label: '🇧🇬 Bulgaria', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'burkina faso', label: '🇧🇫 Burkina Faso', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'burundi', label: '🇧🇮 Burundi', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'cape verde', label: '🇨🇻 Cape Verde', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'cambodia', label: '🇰🇭 Cambodia', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'cameroon', label: '🇨🇲 Cameroon', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'canada', label: '🇨🇦 Canada', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'central african republic', label: '🇨🇫 Central African Republic', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'chad', label: '🇹🇩 Chad', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'chile', label: '🇨🇱 Chile', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'china', label: '🇨🇳 China', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'colombia', label: '🇨🇴 Colombia', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'comoros', label: '🇰🇲 Comoros', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'congo - brazzaville', label: '🇨🇬 Congo - Brazzaville', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'congo - kinshasa', label: '🇨🇩 Congo - Kinshasa', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'costa rica', label: '🇨🇷 Costa Rica', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'côte d’ivoire', label: '🇨🇮 Côte d’Ivoire', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'croatia', label: '🇭🇷 Croatia', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'cuba', label: '🇨🇺 Cuba', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'cyprus', label: '🇨🇾 Cyprus', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'czechia', label: '🇨🇿 Czechia', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'denmark', label: '🇩🇰 Denmark', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'djibouti', label: '🇩🇯 Djibouti', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'dominica', label: '🇩🇲 Dominica', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'dominican republic', label: '🇩🇴 Dominican Republic', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'ecuador', label: '🇪🇨 Ecuador', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'egypt', label: '🇪🇬 Egypt', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'el salvador', label: '🇸🇻 El Salvador', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'equatorial guinea', label: '🇬🇶 Equatorial Guinea', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'eritrea', label: '🇪🇷 Eritrea', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'estonia', label: '🇪🇪 Estonia', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'eswatini', label: '🇸🇿 Eswatini', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'ethiopia', label: '🇪🇹 Ethiopia', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'fiji', label: '🇫🇯 Fiji', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'finland', label: '🇫🇮 Finland', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'france', label: '🇫🇷 France', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'gabon', label: '🇬🇦 Gabon', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'gambia', label: '🇬🇲 Gambia', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'georgia', label: '🇬🇪 Georgia', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'germany', label: '🇩🇪 Germany', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'ghana', label: '🇬🇭 Ghana', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'greece', label: '🇬🇷 Greece', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'grenada', label: '🇬🇩 Grenada', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'guatemala', label: '🇬🇹 Guatemala', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'guinea', label: '🇬🇳 Guinea', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'guinea-bissau', label: '🇬🇼 Guinea-Bissau', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'guyana', label: '🇬🇾 Guyana', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'haiti', label: '🇭🇹 Haiti', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'honduras', label: '🇭🇳 Honduras', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'hungary', label: '🇭🇺 Hungary', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'iceland', label: '🇮🇸 Iceland', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'india', label: '🇮🇳 India', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'indonesia', label: '🇮🇩 Indonesia', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'iran', label: '🇮🇷 Iran', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'iraq', label: '🇮🇶 Iraq', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'ireland', label: '🇮🇪 Ireland', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'israel', label: '🇮🇱 Israel', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'italy', label: '🇮🇹 Italy', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'jamaica', label: '🇯🇲 Jamaica', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'japan', label: '🇯🇵 Japan', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'jordan', label: '🇯🇴 Jordan', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'kazakhstan', label: '🇰🇿 Kazakhstan', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'kenya', label: '🇰🇪 Kenya', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'kiribati', label: '🇰🇮 Kiribati', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'north korea', label: '🇰🇵 North Korea', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'south korea', label: '🇰🇷 South Korea', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'kuwait', label: '🇰🇼 Kuwait', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'kyrgyzstan', label: '🇰🇬 Kyrgyzstan', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'laos', label: '🇱🇦 Laos', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'latvia', label: '🇱🇻 Latvia', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'lebanon', label: '🇱🇧 Lebanon', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'lesotho', label: '🇱🇸 Lesotho', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'liberia', label: '🇱🇷 Liberia', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'libya', label: '🇱🇾 Libya', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'liechtenstein', label: '🇱🇮 Liechtenstein', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'lithuania', label: '🇱🇹 Lithuania', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'luxembourg', label: '🇱🇺 Luxembourg', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'madagascar', label: '🇲🇬 Madagascar', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'malawi', label: '🇲🇼 Malawi', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'malaysia', label: '🇲🇾 Malaysia', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'maldives', label: '🇲🇻 Maldives', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'mali', label: '🇲🇱 Mali', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'malta', label: '🇲🇹 Malta', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'marshall islands', label: '🇲🇭 Marshall Islands', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'mauritania', label: '🇲🇷 Mauritania', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'mauritius', label: '🇲🇺 Mauritius', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'mexico', label: '🇲🇽 Mexico', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'micronesia', label: '🇫🇲 Micronesia', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'moldova', label: '🇲🇩 Moldova', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'monaco', label: '🇲🇨 Monaco', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'mongolia', label: '🇲🇳 Mongolia', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'montenegro', label: '🇲🇪 Montenegro', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'morocco', label: '🇲🇦 Morocco', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'mozambique', label: '🇲🇿 Mozambique', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'myanmar', label: '🇲🇲 Myanmar', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'namibia', label: '🇳🇦 Namibia', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'nauru', label: '🇳🇷 Nauru', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'nepal', label: '🇳🇵 Nepal', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'netherlands', label: '🇳🇱 Netherlands', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'new zealand', label: '🇳🇿 New Zealand', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'nicaragua', label: '🇳🇮 Nicaragua', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'niger', label: '🇳🇪 Niger', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'nigeria', label: '🇳🇬 Nigeria', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'north macedonia', label: '🇲🇰 North Macedonia', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'norway', label: '🇳🇴 Norway', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'oman', label: '🇴🇲 Oman', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'pakistan', label: '🇵🇰 Pakistan', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'palau', label: '🇵🇼 Palau', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'panama', label: '🇵🇦 Panama', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'papua new guinea', label: '🇵🇬 Papua New Guinea', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'paraguay', label: '🇵🇾 Paraguay', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'peru', label: '🇵🇪 Peru', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'philippines', label: '🇵🇭 Philippines', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'poland', label: '🇵🇱 Poland', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'portugal', label: '🇵🇹 Portugal', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'qatar', label: '🇶🇦 Qatar', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'romania', label: '🇷🇴 Romania', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'russia', label: '🇷🇺 Russia', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'rwanda', label: '🇷🇼 Rwanda', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'saint kitts and nevis', label: '🇰🇳 Saint Kitts and Nevis', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'saint lucia', label: '🇱🇨 Saint Lucia', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'saint vincent and the grenadines', label: '🇻🇨 Saint Vincent and the Grenadines', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'samoa', label: '🇼🇸 Samoa', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'san marino', label: '🇸🇲 San Marino', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'são tomé and príncipe', label: '🇸🇹 São Tomé and Príncipe', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'saudi arabia', label: '🇸🇦 Saudi Arabia', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'senegal', label: '🇸🇳 Senegal', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'somalia', label: '🇸🇴 Somalia', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'suriname', label: '🇸🇷 Suriname', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'south sudan', label: '🇸🇸 South Sudan', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'são tomé and príncipe', label: '🇸🇹 São Tomé and Príncipe', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}}, 
                    {value: 'el salvador', label: '🇸🇻 El Salvador', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}}, 
                    {value: 'sint maarten (dutch part)', label: '🇸🇽 Sint Maarten (Dutch part)', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'syrian arab republic', label: '🇸🇾 Syrian Arab Republic', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'eswatini', label: '🇸🇿 Eswatini', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'turks and caicos islands', label: '🇹🇨 Turks and Caicos Islands', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'chad', label: '🇹🇩 Chad', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}}, 
                    {value: 'french southern territories', label: '🇹🇫 French Southern Territories', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'togo', label: '🇹🇬 Togo', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'thailand', label: '🇹🇭 Thailand', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'tajikistan', label: '🇹🇯 Tajikistan', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'tokelau', label: '🇹🇰 Tokelau', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'timor-leste', label: '🇹🇱 Timor-Leste', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'turkmenistan', label: '🇹🇲 Turkmenistan', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'tunisia', label: '🇹🇳 Tunisia', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'tonga', label: '🇹🇴 Tonga', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'türkiye', label: '🇹🇷 Türkiye', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'trinidad and tobago', label: '🇹🇹 Trinidad and Tobago', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'tuvalu', label: '🇹🇻 Tuvalu', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'taiwan', label: '🇹🇼 Taiwan', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'tanzania', label: '🇹🇿 Tanzania', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'ukraine', label: '🇺🇦 Ukraine', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'uganda', label: '🇺🇬 Uganda', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'u.s. minor outlying islands', label: '🇺🇲 U.S. Minor Outlying Islands', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'united states', label: '🇺🇸 United States', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'uruguay', label: '🇺🇾 Uruguay', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'uzbekistan', label: '🇺🇿 Uzbekistan', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'holy see', label: '🇻🇦 Holy See', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'saint vincent and the grenadines', label: '🇻🇨 Saint Vincent and the Grenadines', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}}, 
                    {value: 'venezuela', label: '🇻🇪 Venezuela', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'british virgin islands', label: '🇻🇬 British Virgin Islands', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'u.s. virgin islands', label: '🇻🇮 U.S. Virgin Islands', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'vietnam', label: '🇻🇳 Vietnam', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'vanuatu', label: '🇻🇺 Vanuatu', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'wallis and futuna', label: '🇼🇫 Wallis and Futuna', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'samoa', label: '🇼🇸 Samoa', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}}, 
                    {value: 'yemen', label: '🇾🇪 Yemen', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'mayotte', label: '🇾🇹 Mayotte', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'south africa', label: '🇿🇦 South Africa', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'zambia', label: '🇿🇲 Zambia', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}},
                    {value: 'zimbabwe', label: '🇿🇼 Zimbabwe', flags: {study: true, work: true, business: true, tourism: true, investment: true, family: true}}
                    ];

                    // Fungsi untuk mengisi dropdown nationality berdasarkan purpose
                    function updateNationalityOptions() {
                        const purpose = visaPurposeSelect.value;
                        nationalitySelect.innerHTML = '<option value="">Select Nationality</option>';
                        
                        if (!purpose) return;
                        
                        let filteredCountries;
                        
                        if (purpose === 'study') {
                            // Study: hanya India, Nepal, Bangladesh, Indonesia
                            filteredCountries = allCountries.filter(country => 
                                ['india', 'nepal', 'bangladesh', 'indonesia'].includes(country.value)
                            );
                        } else if (purpose === 'work') {
                            // Work: India, Nepal, Bangladesh, China, Pakistan, Indonesia
                            filteredCountries = allCountries.filter(country => 
                                ['india', 'nepal', 'bangladesh', 'china', 'pakistan', 'indonesia'].includes(country.value)
                            );
                        } else {
                            // Business, Tourism, Investment, Family: All Countrys
                            filteredCountries = allCountries;
                        }
                        
                        // Tambahkan opsi ke dropdown
                        filteredCountries.forEach(country => {
                            const option = document.createElement('option');
                            option.value = country.value;
                            option.textContent = country.label;
                            nationalitySelect.appendChild(option);
                        });
                    }
                    
                    // Event listener untuk perubahan visa purpose
                    visaPurposeSelect.addEventListener('change', updateNationalityOptions);
                    
                    // Inisialisasi awal
                    updateNationalityOptions();
                });
                </script>
                    
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
                    @php
                        $whatsappNumber = '6282128595335'; // Ganti dengan nomor WhatsApp Anda
                        $whatsappMessage = 'Halo, saya tertarik dengan layanan visa Anda: ';
                    @endphp
                    
                    @foreach([
                        ['icon' => 'graduation-cap', 'title' => 'Study Visa', 'desc' => 'Pursue education at top universities worldwide', 'color' => 'blue'],
                        ['icon' => 'briefcase', 'title' => 'Work Visa', 'desc' => 'Secure international employment opportunities', 'color' => 'green'],
                        ['icon' => 'plane', 'title' => 'Visit Visa', 'desc' => 'Travel for tourism, business visits, or family', 'color' => 'purple'],
                        ['icon' => 'chart-line', 'title' => 'Business Visa', 'desc' => 'Expand your business operations globally', 'color' => 'yellow'],
                        ['icon' => 'handshake', 'title' => 'Investment Visa', 'desc' => 'Invest or start business overseas', 'color' => 'red']
                    ] as $service)
                    <a 
                        href="https://wa.me/{{ $whatsappNumber }}?text={{ urlencode($whatsappMessage . $service['title'] . ' - ' . $service['desc']) }}" 
                        target="_blank"
                        rel="noopener noreferrer"
                        class="service-card group p-5 rounded-xl border border-gray-200 dark:border-gray-700 hover:border-{{ $service['color'] }}-300 dark:hover:border-{{ $service['color'] }}-500 transition duration-300 cursor-pointer hover-lift block hover:no-underline"
                    >
                        <div class="flex items-center">
                            <div class="flex-shrink-0 w-12 h-12 rounded-lg bg-{{ $service['color'] }}-100 dark:bg-{{ $service['color'] }}-900/20 flex items-center justify-center mr-4 group-hover:scale-110 transition">
                                <i class="fas fa-{{ $service['icon'] }} text-{{ $service['color'] }}-600 dark:text-{{ $service['color'] }}-400 text-lg"></i>
                            </div>
                            <div class="flex-grow">
                                <h4 class="font-bold text-lg mb-1 text-gray-800 dark:text-white">{{ $service['title'] }}</h4>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">{{ $service['desc'] }}</p>
                            </div>
                            <div class="opacity-0 group-hover:opacity-100 transition">
                                <i class="fas fa-arrow-right text-gray-400"></i>
                            </div>
                        </div>
                    </a>
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
                    @php
                        // Gunakan variabel yang sama atau buat berbeda
                        $whatsappNumber = '6282128595335'; // Ganti dengan nomor WhatsApp Anda
                        $whatsappMessage = 'Halo, saya tertarik dengan layanan visa Indonesia Anda: ';
                    @endphp
                    
                    @foreach([
                        ['icon' => 'plane', 'title' => 'Visit Visa', 'desc' => 'Short-term visits for tourism or business', 'color' => 'blue'],
                        ['icon' => 'id-card', 'title' => 'KITAS (1 Year)', 'desc' => 'Temporary stay permit for 1 year', 'color' => 'green'],
                        ['icon' => 'money-bill-wave', 'title' => 'Investment KITAS (2 Years)', 'desc' => 'Long-term stay for investors', 'color' => 'yellow'],
                        ['icon' => 'id-card', 'title' => 'Business KITAS (1 Year)', 'desc' => 'For business professionals and directors', 'color' => 'purple'],
                        ['icon' => 'building', 'title' => 'Business Setup', 'desc' => 'Complete company establishment service', 'color' => 'red'],
                        ['icon' => 'file-contract', 'title' => 'C1 Visa', 'desc' => 'For foreign experts and consultants', 'color' => 'indigo'],
                        ['icon' => 'file-alt', 'title' => 'D12 Visa', 'desc' => 'For foreign workers and professionals', 'color' => 'pink']
                    ] as $service)
                    <a 
                        href="https://wa.me/{{ $whatsappNumber }}?text={{ urlencode($whatsappMessage . $service['title'] . ' - ' . $service['desc']) }}" 
                        target="_blank"
                        rel="noopener noreferrer"
                        class="service-card group p-5 rounded-xl border border-gray-200 dark:border-gray-700 hover:border-{{ $service['color'] }}-300 dark:hover:border-{{ $service['color'] }}-500 transition duration-300 cursor-pointer hover-lift block hover:no-underline"
                    >
                        <div class="flex items-center">
                            <div class="flex-shrink-0 w-12 h-12 rounded-lg bg-{{ $service['color'] }}-100 dark:bg-{{ $service['color'] }}-900/20 flex items-center justify-center mr-4 group-hover:scale-110 transition">
                                <i class="fas fa-{{ $service['icon'] }} text-{{ $service['color'] }}-600 dark:text-{{ $service['color'] }}-400 text-lg"></i>
                            </div>
                            <div class="flex-grow">
                                <h4 class="font-bold text-lg mb-1 text-gray-800 dark:text-white">{{ $service['title'] }}</h4>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">{{ $service['desc'] }}</p>
                            </div>
                            <div class="opacity-0 group-hover:opacity-100 transition">
                                <i class="fas fa-arrow-right text-gray-400"></i>
                            </div>
                        </div>
                    </a>
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
                ['country' => 'Canada', 'type' => 'Visit Visa', 'time' => '21 Days', 'flag' => '🇨🇦', 'client' => 'Rina S.', 'icon' => 'plane', 'color' => 'blue'],
                ['country' => 'Australia', 'type' => 'Visit Visa', 'time' => '14 Days', 'flag' => '🇦🇺', 'client' => 'Ahmad R.', 'icon' => 'plane', 'color' => 'green'],
                ['country' => 'Germany', 'type' => 'Work Visa', 'time' => '30 Days', 'flag' => '🇩🇪', 'client' => 'David L.', 'icon' => 'briefcase', 'color' => 'yellow'],
                ['country' => 'Singapore', 'type' => 'Study Visa', 'time' => '10 Days', 'flag' => '🇸🇬', 'client' => 'Priya K.', 'icon' => 'graduation-cap', 'color' => 'purple']
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
            <a href="javascript:void(0)" onclick="openModal()" 
            class="inline-flex items-center text-blue-600 dark:text-blue-400 font-medium hover:text-blue-800 dark:hover:text-blue-300 group">
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
                        <div class="text-3xl font-bold text-blue-600 dark:text-blue-400 mb-2">$5000</div>
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
                        <p class="text-gray-600 dark:text-gray-400 mb-4">Based on the country, profile job and salary</p>
                        <div class="text-3xl font-bold text-green-600 dark:text-green-400 mb-2">$6,500 to $9,800</div>
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
                        <div class="text-3xl font-bold text-purple-600 dark:text-purple-400 mb-2">$10,000 to $16,000</div>
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
                <a href="tel:+6282128595335" class="inline-block text-blue-600 dark:text-blue-400 font-medium hover:text-blue-800 dark:hover:text-blue-300">
                    +62 821-2859-5335
                </a>
            </div>

            <!-- Card 2: WhatsApp -->
            <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl border border-gray-200 dark:border-gray-700 text-center hover-lift group">
                <div class="w-16 h-16 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition">
                    <i class="fab fa-whatsapp text-green-600 dark:text-green-400 text-2xl"></i>
                </div>
                <h4 class="font-bold text-lg mb-2">WhatsApp</h4>
                <p class="text-gray-600 dark:text-gray-400 text-sm mb-6">Instant messaging support & queries.</p>
                <a href="https://wa.me/6282128595335" class="inline-block bg-green-500 hover:bg-green-600 text-white px-5 py-2 rounded-lg font-medium transition">
                    Message Now
                </a>
            </div>

            <!-- Card 3: Book Appointment (TRIGGERS MODAL) -->
            <div onclick="openConsultationModal()" class="bg-gradient-to-br from-blue-500 to-indigo-600 text-white p-8 rounded-2xl text-center hover-lift cursor-pointer transform hover:-translate-y-2 transition duration-300 group">
                <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition">
                    <i class="fas fa-calendar-check text-2xl"></i>
                </div>
                <h4 class="font-bold text-lg mb-2">Book Appointment</h4>
                <p class="text-blue-100 text-sm mb-6">Schedule a 30-min consultation session.</p>
                <button class="bg-white text-blue-600 hover:bg-gray-100 px-5 py-2 rounded-lg font-medium transition">
                    Book Now
                </button>
            </div>
            <!-- Modal untuk Consultation Booking -->
            <div id="consultationModal" class="fixed inset-0 z-50 hidden overflow-y-auto">
                <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                    <!-- Background overlay -->
                    <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                        <div class="absolute inset-0 bg-gray-500 opacity-75" onclick="closeConsultationModal()"></div>
                    </div>

                    <!-- Modal panel -->
                    <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                        <!-- Modal header -->
                        <div class="bg-gradient-to-r from-blue-600 to-indigo-700 text-white px-6 py-4">
                            <div class="flex justify-between items-center">
                                <h3 class="text-xl font-bold">Book Consultation</h3>
                                <button onclick="closeConsultationModal()" 
                                    class="flex items-center justify-center w-8 h-8 rounded-full bg-blue-600 bg-opacity-20 hover:bg-opacity-30 text-white transition-all duration-200 focus:outline-none">
                                    <span class="text-xl" style="line-height: 0; margin-top: -2px;">&times;</span>
                                </button>
                            </div>
                            <p class="text-blue-100 text-sm mt-1">30 minutes with our visa expert</p>
                        </div>

                        <!-- Form -->
                        <form id="consultationForm" class="px-6 py-4">
                            @csrf
                            
                            <!-- Full Name -->
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-medium mb-2">Full Name *</label>
                                <input type="text" name="name" required 
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            </div>

                            <!-- Email -->
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-medium mb-2">Email Address *</label>
                                <input type="email" name="email" required 
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            </div>

                            <!-- Phone -->
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-medium mb-2">Phone Number</label>
                                <input type="tel" name="phone"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            </div>

                            <!-- Visa Interest -->
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-medium mb-2">Visa Interest</label>
                                <select name="visa_type" required
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                    <option value="">Select a visa type</option>
                                    <option value="Student Visa">Student Visa</option>
                                    <option value="Work Visa">Work Visa</option>
                                    <option value="Tourist Visa">Tourist Visa</option>
                                    <option value="Business Visa">Business Visa</option>
                                </select>
                            </div>

                            <!-- Preferred Date & Time -->
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-medium mb-2">Preferred Date & Time</label>
                                <input type="datetime-local" name="date" required
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            </div>

                            <div class="container py-5">
                                <div class="row g-4 justify-content-center">
                                    
                                    <div class="row g-2 justify-content-center"> <div class="col-6"> <div class="card rounded-3 h-100 border-warning card-selectable position-relative" style="border: 2px solid #ffc107;">
                                        <div class="position-absolute" style="top: 5px; right: 5px; z-index: 5;">
                                            <div class="bg-warning rounded-pill px-2 py-1 shadow-sm">
                                                <span class="text-dark fw-bold d-flex align-items-center" style="font-size: 0.6rem; white-space: nowrap;">
                                                    ★ RECOMMENDED
                                                </span>
                                            </div>
                                        </div>
                                        
                                        <div class="card-body d-flex flex-column justify-content-center align-items-center p-2 text-center">
                                            <h2 class="fw-bold mb-1" style="font-size: 1.8rem; color: #ffc107;">$30</h2>
                                            <h6 class="fw-semibold mb-0" style="font-size: 0.9rem;">Priority Book</h6>
                                            <p class="text-muted mb-0" style="font-size: 0.75rem;">Fastest response</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="card rounded-3 h-100 border-gray-300 card-selectable position-relative" style="border: 1px solid #e0e0e0;">
                                        <div class="position-absolute" style="bottom: 8px; right: 8px;">
                                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 18px; height: 18px;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="white" viewBox="0 0 16 16">
                                                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                                                </svg>
                                            </div>
                                        </div>
                                        
                                        <div class="card-body d-flex flex-column justify-content-center align-items-center p-2 text-center">
                                            <h2 class="fw-bold mb-1" style="font-size: 1.8rem; color: #333;">$15</h2>
                                            <h6 class="fw-semibold mb-0" style="font-size: 0.9rem;">Normal Book</h6>
                                            <p class="text-muted mb-0" style="font-size: 0.75rem;">Standard response</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                                </div>
                            </div>

                            <style>
                            /* Card Styling - Aesthetic */
                            .card {
                                min-height: 160px;
                                max-width: 450px; 
                                margin: 0 auto;
                                transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
                                cursor: pointer;
                                background: white;
                            }

                            /* Border radius yang smooth */
                            .rounded-3 {
                                border-radius: 12px !important;
                            }

                            /* Border colors */
                            .border-gray-300 {
                                border-color: #e0e0e0 !important;
                            }

                            .border-warning {
                                border-color: #ffc107 !important;
                            }

                            /* Recommended badge - minimal dan rapi */
                            .bg-warning {
                                background-color: #ffc107 !important;
                                opacity: 0.95;
                            }

                            /* Checkmark - minimal */
                            .bg-primary {
                                background-color: #0d6efd !important;
                            }

                            /* Hover effects - smooth dan aesthetic */
                            .card-selectable:hover {
                                transform: translateY(-4px);
                                box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1) !important;
                            }

                            /* Active state */
                            .card-selectable.active {
                                border-color: #0d6efd !important;
                                border-width: 2px !important;
                                box-shadow: 0 0 0 4px rgba(13, 110, 253, 0.15) !important;
                            }

                            /* Text styling */
                            h2 {
                                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, sans-serif;
                            }

                            /* Responsive */
                            @media (max-width: 768px) {
                                .card {
                                    min-height: 150px;
                                }
                                
                                h2 {
                                    font-size: 2.2rem !important;
                                }
                            }
                            </style>

                            <script>
                            // Card selection functionality
                            document.querySelectorAll('.card-selectable').forEach(card => {
                                card.addEventListener('click', function() {
                                    // Remove active class from all cards
                                    document.querySelectorAll('.card-selectable').forEach(c => {
                                        c.classList.remove('active');
                                    });
                                    
                                    // Add active class to clicked card
                                    this.classList.add('active');
                                    
                                    // Get selected type
                                    const isPriority = this.classList.contains('border-warning');
                                    console.log(isPriority ? 'Priority Book selected' : 'Normal Book selected');
                                    
                                    // Optional: Add your booking logic here
                                });
                            });
                            </script>

                            <!-- Note -->
                            <div class="mb-4">
                                <div class="alert alert-danger d-flex align-items-center rounded-4 border-0 py-2 px-3" role="alert" style="background-color: #fff5f5; color: #d93025;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-x-fill me-2 flex-shrink-0" viewBox="0 0 16 16">
                                        <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zM6.854 8.146 8 9.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 10l1.147 1.146a.5.5 0 0 1-.708.708L8 10.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 10 6.146 8.854a.5.5 0 1 1 .708-.708z"/>
                                    </svg>
                                    <div style="font-size: 0.85rem; font-weight: 500;">
                                        <span class="fw-bold">Note:</span> We are closed on Saturdays & public holidays.
                                    </div>
                                </div>
                            </div>

                            <!-- Additional Notes -->
                            <div class="mb-6">
                                <label class="block text-gray-700 text-sm font-medium mb-2">Additional Notes (Optional)</label>
                                <textarea name="notes" rows="3"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 resize-none"></textarea>
                            </div>

                            <!-- Submit Button -->
                            <div class="px-4 py-4 bg-gray-50 text-center sm:px-6">
                                <button type="submit"
                                    class="inline-flex justify-center py-2.5 px-10 border border-transparent shadow-md text-sm font-semibold rounded-full text-white bg-blue-600 hover:bg-blue-700 hover:shadow-lg transform hover:-translate-y-0.5 transition-all focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                    Schedule Session
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <script>
            // Modal Functions
            function openConsultationModal() {
                document.getElementById('consultationModal').classList.remove('hidden');
                document.body.classList.add('overflow-hidden');
            }

            function closeConsultationModal() {
                document.getElementById('consultationModal').classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
            }

            // Close modal on ESC key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    closeConsultationModal();
                }
            });

            // Form Submission
            document.getElementById('consultationForm').addEventListener('submit', function(e) {
                e.preventDefault();
                
                const formData = new FormData(this);
                
                // Show loading
                const submitBtn = this.querySelector('button[type="submit"]');
                const originalText = submitBtn.innerHTML;
                submitBtn.innerHTML = '<span>Processing...</span>';
                submitBtn.disabled = true;
                
                // AJAX request
                fetch('{{ route("book.consultation") }}', {
                    method: 'POST',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                    },
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('✅ ' + data.message);
                        closeConsultationModal();
                        this.reset();
                    } else {
                        alert('❌ ' + (data.message || 'Booking failed. Please try again.'));
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('❌ An error occurred. Please try again.');
                })
                .finally(() => {
                    submitBtn.innerHTML = originalText;
                    submitBtn.disabled = false;
                });
            });
            </script>

            <!-- Card 4: Visit Office -->
            <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl border border-gray-200 dark:border-gray-700 text-center hover-lift group">
                <div class="w-16 h-16 bg-red-100 dark:bg-red-900/30 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition">
                    <i class="fas fa-map-marker-alt text-red-600 dark:text-red-400 text-2xl"></i>
                </div>
                <h4 class="font-bold text-lg mb-2">Visit Our Office</h4>
                <p class="text-gray-600 dark:text-gray-400 text-sm mb-6">Meet us in person for detailed discussion.</p>
                
                <a href="https://www.google.com/maps/search/?api=1&query=The+Vinayaka+Cafe+%26+Bar+Kalideres" 
                target="_blank" 
                rel="noopener noreferrer"
                class="inline-flex items-center text-gray-700 dark:text-gray-300 font-medium group-hover:text-blue-600 dark:group-hover:text-blue-400">
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

<!-- Modal for Video Gallery -->
<div id="videoModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/90 backdrop-blur-md p-4">
    <div class="relative w-full max-w-5xl bg-white dark:bg-gray-900 rounded-2xl overflow-hidden shadow-2xl animate-in fade-in zoom-in duration-200">
        <div class="flex items-center justify-between p-6 border-b dark:border-gray-800">
            <h3 class="text-xl font-bold dark:text-white flex items-center">
                <i class="fas fa-folder-open mr-3 text-blue-500"></i> Success Stories
            </h3>
            <button onclick="closeModal()" class="text-gray-400 hover:text-red-500 transition-colors">
                <i class="fas fa-times-circle text-2xl"></i>
            </button>
        </div>

        <div class="p-6">
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6 max-h-[60vh] overflow-y-auto p-2">
                
                <!-- Video Item 1 -->
                <div class="group cursor-pointer flex flex-col items-center" onclick="playVideo('{{ asset('videos/Test1.mp4') }}', 'Russia - Study Visa')">
                    <div class="relative w-full aspect-square bg-gray-100 dark:bg-gray-800 rounded-xl overflow-hidden border-2 border-transparent group-hover:border-blue-500 group-hover:shadow-lg transition-all duration-300">
                        <!-- Video thumbnail with 1:1 aspect ratio -->
                        <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-blue-100 to-emerald-100 dark:from-blue-900/30 dark:to-emerald-900/30">
                            <video class="w-full h-full object-cover" muted playsinline>
                                <source src="{{ asset('videos/Test1.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                        <!-- Play overlay -->
                        <div class="absolute inset-0 flex items-center justify-center bg-black/30 group-hover:bg-black/50 transition-all duration-300">
                            <i class="fas fa-play text-white text-4xl opacity-70 group-hover:opacity-100 group-hover:scale-110 transition-all duration-300"></i>
                        </div>
                        <!-- Success indicator -->
                        <div class="absolute bottom-2 left-2 bg-green-500 text-white rounded-full w-5 h-5 flex items-center justify-center text-[10px] border-2 border-white shadow-sm">
                            <i class="fas fa-check"></i>
                        </div>
                    </div>
                    <p class="mt-2 text-[11px] font-medium text-center dark:text-gray-300 line-clamp-2">Russia - Study Visa</p>
                </div>

                <!-- Video Item 2 -->
                <div class="group cursor-pointer flex flex-col items-center" onclick="playVideo('{{ asset('videos/Test2.mp4') }}', 'Russia - Study Visa')">
                    <div class="relative w-full aspect-square bg-gray-100 dark:bg-gray-800 rounded-xl overflow-hidden border-2 border-transparent group-hover:border-blue-500 group-hover:shadow-lg transition-all duration-300">
                        <!-- Video thumbnail with 1:1 aspect ratio -->
                        <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-purple-100 to-pink-100 dark:from-purple-900/30 dark:to-pink-900/30">
                            <video class="w-full h-full object-cover" muted playsinline>
                                <source src="{{ asset('videos/Test2.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                        <!-- Play overlay -->
                        <div class="absolute inset-0 flex items-center justify-center bg-black/30 group-hover:bg-black/50 transition-all duration-300">
                            <i class="fas fa-play text-white text-4xl opacity-70 group-hover:opacity-100 group-hover:scale-110 transition-all duration-300"></i>
                        </div>
                        <!-- Success indicator -->
                        <div class="absolute bottom-2 left-2 bg-green-500 text-white rounded-full w-5 h-5 flex items-center justify-center text-[10px] border-2 border-white shadow-sm">
                            <i class="fas fa-check"></i>
                        </div>
                    </div>
                    <p class="mt-2 text-[11px] font-medium text-center dark:text-gray-300 line-clamp-2">Russia - Study Visa</p>
                </div>
                <!-- Video Item 3 -->
                <div class="group cursor-pointer flex flex-col items-center" onclick="playVideo('{{ asset('videos/Test2.mp4') }}', 'Singapore - Workpass')">
                    <div class="relative w-full aspect-square bg-gray-100 dark:bg-gray-800 rounded-xl overflow-hidden border-2 border-transparent group-hover:border-blue-500 group-hover:shadow-lg transition-all duration-300">
                        <!-- Video thumbnail with 1:1 aspect ratio -->
                        <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-purple-100 to-pink-100 dark:from-purple-900/30 dark:to-pink-900/30">
                            <video class="w-full h-full object-cover" muted playsinline>
                                <source src="{{ asset('videos/Test3.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                        <!-- Play overlay -->
                        <div class="absolute inset-0 flex items-center justify-center bg-black/30 group-hover:bg-black/50 transition-all duration-300">
                            <i class="fas fa-play text-white text-4xl opacity-70 group-hover:opacity-100 group-hover:scale-110 transition-all duration-300"></i>
                        </div>
                        <!-- Success indicator -->
                        <div class="absolute bottom-2 left-2 bg-green-500 text-white rounded-full w-5 h-5 flex items-center justify-center text-[10px] border-2 border-white shadow-sm">
                            <i class="fas fa-check"></i>
                        </div>
                    </div>
                    <p class="mt-2 text-[11px] font-medium text-center dark:text-gray-300 line-clamp-2">Singapore - Workpass</p>
                </div>
                <!-- Video Item 4 -->
                <div class="group cursor-pointer flex flex-col items-center" onclick="playVideo('{{ asset('videos/Test2.mp4') }}', ' - ')">
                    <div class="relative w-full aspect-square bg-gray-100 dark:bg-gray-800 rounded-xl overflow-hidden border-2 border-transparent group-hover:border-blue-500 group-hover:shadow-lg transition-all duration-300">
                        <!-- Video thumbnail with 1:1 aspect ratio -->
                        <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-purple-100 to-pink-100 dark:from-purple-900/30 dark:to-pink-900/30">
                            <video class="w-full h-full object-cover" muted playsinline>
                                <source src="{{ asset('videos/Test4.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                        <!-- Play overlay -->
                        <div class="absolute inset-0 flex items-center justify-center bg-black/30 group-hover:bg-black/50 transition-all duration-300">
                            <i class="fas fa-play text-white text-4xl opacity-70 group-hover:opacity-100 group-hover:scale-110 transition-all duration-300"></i>
                        </div>
                        <!-- Success indicator -->
                        <div class="absolute bottom-2 left-2 bg-green-500 text-white rounded-full w-5 h-5 flex items-center justify-center text-[10px] border-2 border-white shadow-sm">
                            <i class="fas fa-check"></i>
                        </div>
                    </div>
                    <p class="mt-2 text-[11px] font-medium text-center dark:text-gray-300 line-clamp-2"> - </p>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Video Player (tanpa space hitam) -->
<div id="videoPlayerOverlay" class="fixed inset-0 z-[100] hidden bg-black/95 animate-in fade-in duration-200">
    <!-- Container utama untuk video dan title -->
    <div class="absolute inset-0 flex flex-col items-center justify-center p-4">
        <!-- Container video saja -->
        <div class="relative">
            <video id="mainPlayer" controls class="rounded-lg shadow-2xl" playsinline>
                <source src="" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        
        <!-- Video Title -->
        <h4 id="videoTitle" class="text-white mt-4 text-lg font-bold text-center max-w-2xl"></h4>
        
        <!-- Close hint -->
        <p class="text-white/60 text-sm mt-2 text-center">
            <i class="fas fa-info-circle mr-1"></i> Klik di luar video untuk menutup
        </p>
    </div>
</div>

<script>
    // DOM Elements
    const modalGallery = document.getElementById('videoModal');
    const playerOverlay = document.getElementById('videoPlayerOverlay');
    const mainPlayer = document.getElementById('mainPlayer');
    const videoTitle = document.getElementById('videoTitle');

    // Open Main Gallery
    function openModal() {
        modalGallery.classList.remove('hidden');
        modalGallery.classList.add('flex');
        document.body.style.overflow = 'hidden';
        document.documentElement.style.overflow = 'hidden';
    }

    // Close Main Gallery
    function closeModal() {
        modalGallery.classList.add('hidden');
        modalGallery.classList.remove('flex');
        document.body.style.overflow = 'auto';
        document.documentElement.style.overflow = 'auto';
        closePlayer();
    }

    // Play Video (Enlarged Mode)
    function playVideo(source, title) {
        mainPlayer.src = source;
        videoTitle.innerText = title;
        
        // Reset video size sebelum menyesuaikan
        mainPlayer.style.width = '';
        mainPlayer.style.height = '';
        mainPlayer.style.maxWidth = '';
        mainPlayer.style.maxHeight = '';
        
        playerOverlay.classList.remove('hidden');
        
        document.body.style.overflow = 'hidden';
        document.documentElement.style.overflow = 'hidden';
        
        // Load video
        mainPlayer.load();
        
        // Tunggu metadata video dimuat untuk mendapatkan ukuran asli
        mainPlayer.addEventListener('loadedmetadata', function() {
            adjustVideoSize();
        });
        
        // Try to play video
        const playPromise = mainPlayer.play();
        if (playPromise !== undefined) {
            playPromise.catch(error => {
                console.log("Autoplay was prevented:", error);
            });
        }
    }

    // Adjust video size based on screen and video aspect ratio
    function adjustVideoSize() {
        const videoAspectRatio = mainPlayer.videoWidth / mainPlayer.videoHeight;
        const screenWidth = window.innerWidth;
        const screenHeight = window.innerHeight;
        
        // Tentukan ukuran maksimal berdasarkan layar
        const maxWidth = Math.min(screenWidth * 0.85, 800); // 85% dari layar atau maks 800px
        const maxHeight = Math.min(screenHeight * 0.75, 600); // 75% dari layar atau maks 600px
        
        let width, height;
        
        // Hitung ukuran berdasarkan aspect ratio video
        if (videoAspectRatio > 1) {
            // Video landscape (lebar > tinggi)
            width = maxWidth;
            height = width / videoAspectRatio;
            
            if (height > maxHeight) {
                height = maxHeight;
                width = height * videoAspectRatio;
            }
        } else {
            // Video portrait (tinggi > lebar) atau square
            height = maxHeight;
            width = height * videoAspectRatio;
            
            if (width > maxWidth) {
                width = maxWidth;
                height = width / videoAspectRatio;
            }
        }
        
        // Terapkan ukuran ke video
        mainPlayer.style.width = width + 'px';
        mainPlayer.style.height = height + 'px';
    }

    // Close Player
    function closePlayer() {
        playerOverlay.classList.add('hidden');
        mainPlayer.pause();
        mainPlayer.currentTime = 0;
        document.body.style.overflow = 'auto';
        document.documentElement.style.overflow = 'auto';
    }

    // Handle window resize
    window.addEventListener('resize', function() {
        if (!playerOverlay.classList.contains('hidden') && mainPlayer.src) {
            adjustVideoSize();
        }
    });

    // Close modals when clicking on dark background
    window.addEventListener('click', function(event) {
        if (event.target == modalGallery) closeModal();
        if (event.target == playerOverlay) closePlayer();
    });

    // Close modals with Escape key
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            if (!playerOverlay.classList.contains('hidden')) {
                closePlayer();
            } else if (!modalGallery.classList.contains('hidden')) {
                closeModal();
            }
        }
    });

    // Preload video thumbnails
    window.addEventListener('load', function() {
        const videoThumbs = document.querySelectorAll('.group video');
        videoThumbs.forEach(video => {
            video.currentTime = 1;
        });
    });
    
    // Handle video ended
    mainPlayer.addEventListener('ended', function() {
        setTimeout(function() {
            if (!playerOverlay.classList.contains('hidden')) {
                closePlayer();
            }
        }, 2000);
    });
</script>

<style>
    /* Custom styles */
    .aspect-square {
        aspect-ratio: 1 / 1;
    }
    
    /* Animations */
    .animate-in {
        animation-duration: 0.2s;
        animation-timing-function: ease-out;
        animation-fill-mode: both;
    }
    
    .fade-in {
        animation-name: fadeIn;
    }
    
    .zoom-in {
        animation-name: zoomIn;
    }
    
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }
    
    @keyframes zoomIn {
        from { 
            opacity: 0;
            transform: scale(0.95);
        }
        to { 
            opacity: 1;
            transform: scale(1);
        }
    }
    
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    
    /* Scrollbar */
    .overflow-y-auto::-webkit-scrollbar {
        width: 6px;
    }
    
    .overflow-y-auto::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 3px;
    }
    
    .overflow-y-auto::-webkit-scrollbar-thumb {
        background: #888;
        border-radius: 3px;
    }
    
    .overflow-y-auto::-webkit-scrollbar-thumb:hover {
        background: #555;
    }
    
    .dark .overflow-y-auto::-webkit-scrollbar-track {
        background: #2d3748;
    }
    
    .dark .overflow-y-auto::-webkit-scrollbar-thumb {
        background: #4a5568;
    }
    
    .dark .overflow-y-auto::-webkit-scrollbar-thumb:hover {
        background: #718096;
    }
    
    /* Video player responsive styles */
    #mainPlayer {
        transition: all 0.3s ease;
        background-color: #000; /* Background hitam untuk video */
    }
    
    /* Responsive adjustments */
    @media (max-width: 640px) {
        #mainPlayer {
            max-width: 95vw !important;
            max-height: 50vh !important;
        }
        
        #videoTitle {
            font-size: 16px;
            margin-top: 12px;
            max-width: 90vw;
        }
    }
    
    @media (min-width: 641px) and (max-width: 1024px) {
        #mainPlayer {
            max-width: 85vw !important;
            max-height: 65vh !important;
        }
    }
</style>
@endsection