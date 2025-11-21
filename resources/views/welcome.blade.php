<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Navbar Dropdown</title>
</head>

<body class="bg-gray-100">

    <!-- NAVBAR -->
    <nav class="bg-white shadow-md" x-data="{open:false}">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between h-16">

                <!-- Logo -->
                <div class="flex items-center">
                    <a class="text-xl font-bold text-blue-600" href="#">MyBrand</a>
                </div>

                <!-- Menu Desktop -->
                <div class="hidden md:flex items-center space-x-6">

                    <a href="#" class="hover:text-blue-600">Home</a>

                    <!-- Dropdown -->
                    <div class="relative" x-data="{drop:false}">
                        <button @click="drop = !drop" class="flex items-center hover:text-blue-600">
                            kategori
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>

                        <!-- Dropdown Menu -->
                        <div x-show="drop" @click.outside="drop = false" x-transition
                            class="absolute right-0 mt-2 w-40 bg-white border rounded-md shadow-lg py-2">
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">Analytics</a>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">Automation</a>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">Reports</a>
                        </div>
                    </div>

                    <a href="#" class="hover:text-blue-600">Contact</a>
                </div>

                <!-- Hamburger (Mobile) -->
                <div class="flex items-center md:hidden">
                    <button @click="open = !open">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path x-show="!open" stroke-linecap="round" stroke-linejoin="round"
                                d="M4 6h16M4 12h16M4 18h16" />
                            <path x-show="open" stroke-linecap="round" stroke-linejoin="round"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="md:hidden" x-show="open" x-transition>
            <div class="px-4 pb-4 space-y-2 bg-white">

                <a href="#" class="block py-2 border-b">Home</a>

                <!-- Mobile Dropdown -->
                <div x-data="{dropMobile:false}">
                    <button @click="dropMobile = !dropMobile"
                        class="w-full flex justify-between items-center py-2 border-b">
                        Features
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>

                    <div x-show="dropMobile" x-transition class="pl-4 space-y-1">
                        @foreach ($kategories as $kategori)
                        <a href="{{ $kategori->name }}" class="block py-1">{{ $kategori->name }}</a>
                        @endforeach
                    </div>
                </div>

                <a href="#" class="block py-2 border-b">Contact</a>
            </div>
        </div>
    </nav>

</body>

</html>