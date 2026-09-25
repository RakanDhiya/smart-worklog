<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Attendance | Smart Worklog</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-slate-50 text-slate-900">

    <!-- Sidebar -->
    <aside class="fixed left-0 top-0 z-40 h-screen w-64 bg-slate-900 text-white">

        <!-- Logo -->
        <div class="flex h-16 items-center border-b border-slate-800 px-6">
            <h1 class="text-lg font-bold">
                Smart Worklog
            </h1>
        </div>

        <!-- Navigation -->
        <nav class="mt-6 px-4">

            <p class="mb-3 px-3 text-xs font-semibold uppercase tracking-wider text-slate-500">
                Menu
            </p>

            <a href="#"
                class="mb-1 flex items-center rounded-lg px-3 py-2.5 text-sm text-slate-400 hover:bg-slate-800 hover:text-white">
                Dashboard
            </a>

            <a href="#"
                class="mb-1 flex items-center rounded-lg bg-blue-600 px-3 py-2.5 text-sm font-medium text-white">
                Attendance
            </a>

            <a href="#"
                class="mb-1 flex items-center rounded-lg px-3 py-2.5 text-sm text-slate-400 hover:bg-slate-800 hover:text-white">
                Aktivitas
            </a>

            <a href="#"
                class="mb-1 flex items-center rounded-lg px-3 py-2.5 text-sm text-slate-400 hover:bg-slate-800 hover:text-white">
                Kasus
            </a>

            <a href="#"
                class="mb-1 flex items-center rounded-lg px-3 py-2.5 text-sm text-slate-400 hover:bg-slate-800 hover:text-white">
                Laporan
            </a>

        </nav>

        <!-- User -->
        <div class="absolute bottom-0 w-full border-t border-slate-800 p-4">
            <div class="flex items-center gap-3">

                <div class="flex h-10 w-10 items-center justify-center rounded-full bg-blue-600 font-semibold">
                    RD
                </div>

                <div>
                    <p class="text-sm font-medium">
                        Rakan Dhiya
                    </p>

                    <p class="text-xs text-slate-500">
                        Lawyer
                    </p>
                </div>

            </div>
        </div>

    </aside>


    <!-- Main Content -->
    <main class="ml-64 min-h-screen">

        <!-- Header -->
        <header class="flex h-16 items-center justify-between border-b border-slate-200 bg-white px-8">

            <div>
                <h2 class="text-xl font-semibold">
                    Attendance
                </h2>

                <p class="text-sm text-slate-500">
                    Kelola dan pantau kehadiran Anda
                </p>
            </div>

            <div class="text-right">
                <p class="text-sm font-medium">
                    Jumat, 25 September 2026
                </p>

                <p class="text-xs text-slate-500">
                    10:35 WIB
                </p>
            </div>

        </header>


        <!-- Content -->
        <div class="p-8">

            <!-- Today's Attendance -->
            <section class="mb-6">

                <div class="mb-4">
                    <h3 class="text-lg font-semibold">
                        Today's Attendance
                    </h3>

                    <p class="text-sm text-slate-500">
                        Catat kehadiran Anda hari ini.
                    </p>
                </div>


                <div class="grid gap-6 lg:grid-cols-3">

                    <!-- Status -->
                    <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">

                        <p class="text-sm text-slate-500">
                            Status
                        </p>

                        <div class="mt-3 flex items-center gap-3">

                            <span class="h-3 w-3 rounded-full bg-amber-500"></span>

                            <span class="text-xl font-semibold">
                                Not Checked In
                            </span>

                        </div>

                        <p class="mt-2 text-sm text-slate-500">
                            Anda belum melakukan absensi hari ini.
                        </p>

                    </div>


                    <!-- Check In -->
                    <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">

                        <p class="text-sm text-slate-500">
                            Check In
                        </p>

                        <p class="mt-2 text-3xl font-bold text-slate-800">
                            --
                        </p>

                        <button
                            class="mt-5 w-full rounded-lg bg-blue-600 px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-blue-700">
                            Check In
                        </button>

                    </div>


                    <!-- Check Out -->
                    <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">

                        <p class="text-sm text-slate-500">
                            Check Out
                        </p>

                        <p class="mt-2 text-3xl font-bold text-slate-800">
                            --
                        </p>

                        <button disabled
                            class="mt-5 w-full cursor-not-allowed rounded-lg bg-slate-200 px-4 py-2.5 text-sm font-semibold text-slate-400">
                            Check Out
                        </button>

                    </div>

                </div>

            </section>


            <!-- Attendance Summary -->
            <section class="mb-6">

                <div class="mb-4">
                    <h3 class="text-lg font-semibold">
                        Attendance Summary
                    </h3>

                    <p class="text-sm text-slate-500">
                        Ringkasan kehadiran bulan ini.
                    </p>
                </div>


                <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">

                    <!-- Present -->
                    <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">

                        <p class="text-sm text-slate-500">
                            Present
                        </p>

                        <p class="mt-2 text-3xl font-bold text-green-600">
                            18
                        </p>

                        <p class="mt-1 text-xs text-slate-400">
                            Hari hadir
                        </p>

                    </div>


                    <!-- Late -->
                    <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">

                        <p class="text-sm text-slate-500">
                            Late
                        </p>

                        <p class="mt-2 text-3xl font-bold text-amber-500">
                            2
                        </p>

                        <p class="mt-1 text-xs text-slate-400">
                            Terlambat
                        </p>

                    </div>


                    <!-- Absent -->
                    <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">

                        <p class="text-sm text-slate-500">
                            Absent
                        </p>

                        <p class="mt-2 text-3xl font-bold text-red-600">
                            1
                        </p>

                        <p class="mt-1 text-xs text-slate-400">
                            Tidak hadir
                        </p>

                    </div>


                    <!-- Attendance Rate -->
                    <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">

                        <p class="text-sm text-slate-500">
                            Attendance Rate
                        </p>

                        <p class="mt-2 text-3xl font-bold text-blue-600">
                            90%
                        </p>

                        <p class="mt-1 text-xs text-slate-400">
                            Bulan September
                        </p>

                    </div>

                </div>

            </section>


            <!-- Attendance History -->
            <section>

                <div class="mb-4">
                    <h3 class="text-lg font-semibold">
                        Attendance History
                    </h3>

                    <p class="text-sm text-slate-500">
                        Riwayat kehadiran Anda.
                    </p>
                </div>


                <div class="overflow-hidden rounded-xl border border-slate-200 bg-white shadow-sm">

                    <div class="overflow-x-auto">

                        <table class="w-full text-left text-sm">

                            <thead class="border-b border-slate-200 bg-slate-50">

                                <tr>

                                    <th class="px-6 py-4 font-semibold text-slate-600">
                                        Date
                                    </th>

                                    <th class="px-6 py-4 font-semibold text-slate-600">
                                        Check In
                                    </th>

                                    <th class="px-6 py-4 font-semibold text-slate-600">
                                        Check Out
                                    </th>

                                    <th class="px-6 py-4 font-semibold text-slate-600">
                                        Duration
                                    </th>

                                    <th class="px-6 py-4 font-semibold text-slate-600">
                                        Status
                                    </th>

                                </tr>

                            </thead>

                            <tbody class="divide-y divide-slate-100">

                                <tr class="hover:bg-slate-50">

                                    <td class="px-6 py-4">
                                        24 Sep 2026
                                    </td>

                                    <td class="px-6 py-4">
                                        08:02
                                    </td>

                                    <td class="px-6 py-4">
                                        17:05
                                    </td>

                                    <td class="px-6 py-4">
                                        9h 03m
                                    </td>

                                    <td class="px-6 py-4">

                                        <span
                                            class="rounded-full bg-green-100 px-3 py-1 text-xs font-medium text-green-700">
                                            Present
                                        </span>

                                    </td>

                                </tr>


                                <tr class="hover:bg-slate-50">

                                    <td class="px-6 py-4">
                                        23 Sep 2026
                                    </td>

                                    <td class="px-6 py-4">
                                        08:17
                                    </td>

                                    <td class="px-6 py-4">
                                        17:02
                                    </td>

                                    <td class="px-6 py-4">
                                        8h 45m
                                    </td>

                                    <td class="px-6 py-4">

                                        <span
                                            class="rounded-full bg-amber-100 px-3 py-1 text-xs font-medium text-amber-700">
                                            Late
                                        </span>

                                    </td>

                                </tr>


                                <tr class="hover:bg-slate-50">

                                    <td class="px-6 py-4">
                                        22 Sep 2026
                                    </td>

                                    <td class="px-6 py-4">
                                        07:58
                                    </td>

                                    <td class="px-6 py-4">
                                        17:10
                                    </td>

                                    <td class="px-6 py-4">
                                        9h 12m
                                    </td>

                                    <td class="px-6 py-4">

                                        <span
                                            class="rounded-full bg-green-100 px-3 py-1 text-xs font-medium text-green-700">
                                            Present
                                        </span>

                                    </td>

                                </tr>


                                <tr class="hover:bg-slate-50">

                                    <td class="px-6 py-4">
                                        21 Sep 2026
                                    </td>

                                    <td class="px-6 py-4">
                                        -
                                    </td>

                                    <td class="px-6 py-4">
                                        -
                                    </td>

                                    <td class="px-6 py-4">
                                        -
                                    </td>

                                    <td class="px-6 py-4">

                                        <span
                                            class="rounded-full bg-red-100 px-3 py-1 text-xs font-medium text-red-700">
                                            Absent
                                        </span>

                                    </td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </section>

        </div>

    </main>

</body>

</html>
