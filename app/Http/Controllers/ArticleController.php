<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleController extends Controller
{
    public function show($id)
    {
        $article = Article::findOrFail($id);

        // Tambah 1 view setiap kali artikel dibuka
        $article->increment('views');

        return view('article_detail', compact('article'));
    }
    public function dataScience()
{
    // Artikel Data Science (statis sesuai soal UTS)
    $articles = [
        [
            'title' => 'Machine Learning',
            'content' => 'Machine Learning adalah cabang dari Artificial Intelligence yang memungkinkan komputer belajar dari data tanpa diprogram secara eksplisit.',
            'image' => 'img/ml.jpg',
            'author' => 'Farrel Eleazar',
            'date' => '2025-11-13'
        ],
        [
            'title' => 'Deep Learning',
            'content' => 'Deep Learning merupakan bagian dari Machine Learning yang menggunakan jaringan saraf tiruan berlapis untuk mengenali pola kompleks dalam data besar.',
            'image' => 'img/dl.jpg',
            'author' => 'Farrel Eleazar',
            'date' => '2025-11-13'
        ],
        [
            'title' => 'Natural Language Processing',
            'content' => 'Natural Language Processing (NLP) adalah bidang AI yang memungkinkan komputer memahami dan memproses bahasa manusia.',
            'image' => 'img/nlp.jpg',
            'author' => 'Farrel Eleazar',
            'date' => '2025-11-13'
        ],
    ];

    return view('articles_data_science', compact('articles'));
}


public function networkSecurity()
{
    // Artikel Network Security (statis sesuai soal UTS)
    $articles = [
        [
            'title' => 'Software Security',
            'content' => 'Software Security adalah praktik melindungi perangkat lunak dari kerentanan dan serangan yang dapat mengekspos data atau fungsi sistem.',
            'image' => 'img/security.jpg',
            'author' => 'Farrel Eleazar',
            'date' => '2025-11-13'
        ],
        [
            'title' => 'Network Administration',
            'content' => 'Network Administration mencakup konfigurasi, pengelolaan, dan pemeliharaan jaringan komputer agar berjalan stabil dan aman.',
            'image' => 'img/admin.jpg',
            'author' => 'Farrel Eleazar',
            'date' => '2025-11-13'
        ],
        [
            'title' => 'Popular Network Technology',
            'content' => 'Popular Network Technology meliputi protokol dan perangkat modern seperti Wi-Fi 6, 5G, dan teknologi cloud networking.',
            'image' => 'img/tech.jpg',
            'author' => 'Farrel Eleazar',
            'date' => '2025-11-13'
        ],
    ];

    return view('articles_network_security', compact('articles'));
}

}
