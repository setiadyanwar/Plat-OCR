<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Kendaraan</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <!-- Dashboard Wrapper -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <!-- Left Column (Images) -->
            <div class="w-full bg-white rounded-lg shadow-lg p-4 space-y-6">
                <!-- Container for Car License Plate and OCR Result -->
                <div class="space-y-6">
                    <!-- Image of the car with license plate -->
                    <div>
                        <h2 class="text-2xl font-semibold mb-4">Kamera Scan</h2>
                        <video id="video" class="w-full h-full rounded-lg shadow-md" autoplay></video>
                        <button id="toggle-camera" class="mt-4 px-4 py-2 bg-red-500 text-white rounded-full">Stop</button>
                        <button id="capture" class="mt-4 mx-2 px-4 py-2 bg-black text-white rounded-full">Capture</button>   
                        <canvas id="canvas" class="hidden h-auto"></canvas>
                    </div>
                </div>
            </div>

            <!-- Right Column (Vehicle Data & Information) -->
            <div class="bg-white rounded-lg shadow-lg p-6 space-y-6">
                <!-- Data Kendaraan Section -->
                <div>
                    <!-- OCR Scan Result Image -->
                    <div class="mb-4">
                        <h3 class="text-xl font-semibold mb-2">Hasil Scan OCR</h3>
                        <img src="{{ asset("assets/hasil.png") }}" alt="OCR Scan Result" class="w-full h-auto rounded-lg shadow-md">
                    </div>
                    <h2 class="text-2xl font-semibold mb-4">Data Kendaraan</h2>
                    <div class="mb-4 ">
                        <span class="text-gray-500">Nomor Kendaraan:</span>
                        <span class="font-bold float-right ">B 505 WLG<i class="fas fa-copy cursor-pointer ml-2"></i></span>
                    </div>
                    <div class="p-4 border rounded-lg text-center bg-gray-50">
                        <span class="text-3xl font-bold">B 505 WLG <i class="fas fa-copy cursor-pointer ml-2"></i>  </span>
                    </div>
                </div>

                <!-- Identifikasi Plat -->
                <div class="space-y-4">
                    <!-- Huruf Depan -->
                    <div class="flex items-center">
                        <span class="text-gray-500 w-40">Huruf depan</span>
                        <span class="font-bold">: B</span>
                        <span class="ml-2">- JAKARTA BARAT</span>
                    </div>

                    <!-- Kode Angka -->
                    <div class="flex items-center">
                        <span class="text-gray-500 w-40">Kode Angka</span>
                        <span class="font-bold">: 505</span>
                        <span class="ml-2">- Urutan 505</span>
                    </div>

                    <!-- Huruf Belakang -->
                    <div class="flex items-center">
                        <span class="text-gray-500 w-40">Huruf belakang</span>
                        <span class="font-bold">: WLG</span>
                        <span class="ml-2">- Kota Tangerang Selatan</span>
                    </div>
                </div>

                <!-- Keterangan -->
                <div>
                    <h3 class="text-xl font-semibold mb-2 mt-6">Keterangan</h3>
                    <div class="flex">
                        <img src="{{ asset("assets/ket.png") }}" alt="License Plate Explanation" class="w-60 h-auto">
                    </div>
                    <p class="mt-4 text-sm text-gray-600">
                        Kode huruf depan: menunjukkan wilayah asal kendaraan<br>
                        Kode huruf belakang: menunjukkan asal kota/kab kendaraan<br>
                        Kode angka: menunjukkan urutan pendaftaran kendaraan
                    </p>
                </div>
            </div>

        </div>
    </div>
    <script src="{{ asset('js/kamera.js') }}"></script>
</body>
</html>
