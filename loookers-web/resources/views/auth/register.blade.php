<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Register - Loookers</title>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])
</head>

<body class="min-h-screen bg-gray-100">

    <div class="flex min-h-screen items-center justify-center px-4 py-10">

        <div class="w-full max-w-2xl rounded-2xl bg-white p-8 shadow-lg">

            {{-- Header --}}
            <div class="mb-8 text-center">

                <h1 class="text-3xl font-bold text-gray-900">
                    Buat Akun Pelamar
                </h1>

                <p class="mt-2 text-sm text-gray-500">
                    Daftarkan diri Anda untuk mulai mencari pekerjaan
                    di Loookers.
                </p>

            </div>


            {{-- Error --}}
            @if ($errors->any())

                <div class="mb-6 rounded-lg bg-red-50 p-4 text-sm text-red-700">

                    <p class="mb-2 font-semibold">
                        Terdapat kesalahan:
                    </p>

                    <ul class="list-inside list-disc">
                        @foreach ($errors->all() as $error)

                            <li>
                                {{ $error }}
                            </li>

                        @endforeach
                    </ul>

                </div>

            @endif


            {{-- Form --}}
            <form
                action="{{ route('register.process') }}"
                method="POST"
                class="space-y-6"
            >

                @csrf


                {{-- Akun --}}
                <div>

                    <h2 class="mb-4 text-lg font-semibold text-gray-900">
                        Informasi Akun
                    </h2>

                    <div class="space-y-4">

                        {{-- Username --}}
                        <div>

                            <label
                                for="username"
                                class="mb-1 block text-sm font-medium text-gray-700"
                            >
                                Username
                            </label>

                            <input
                                type="text"
                                id="username"
                                name="username"
                                value="{{ old('username') }}"
                                placeholder="Masukkan username"
                                class="w-full rounded-lg border border-gray-300 px-4 py-3 text-sm outline-none transition focus:border-green-500 focus:ring-2 focus:ring-green-200"
                                required
                            >

                        </div>


                        <div class="grid gap-4 md:grid-cols-2">

                            {{-- Password --}}
                            <div>

                                <label
                                    for="password"
                                    class="mb-1 block text-sm font-medium text-gray-700"
                                >
                                    Password
                                </label>

                                <input
                                    type="password"
                                    id="password"
                                    name="password"
                                    placeholder="Minimal 8 karakter"
                                    class="w-full rounded-lg border border-gray-300 px-4 py-3 text-sm outline-none transition focus:border-green-500 focus:ring-2 focus:ring-green-200"
                                    required
                                >

                            </div>


                            {{-- Konfirmasi Password --}}
                            <div>

                                <label
                                    for="password_confirmation"
                                    class="mb-1 block text-sm font-medium text-gray-700"
                                >
                                    Konfirmasi Password
                                </label>

                                <input
                                    type="password"
                                    id="password_confirmation"
                                    name="password_confirmation"
                                    placeholder="Ulangi password"
                                    class="w-full rounded-lg border border-gray-300 px-4 py-3 text-sm outline-none transition focus:border-green-500 focus:ring-2 focus:ring-green-200"
                                    required
                                >

                            </div>

                        </div>

                    </div>

                </div>


                {{-- Data Pelamar --}}
                <div class="border-t border-gray-200 pt-6">

                    <h2 class="mb-4 text-lg font-semibold text-gray-900">
                        Informasi Pelamar
                    </h2>

                    <div class="space-y-4">

                        {{-- Nama --}}
                        <div>

                            <label
                                for="nama_lengkap"
                                class="mb-1 block text-sm font-medium text-gray-700"
                            >
                                Nama Lengkap
                            </label>

                            <input
                                type="text"
                                id="nama_lengkap"
                                name="nama_lengkap"
                                value="{{ old('nama_lengkap') }}"
                                placeholder="Masukkan nama lengkap"
                                class="w-full rounded-lg border border-gray-300 px-4 py-3 text-sm outline-none transition focus:border-green-500 focus:ring-2 focus:ring-green-200"
                                required
                            >

                        </div>


                        {{-- Email --}}
                        <div>

                            <label
                                for="email"
                                class="mb-1 block text-sm font-medium text-gray-700"
                            >
                                Email
                            </label>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                value="{{ old('email') }}"
                                placeholder="contoh@email.com"
                                class="w-full rounded-lg border border-gray-300 px-4 py-3 text-sm outline-none transition focus:border-green-500 focus:ring-2 focus:ring-green-200"
                                required
                            >

                        </div>


                        {{-- Nomor Telepon --}}
                        <div>

                            <label
                                for="nomor_telepon"
                                class="mb-1 block text-sm font-medium text-gray-700"
                            >
                                Nomor Telepon
                            </label>

                            <input
                                type="text"
                                id="nomor_telepon"
                                name="nomor_telepon"
                                value="{{ old('nomor_telepon') }}"
                                placeholder="08xxxxxxxxxx"
                                class="w-full rounded-lg border border-gray-300 px-4 py-3 text-sm outline-none transition focus:border-green-500 focus:ring-2 focus:ring-green-200"
                            >

                        </div>


                        {{-- Bidang Kerja --}}
                        <div>

                            <label
                                for="bidang_kerja"
                                class="mb-1 block text-sm font-medium text-gray-700"
                            >
                                Bidang Kerja
                            </label>

                            <select
                                id="bidang_kerja"
                                name="bidang_kerja"
                                class="w-full rounded-lg border border-gray-300 bg-white px-4 py-3 text-sm outline-none transition focus:border-green-500 focus:ring-2 focus:ring-green-200"
                                required
                            >

                                <option value="">
                                    Pilih bidang kerja
                                </option>

                                <option
                                    value="Backend Developer"
                                    {{ old('bidang_kerja') === 'Backend Developer' ? 'selected' : '' }}
                                >
                                    Backend Developer
                                </option>

                                <option
                                    value="Frontend Developer"
                                    {{ old('bidang_kerja') === 'Frontend Developer' ? 'selected' : '' }}
                                >
                                    Frontend Developer
                                </option>

                                <option
                                    value="Mobile Developer"
                                    {{ old('bidang_kerja') === 'Mobile Developer' ? 'selected' : '' }}
                                >
                                    Mobile Developer
                                </option>

                                <option
                                    value="Data Science"
                                    {{ old('bidang_kerja') === 'Data Science' ? 'selected' : '' }}
                                >
                                    Data Science
                                </option>

                                <option
                                    value="QA Engineer"
                                    {{ old('bidang_kerja') === 'QA Engineer' ? 'selected' : '' }}
                                >
                                    QA Engineer
                                </option>

                            </select>

                        </div>

                    </div>

                </div>


                {{-- GitHub --}}
                <div class="border-t border-gray-200 pt-6">

                    <h2 class="mb-4 text-lg font-semibold text-gray-900">
                        Profil GitHub
                    </h2>

                    <div class="space-y-4">

                        {{-- URL GitHub --}}
                        <div>

                            <label
                                for="url_github"
                                class="mb-1 block text-sm font-medium text-gray-700"
                            >
                                URL GitHub
                            </label>

                            <input
                                type="url"
                                id="url_github"
                                name="url_github"
                                value="{{ old('url_github') }}"
                                placeholder="https://github.com/username"
                                class="w-full rounded-lg border border-gray-300 px-4 py-3 text-sm outline-none transition focus:border-green-500 focus:ring-2 focus:ring-green-200"
                                required
                            >

                        </div>


                        {{-- Username GitHub --}}
                        <div>

                            <label
                                for="username_github"
                                class="mb-1 block text-sm font-medium text-gray-700"
                            >
                                Username GitHub
                            </label>

                            <input
                                type="text"
                                id="username_github"
                                name="username_github"
                                value="{{ old('username_github') }}"
                                placeholder="username GitHub"
                                class="w-full rounded-lg border border-gray-300 px-4 py-3 text-sm outline-none transition focus:border-green-500 focus:ring-2 focus:ring-green-200"
                                required
                            >

                        </div>

                    </div>

                </div>


                {{-- Submit --}}
                <button
                    type="submit"
                    class="w-full rounded-lg bg-green-600 px-4 py-3 text-sm font-semibold text-white transition hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2"
                >
                    Daftar sebagai Pelamar
                </button>

            </form>


            {{-- Login --}}
            <div class="mt-6 text-center text-sm text-gray-500">

                Sudah memiliki akun?

                <a
                    href="{{ route('login') }}"
                    class="font-semibold text-green-600 hover:text-green-700"
                >
                    Login di sini
                </a>

            </div>

        </div>

    </div>

</body>

</html>