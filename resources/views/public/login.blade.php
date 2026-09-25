<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | Smart Worklog</title>

    {{-- Tailwind CSS --}}
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-slate-50">

    <main
        class="min-h-screen flex items-center justify-center
               px-4 py-8
               sm:px-6 sm:py-10
               md:px-8
               lg:px-10">

        <div class="w-full max-w-md">

            {{-- Logo / Brand --}}
            <div class="text-center mb-6 sm:mb-8">

                <div
                    class="inline-flex items-center justify-center
                           w-11 h-11 sm:w-12 sm:h-12
                           rounded-xl
                           bg-slate-900 text-white
                           font-bold text-sm">
                    SW
                </div>

                <h1
                    class="mt-3 sm:mt-4
                           text-xl sm:text-2xl
                           font-semibold tracking-tight
                           text-slate-900">
                    Smart Worklog
                </h1>

                <p
                    class="mt-1.5 sm:mt-2
                          text-xs sm:text-sm
                          text-slate-500">
                    Work management system
                </p>

            </div>


            {{-- Login Card --}}
            <div
                class="bg-white
                       border border-slate-200
                       rounded-xl sm:rounded-2xl
                       shadow-sm
                       p-5 sm:p-7 md:p-8">

                {{-- Header --}}
                <div class="mb-6 sm:mb-7">

                    <h2
                        class="text-lg sm:text-xl
                               font-semibold
                               text-slate-900">
                        Welcome back
                    </h2>

                    <p
                        class="mt-1
                               text-xs sm:text-sm
                               leading-5
                               text-slate-500">
                        Sign in to continue to your workspace.
                    </p>

                </div>


                {{-- Success Message --}}
                @if (session('success'))
                    <div
                        class="mb-5
                               rounded-lg
                               border border-green-200
                               bg-green-50
                               px-3.5 py-3 sm:px-4">

                        <p class="text-sm text-green-700">
                            {{ session('success') }}
                        </p>

                    </div>
                @endif


                {{-- Validation Error --}}
                @if ($errors->any())

                    <div
                        class="mb-5
                               rounded-lg
                               border border-red-200
                               bg-red-50
                               px-3.5 py-3 sm:px-4">

                        <p class="text-sm font-medium text-red-700">
                            Login gagal
                        </p>

                        <ul
                            class="mt-1
                                   text-xs
                                   leading-5
                                   text-red-600">

                            @foreach ($errors->all() as $error)
                                <li>
                                    {{ $error }}
                                </li>
                            @endforeach

                        </ul>

                    </div>

                @endif


                {{-- Login Form --}}
                <form action="{{ route('login') }}" method="POST" class="space-y-4 sm:space-y-5">

                    @csrf


                    {{-- Email --}}
                    <div>

                        <label for="email"
                            class="block mb-1.5 sm:mb-2
                                   text-xs sm:text-sm
                                   font-medium
                                   text-slate-700">
                            Email
                        </label>

                        <input type="email" id="email" name="email" value="{{ old('email') }}"
                            placeholder="you@example.com" required autofocus autocomplete="email"
                            class="w-full h-10 sm:h-11
                                   px-3 sm:px-3.5
                                   rounded-lg
                                   border border-slate-300
                                   bg-white
                                   text-sm text-slate-900
                                   placeholder:text-slate-400
                                   outline-none
                                   transition
                                   focus:border-slate-900
                                   focus:ring-2
                                   focus:ring-slate-900/10
                                   @error('email')
                                       border-red-400
                                       focus:border-red-500
                                       focus:ring-red-500/10
                                   @enderror">

                        @error('email')
                            <p class="mt-1.5 text-xs text-red-600">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>


                    {{-- Password --}}
                    <div>

                        <div
                            class="flex items-center justify-between
                                   gap-3
                                   mb-1.5 sm:mb-2">

                            <label for="password"
                                class="text-xs sm:text-sm
                                       font-medium
                                       text-slate-700">
                                Password
                            </label>

                            {{-- Forgot Password --}}
                            <a href="#"
                                class="shrink-0
                                       text-[11px] sm:text-xs
                                       font-medium
                                       text-slate-600
                                       hover:text-slate-900
                                       transition">
                                Forgot password?
                            </a>

                        </div>


                        <input type="password" id="password" name="password" placeholder="Enter your password" required
                            autocomplete="current-password"
                            class="w-full h-10 sm:h-11
                                   px-3 sm:px-3.5
                                   rounded-lg
                                   border border-slate-300
                                   bg-white
                                   text-sm text-slate-900
                                   placeholder:text-slate-400
                                   outline-none
                                   transition
                                   focus:border-slate-900
                                   focus:ring-2
                                   focus:ring-slate-900/10
                                   @error('password')
                                       border-red-400
                                       focus:border-red-500
                                       focus:ring-red-500/10
                                   @enderror">

                        @error('password')
                            <p class="mt-1.5 text-xs text-red-600">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>


                    {{-- Remember Me --}}
                    <div class="flex items-center gap-2">

                        <input type="checkbox" id="remember" name="remember" value="1"
                            class="w-4 h-4
                                   shrink-0
                                   rounded
                                   border-slate-300
                                   text-slate-900
                                   focus:ring-slate-900">

                        <label for="remember"
                            class="text-xs sm:text-sm
                                   text-slate-600
                                   cursor-pointer">
                            Remember me
                        </label>

                    </div>


                    {{-- Submit --}}
                    <button type="submit"
                        class="w-full
                               min-h-10 sm:h-11
                               px-4
                               rounded-lg
                               bg-slate-900
                               text-sm font-medium
                               text-white
                               transition
                               hover:bg-slate-800
                               active:bg-slate-950
                               focus:outline-none
                               focus:ring-2
                               focus:ring-slate-900
                               focus:ring-offset-2">

                        Sign in

                    </button>

                </form>

            </div>


            {{-- Footer --}}
            <p
                class="mt-5 sm:mt-6
                       text-center
                       text-[11px] sm:text-xs
                       text-slate-400">

                © {{ date('Y') }} Smart Worklog System

            </p>

        </div>

    </main>

</body>

</html>
