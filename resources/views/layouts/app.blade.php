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
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl overflow-auto flex gap-4 mx-auto py-2 px-4 sm:px-6 lg:px-8 overflow-x-auto">
                        <x-nav-link :href="route('dashboard')" class="border-gray-700 border border-dashed rounded-lg d-block bg-gray-200 px-2" :active="request()->routeIs('dashboard')">
                            {{ __('Dashboard') }}
                        </x-nav-link>
                        <x-nav-link :href="route('dashboard')" class="border-gray-700 border border-dashed rounded-lg d-block bg-gray-200 px-2" :active="request()->routeIs('dashboard')">
                            {{ __('Dashboard') }}
                        </x-nav-link>
                        <x-nav-link :href="route('dashboard')" class="border-gray-700 border border-dashed rounded-lg d-block bg-gray-200 px-2" :active="request()->routeIs('dashboard')">
                            {{ __('Dashboard') }}
                        </x-nav-link>
                        <x-nav-link :href="route('dashboard')" class="border-gray-700 border border-dashed rounded-lg d-block bg-gray-200 px-2" :active="request()->routeIs('dashboard')">
                            {{ __('Dashboard') }}
                        </x-nav-link>
                        <x-nav-link :href="route('dashboard')" class="border-gray-700 border border-dashed rounded-lg d-block bg-gray-200 px-2" :active="request()->routeIs('dashboard')">
                            {{ __('Dashboard') }}
                        </x-nav-link>
                        <x-nav-link :href="route('dashboard')" class="border-gray-700 border border-dashed rounded-lg d-block bg-gray-200 px-2" :active="request()->routeIs('dashboard')">
                            {{ __('Dashboard') }}
                        </x-nav-link>
                        <x-nav-link :href="route('dashboard')" class="border-gray-700 border border-dashed rounded-lg d-block bg-gray-200 px-2" :active="request()->routeIs('dashboard')">
                            {{ __('Dashboard') }}
                        </x-nav-link>
                        <x-nav-link :href="route('dashboard')" class="border-gray-700 border border-dashed rounded-lg d-block bg-gray-200 px-2" :active="request()->routeIs('dashboard')">
                            {{ __('Dashboard') }}
                        </x-nav-link>
                        <x-nav-link :href="route('dashboard')" class="border-gray-700 border border-dashed rounded-lg d-block bg-gray-200 px-2" :active="request()->routeIs('dashboard')">
                            {{ __('Dashboard') }}
                        </x-nav-link>
                        <x-nav-link :href="route('dashboard')" class="border-gray-700 border border-dashed rounded-lg d-block bg-gray-200 px-2" :active="request()->routeIs('dashboard')">
                            {{ __('Dashboard') }}
                        </x-nav-link>
                        <x-nav-link :href="route('dashboard')" class="border-gray-700 border border-dashed rounded-lg d-block bg-gray-200 px-2" :active="request()->routeIs('dashboard')">
                            {{ __('Dashboard') }}
                        </x-nav-link>
                        <x-nav-link :href="route('dashboard')" class="border-gray-700 border border-dashed rounded-lg d-block bg-gray-200 px-2" :active="request()->routeIs('dashboard')">
                            {{ __('Dashboard') }}
                        </x-nav-link>
                        <x-nav-link :href="route('dashboard')" class="border-gray-700 border border-dashed rounded-lg d-block bg-gray-200 px-2" :active="request()->routeIs('dashboard')">
                            {{ __('Dashboard') }}
                        </x-nav-link>
                        <x-nav-link :href="route('dashboard')" class="border-gray-700 border border-dashed rounded-lg d-block bg-gray-200 px-2" :active="request()->routeIs('dashboard')">
                            {{ __('Dashboard') }}
                        </x-nav-link>
                        <x-nav-link :href="route('dashboard')" class="border-gray-700 border border-dashed rounded-lg d-block bg-gray-200 px-2" :active="request()->routeIs('dashboard')">
                            {{ __('Dashboard') }}
                        </x-nav-link>
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
