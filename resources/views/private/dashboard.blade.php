<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard | Smart Worklog</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-slate-50 text-slate-900">

    <div class="min-h-screen flex">

        <aside
            class="hidden lg:flex
                   w-64
                   shrink-0
                   flex-col
                   border-r border-slate-200
                   bg-white">

            {{-- Brand --}}
            <div
                class="h-16
                       flex items-center
                       px-5
                       border-b border-slate-200">

                <div
                    class="w-9 h-9
                           rounded-lg
                           bg-slate-900
                           text-white
                           flex items-center justify-center
                           text-xs
                           font-bold">
                    SW
                </div>

                <div class="ml-3">

                    <h1 class="text-sm font-semibold text-slate-900">
                        Smart Worklog
                    </h1>

                    <p class="text-[11px] text-slate-400">
                        Work management
                    </p>

                </div>

            </div>


            {{-- Navigation --}}
            <nav class="flex-1 px-3 py-5">

                <p
                    class="px-3 mb-2
                           text-[10px]
                           font-semibold
                           uppercase
                           tracking-wider
                           text-slate-400">
                    Main Menu
                </p>


                {{-- Dashboard --}}
                <a href="{{ route('dashboard') }}"
                    class="flex items-center gap-3
                           px-3 py-2.5
                           rounded-lg
                           bg-slate-100
                           text-slate-900
                           text-sm
                           font-medium">

                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">

                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                            d="M3 12l9-9 9 9M5 10v10a1 1 0 001 1h4v-6h4v6h4a1 1 0 001-1V10" />

                    </svg>

                    Dashboard

                </a>


                {{-- Cases --}}
                <a href="#"
                    class="mt-1
                           flex items-center gap-3
                           px-3 py-2.5
                           rounded-lg
                           text-slate-600
                           hover:bg-slate-50
                           hover:text-slate-900
                           text-sm
                           transition">

                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">

                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                            d="M3 7h18M5 7v12a2 2 0 002 2h10a2 2 0 002-2V7M8 7V5a2 2 0 012-2h4a2 2 0 012 2v2" />

                    </svg>

                    Cases

                </a>


                {{-- Activities --}}
                <a href="#"
                    class="mt-1
                           flex items-center gap-3
                           px-3 py-2.5
                           rounded-lg
                           text-slate-600
                           hover:bg-slate-50
                           hover:text-slate-900
                           text-sm
                           transition">

                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">

                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                            d="M12 8v4l3 2M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />

                    </svg>

                    Activities

                </a>


                {{-- Reports --}}
                <a href="#"
                    class="mt-1
                           flex items-center gap-3
                           px-3 py-2.5
                           rounded-lg
                           text-slate-600
                           hover:bg-slate-50
                           hover:text-slate-900
                           text-sm
                           transition">

                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">

                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                            d="M4 19V5M4 19h16M8 16v-4M12 16V8M16 16v-7" />

                    </svg>

                    Reports

                </a>


                {{-- Administration --}}
                <p
                    class="px-3 mt-7 mb-2
                           text-[10px]
                           font-semibold
                           uppercase
                           tracking-wider
                           text-slate-400">
                    Administration
                </p>


                {{-- Accounts --}}
                <a href="#"
                    class="flex items-center gap-3
                           px-3 py-2.5
                           rounded-lg
                           text-slate-600
                           hover:bg-slate-50
                           hover:text-slate-900
                           text-sm
                           transition">

                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">

                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                            d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2M9 11a4 4 0 100-8 4 4 0 000 8zM22 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75" />

                    </svg>

                    Accounts

                </a>


                {{-- Roles --}}
                <a href="#"
                    class="mt-1
                           flex items-center gap-3
                           px-3 py-2.5
                           rounded-lg
                           text-slate-600
                           hover:bg-slate-50
                           hover:text-slate-900
                           text-sm
                           transition">

                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">

                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                            d="M12 15a3 3 0 100-6 3 3 0 000 6zM19.4 15a1.65 1.65 0 00.33 1.82l.06.06-1.42 1.42-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21h-2v-.08a1.65 1.65 0 00-1-1.51 1.65 1.65 0 00-1.82.33l-.06.06-1.42-1.42.06-.06A1.65 1.65 0 009.6 15a1.65 1.65 0 00-1.51-1H8v-2h.09a1.65 1.65 0 001.51-1 1.65 1.65 0 00-.33-1.82l-.06-.06 1.42-1.42.06.06a1.65 1.65 0 001.82.33h.01A1.65 1.65 0 0013.5 6.6V6h2v.6a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06 1.42 1.42-.06.06A1.65 1.65 0 0019.4 11v.01a1.65 1.65 0 001.51 1H21v2h-.09a1.65 1.65 0 00-1.51 1z" />

                    </svg>

                    Roles & Permissions

                </a>

            </nav>


            {{-- User / Logout --}}
            <div class="border-t border-slate-200
                       p-3">

                <div class="flex items-center gap-3 px-2 py-2">

                    <div
                        class="w-9 h-9
                               shrink-0
                               rounded-full
                               bg-slate-100
                               flex items-center justify-center
                               text-xs
                               font-semibold
                               text-slate-600">

                        {{ strtoupper(substr(auth()->user()->full_name, 0, 1)) }}

                    </div>

                    <div class="min-w-0 flex-1">

                        <p
                            class="text-xs
                                   font-medium
                                   text-slate-800
                                   truncate">

                            {{ auth()->user()->full_name }}

                        </p>

                        <p
                            class="text-[11px]
                                   text-slate-400
                                   truncate">

                            {{ auth()->user()->role->name ?? 'User' }}

                        </p>

                    </div>

                </div>


                <form action="{{ route('logout') }}" method="POST" class="mt-2">

                    @csrf

                    <button type="submit"
                        class="w-full
                               flex items-center gap-3
                               px-3 py-2
                               rounded-lg
                               text-xs
                               text-slate-500
                               hover:bg-slate-50
                               hover:text-slate-900
                               transition">

                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">

                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                d="M15 17l5-5-5-5M20 12H9M9 21H5a2 2 0 01-2-2V5a2 2 0 012-2h4" />

                        </svg>

                        Sign out

                    </button>

                </form>

            </div>

        </aside>


        {{-- ========================================================= --}}
        {{-- MAIN CONTENT --}}
        {{-- ========================================================= --}}

        <div class="flex-1 min-w-0">


            {{-- Topbar --}}
            <header
                class="h-16
                       flex items-center justify-between
                       px-4 sm:px-6 lg:px-8
                       bg-white
                       border-b border-slate-200">

                <div>

                    <h2 class="text-sm sm:text-base font-semibold text-slate-900">
                        Dashboard
                    </h2>

                    <p class="hidden sm:block text-xs text-slate-400">
                        Overview of your workspace
                    </p>

                </div>


                {{-- Mobile User --}}
                <div class="flex items-center gap-3">

                    <div class="hidden sm:block text-right">

                        <p class="text-xs font-medium text-slate-700">
                            {{ auth()->user()->full_name }}
                        </p>

                        <p class="text-[11px] text-slate-400">
                            {{ auth()->user()->position }}
                        </p>

                    </div>

                    <div
                        class="w-9 h-9
                               rounded-full
                               bg-slate-900
                               text-white
                               flex items-center justify-center
                               text-xs
                               font-semibold">

                        {{ strtoupper(substr(auth()->user()->full_name, 0, 1)) }}

                    </div>

                </div>

            </header>


            {{-- Content --}}
            <main class="p-4 sm:p-6 lg:p-8">

                {{-- Welcome --}}
                <div class="mb-6 sm:mb-8">

                    <p class="text-sm text-slate-500">
                        Welcome back,
                    </p>

                    <h1
                        class="mt-1
                               text-xl sm:text-2xl
                               font-semibold
                               tracking-tight
                               text-slate-900">

                        {{ auth()->user()->full_name }}

                    </h1>

                </div>


                {{-- Statistics --}}
                <div
                    class="grid
                           grid-cols-1
                           sm:grid-cols-2
                           xl:grid-cols-4
                           gap-4">

                    {{-- Active Cases --}}
                    <div
                        class="bg-white
                               border border-slate-200
                               rounded-xl
                               p-5">

                        <p class="text-xs font-medium text-slate-500">
                            Active Cases
                        </p>

                        <p
                            class="mt-2
                                   text-2xl
                                   font-semibold
                                   text-slate-900">
                            0
                        </p>

                        <p class="mt-1 text-[11px] text-slate-400">
                            Current active cases
                        </p>

                    </div>


                    {{-- Activities --}}
                    <div
                        class="bg-white
                               border border-slate-200
                               rounded-xl
                               p-5">

                        <p class="text-xs font-medium text-slate-500">
                            Activities
                        </p>

                        <p
                            class="mt-2
                                   text-2xl
                                   font-semibold
                                   text-slate-900">
                            0
                        </p>

                        <p class="mt-1 text-[11px] text-slate-400">
                            Activities this week
                        </p>

                    </div>


                    {{-- Pending --}}
                    <div
                        class="bg-white
                               border border-slate-200
                               rounded-xl
                               p-5">

                        <p class="text-xs font-medium text-slate-500">
                            Pending
                        </p>

                        <p
                            class="mt-2
                                   text-2xl
                                   font-semibold
                                   text-slate-900">
                            0
                        </p>

                        <p class="mt-1 text-[11px] text-slate-400">
                            Pending activities
                        </p>

                    </div>


                    {{-- Reports --}}
                    <div
                        class="bg-white
                               border border-slate-200
                               rounded-xl
                               p-5">

                        <p class="text-xs font-medium text-slate-500">
                            Reports
                        </p>

                        <p
                            class="mt-2
                                   text-2xl
                                   font-semibold
                                   text-slate-900">
                            0
                        </p>

                        <p class="mt-1 text-[11px] text-slate-400">
                            Generated reports
                        </p>

                    </div>

                </div>


                {{-- Bottom Section --}}
                <div
                    class="grid
                           grid-cols-1
                           xl:grid-cols-3
                           gap-4
                           mt-4">


                    {{-- Recent Activities --}}
                    <div
                        class="xl:col-span-2
                               bg-white
                               border border-slate-200
                               rounded-xl">

                        <div class="px-5 py-4
                                   border-b border-slate-200">

                            <h3 class="text-sm font-semibold text-slate-900">
                                Recent Activities
                            </h3>

                            <p class="mt-0.5 text-xs text-slate-400">
                                Latest activity records
                            </p>

                        </div>


                        <div class="p-5">

                            <div class="py-10
                                       text-center">

                                <p class="text-sm text-slate-500">
                                    No activities yet.
                                </p>

                                <p class="mt-1 text-xs text-slate-400">
                                    Activity records will appear here.
                                </p>

                            </div>

                        </div>

                    </div>


                    {{-- Account Information --}}
                    <div
                        class="bg-white
                               border border-slate-200
                               rounded-xl">

                        <div class="px-5 py-4
                                   border-b border-slate-200">

                            <h3 class="text-sm font-semibold text-slate-900">
                                Account
                            </h3>

                            <p class="mt-0.5 text-xs text-slate-400">
                                Your account information
                            </p>

                        </div>


                        <div class="p-5 space-y-4">

                            <div>

                                <p class="text-[11px] text-slate-400">
                                    Full Name
                                </p>

                                <p class="mt-1 text-sm font-medium text-slate-800">
                                    {{ auth()->user()->full_name }}
                                </p>

                            </div>


                            <div>

                                <p class="text-[11px] text-slate-400">
                                    Email
                                </p>

                                <p class="mt-1 text-sm font-medium text-slate-800 break-all">
                                    {{ auth()->user()->email }}
                                </p>

                            </div>


                            <div>

                                <p class="text-[11px] text-slate-400">
                                    Position
                                </p>

                                <p class="mt-1 text-sm font-medium text-slate-800">
                                    {{ auth()->user()->position }}
                                </p>

                            </div>


                            <div>

                                <p class="text-[11px] text-slate-400">
                                    Role
                                </p>

                                <span
                                    class="inline-flex
                                           mt-1
                                           px-2.5 py-1
                                           rounded-md
                                           bg-slate-100
                                           text-[11px]
                                           font-medium
                                           text-slate-700">

                                    {{ auth()->user()->role->name ?? 'User' }}

                                </span>

                            </div>

                        </div>

                    </div>

                </div>

            </main>

        </div>

    </div>

</body>

</html>
