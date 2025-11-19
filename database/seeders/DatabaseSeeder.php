<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::create([
            "name" => "Admin",
            "username" => "admin",
            "email" => "admin@admin.com",
            "role" => 3,
            "password" => "admin",
        ]);

        // \App\Models\Category::create([
        //     "title" => "Uncategorized",
        //     "slug" => "uncategorized",
        // ]);

        \App\Models\SiteSetting::create([
            "site_title" => "InfoTani",
            "tagline" => "Dari Petani Untuk Petani",
            "description" => "InfoTani adalah platform edukasi pertanian yang menghubungkan petani dari berbagai daerah untuk saling berbagi pengetahuan, pengalaman, dan inovasi. Dengan semangat “Dari Petani Untuk Petani”, InfoTani hadir sebagai sumber informasi terpercaya seputar teknik budidaya, pupuk, cuaca, hingga harga komoditas, guna mendukung pertanian yang lebih maju, cerdas, dan berkelanjutan.",
            "logo_light" => "logo_light_PdZh4.png",
            "copyright_text" => "© 2025, InfoTani, All Rights Reserved.",
            "enable_registration" => "1",
        ]);

        \App\Models\Menu::create([
            "header_menu" => json_encode([["href"=>"http://127.0.0.1:8000/","icon"=>"","text"=>"Home","tooltip"=>"","children"=>[]],["href"=>"#","icon"=>"","text"=>"AboutUs","tooltip"=>"","children"=>[]],["href"=>"#","icon"=>"","text"=>"ContactUs","tooltip"=>"","children"=>[]],["href"=>"#","icon"=>"","text"=>"PrivacyPolicy","tooltip"=>"","children"=>[]]]),
            "footer_menu" => json_encode([["href"=>"http://127.0.0.1:8000/","icon"=>"","text"=>"Home","tooltip"=>"","children"=>[]],["href"=>"#","icon"=>"","text"=>"AboutUs","tooltip"=>"","children"=>[]],["href"=>"#","icon"=>"","text"=>"ContactUs","tooltip"=>"","children"=>[]],["href"=>"#","icon"=>"","text"=>"PrivacyPolicy","tooltip"=>"","children"=>[]]]),
        ]);
    }
}
