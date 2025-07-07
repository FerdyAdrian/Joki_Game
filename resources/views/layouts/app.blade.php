<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Flash Messages -->
            @if(session('success'))
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-4">
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                        <span class="block sm:inline">{{ session('success') }}</span>
                        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                            <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <title>Close</title>
                                <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/>
                            </svg>
                        </span>
                    </div>
                </div>
            @endif

            @if(session('error'))
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-4">
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                        <span class="block sm:inline">{{ session('error') }}</span>
                        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                            <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <title>Close</title>
                                <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/>
                            </svg>
                        </span>
                    </div>
                </div>
            @endif

            @if(session('warning'))
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-4">
                    <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 px-4 py-3 rounded relative" role="alert">
                        <span class="block sm:inline">{{ session('warning') }}</span>
                        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                            <svg class="fill-current h-6 w-6 text-yellow-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <title>Close</title>
                                <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/>
                            </svg>
                        </span>
                    </div>
                </div>
            @endif

            @if(session('info'))
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-4">
                    <div class="bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded relative" role="alert">
                        <span class="block sm:inline">{{ session('info') }}</span>
                        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                            <svg class="fill-current h-6 w-6 text-blue-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <title>Close</title>
                                <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/>
                            </svg>
                        </span>
                    </div>
                </div>
            @endif

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                @yield('content')
            </main>
        </div>

        <footer class="bg-white border-t mt-10 shadow-inner">
            <div class="max-w-7xl mx-auto px-4 py-6 flex flex-col md:flex-row items-center justify-between text-gray-500 text-sm">
                <div class="mb-2 md:mb-0">&copy; {{ date('Y') }} Sistem Informasi Tiket Kereta. All rights reserved.</div>
                <div class="flex gap-4">
                    <a href="#" class="hover:text-blue-600 transition"><svg class="w-5 h-5 inline" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.56v14.91a4.56 4.56 0 0 1-4.56 4.56H4.56A4.56 4.56 0 0 1 0 19.47V4.56A4.56 4.56 0 0 1 4.56 0h14.91A4.56 4.56 0 0 1 24 4.56zM8.09 19.47V9.5H5.08v9.97zm-1.5-11.3a1.74 1.74 0 1 1 0-3.48 1.74 1.74 0 0 1 0 3.48zm16.41 11.3h-3.01v-4.85c0-1.16-.02-2.65-1.62-2.65-1.62 0-1.87 1.26-1.87 2.56v4.94h-3.01V9.5h2.89v1.36h.04a3.17 3.17 0 0 1 2.85-1.57c3.05 0 3.61 2.01 3.61 4.62v5.56z"/></svg></a>
                    <a href="#" class="hover:text-blue-400 transition"><svg class="w-5 h-5 inline" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.56v14.91a4.56 4.56 0 0 1-4.56 4.56H4.56A4.56 4.56 0 0 1 0 19.47V4.56A4.56 4.56 0 0 1 4.56 0h14.91A4.56 4.56 0 0 1 24 4.56zM8.09 19.47V9.5H5.08v9.97zm-1.5-11.3a1.74 1.74 0 1 1 0-3.48 1.74 1.74 0 0 1 0 3.48zm16.41 11.3h-3.01v-4.85c0-1.16-.02-2.65-1.62-2.65-1.62 0-1.87 1.26-1.87 2.56v4.94h-3.01V9.5h2.89v1.36h.04a3.17 3.17 0 0 1 2.85-1.57c3.05 0 3.61 2.01 3.61 4.62v5.56z"/></svg></a>
                </div>
            </div>
        </footer>

        <!-- JavaScript untuk menutup alert -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Menutup alert ketika tombol close diklik
                const alerts = document.querySelectorAll('[role="alert"]');
                alerts.forEach(function(alert) {
                    const closeButton = alert.querySelector('svg');
                    if (closeButton) {
                        closeButton.addEventListener('click', function() {
                            alert.style.display = 'none';
                        });
                    }
                });

                // Auto hide alert setelah 5 detik
                setTimeout(function() {
                    alerts.forEach(function(alert) {
                        alert.style.display = 'none';
                    });
                }, 5000);
            });
        </script>
    </body>
</html>
