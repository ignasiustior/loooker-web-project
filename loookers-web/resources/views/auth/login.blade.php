<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Login - Loookers</title>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])
</head>

<body class="min-h-screen bg-gray-100">

    <div class="flex min-h-screen items-center justify-center px-4">

        <div class="w-full max-w-md rounded-2xl bg-white p-8 shadow-lg">

            {{-- Header --}}
            <div class="mb-8 text-center">

                <h1 class="text-3xl font-bold text-gray-900">
                    Login
                </h1>

                <p class="mt-2 text-sm text-gray-500">
                    Masuk ke akun Loookers Anda
                </p>

            </div>


            {{-- Success Message --}}
            @if (session('success'))

                <div class="mb-6 rounded-lg bg-green-50 p-4 text-sm text-green-700">

                    {{ session('success') }}

                </div>

            @endif


            {{-- Error Message --}}
            @if ($errors->any())

                <div class="mb-6 rounded-lg bg-red-50 p-4 text-sm text-red-700">

                    <p class="mb-2 font-semibold">
                        Login gagal
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


            {{-- Form Login --}}
            <form
                action="{{ route('login.process') }}"
                method="POST"
                class="space-y-5"
            >

                @csrf


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
                        autocomplete="username"
                        class="w-full rounded-lg border border-gray-300 px-4 py-3 text-sm outline-none transition focus:border-green-500 focus:ring-2 focus:ring-green-200"
                        required
                        autofocus
                    >

                </div>


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
                        placeholder="Masukkan password"
                        autocomplete="current-password"
                        class="w-full rounded-lg border border-gray-300 px-4 py-3 text-sm outline-none transition focus:border-green-500 focus:ring-2 focus:ring-green-200"
                        required
                    >

                </div>


                {{-- Remember --}}
                <div class="flex items-center">

                    <input
                        type="checkbox"
                        id="remember"
                        name="remember"
                        value="1"
                        class="h-4 w-4 rounded border-gray-300 text-green-600 focus:ring-green-500"
                    >

                    <label
                        for="remember"
                        class="ml-2 text-sm text-gray-600"
                    >
                        Ingat saya
                    </label>

                </div>


                {{-- Button --}}
                <button
                    type="submit"
                    class="w-full rounded-lg bg-green-600 px-4 py-3 text-sm font-semibold text-white transition hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2"
                >
                    Login
                </button>

            </form>


            {{-- Register --}}
            <div class="mt-6 text-center text-sm text-gray-500">

                Belum memiliki akun?

                <a
                    href="{{ route('register') }}"
                    class="font-semibold text-green-600 hover:text-green-700"
                >
                    Daftar sebagai Pelamar
                </a>

            </div>

        </div>

    </div>

</body>

</html>