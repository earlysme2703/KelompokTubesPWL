<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
            @if(auth()->check())  <!-- Periksa jika pengguna sudah login -->
                 {{ auth()->user()->getRoleNames()->first() }}  <!-- Menampilkan role pengguna -->
            @endif
        </h2>
    </x-slot>

    <div class="container mx-auto p-6 lg:px-36 pt-16">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

            <!-- Card 1: Total Projects -->
            <div class="bg-blue-100 p-6 rounded-lg shadow-md">
                <h3 class="font-semibold text-lg">Total Projects</h3>
                <p class="text-3xl font-bold text-blue-600">25</p>
                <a href="#" class="text-blue-500 hover:underline">View Projects</a>
            </div>

            <!-- Card 2: Completed Tasks -->
            <div class="bg-green-100 p-6 rounded-lg shadow-md">
                <h3 class="font-semibold text-lg">Completed Tasks</h3>
                <p class="text-3xl font-bold text-green-600">120</p>
                <a href="#" class="text-green-500 hover:underline">View Tasks</a>
            </div>

            <!-- Card 3: Pending Approvals -->
            <div class="bg-yellow-100 p-6 rounded-lg shadow-md">
                <h3 class="font-semibold text-lg">Pending Approvals</h3>
                <p class="text-3xl font-bold text-yellow-600">7</p>
                <a href="#" class="text-yellow-500 hover:underline">View Approvals</a>
            </div>
        </div>

        <!-- Grafik atau Statistik -->
        <div class="mt-8">
            <div class="bg-green-200 p-6 rounded-lg shadow-md">
                <h3 class="font-semibold text-xl mb-4">Project Completion Overview</h3>
                <div class="relative w-full h-64">
                    <!-- Flowbite Chart Component (Misalnya, bar chart) -->
                    <canvas id="projectChart"></canvas>
                </div>
            </div>
        </div>

        <!-- Aktivitas Terbaru -->
        <div class="mt-8">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="font-semibold text-xl mb-4">Recent Activity</h3>
                <ul class="space-y-4">
                    <li class="flex items-center space-x-2">
                        <div class="w-2.5 h-2.5 bg-green-500 rounded-full"></div>
                        <p class="text-gray-700">Completed task "Design Mockup"</p>
                    </li>
                    <li class="flex items-center space-x-2">
                        <div class="w-2.5 h-2.5 bg-blue-500 rounded-full"></div>
                        <p class="text-gray-700">Started project "App Development"</p>
                    </li>
                    <li class="flex items-center space-x-2">
                        <div class="w-2.5 h-2.5 bg-yellow-500 rounded-full"></div>
                        <p class="text-gray-700">Pending approval for "Design Review"</p>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Pengaturan dan Notifikasi -->
        <div class="mt-8">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="font-semibold text-xl mb-4">Notifications</h3>
                <ul class="space-y-4">
                    <li class="flex items-center space-x-2">
                        <div class="w-2.5 h-2.5 bg-blue-500 rounded-full"></div>
                        <p class="text-gray-700">New message from Admin</p>
                    </li>
                    <li class="flex items-center space-x-2">
                        <div class="w-2.5 h-2.5 bg-yellow-500 rounded-full"></div>
                        <p class="text-gray-700">New task assigned: "Write Documentation"</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Script untuk Grafik atau Chart -->
    <script>
        var ctx = document.getElementById('projectChart').getContext('2d');
        var projectChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May'],
                datasets: [{
                    label: 'Completed Projects',
                    data: [10, 12, 15, 18, 20],
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</x-app-layout>
