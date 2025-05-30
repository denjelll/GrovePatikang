<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
                DB::table('users')->insert([
                    "name" => "UMN GROVE","email"=>"umngrove@gmail.com","password"=>Hash::make("ComsusMangrove855"),"phone"=>"081111111111","role"=>"admin"
                ]);
                DB::table('categories')->insert([
                    ["name" => "Product"],
                    ["name" => "Tour"],
                    ["name" => "News"],
                    ["name" => "Blog"],
                    ["name" => "Others"]
                ]);
                DB::table('articles')->insert([
                    ["user_id" => "1",
                     "category_id"=>"5",
                     "title"=>"copyright",
                     "description"=>"dibuat oleh ansel dan edward",
                     "image"=>"About-Us.jpg",
                     "created_at"=>"2024-11-29 08:25:19",
                     "updated_at"=>"2024-11-29 08:25:19"]
                ]);
                DB::table('articles')->insert([
                    ["user_id" => "2",
                     "category_id"=>"4",
                     "title"=>"Eksplorasi Mangrove",
                     "description"=>"Ikuti tur berpemandu untuk menjelajahi hutan mangrove, belajar tentang keanekaragaman hayati, dan memahami pentingnya konservasi mangrove.",
                     "image"=>"explorasi-mangrove.jpg",
                     "created_at"=>"2024-11-29 08:25:19",
                     "updated_at"=>"2024-11-29 08:25:19"]
                ]);
                DB::table('articles')->insert([
                    ["user_id" => "2",
                     "category_id"=>"4",
                     "title"=>"Petualangan Laut",
                     "description"=>"Rasakan ketenangan alam laut dan hutan mangrove, cocok untuk pecinta alam dan fotografi. Ada juga paket snorkeling dan lainnya untuk pecinta laut.",
                     "image"=>"petualangan-laut.jpg",
                     "created_at"=>"2024-11-29 08:25:19",
                     "updated_at"=>"2024-11-29 08:25:19"]
                ]);
                DB::table('articles')->insert([
                    ["user_id" => "2",
                     "category_id"=>"4",
                     "title"=>"Pengalaman Edukasi",
                     "description"=>"Ambil bagian dalam kegiatan seperti penanaman mangrove dan pelatihan tentang praktik berkelanjutan yang mendukung lingkungan dan masyarakat.",
                     "image"=>"pengalaman-edukasi.jpg",
                     "tags"=>"#laut #pencinta alam #petualangan #snorkeling",
                     "created_at"=>"2024-11-29 08:25:19",
                     "updated_at"=>"2024-11-29 08:25:19"]
                ]);

        Schema::enableForeignKeyConstraints();

    }
}
