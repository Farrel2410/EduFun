<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Writer;

class WriterSeeder extends Seeder
{
    public function run(): void
    {
        Writer::create(['name' => 'Alice Rahma', 'email' => 'alice@example.com', 'bio' => 'Dosen & praktisi Data Science.']);
        Writer::create(['name' => 'Budi Santoso', 'email' => 'budi@example.com', 'bio' => 'Spesialis Network Security.']);
    }
}
