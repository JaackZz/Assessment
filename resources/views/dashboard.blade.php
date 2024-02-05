<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex">
                    <!-- Sidebar -->
                    <div class="w-1/4 bg-gray-200 p-4"
                        style="background-image: url('/assets/side.jpg'); background-size: 100% 100%;">


                    </div>

                    <!-- Main Content Area -->
                    <div class="w-3/4 p-4">
                        <div class="text-gray-900">

                            <!-- Container for Small Charts -->
                            <div class="charts-container mt-4 flex flex-wrap">
                                <!-- Bar Chart 1 -->
                                <div class="chart-container"
                                    style="margin-right: 10px; margin-bottom: 10px; width: 48%;">
                                    <canvas id="barChart1" width="300" height="150"></canvas>
                                </div>

                                <!-- Line Chart 1 -->
                                <div class="chart-container"
                                    style="margin-right: 10px; margin-bottom: 10px; width: 48%;">
                                    <canvas id="lineChart1" width="300" height="150"></canvas>
                                </div>

                                <!-- Pie Chart 1 -->
                                <div class="chart-container"
                                    style="margin-right: 10px; margin-bottom: 10px; width: 48%;">
                                    <canvas id="pieChart1" width="300" height="150"></canvas>
                                </div>

                                <!-- Bar Chart 2 -->
                                <div class="chart-container"
                                    style="margin-right: 10px; margin-bottom: 10px; width: 48%;">
                                    <canvas id="barChart2" width="300" height="150"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
