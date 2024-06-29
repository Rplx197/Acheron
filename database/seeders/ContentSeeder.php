<?php

namespace Database\Seeders;

use App\Models\Content;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Content::create([
            'judul' => 'Economy',
            'desc1' => '3 Day Service Completed',
            'desc2' => 'Clothes have been ironed',
            'desc3' => 'Standart fragrance',
            'harga' => 'Rp. 4000/kg'
        ]);
    }
}
