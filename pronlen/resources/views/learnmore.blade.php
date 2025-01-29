<!-- resources/views/learn-more.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn More - Flowbite</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.0/flowbite.min.css">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="max-w-3xl mx-auto p-6 bg-white shadow-lg rounded-lg text-center">
        <h1 class="text-3xl font-bold text-gray-900">Tentang Kami</h1>
        <p class="mt-4 text-gray-600">
            Kami adalah mahasiswa Universitas Logistik dan Bisnis Internasional.
        </p>

        <button data-modal-target="learnMoreModal" data-modal-toggle="learnMoreModal"
            class="mt-4 text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
            Learn More
        </button>
    </div>

    <!-- Modal Learn More -->
    <div id="learnMoreModal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed inset-0 z-50 flex items-center justify-center bg-gray-900 bg-opacity-50">
        <div class="relative p-4 w-full max-w-md">
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal Header -->
                <div class="flex justify-between items-center p-4 border-b rounded-t">
                    <h3 class="text-xl font-semibold text-gray-900">
                        Tentang Kami
                    </h3>
                    <button type="button" class="text-gray-400 hover:text-gray-900 rounded-lg text-sm p-1.5"
                        data-modal-hide="learnMoreModal">
                        ✖
                    </button>
                </div>
                <!-- Modal Body -->
                <div class="p-4">
                    <p class="text-gray-700">
                        Web ini terinspirasi dari banyaknya lulusan IT yang sulit mendapatkan pekerjaan sesuai jobdesknya
                    </p>
                    <p class="mt-2 text-gray-700">
                        Visi kami adalah menyejahterakan programmer hingga cuan!
                    </p>
                </div>
                <!-- Modal Footer -->
                <div class="p-4 border-t flex justify-end">
                    <button data-modal-hide="learnMoreModal"
                        class="text-gray-600 bg-gray-200 hover:bg-gray-300 focus:ring-2 focus:ring-gray-400 rounded-lg px-4 py-2">
                        Tutup
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.0/flowbite.min.js"></script>

</body>
</html>
