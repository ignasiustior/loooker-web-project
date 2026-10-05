<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <meta
        name="description"
        content="Loookers adalah platform rekrutmen yang menghubungkan talenta terbaik dengan perusahaan yang tepat."
    >

    <title>Loookers - Temukan Karier dan Talenta Terbaik</title>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])
</head>


<body class="bg-slate-50 text-slate-900 antialiased">

    {{-- ========================================================= --}}
    {{-- NAVBAR --}}
    {{-- ========================================================= --}}

    <header
        id="navbar"
        class="fixed inset-x-0 top-0 z-50 border-b border-transparent bg-white/80 backdrop-blur-xl transition-all duration-300"
    >

        <div class="mx-auto max-w-7xl px-6 lg:px-8">

            <div class="flex h-20 items-center justify-between">

                {{-- Logo --}}
                <a
                    href="{{ route('home') }}"
                    class="flex items-center gap-3"
                >

                    <div
                        class="flex h-10 w-10 items-center justify-center rounded-xl bg-emerald-600 text-lg font-bold text-white shadow-lg shadow-emerald-600/20"
                    >
                        L
                    </div>

                    <div>

                        <span class="block text-xl font-bold tracking-tight text-slate-900">
                            Loookers
                        </span>

                        <span class="hidden text-[10px] font-medium uppercase tracking-widest text-slate-400 sm:block">
                            Career & Talent Platform
                        </span>

                    </div>

                </a>


                {{-- Desktop Navigation --}}
                <nav class="hidden items-center gap-8 lg:flex">

                    <a
                        href="#home"
                        class="text-sm font-medium text-emerald-600 transition hover:text-emerald-700"
                    >
                        Beranda
                    </a>

                    <a
                        href="#jobs"
                        class="text-sm font-medium text-slate-600 transition hover:text-emerald-600"
                    >
                        Lowongan Kerja
                    </a>

                    <a
                        href="#about"
                        class="text-sm font-medium text-slate-600 transition hover:text-emerald-600"
                    >
                        Tentang Kami
                    </a>

                    <a
                        href="#contact"
                        class="text-sm font-medium text-slate-600 transition hover:text-emerald-600"
                    >
                        Hubungi Kami
                    </a>

                </nav>


                {{-- Auth Buttons --}}
                <div class="hidden items-center gap-3 sm:flex">

                    <a
                        href="{{ route('login') }}"
                        class="rounded-xl px-4 py-2.5 text-sm font-semibold text-slate-700 transition hover:bg-slate-100"
                    >
                        Masuk
                    </a>

                    <a
                        href="{{ route('register') }}"
                        class="rounded-xl bg-emerald-600 px-5 py-2.5 text-sm font-semibold text-white shadow-lg shadow-emerald-600/20 transition hover:bg-emerald-700"
                    >
                        Daftar
                    </a>

                </div>


                {{-- Mobile Menu Button --}}
                <button
                    id="mobileMenuButton"
                    type="button"
                    class="rounded-lg p-2 text-slate-700 hover:bg-slate-100 lg:hidden"
                    aria-label="Buka menu"
                >

                    <svg
                        class="h-6 w-6"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"
                        />
                    </svg>

                </button>

            </div>


            {{-- Mobile Navigation --}}
            <div
                id="mobileMenu"
                class="hidden border-t border-slate-100 py-5 lg:hidden"
            >

                <div class="flex flex-col gap-2">

                    <a
                        href="#home"
                        class="rounded-lg px-4 py-3 text-sm font-medium text-slate-700 hover:bg-slate-50"
                    >
                        Beranda
                    </a>

                    <a
                        href="#jobs"
                        class="rounded-lg px-4 py-3 text-sm font-medium text-slate-700 hover:bg-slate-50"
                    >
                        Lowongan Kerja
                    </a>

                    <a
                        href="#about"
                        class="rounded-lg px-4 py-3 text-sm font-medium text-slate-700 hover:bg-slate-50"
                    >
                        Tentang Kami
                    </a>

                    <a
                        href="#contact"
                        class="rounded-lg px-4 py-3 text-sm font-medium text-slate-700 hover:bg-slate-50"
                    >
                        Hubungi Kami
                    </a>

                    <div class="mt-3 grid grid-cols-2 gap-3">

                        <a
                            href="{{ route('login') }}"
                            class="rounded-xl border border-slate-200 px-4 py-3 text-center text-sm font-semibold text-slate-700"
                        >
                            Masuk
                        </a>

                        <a
                            href="{{ route('register') }}"
                            class="rounded-xl bg-emerald-600 px-4 py-3 text-center text-sm font-semibold text-white"
                        >
                            Daftar
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </header>


    <main id="home">

        {{-- ===================================================== --}}
        {{-- HERO --}}
        {{-- ===================================================== --}}

        <section class="relative overflow-hidden pt-32">

            {{-- Decorative Background --}}
            <div
                class="absolute -right-32 -top-32 h-96 w-96 rounded-full bg-emerald-200/40 blur-3xl"
            ></div>

            <div
                class="absolute -left-32 top-96 h-80 w-80 rounded-full bg-teal-100/50 blur-3xl"
            ></div>


            <div class="relative mx-auto max-w-7xl px-6 pb-20 pt-12 lg:px-8 lg:pb-28 lg:pt-20">

                <div class="grid items-center gap-14 lg:grid-cols-2">

                    {{-- Hero Content --}}
                    <div>

                        <div
                            class="mb-6 inline-flex items-center gap-2 rounded-full border border-emerald-100 bg-emerald-50 px-4 py-2 text-sm font-medium text-emerald-700"
                        >

                            <span class="h-2 w-2 rounded-full bg-emerald-500"></span>

                            Platform Rekrutmen Modern

                        </div>


                        <h1
                            class="max-w-3xl text-5xl font-bold leading-[1.05] tracking-tight text-slate-950 sm:text-6xl lg:text-7xl"
                        >
                            Temukan karier yang

                            <span class="text-emerald-600">
                                tepat untukmu.
                            </span>
                        </h1>


                        <p
                            class="mt-7 max-w-xl text-lg leading-8 text-slate-600"
                        >
                            Loookers membantu talenta menemukan pekerjaan yang
                            sesuai dengan kemampuan, pengalaman, dan potensi mereka,
                            sekaligus membantu perusahaan menemukan kandidat terbaik.
                        </p>


                        {{-- Search Box --}}
                        <div
                            class="mt-9 rounded-2xl border border-slate-200 bg-white p-3 shadow-xl shadow-slate-900/5"
                        >

                            <form
                                action="#jobs"
                                method="GET"
                                class="grid gap-3 md:grid-cols-[1fr_0.8fr_auto]"
                            >

                                <div class="relative">

                                    <svg
                                        class="absolute left-4 top-1/2 h-5 w-5 -translate-y-1/2 text-slate-400"
                                        fill="none"
                                        stroke="currentColor"
                                        viewBox="0 0 24 24"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="m21 21-4.35-4.35m2.35-5.65a8 8 0 1 1-16 0 8 8 0 0 1 16 0Z"
                                        />
                                    </svg>

                                    <input
                                        type="text"
                                        name="keyword"
                                        placeholder="Posisi, skill, atau perusahaan"
                                        class="h-12 w-full rounded-xl border-0 bg-slate-50 pl-12 pr-4 text-sm text-slate-800 outline-none ring-0 placeholder:text-slate-400 focus:ring-2 focus:ring-emerald-200"
                                    >

                                </div>


                                <div class="relative">

                                    <svg
                                        class="absolute left-4 top-1/2 h-5 w-5 -translate-y-1/2 text-slate-400"
                                        fill="none"
                                        stroke="currentColor"
                                        viewBox="0 0 24 24"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M12 21s7-4.5 7-10a7 7 0 1 0-14 0c0 5.5 7 10 7 10Z"
                                        />

                                        <circle
                                            cx="12"
                                            cy="11"
                                            r="2"
                                        />
                                    </svg>

                                    <select
                                        name="location"
                                        class="h-12 w-full appearance-none rounded-xl border-0 bg-slate-50 pl-12 pr-4 text-sm text-slate-700 outline-none focus:ring-2 focus:ring-emerald-200"
                                    >

                                        <option value="">
                                            Semua lokasi
                                        </option>

                                        <option value="malang">
                                            Malang
                                        </option>

                                        <option value="surabaya">
                                            Surabaya
                                        </option>

                                        <option value="jakarta">
                                            Jakarta
                                        </option>

                                        <option value="remote">
                                            Remote
                                        </option>

                                    </select>

                                </div>


                                <button
                                    type="submit"
                                    class="h-12 rounded-xl bg-emerald-600 px-6 text-sm font-semibold text-white transition hover:bg-emerald-700"
                                >
                                    Cari Kerja
                                </button>

                            </form>

                        </div>


                        {{-- Quick Categories --}}
                        <div class="mt-5 flex flex-wrap items-center gap-2 text-sm">

                            <span class="mr-2 text-slate-400">
                                Populer:
                            </span>

                            <a
                                href="#jobs"
                                class="rounded-full bg-white px-3 py-1.5 text-slate-600 shadow-sm ring-1 ring-slate-200 transition hover:border-emerald-200 hover:text-emerald-600"
                            >
                                Mobile Developer
                            </a>

                            <a
                                href="#jobs"
                                class="rounded-full bg-white px-3 py-1.5 text-slate-600 shadow-sm ring-1 ring-slate-200 transition hover:text-emerald-600"
                            >
                                Backend
                            </a>

                            <a
                                href="#jobs"
                                class="rounded-full bg-white px-3 py-1.5 text-slate-600 shadow-sm ring-1 ring-slate-200 transition hover:text-emerald-600"
                            >
                                UI/UX
                            </a>

                        </div>

                    </div>


                    {{-- Hero Visual --}}
                    <div class="relative">

                        <div class="relative mx-auto max-w-lg">

                            {{-- Main Visual --}}
                            <div
                                class="overflow-hidden rounded-[2rem] bg-gradient-to-br from-emerald-600 to-teal-700 p-1 shadow-2xl shadow-emerald-900/20"
                            >

                                <div
                                    class="rounded-[1.8rem] bg-slate-900 p-6"
                                >

                                    <div class="mb-8 flex items-center justify-between">

                                        <div>

                                            <p class="text-xs text-slate-400">
                                                Career Match
                                            </p>

                                            <p class="mt-1 text-xl font-bold text-white">
                                                Good Morning 👋
                                            </p>

                                        </div>

                                        <div
                                            class="flex h-10 w-10 items-center justify-center rounded-full bg-emerald-500/20 text-emerald-400"
                                        >
                                            ✦
                                        </div>

                                    </div>


                                    {{-- Match Card --}}
                                    <div
                                        class="rounded-2xl bg-white p-5"
                                    >

                                        <div class="flex items-center gap-4">

                                            <div
                                                class="flex h-14 w-14 items-center justify-center rounded-xl bg-emerald-100 text-xl font-bold text-emerald-700"
                                            >
                                                MD
                                            </div>

                                            <div>

                                                <p class="font-bold text-slate-900">
                                                    Mobile Developer
                                                </p>

                                                <p class="text-sm text-slate-500">
                                                    Technology Company
                                                </p>

                                            </div>

                                        </div>


                                        <div class="mt-5">

                                            <div class="mb-2 flex justify-between">

                                                <span class="text-xs font-medium text-slate-500">
                                                    Compatibility
                                                </span>

                                                <span class="text-sm font-bold text-emerald-600">
                                                    92%
                                                </span>

                                            </div>

                                            <div class="h-2 overflow-hidden rounded-full bg-slate-100">

                                                <div
                                                    class="h-full w-[92%] rounded-full bg-emerald-500"
                                                ></div>

                                            </div>

                                        </div>


                                        <div class="mt-5 flex flex-wrap gap-2">

                                            <span class="rounded-full bg-slate-100 px-3 py-1 text-xs text-slate-600">
                                                Kotlin
                                            </span>

                                            <span class="rounded-full bg-slate-100 px-3 py-1 text-xs text-slate-600">
                                                Android
                                            </span>

                                            <span class="rounded-full bg-slate-100 px-3 py-1 text-xs text-slate-600">
                                                REST API
                                            </span>

                                        </div>

                                    </div>


                                    {{-- Small Cards --}}
                                    <div class="mt-4 grid grid-cols-2 gap-4">

                                        <div class="rounded-2xl bg-white/10 p-4">

                                            <p class="text-xs text-slate-400">
                                                Open Positions
                                            </p>

                                            <p class="mt-1 text-2xl font-bold text-white">
                                                1.2K+
                                            </p>

                                        </div>

                                        <div class="rounded-2xl bg-white/10 p-4">

                                            <p class="text-xs text-slate-400">
                                                Active Talents
                                            </p>

                                            <p class="mt-1 text-2xl font-bold text-white">
                                                50K+
                                            </p>

                                        </div>

                                    </div>

                                </div>

                            </div>


                            {{-- Floating Notification --}}
                            <div
                                class="absolute -bottom-7 -left-7 hidden w-56 rounded-2xl border border-slate-100 bg-white p-4 shadow-xl sm:block"
                            >

                                <div class="flex items-center gap-3">

                                    <div
                                        class="flex h-10 w-10 items-center justify-center rounded-full bg-emerald-100 text-emerald-600"
                                    >
                                        ✓
                                    </div>

                                    <div>

                                        <p class="text-xs text-slate-400">
                                            Application Update
                                        </p>

                                        <p class="text-sm font-semibold text-slate-800">
                                            You got shortlisted!
                                        </p>

                                    </div>

                                </div>

                            </div>


                            {{-- Floating Match --}}
                            <div
                                class="absolute -right-6 top-12 hidden rounded-2xl border border-slate-100 bg-white p-4 shadow-xl sm:block"
                            >

                                <p class="text-xs text-slate-400">
                                    Best Match
                                </p>

                                <p class="mt-1 text-2xl font-bold text-emerald-600">
                                    92%
                                </p>

                                <p class="text-xs text-slate-500">
                                    based on your profile
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        {{-- ===================================================== --}}
        {{-- ROLE ENTRY POINTS --}}
        {{-- ===================================================== --}}

        <section
            id="about"
            class="bg-white py-24"
        >

            <div class="mx-auto max-w-7xl px-6 lg:px-8">

                <div class="mx-auto max-w-2xl text-center">

                    <span class="text-sm font-semibold uppercase tracking-widest text-emerald-600">
                        Dibuat untuk semua
                    </span>

                    <h2 class="mt-3 text-3xl font-bold tracking-tight text-slate-950 sm:text-4xl">
                        Satu platform, dua tujuan besar
                    </h2>

                    <p class="mt-4 text-slate-500">
                        Baik kamu sedang mencari peluang karier maupun
                        mencari talenta terbaik, Loookers membantu prosesnya
                        menjadi lebih sederhana.
                    </p>

                </div>


                <div class="mt-14 grid gap-6 md:grid-cols-2">

                    {{-- Applicant --}}
                    <div
                        class="group relative overflow-hidden rounded-3xl bg-slate-950 p-8 text-white"
                    >

                        <div class="absolute -right-20 -top-20 h-60 w-60 rounded-full bg-emerald-500/20 blur-3xl"></div>

                        <div class="relative">

                            <div
                                class="flex h-14 w-14 items-center justify-center rounded-2xl bg-emerald-500/20 text-2xl"
                            >
                                👤
                            </div>

                            <h3 class="mt-7 text-2xl font-bold">
                                Untuk Pelamar Kerja
                            </h3>

                            <p class="mt-3 max-w-md leading-7 text-slate-400">
                                Temukan pekerjaan yang sesuai dengan skill,
                                pengalaman, dan tujuan kariermu. Kelola
                                profil, CV, dan lamaran dalam satu tempat.
                            </p>

                            <ul class="mt-6 space-y-3 text-sm text-slate-300">

                                <li>✓ Cari lowongan sesuai keahlian</li>
                                <li>✓ Pantau status lamaran</li>
                                <li>✓ Dapatkan rekomendasi pekerjaan</li>

                            </ul>

                            <a
                                href="{{ route('register') }}"
                                class="mt-8 inline-flex items-center gap-2 rounded-xl bg-emerald-500 px-5 py-3 text-sm font-semibold text-white transition hover:bg-emerald-400"
                            >
                                Daftar Sebagai Pelamar

                                <span>→</span>
                            </a>

                        </div>

                    </div>


                    {{-- HR --}}
                    <div
                        class="group relative overflow-hidden rounded-3xl border border-slate-200 bg-slate-50 p-8"
                    >

                        <div class="absolute -right-20 -top-20 h-60 w-60 rounded-full bg-emerald-100 blur-3xl"></div>

                        <div class="relative">

                            <div
                                class="flex h-14 w-14 items-center justify-center rounded-2xl bg-emerald-100 text-2xl"
                            >
                                🏢
                            </div>

                            <h3 class="mt-7 text-2xl font-bold text-slate-950">
                                Untuk Perusahaan / HR
                            </h3>

                            <p class="mt-3 max-w-md leading-7 text-slate-500">
                                Bangun tim terbaik dengan proses rekrutmen
                                yang lebih terstruktur. Kelola lowongan
                                dan kandidat dari satu dashboard.
                            </p>

                            <ul class="mt-6 space-y-3 text-sm text-slate-600">

                                <li>✓ Pasang dan kelola lowongan</li>
                                <li>✓ Kelola kandidat secara terpusat</li>
                                <li>✓ Analisis kandidat berdasarkan data</li>

                            </ul>

                            <a
                                href="{{ route('login') }}"
                                class="mt-8 inline-flex items-center gap-2 rounded-xl border border-slate-300 bg-white px-5 py-3 text-sm font-semibold text-slate-800 transition hover:border-emerald-300 hover:text-emerald-600"
                            >
                                Masuk Sebagai HR

                                <span>→</span>
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        {{-- ===================================================== --}}
        {{-- STATS --}}
        {{-- ===================================================== --}}

        <section class="border-y border-slate-100 bg-slate-50 py-20">

            <div class="mx-auto max-w-7xl px-6 lg:px-8">

                <div class="grid grid-cols-2 gap-8 lg:grid-cols-4">

                    <div class="text-center">

                        <p class="text-4xl font-bold text-slate-950">
                            1.2K+
                        </p>

                        <p class="mt-2 text-sm text-slate-500">
                            Lowongan Aktif
                        </p>

                    </div>


                    <div class="text-center">

                        <p class="text-4xl font-bold text-slate-950">
                            50K+
                        </p>

                        <p class="mt-2 text-sm text-slate-500">
                            Talenta Terdaftar
                        </p>

                    </div>


                    <div class="text-center">

                        <p class="text-4xl font-bold text-slate-950">
                            500+
                        </p>

                        <p class="mt-2 text-sm text-slate-500">
                            Perusahaan
                        </p>

                    </div>


                    <div class="text-center">

                        <p class="text-4xl font-bold text-emerald-600">
                            87%
                        </p>

                        <p class="mt-2 text-sm text-slate-500">
                            Successful Placement
                        </p>

                    </div>

                </div>

            </div>

        </section>


        {{-- ===================================================== --}}
        {{-- FEATURED JOBS --}}
        {{-- ===================================================== --}}

        <section
            id="jobs"
            class="bg-white py-24"
        >

            <div class="mx-auto max-w-7xl px-6 lg:px-8">

                <div class="flex flex-col justify-between gap-5 sm:flex-row sm:items-end">

                    <div>

                        <span class="text-sm font-semibold uppercase tracking-widest text-emerald-600">
                            Featured Jobs
                        </span>

                        <h2 class="mt-3 text-3xl font-bold tracking-tight text-slate-950 sm:text-4xl">
                            Lowongan pilihan untukmu
                        </h2>

                        <p class="mt-3 text-slate-500">
                            Temukan peluang karier terbaru dari perusahaan pilihan.
                        </p>

                    </div>

                    <a
                        href="#"
                        class="inline-flex items-center gap-2 text-sm font-semibold text-emerald-600 hover:text-emerald-700"
                    >
                        Lihat Semua Lowongan
                        <span>→</span>
                    </a>

                </div>


                <div class="mt-12 grid gap-5 md:grid-cols-2 lg:grid-cols-3">


                    {{-- Job 1 --}}
                    <article
                        class="group rounded-2xl border border-slate-200 bg-white p-6 transition duration-300 hover:-translate-y-1 hover:border-emerald-200 hover:shadow-xl hover:shadow-slate-900/5"
                    >

                        <div class="flex items-start justify-between">

                            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-50 font-bold text-blue-600">
                                T
                            </div>

                            <span class="rounded-full bg-emerald-50 px-3 py-1 text-xs font-medium text-emerald-700">
                                Full-time
                            </span>

                        </div>

                        <h3 class="mt-6 text-lg font-bold text-slate-900">
                            Mobile Developer
                        </h3>

                        <p class="mt-1 text-sm text-slate-500">
                            Technology Company
                        </p>

                        <div class="mt-5 space-y-2 text-sm text-slate-500">

                            <p>📍 Jakarta / Remote</p>
                            <p>💼 2+ Tahun Pengalaman</p>

                        </div>

                        <div class="mt-6 flex items-center justify-between border-t border-slate-100 pt-5">

                            <span class="text-xs text-slate-400">
                                12 hari tersisa
                            </span>

                            <a
                                href="#"
                                class="text-sm font-semibold text-emerald-600 hover:text-emerald-700"
                            >
                                Lihat Detail →
                            </a>

                        </div>

                    </article>


                    {{-- Job 2 --}}
                    <article
                        class="group rounded-2xl border border-slate-200 bg-white p-6 transition duration-300 hover:-translate-y-1 hover:border-emerald-200 hover:shadow-xl hover:shadow-slate-900/5"
                    >

                        <div class="flex items-start justify-between">

                            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-purple-50 font-bold text-purple-600">
                                D
                            </div>

                            <span class="rounded-full bg-blue-50 px-3 py-1 text-xs font-medium text-blue-700">
                                Hybrid
                            </span>

                        </div>

                        <h3 class="mt-6 text-lg font-bold text-slate-900">
                            Backend Developer
                        </h3>

                        <p class="mt-1 text-sm text-slate-500">
                            Digital Solutions
                        </p>

                        <div class="mt-5 space-y-2 text-sm text-slate-500">

                            <p>📍 Surabaya</p>
                            <p>💼 1–3 Tahun Pengalaman</p>

                        </div>

                        <div class="mt-6 flex items-center justify-between border-t border-slate-100 pt-5">

                            <span class="text-xs text-slate-400">
                                8 hari tersisa
                            </span>

                            <a
                                href="#"
                                class="text-sm font-semibold text-emerald-600 hover:text-emerald-700"
                            >
                                Lihat Detail →
                            </a>

                        </div>

                    </article>


                    {{-- Job 3 --}}
                    <article
                        class="group rounded-2xl border border-slate-200 bg-white p-6 transition duration-300 hover:-translate-y-1 hover:border-emerald-200 hover:shadow-xl hover:shadow-slate-900/5"
                    >

                        <div class="flex items-start justify-between">

                            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-orange-50 font-bold text-orange-600">
                                N
                            </div>

                            <span class="rounded-full bg-orange-50 px-3 py-1 text-xs font-medium text-orange-700">
                                Full-time
                            </span>

                        </div>

                        <h3 class="mt-6 text-lg font-bold text-slate-900">
                            Frontend Developer
                        </h3>

                        <p class="mt-1 text-sm text-slate-500">
                            Nusantara Digital
                        </p>

                        <div class="mt-5 space-y-2 text-sm text-slate-500">

                            <p>📍 Malang</p>
                            <p>💼 Fresh Graduate</p>

                        </div>

                        <div class="mt-6 flex items-center justify-between border-t border-slate-100 pt-5">

                            <span class="text-xs text-slate-400">
                                15 hari tersisa
                            </span>

                            <a
                                href="#"
                                class="text-sm font-semibold text-emerald-600 hover:text-emerald-700"
                            >
                                Lihat Detail →
                            </a>

                        </div>

                    </article>

                </div>

            </div>

        </section>


        {{-- ===================================================== --}}
        {{-- HOW IT WORKS --}}
        {{-- ===================================================== --}}

        <section
            class="bg-slate-950 py-24 text-white"
        >

            <div class="mx-auto max-w-7xl px-6 lg:px-8">

                <div class="mx-auto max-w-2xl text-center">

                    <span class="text-sm font-semibold uppercase tracking-widest text-emerald-400">
                        How It Works
                    </span>

                    <h2 class="mt-3 text-3xl font-bold sm:text-4xl">
                        Mulai perjalanan kariermu
                    </h2>

                    <p class="mt-4 text-slate-400">
                        Proses yang sederhana dari profil hingga mendapatkan
                        pekerjaan yang sesuai.
                    </p>

                </div>


                <div class="relative mt-16 grid gap-10 md:grid-cols-4">

                    {{-- Step 1 --}}
                    <div class="relative text-center">

                        <div
                            class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-emerald-500 text-xl font-bold"
                        >
                            01
                        </div>

                        <h3 class="mt-6 font-bold">
                            Buat Akun
                        </h3>

                        <p class="mt-3 text-sm leading-6 text-slate-400">
                            Daftarkan akun dan lengkapi profil serta CV kamu.
                        </p>

                    </div>


                    {{-- Step 2 --}}
                    <div class="relative text-center">

                        <div
                            class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-emerald-500 text-xl font-bold"
                        >
                            02
                        </div>

                        <h3 class="mt-6 font-bold">
                            Cari Pekerjaan
                        </h3>

                        <p class="mt-3 text-sm leading-6 text-slate-400">
                            Temukan lowongan berdasarkan skill dan preferensimu.
                        </p>

                    </div>


                    {{-- Step 3 --}}
                    <div class="relative text-center">

                        <div
                            class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-emerald-500 text-xl font-bold"
                        >
                            03
                        </div>

                        <h3 class="mt-6 font-bold">
                            Ikuti Seleksi
                        </h3>

                        <p class="mt-3 text-sm leading-6 text-slate-400">
                            Kirim lamaran dan ikuti proses seleksi perusahaan.
                        </p>

                    </div>


                    {{-- Step 4 --}}
                    <div class="relative text-center">

                        <div
                            class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-emerald-500 text-xl font-bold"
                        >
                            04
                        </div>

                        <h3 class="mt-6 font-bold">
                            Get Hired
                        </h3>

                        <p class="mt-3 text-sm leading-6 text-slate-400">
                            Terima kesempatan kerja dan mulai perjalanan baru.
                        </p>

                    </div>

                </div>

            </div>

        </section>


        {{-- ===================================================== --}}
        {{-- TESTIMONIAL --}}
        {{-- ===================================================== --}}

        <section class="bg-white py-24">

            <div class="mx-auto max-w-7xl px-6 lg:px-8">

                <div class="mx-auto max-w-2xl text-center">

                    <span class="text-sm font-semibold uppercase tracking-widest text-emerald-600">
                        Stories
                    </span>

                    <h2 class="mt-3 text-3xl font-bold text-slate-950 sm:text-4xl">
                        Mereka menemukan peluangnya
                    </h2>

                </div>


                <div class="mt-12 grid gap-6 md:grid-cols-3">

                    <div class="rounded-2xl bg-slate-50 p-7">

                        <div class="text-emerald-500">
                            ★★★★★
                        </div>

                        <p class="mt-5 leading-7 text-slate-600">
                            "Proses mencari pekerjaan menjadi jauh lebih
                            terarah. Saya bisa melihat status lamaran tanpa
                            harus bertanya kepada HR."
                        </p>

                        <div class="mt-6 flex items-center gap-3">

                            <div
                                class="flex h-10 w-10 items-center justify-center rounded-full bg-emerald-100 font-bold text-emerald-700"
                            >
                                A
                            </div>

                            <div>

                                <p class="text-sm font-semibold">
                                    Andi Pratama
                                </p>

                                <p class="text-xs text-slate-400">
                                    Mobile Developer
                                </p>

                            </div>

                        </div>

                    </div>


                    <div class="rounded-2xl bg-slate-50 p-7">

                        <div class="text-emerald-500">
                            ★★★★★
                        </div>

                        <p class="mt-5 leading-7 text-slate-600">
                            "Platform yang membantu kami menyaring kandidat
                            dengan lebih cepat dan terstruktur."
                        </p>

                        <div class="mt-6 flex items-center gap-3">

                            <div
                                class="flex h-10 w-10 items-center justify-center rounded-full bg-blue-100 font-bold text-blue-700"
                            >
                                R
                            </div>

                            <div>

                                <p class="text-sm font-semibold">
                                    Rina Wijaya
                                </p>

                                <p class="text-xs text-slate-400">
                                    HR Manager
                                </p>

                            </div>

                        </div>

                    </div>


                    <div class="rounded-2xl bg-slate-50 p-7">

                        <div class="text-emerald-500">
                            ★★★★★
                        </div>

                        <p class="mt-5 leading-7 text-slate-600">
                            "Saya mendapatkan pekerjaan yang sesuai dengan
                            pengalaman dan bidang yang saya inginkan."
                        </p>

                        <div class="mt-6 flex items-center gap-3">

                            <div
                                class="flex h-10 w-10 items-center justify-center rounded-full bg-purple-100 font-bold text-purple-700"
                            >
                                S
                            </div>

                            <div>

                                <p class="text-sm font-semibold">
                                    Sinta Maharani
                                </p>

                                <p class="text-xs text-slate-400">
                                    Backend Developer
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        {{-- ===================================================== --}}
        {{-- CTA --}}
        {{-- ===================================================== --}}

        <section class="px-6 py-10 lg:px-8">

            <div
                class="mx-auto max-w-7xl overflow-hidden rounded-[2rem] bg-emerald-600 px-8 py-16 text-center text-white shadow-2xl shadow-emerald-900/20 sm:px-16"
            >

                <h2 class="text-3xl font-bold sm:text-4xl">
                    Siap memulai langkah berikutnya?
                </h2>

                <p class="mx-auto mt-4 max-w-2xl text-emerald-50">
                    Bangun profilmu, temukan peluang terbaik, dan mulai
                    perjalanan karier bersama Loookers.
                </p>

                <div class="mt-8 flex flex-col justify-center gap-3 sm:flex-row">

                    <a
                        href="{{ route('register') }}"
                        class="rounded-xl bg-white px-6 py-3 font-semibold text-emerald-700 transition hover:bg-emerald-50"
                    >
                        Mulai Sekarang
                    </a>

                    <a
                        href="#jobs"
                        class="rounded-xl border border-emerald-400 px-6 py-3 font-semibold text-white transition hover:bg-emerald-500"
                    >
                        Jelajahi Lowongan
                    </a>

                </div>

            </div>

        </section>

    </main>


    {{-- ========================================================= --}}
    {{-- FOOTER --}}
    {{-- ========================================================= --}}

    <footer
        id="contact"
        class="bg-slate-950 text-white"
    >

        <div class="mx-auto max-w-7xl px-6 py-16 lg:px-8">

            <div class="grid gap-12 md:grid-cols-2 lg:grid-cols-4">

                {{-- Brand --}}
                <div>

                    <div class="flex items-center gap-3">

                        <div
                            class="flex h-10 w-10 items-center justify-center rounded-xl bg-emerald-600 font-bold"
                        >
                            L
                        </div>

                        <span class="text-xl font-bold">
                            Loookers
                        </span>

                    </div>

                    <p class="mt-5 max-w-xs text-sm leading-6 text-slate-400">
                        Platform rekrutmen yang menghubungkan talenta
                        terbaik dengan perusahaan yang tepat.
                    </p>

                </div>


                {{-- Navigation --}}
                <div>

                    <h3 class="font-semibold">
                        Navigasi
                    </h3>

                    <ul class="mt-5 space-y-3 text-sm text-slate-400">

                        <li>
                            <a href="#home" class="hover:text-white">
                                Beranda
                            </a>
                        </li>

                        <li>
                            <a href="#jobs" class="hover:text-white">
                                Lowongan Kerja
                            </a>
                        </li>

                        <li>
                            <a href="#about" class="hover:text-white">
                                Tentang Kami
                            </a>
                        </li>

                        <li>
                            <a href="#contact" class="hover:text-white">
                                Hubungi Kami
                            </a>
                        </li>

                    </ul>

                </div>


                {{-- Help --}}
                <div>

                    <h3 class="font-semibold">
                        Bantuan
                    </h3>

                    <ul class="mt-5 space-y-3 text-sm text-slate-400">

                        <li>
                            <a href="#" class="hover:text-white">
                                FAQ
                            </a>
                        </li>

                        <li>
                            <a href="#" class="hover:text-white">
                                Pusat Bantuan
                            </a>
                        </li>

                        <li>
                            <a href="#" class="hover:text-white">
                                Kebijakan Privasi
                            </a>
                        </li>

                        <li>
                            <a href="#" class="hover:text-white">
                                Syarat & Ketentuan
                            </a>
                        </li>

                    </ul>

                </div>


                {{-- Contact --}}
                <div>

                    <h3 class="font-semibold">
                        Hubungi Kami
                    </h3>

                    <ul class="mt-5 space-y-4 text-sm text-slate-400">

                        <li>
                            📧 support@loookers.id
                        </li>

                        <li>
                            📞 +62 812-0000-0000
                        </li>

                        <li>
                            📍 Indonesia
                        </li>

                    </ul>

                </div>

            </div>


            <div
                class="mt-14 flex flex-col justify-between gap-4 border-t border-slate-800 pt-8 text-sm text-slate-500 sm:flex-row"
            >

                <p>
                    © {{ date('Y') }} Loookers. All rights reserved.
                </p>

                <p>
                    Loookers Web v1.0.0
                </p>

            </div>

        </div>

    </footer>


    {{-- ========================================================= --}}
    {{-- JAVASCRIPT --}}
    {{-- ========================================================= --}}

    <script>

        /*
        |--------------------------------------------------------------------------
        | Mobile Menu
        |--------------------------------------------------------------------------
        */

        const mobileMenuButton =
            document.getElementById('mobileMenuButton');

        const mobileMenu =
            document.getElementById('mobileMenu');


        mobileMenuButton.addEventListener('click', function () {

            mobileMenu.classList.toggle('hidden');

        });


        /*
        |--------------------------------------------------------------------------
        | Navbar Shadow On Scroll
        |--------------------------------------------------------------------------
        */

        const navbar =
            document.getElementById('navbar');


        window.addEventListener('scroll', function () {

            if (window.scrollY > 20) {

                navbar.classList.add(
                    'border-slate-200',
                    'shadow-sm'
                );

            } else {

                navbar.classList.remove(
                    'border-slate-200',
                    'shadow-sm'
                );

            }

        });

    </script>

</body>

</html>