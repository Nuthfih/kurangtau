<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Menampilkan halaman kontak
    public function index()
    {
        $contactInfo = [
            'email' => 'Pronlenin@gmail.com',
            'instagram' => 'https://www.instagram.com/vvvysmn/',
            'whatsapp' => 'https://wa.me/+621297765879'
        ];
        
        return view('contact', compact('contactInfo'));
    }

    // Menangani form submit dari halaman kontak
    public function submit(Request $request)
    {
        // Validasi data yang dikirim
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Proses pengiriman atau penyimpanan data bisa dilakukan di sini
        // Misalnya menyimpan ke database atau mengirim email
        
        return redirect()->route('contact')->with('success', 'Pesan Anda telah dikirim!');
    }
}
