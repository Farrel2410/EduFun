<?php

namespace App\Http\Controllers;

use App\Models\Writer;

class WriterController extends Controller
{
    // Menampilkan semua penulis
    public function index()
    {
        $writers = Writer::all();
        return view('writers', compact('writers'));
    }

    // Menampilkan artikel dari penulis tertentu
    public function show($id)
    {
        $writer = Writer::findOrFail($id);
        $articles = $writer->articles; // relasi dari model

        return view('writer_detail', compact('writer', 'articles'));
    }
}
