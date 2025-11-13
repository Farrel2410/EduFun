<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        Article::create([
            'title' => 'Pengenalan Data Science',
            'content' => 'Data Science adalah bidang yang mempelajari analisis data besar untuk menghasilkan insight berharga...',
            'category_id' => 1,
            'writer_id' => 1,
            'date' => now(),
            'views' => 150,
        ]);

        Article::create([
            'title' => 'Dasar Network Security',
            'content' => 'Network Security membahas teknik dan strategi untuk melindungi jaringan dari berbagai serangan...',
            'category_id' => 2,
            'writer_id' => 2,
            'date' => now(),
            'views' => 120,
        ]);

    
        
    }
}

