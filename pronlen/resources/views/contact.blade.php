<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white flex flex-col items-center justify-center min-h-screen p-4">
    <h1 class="text-3xl font-bold text-green-400 mb-4">Contact Us</h1>
    
    <p>Email: <a href="mailto:{{ $contactInfo['email'] }}" class="text-blue-400 hover:underline">{{ $contactInfo['email'] }}</a></p>
    <p>Instagram: <a href="{{ $contactInfo['instagram'] }}" target="_blank" class="text-blue-400 hover:underline">Instagram</a></p>
    <p>WhatsApp: <a href="{{ $contactInfo['whatsapp'] }}" target="_blank" class="text-blue-400 hover:underline">WhatsApp</a></p>
    
    <h2 class="text-2xl font-semibold mt-6">Send us a message</h2>
    @if(session('success'))
        <p class="text-green-400">{{ session('success') }}</p>
    @endif
    
    <form action="{{ route('contact') }}" method="POST" class="bg-gray-800 p-6 rounded-lg shadow-md w-full max-w-md mt-4">
        @csrf
        <label for="name" class="block text-sm font-medium">Name:</label>
        <input type="text" name="name" required class="w-full p-2 mt-1 bg-gray-700 border border-gray-600 rounded focus:outline-none focus:ring-2 focus:ring-yellow-400">

        <label for="email" class="block text-sm font-medium mt-4">Email:</label>
        <input type="email" name="email" required class="w-full p-2 mt-1 bg-gray-700 border border-gray-600 rounded focus:outline-none focus:ring-2 focus:ring-yellow-400">

        <label for="message" class="block text-sm font-medium mt-4">Message:</label>
        <textarea name="message" required class="w-full p-2 mt-1 bg-gray-700 border border-gray-600 rounded focus:outline-none focus:ring-2 focus:ring-yellow-400"></textarea>

        <button type="submit" class="mt-4 w-full bg-green-400 text-gray-900 py-2 px-4 rounded font-bold hover:bg-yellow-500 transition">Send</button>
    </form>
</body>
</html>
