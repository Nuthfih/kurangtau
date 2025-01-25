<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pronlen</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/ dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <link rel="shortcut icon" href="https://github.com/Nuthfih/asset/blob/main/logo.png?raw=true" type="image/x-icon">
</head>
<body class="bg-gray-50 dark:bg-gray-900">
<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
  <div class="px-3 py-3 lg:px-5 lg:pl-3">
    <div class="flex items-center justify-between">
      <div class="flex items-center justify-start">
        <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
               <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
            </svg>
         </button>
        <a href="#" class="flex ml-2 md:mr-24">
          <img src="https://github.com/Nuthfih/asset/blob/main/logo.png?raw=true" class="h-8 mr-3" alt="Pronlen Logo" />
          <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">Pronlen</span>
        </a>
      </div>
    </div>
  </div>
</nav>

<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 bg-white border-r border-gray-200 dark:bg-gray-800 dark:border-gray-700">
   <div class="h-full px-3 pb-4 overflow-y-auto">
      <ul class="space-y-2 font-medium">
         <li>
            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <span class="ml-3">Dashboard</span>
            </a>
         </li>
      </ul>
   </div>
</aside>

<div class="p-4 sm:ml-64">
    <div class="flex items-center justify-center h-screen bg-gray-50 dark:bg-gray-900">
        <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg p-8 w-full max-w-lg">
            <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200 mb-6">
                {{ isset($programmer) ? 'Edit Programmer' : 'Tambah Programmer' }}
            </h2>
            <form action="{{ isset($programmer) ? route('programmers.update', $programmer->id_programmer) : route('programmers.store') }}" method="POST" class="space-y-6">
                @csrf
                @if (isset($programmer))
                @method('PUT')
                @endif
    
                <!-- Nama Programmer -->
                <div>
                    <label for="nama_programmer" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                        Nama
                    </label>
                    <input type="text" id="nama_programmer" name="nama_programmer" value="{{ $programmer->nama_programmer ?? '' }}" 
                        class="mt-1 block w-full px-4 py-2 text-sm border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200" 
                        placeholder="Nama Programmer" required>
                </div>
    
                <!-- Keahlian -->
                <div>
                    <label for="keahlian" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                        Keahlian
                    </label>
                    <input type="text" id="keahlian" name="keahlian" value="{{ $programmer->keahlian ?? '' }}" 
                        class="mt-1 block w-full px-4 py-2 text-sm border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200" 
                        placeholder="Keahlian Programmer" required>
                </div>
    
                <!-- Bahasa -->
                <div>
                    <label for="bahasa" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                        Bahasa
                    </label>
                    <input type="text" id="bahasa" name="bahasa" value="{{ $programmer->bahasa ?? '' }}" 
                        class="mt-1 block w-full px-4 py-2 text-sm border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200" 
                        placeholder="Bahasa Pemrograman" required>
                </div>
    
                <!-- Buttons -->
                <div class="flex justify-end space-x-4">
                    <a href="{{ route('programmers.index') }}" 
                        class="px-4 py-2 bg-gray-100 text-gray-800 rounded-lg shadow-md hover:bg-gray-200 dark:bg-gray-700 dark:text-gray-300 dark:hover:bg-gray-600">
                        Batal
                    </a>
                    <button type="submit" 
                        class="px-4 py-2 bg-indigo-600 text-white rounded-lg shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        {{ isset($programmer) ? 'Update' : 'Simpan' }}
                    </button>
                </div>
            </form>
        </div>
    </div>    
         
</div>
</body>
</html>


