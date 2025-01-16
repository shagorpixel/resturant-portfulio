<?php

namespace Database\Seeders;

use App\Models\Header;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class headerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'title' => "50% Discount Offer",
            'sub_title' => "The accept attribute specifies a filter for what file types the user can pick from the file input dialog box.",
            'image' =>"background_image.png"
        ];
        Header::insert($data);
    }
}
