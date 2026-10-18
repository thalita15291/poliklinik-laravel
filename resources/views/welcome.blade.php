<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poliklinik</title>
    
    <!-- Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daisyui@5/daisyui.css">

    <!-- Pemanggilan Vite (Tailwind CSS) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="p-8 bg-slate-50 font-['Plus_Jakarta_Sans']">

    <!-- Contoh Penggunaan Tailwind CSS dari Modul -->
    <div class="mb-8 p-6 bg-white rounded-xl shadow-sm border border-slate-100">
        <h2 class="text-2xl font-bold text-slate-800">
            Selamat Datang
        </h2>
        <p class="text-sm text-slate-600 mt-1">
            {{ now()->translatedFormat('l, d F Y') }} - Berikut ringkasan aktivitas anda hari ini
        </p>
    </div>

</body>
</html>