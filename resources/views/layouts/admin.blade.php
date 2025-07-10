<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="flex min-h-screen custom-scrollbar">
    <livewire:admin.layout.sidebar />

    <div class="lg:pl-64 w-full flex flex-col">
        <!-- start::Topbar -->
        <div class="flex flex-col">
            <livewire:admin.layout.header />
        </div>
        <!-- end::Topbar -->

        <!-- start:Page content -->
        <main>
            {{ $slot }}
        </main>
        <!-- end:Page content -->
    </div>
</div>
</body>
</html>
