<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Employee | Smart Worklog</title>

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
                class="mb-1 flex items-center rounded-lg px-3 py-2.5 text-sm text-slate-400 hover:bg-slate-800 hover:text-white">
                Activity
            </a>

            <a href="#"
                class="mb-1 flex items-center rounded-lg px-3 py-2.5 text-sm text-slate-400 hover:bg-slate-800 hover:text-white">
                Cases
            </a>

            <a href="#"
                class="mb-1 flex items-center rounded-lg bg-blue-600 px-3 py-2.5 text-sm font-medium text-white">
                Employee
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
                    AD
                </div>

                <div>
                    <p class="text-sm font-medium">
                        Admin
                    </p>

                    <p class="text-xs text-slate-500">
                        Administrator
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
                    Employee
                </h2>

                <p class="text-sm text-slate-500">
                    Kelola data karyawan dan pengguna sistem
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
                        Employee List
                    </h3>

                    <p class="text-sm text-slate-500">
                        Daftar pengguna yang terdaftar dalam sistem.
                    </p>
                </div>

                <button
                    class="rounded-lg bg-blue-600 px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-blue-700">
                    + Add Employee
                </button>

            </div>


            <!-- Employee Summary -->
            <div class="mb-6 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">

                <!-- Total -->
                <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">

                    <p class="text-sm text-slate-500">
                        Total Employees
                    </p>

                    <p class="mt-2 text-3xl font-bold">
                        24
                    </p>

                    <p class="mt-1 text-xs text-slate-400">
                        Terdaftar di sistem
                    </p>

                </div>


                <!-- Active -->
                <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">

                    <p class="text-sm text-slate-500">
                        Active
                    </p>

                    <p class="mt-2 text-3xl font-bold text-green-600">
                        21
                    </p>

                    <p class="mt-1 text-xs text-slate-400">
                        Akun aktif
                    </p>

                </div>


                <!-- Lawyer -->
                <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">

                    <p class="text-sm text-slate-500">
                        Lawyers
                    </p>

                    <p class="mt-2 text-3xl font-bold text-blue-600">
                        8
                    </p>

                    <p class="mt-1 text-xs text-slate-400">
                        Staff lawyer
                    </p>

                </div>


                <!-- Staff -->
                <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">

                    <p class="text-sm text-slate-500">
                        Staff
                    </p>

                    <p class="mt-2 text-3xl font-bold text-purple-600">
                        16
                    </p>

                    <p class="mt-1 text-xs text-slate-400">
                        Staff kantor
                    </p>

                </div>

            </div>


            <!-- Filter -->
            <div class="mb-6 rounded-xl border border-slate-200 bg-white p-5 shadow-sm">

                <div class="grid gap-4 md:grid-cols-4">

                    <!-- Search -->
                    <div class="md:col-span-2">

                        <label class="mb-2 block text-sm font-medium text-slate-700">
                            Search Employee
                        </label>

                        <input type="text" placeholder="Cari nama atau email..."
                            class="w-full rounded-lg border border-slate-300 px-4 py-2.5 text-sm outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100">

                    </div>


                    <!-- Role -->
                    <div>

                        <label class="mb-2 block text-sm font-medium text-slate-700">
                            Role
                        </label>

                        <select
                            class="w-full rounded-lg border border-slate-300 px-4 py-2.5 text-sm outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100">

                            <option>All Roles</option>
                            <option>Admin</option>
                            <option>Lawyer</option>
                            <option>Staff</option>

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
                            <option>Active</option>
                            <option>Inactive</option>

                        </select>

                    </div>

                </div>

            </div>


            <!-- Employee Table -->
            <div class="overflow-hidden rounded-xl border border-slate-200 bg-white shadow-sm">

                <div class="border-b border-slate-200 px-6 py-4">

                    <h3 class="font-semibold">
                        Employee List
                    </h3>

                </div>


                <div class="overflow-x-auto">

                    <table class="w-full text-left text-sm">

                        <thead class="border-b border-slate-200 bg-slate-50">

                            <tr>

                                <th class="px-6 py-4 font-semibold text-slate-600">
                                    Employee
                                </th>

                                <th class="px-6 py-4 font-semibold text-slate-600">
                                    Email
                                </th>

                                <th class="px-6 py-4 font-semibold text-slate-600">
                                    Role
                                </th>

                                <th class="px-6 py-4 font-semibold text-slate-600">
                                    Join Date
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

                            <!-- Employee 1 -->
                            <tr class="hover:bg-slate-50">

                                <td class="px-6 py-4">

                                    <div class="flex items-center gap-3">

                                        <div
                                            class="flex h-10 w-10 items-center justify-center rounded-full bg-blue-100 font-semibold text-blue-700">
                                            RD
                                        </div>

                                        <div>

                                            <p class="font-medium text-slate-800">
                                                Rakan Dhiya
                                            </p>

                                            <p class="text-xs text-slate-500">
                                                EMP-001
                                            </p>

                                        </div>

                                    </div>

                                </td>

                                <td class="px-6 py-4 text-slate-600">
                                    rakan@example.com
                                </td>

                                <td class="px-6 py-4">

                                    <span class="rounded-full bg-blue-100 px-3 py-1 text-xs font-medium text-blue-700">
                                        Lawyer
                                    </span>

                                </td>

                                <td class="px-6 py-4">
                                    01 Jan 2026
                                </td>

                                <td class="px-6 py-4">

                                    <span
                                        class="rounded-full bg-green-100 px-3 py-1 text-xs font-medium text-green-700">
                                        Active
                                    </span>

                                </td>

                                <td class="px-6 py-4">

                                    <button class="mr-3 font-medium text-blue-600 hover:text-blue-800">
                                        View
                                    </button>

                                    <button class="font-medium text-slate-600 hover:text-slate-900">
                                        Edit
                                    </button>

                                </td>

                            </tr>


                            <!-- Employee 2 -->
                            <tr class="hover:bg-slate-50">

                                <td class="px-6 py-4">

                                    <div class="flex items-center gap-3">

                                        <div
                                            class="flex h-10 w-10 items-center justify-center rounded-full bg-purple-100 font-semibold text-purple-700">
                                            AS
                                        </div>

                                        <div>

                                            <p class="font-medium text-slate-800">
                                                Andi Saputra
                                            </p>

                                            <p class="text-xs text-slate-500">
                                                EMP-002
                                            </p>

                                        </div>

                                    </div>

                                </td>

                                <td class="px-6 py-4 text-slate-600">
                                    andi@example.com
                                </td>

                                <td class="px-6 py-4">

                                    <span
                                        class="rounded-full bg-purple-100 px-3 py-1 text-xs font-medium text-purple-700">
                                        Staff
                                    </span>

                                </td>

                                <td class="px-6 py-4">
                                    10 Jan 2026
                                </td>

                                <td class="px-6 py-4">

                                    <span
                                        class="rounded-full bg-green-100 px-3 py-1 text-xs font-medium text-green-700">
                                        Active
                                    </span>

                                </td>

                                <td class="px-6 py-4">

                                    <button class="mr-3 font-medium text-blue-600 hover:text-blue-800">
                                        View
                                    </button>

                                    <button class="font-medium text-slate-600 hover:text-slate-900">
                                        Edit
                                    </button>

                                </td>

                            </tr>


                            <!-- Employee 3 -->
                            <tr class="hover:bg-slate-50">

                                <td class="px-6 py-4">

                                    <div class="flex items-center gap-3">

                                        <div
                                            class="flex h-10 w-10 items-center justify-center rounded-full bg-green-100 font-semibold text-green-700">
                                            DF
                                        </div>

                                        <div>

                                            <p class="font-medium text-slate-800">
                                                Dimas Firmansyah
                                            </p>

                                            <p class="text-xs text-slate-500">
                                                EMP-003
                                            </p>

                                        </div>

                                    </div>

                                </td>

                                <td class="px-6 py-4 text-slate-600">
                                    dimas@example.com
                                </td>

                                <td class="px-6 py-4">

                                    <span class="rounded-full bg-blue-100 px-3 py-1 text-xs font-medium text-blue-700">
                                        Lawyer
                                    </span>

                                </td>

                                <td class="px-6 py-4">
                                    15 Feb 2026
                                </td>

                                <td class="px-6 py-4">

                                    <span
                                        class="rounded-full bg-green-100 px-3 py-1 text-xs font-medium text-green-700">
                                        Active
                                    </span>

                                </td>

                                <td class="px-6 py-4">

                                    <button class="mr-3 font-medium text-blue-600 hover:text-blue-800">
                                        View
                                    </button>

                                    <button class="font-medium text-slate-600 hover:text-slate-900">
                                        Edit
                                    </button>

                                </td>

                            </tr>


                            <!-- Employee 4 -->
                            <tr class="hover:bg-slate-50">

                                <td class="px-6 py-4">

                                    <div class="flex items-center gap-3">

                                        <div
                                            class="flex h-10 w-10 items-center justify-center rounded-full bg-amber-100 font-semibold text-amber-700">
                                            NA
                                        </div>

                                        <div>

                                            <p class="font-medium text-slate-800">
                                                Nadia Amelia
                                            </p>

                                            <p class="text-xs text-slate-500">
                                                EMP-004
                                            </p>

                                        </div>

                                    </div>

                                </td>

                                <td class="px-6 py-4 text-slate-600">
                                    nadia@example.com
                                </td>

                                <td class="px-6 py-4">

                                    <span
                                        class="rounded-full bg-purple-100 px-3 py-1 text-xs font-medium text-purple-700">
                                        Staff
                                    </span>

                                </td>

                                <td class="px-6 py-4">
                                    20 Mar 2026
                                </td>

                                <td class="px-6 py-4">

                                    <span
                                        class="rounded-full bg-slate-100 px-3 py-1 text-xs font-medium text-slate-600">
                                        Inactive
                                    </span>

                                </td>

                                <td class="px-6 py-4">

                                    <button class="mr-3 font-medium text-blue-600 hover:text-blue-800">
                                        View
                                    </button>

                                    <button class="font-medium text-slate-600 hover:text-slate-900">
                                        Edit
                                    </button>

                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>


                <!-- Pagination -->
                <div class="flex items-center justify-between border-t border-slate-200 px-6 py-4">

                    <p class="text-sm text-slate-500">
                        Showing 1–4 of 24 employees
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
