<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Activity | Smart Worklog</title>

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
                class="mb-1 flex items-center rounded-lg px-3 py-2.5 text-sm text-slate-400 hover:bg-slate-800 hover:text-white">
                Attendance
            </a>

            <a href="#"
                class="mb-1 flex items-center rounded-lg bg-blue-600 px-3 py-2.5 text-sm font-medium text-white">
                Activity
            </a>

            <a href="#"
                class="mb-1 flex items-center rounded-lg px-3 py-2.5 text-sm text-slate-400 hover:bg-slate-800 hover:text-white">
                Cases
            </a>

            <a href="#"
                class="mb-1 flex items-center rounded-lg px-3 py-2.5 text-sm text-slate-400 hover:bg-slate-800 hover:text-white">
                Reports
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
                    Activity
                </h2>

                <p class="text-sm text-slate-500">
                    Catat dan kelola aktivitas pekerjaan
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

            <!-- Page Header -->
            <div class="mb-6 flex items-center justify-between">

                <div>
                    <h3 class="text-lg font-semibold">
                        Work Activities
                    </h3>

                    <p class="text-sm text-slate-500">
                        Catat aktivitas pekerjaan yang sedang Anda lakukan.
                    </p>
                </div>

                <button
                    class="rounded-lg bg-blue-600 px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-blue-700">
                    + Add Activity
                </button>

            </div>


            <!-- Activity Summary -->
            <div class="mb-6 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">

                <!-- Total Activity -->
                <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">

                    <p class="text-sm text-slate-500">
                        Total Activities
                    </p>

                    <p class="mt-2 text-3xl font-bold">
                        24
                    </p>

                    <p class="mt-1 text-xs text-slate-400">
                        September 2026
                    </p>

                </div>


                <!-- Completed -->
                <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">

                    <p class="text-sm text-slate-500">
                        Completed
                    </p>

                    <p class="mt-2 text-3xl font-bold text-green-600">
                        18
                    </p>

                    <p class="mt-1 text-xs text-slate-400">
                        Aktivitas selesai
                    </p>

                </div>


                <!-- In Progress -->
                <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">

                    <p class="text-sm text-slate-500">
                        In Progress
                    </p>

                    <p class="mt-2 text-3xl font-bold text-blue-600">
                        4
                    </p>

                    <p class="mt-1 text-xs text-slate-400">
                        Sedang dikerjakan
                    </p>

                </div>


                <!-- Pending -->
                <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">

                    <p class="text-sm text-slate-500">
                        Pending
                    </p>

                    <p class="mt-2 text-3xl font-bold text-amber-500">
                        2
                    </p>

                    <p class="mt-1 text-xs text-slate-400">
                        Menunggu tindakan
                    </p>

                </div>

            </div>


            <!-- Filter -->
            <div class="mb-6 rounded-xl border border-slate-200 bg-white p-5 shadow-sm">

                <div class="grid gap-4 md:grid-cols-4">

                    <!-- Search -->
                    <div class="md:col-span-2">

                        <label class="mb-2 block text-sm font-medium text-slate-700">
                            Search Activity
                        </label>

                        <input type="text" placeholder="Cari aktivitas..."
                            class="w-full rounded-lg border border-slate-300 px-4 py-2.5 text-sm outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100">

                    </div>


                    <!-- Type -->
                    <div>

                        <label class="mb-2 block text-sm font-medium text-slate-700">
                            Type
                        </label>

                        <select
                            class="w-full rounded-lg border border-slate-300 px-4 py-2.5 text-sm outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100">

                            <option>All Types</option>
                            <option>Case Handling</option>
                            <option>Meeting</option>
                            <option>Document</option>
                            <option>Research</option>
                            <option>Other</option>

                        </select>

                    </div>


                    <!-- Status -->
                    <div>

                        <label class="mb-2 block text-sm font-medium text-slate-700">
                            Status
                        </label>

                        <select
                            class="w-full rounded-lg border border-slate-300 px-4 py-2.5 text-sm outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100">

                            <option>All Status</option>
                            <option>Completed</option>
                            <option>In Progress</option>
                            <option>Pending</option>

                        </select>

                    </div>

                </div>

            </div>


            <!-- Activity List -->
            <div class="rounded-xl border border-slate-200 bg-white shadow-sm">

                <!-- Table Header -->
                <div class="border-b border-slate-200 px-6 py-4">

                    <h3 class="font-semibold">
                        Activity History
                    </h3>

                </div>


                <div class="overflow-x-auto">

                    <table class="w-full text-left text-sm">

                        <thead class="border-b border-slate-200 bg-slate-50">

                            <tr>

                                <th class="px-6 py-4 font-semibold text-slate-600">
                                    Activity
                                </th>

                                <th class="px-6 py-4 font-semibold text-slate-600">
                                    Case
                                </th>

                                <th class="px-6 py-4 font-semibold text-slate-600">
                                    Type
                                </th>

                                <th class="px-6 py-4 font-semibold text-slate-600">
                                    Date
                                </th>

                                <th class="px-6 py-4 font-semibold text-slate-600">
                                    Status
                                </th>

                                <th class="px-6 py-4 font-semibold text-slate-600">
                                    Action
                                </th>

                            </tr>

                        </thead>


                        <tbody class="divide-y divide-slate-100">

                            <!-- Activity 1 -->
                            <tr class="hover:bg-slate-50">

                                <td class="px-6 py-4">

                                    <p class="font-medium text-slate-800">
                                        Review dokumen perkara
                                    </p>

                                    <p class="mt-1 text-xs text-slate-500">
                                        Memeriksa dokumen bukti dan kontrak
                                    </p>

                                </td>

                                <td class="px-6 py-4">
                                    CASE-001
                                </td>

                                <td class="px-6 py-4">
                                    Document
                                </td>

                                <td class="px-6 py-4">
                                    25 Sep 2026
                                </td>

                                <td class="px-6 py-4">

                                    <span
                                        class="rounded-full bg-green-100 px-3 py-1 text-xs font-medium text-green-700">
                                        Completed
                                    </span>

                                </td>

                                <td class="px-6 py-4">

                                    <button class="font-medium text-blue-600 hover:text-blue-800">
                                        View
                                    </button>

                                </td>

                            </tr>


                            <!-- Activity 2 -->
                            <tr class="hover:bg-slate-50">

                                <td class="px-6 py-4">

                                    <p class="font-medium text-slate-800">
                                        Meeting dengan client
                                    </p>

                                    <p class="mt-1 text-xs text-slate-500">
                                        Konsultasi perkembangan kasus
                                    </p>

                                </td>

                                <td class="px-6 py-4">
                                    CASE-002
                                </td>

                                <td class="px-6 py-4">
                                    Meeting
                                </td>

                                <td class="px-6 py-4">
                                    25 Sep 2026
                                </td>

                                <td class="px-6 py-4">

                                    <span class="rounded-full bg-blue-100 px-3 py-1 text-xs font-medium text-blue-700">
                                        In Progress
                                    </span>

                                </td>

                                <td class="px-6 py-4">

                                    <button class="font-medium text-blue-600 hover:text-blue-800">
                                        View
                                    </button>

                                </td>

                            </tr>


                            <!-- Activity 3 -->
                            <tr class="hover:bg-slate-50">

                                <td class="px-6 py-4">

                                    <p class="font-medium text-slate-800">
                                        Legal research
                                    </p>

                                    <p class="mt-1 text-xs text-slate-500">
                                        Mencari referensi hukum terkait perkara
                                    </p>

                                </td>

                                <td class="px-6 py-4">
                                    CASE-003
                                </td>

                                <td class="px-6 py-4">
                                    Research
                                </td>

                                <td class="px-6 py-4">
                                    24 Sep 2026
                                </td>

                                <td class="px-6 py-4">

                                    <span
                                        class="rounded-full bg-amber-100 px-3 py-1 text-xs font-medium text-amber-700">
                                        Pending
                                    </span>

                                </td>

                                <td class="px-6 py-4">

                                    <button class="font-medium text-blue-600 hover:text-blue-800">
                                        View
                                    </button>

                                </td>

                            </tr>


                            <!-- Activity 4 -->
                            <tr class="hover:bg-slate-50">

                                <td class="px-6 py-4">

                                    <p class="font-medium text-slate-800">
                                        Penyusunan laporan kasus
                                    </p>

                                    <p class="mt-1 text-xs text-slate-500">
                                        Membuat laporan perkembangan perkara
                                    </p>

                                </td>

                                <td class="px-6 py-4">
                                    CASE-004
                                </td>

                                <td class="px-6 py-4">
                                    Case Handling
                                </td>

                                <td class="px-6 py-4">
                                    23 Sep 2026
                                </td>

                                <td class="px-6 py-4">

                                    <span
                                        class="rounded-full bg-green-100 px-3 py-1 text-xs font-medium text-green-700">
                                        Completed
                                    </span>

                                </td>

                                <td class="px-6 py-4">

                                    <button class="font-medium text-blue-600 hover:text-blue-800">
                                        View
                                    </button>

                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>


                <!-- Pagination -->
                <div class="flex items-center justify-between border-t border-slate-200 px-6 py-4">

                    <p class="text-sm text-slate-500">
                        Showing 1–4 of 24 activities
                    </p>

                    <div class="flex gap-2">

                        <button
                            class="rounded-lg border border-slate-300 px-3 py-2 text-sm text-slate-500 hover:bg-slate-50">
                            Previous
                        </button>

                        <button class="rounded-lg bg-blue-600 px-3 py-2 text-sm font-medium text-white">
                            1
                        </button>

                        <button
                            class="rounded-lg border border-slate-300 px-3 py-2 text-sm text-slate-600 hover:bg-slate-50">
                            2
                        </button>

                        <button
                            class="rounded-lg border border-slate-300 px-3 py-2 text-sm text-slate-600 hover:bg-slate-50">
                            3
                        </button>

                        <button
                            class="rounded-lg border border-slate-300 px-3 py-2 text-sm text-slate-600 hover:bg-slate-50">
                            Next
                        </button>

                    </div>

                </div>

            </div>

        </div>

    </main>

</body>

</html>
