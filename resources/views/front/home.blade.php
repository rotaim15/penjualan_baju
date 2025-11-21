<nav class="bg-gray-800 p-4">
    <div class="container mx-auto flex items-center justify-between">
        <a href="#" class="text-white text-2xl font-bold">Logo</a>

        <div class="md:hidden">
            <button id="mobile-menu-button" class="text-white focus:outline-none">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>

        <div id="mobile-menu" class="hidden md:flex md:items-center md:space-x-4 w-full md:w-auto">
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Beranda</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Tentang Kami</a>

            <div class="relative group">
                <button class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium flex items-center">
                    Layanan
                    <svg class="ml-2 -mr-0.5 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                
                <div class="hidden absolute left-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 z-10 group-hover:block md:group-hover:block md:hidden" id="dropdown-menu">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Desain Web</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Pengembangan Aplikasi</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Konsultasi IT</a>
                </div>
            </div>

            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Kontak</a>
        </div>
    </div>
</nav>

<script>
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const dropdownButton = document.querySelector('.group button');
    const dropdownMenu = document.getElementById('dropdown-menu');

    // Toggle menu mobile
    mobileMenuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
        // Tutup dropdown jika menu mobile ditutup
        if (mobileMenu.classList.contains('hidden') && !dropdownMenu.classList.contains('hidden')) {
             dropdownMenu.classList.add('hidden');
        }
    });

    // Toggle dropdown di mobile (di desktop menggunakan group-hover)
    dropdownButton.addEventListener('click', (e) => {
        // Hanya toggle di layar kecil jika mobile menu terbuka
        if (!mobileMenu.classList.contains('hidden') && window.innerWidth < 768) {
            e.preventDefault(); // Mencegah navigasi jika tombol adalah link
            dropdownMenu.classList.toggle('hidden');
            // Menampilkan dropdown secara vertikal penuh saat menu mobile terbuka
            dropdownMenu.classList.toggle('relative'); 
            dropdownMenu.classList.toggle('w-full');
            dropdownMenu.classList.toggle('shadow-none');
        }
    });

    // Handle closing dropdown on desktop when clicking outside (Optional but good practice)
    // Untuk kesederhanaan, hanya implementasi dasar toggle menu mobile yang disertakan.
</script>