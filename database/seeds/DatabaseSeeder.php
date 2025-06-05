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
                     "category_id"=>"1",
                     "title"=>"Fresh Mangrove Syrup",
                     "description"=>"The syrup made from the seeds of mangrove tree fruit has benefits for treating heatiness, mouth ulcers, preventing flu, and maintaining body stability. Therefore, a lot of people are hunting for this drink. Although it tastes a bit foreign to some people as a type of syrup drink, but because of its efficacy, this syrup is still used as an alternative drink. Mangrove syrup is taken from mangrove seeds without damaging the beachside plants. Mangrove syrup is made without preservatives and harmful chemicals. This mangrove syrup is perfect to enjoy during hot weather by adding it to cold water or water with ice cubes. Not only is it delicious as a cold drink with ice cubes, this mangrove syrup is also suitable if you want to combine or make other drinks, such as mixed fruit ice. Each bottle contains 350 ml of syrup which is enough to make 20 glasses of fresh drinks. Each order of Mangrove Syrup is packaged with exclusive packaging, which will not only keep the glass bottle intact, but is also suitable if you want to make a gift or present for those closest to you. The way to serve this mangrove syrup is quite simple, namely:",
                     "image"=>"syrupMangrove.jpg",
                     "price"=>"15000",
                     "ukuran"=>"Medium (350 ml) and Large (600 ml)",
                     "created_at"=>"2025-06-01 06:20:19",
                     "updated_at"=>"2025-06-01 06:20:19"]
                ]);
                DB::table('articles')->insert([
                    ["user_id" => "1",
                     "category_id"=>"1",
                     "title"=>"Dodol Mangrove",
                     "description"=>"Experience the authentic taste of Patikang Village with Dodol Mangrove Patikang, a traditional delicacy made from locally harvested mangrove fruit. This sweet treat offers a distinctive flavor profile that captures the natural richness of mangroves, infused with a perfect balance of sweetness and tanginess. Not just a delicious snack, Dodol Mangrove is also packed with health benefits. It contains antioxidants and is rich in vitamin C, making it a guilt-free indulgence that supports your well-being. Lovingly made by the skilled hands of Patikang Village’s community, this dodol is a true testament to the harmony between tradition, nature, and health. There are many ways to enjoy this mangrove jam, namely:",
                     "image"=>"dodol.jpg",
                     "price"=>"15000",
                     "ukuran"=>"",
                     "created_at"=>"2025-06-01 06:20:19",
                     "updated_at"=>"2025-06-01 06:20:19"]
                ]);
                DB::table('articles')->insert([
                    ["user_id" => "1",
                     "category_id"=>"1",
                     "title"=>"Handicraft Miniature Rhino Carving",
                     "description"=>"Discover the artistry and charm of the Handicraft Miniature Rhinoceros, a beautiful representation of creativity and culture. These miniatures are available in two unique variations—carved and uncarved—each offering its own distinct appeal. Whether you're drawn to the intricate details of the carved version or the simplicity and raw beauty of the uncarved one, these pieces make a perfect addition to your collection or a meaningful gift for someone special. The carved miniatures showcase exceptional craftsmanship, with intricate patterns and designs meticulously etched by skilled artisans. Each piece tells a story, reflecting the traditions and artistic heritage of the community that creates them. On the other hand, the uncarved miniatures are a testament to the natural beauty of the materials used, highlighting their smooth surfaces and organic shapes. These pieces celebrate minimalism and allow the elegance of the rhino’s form to speak for itself. Both variations serve as more than just decorative items—they are symbols of conservation and awareness. Representing the endangered rhinoceros, these miniatures remind us of the importance of protecting wildlife and preserving our planet's biodiversity. Every purchase supports local artisans and contributes to sustaining traditional craftsmanship while spreading a message of care for nature. Bring home a piece of art that combines tradition, creativity, and meaning. Whether carved or uncarved, the Handicraft Miniature Rhinoceros is a timeless treasure to cherish.",
                     "image"=>"Rhino.jpg",
                     "price"=>"150000",
                     "ukuran"=>"Carved dan Uncarved",
                     "created_at"=>"2025-06-01 06:20:19",
                     "updated_at"=>"2025-06-01 06:20:19"]
                ]);
                DB::table('articles')->insert([
                    ["user_id" => "1",
                     "category_id"=>"2",
                     "title"=>"Liwungan Island Snorkeling Package",
                     "description"=>"Snorkeling Package: Explore the Beauty of Liwungan IslandExperience an unforgettable adventure to Liwungan Island with our Snorkeling Package! Perfect for groups of 15 or more, this package offers the perfect combination of relaxation, exploration, and fun—all for just IDR 120,000/person. What’s Included? ✔️ Boat Transfer – Enjoy a scenic journey to the island.✔️ Snorkeling Gear – Quality equipment for the best underwater experience.✔️ Life Jacket – Stay safe and comfortable in the water.✔️ Lunch Box – A delicious meal to keep you energized.✔️ Coffee & Mineral Water – Refreshments to keep you hydrated.✔️ Fish Food – Feed and interact with colorful marine life.✔️ Fresh Fruits – Enjoy tropical fruit for a refreshing treat.✔️ Guide – An experienced guide to make your trip smooth and enjoyable. Flexible Itinerary The trip schedule will be tailored to suit your group’s needs and preferences, ensuring a personalized and satisfying experience. Book now and create unforgettable memories at Liwungan Island!",
                     "image"=>"paketSnorke.jpg",
                     "price"=>"150000",
                     "penjelasan"=>"Dive into crystal-clear waters and explore vibrant marine life with our all-inclusive Liwungan Island Snorkeling Trip.",
                     "created_at"=>"2025-06-01 06:20:19",
                     "updated_at"=>"2025-06-01 06:20:19"]
                ]);
                DB::table('articles')->insert([
                    ["user_id" => "1",
                     "category_id"=>"2",
                     "title"=>"Open Trip Climate Action",
                     "description"=>"Embark on an unforgettable journey with the Open Climate Trip, where you’ll connect with nature while supporting eco-conscious travel. Choose your preferred meeting point—Serang for IDR 250,000/person or Citereup for IDR 150,000/person—and get ready for an enriching experience that combines adventure, sustainability, and fun. This trip is designed for those who want to explore the environment in an eco-friendly way, offering a refreshing escape from the hustle and bustle. Whether you're a nature enthusiast or someone looking to unwind, the Open Climate Trip promises a memorable experience at a great value. Book your spot today and take part in this exciting adventure that’s as good for the planet as it is for your soul!",
                     "image"=>"openTrip2.jpg",
                     "price"=>"150000",
                     "penjelasan"=>"A trip for the soul, the man and the world.",
                     "created_at"=>"2025-06-01 06:20:19",
                     "updated_at"=>"2025-06-01 06:20:19"]
                ]);
                DB::table('articles')->insert([
                    ["user_id" => "1",
                     "category_id"=>"2",
                     "title"=>"School Educational Tour Package",
                     "description"=>"The syrup made from the seeds of mangrove tree fruit has benefits for treating heatiness, mouth ulcers, preventing flu, and maintaining body stability. Therefore, a lot of people are hunting for this drink. Although it tastes a bit foreign to some people as a type of syrup drink, but because of its efficacy, this syrup is still used as an alternative drink. Mangrove syrup is taken from mangrove seeds without damaging the beachside plants. Mangrove syrup is made without preservatives and harmful chemicals. This mangrove syrup is perfect to enjoy during hot weather by adding it to cold water or water with ice cubes. Not only is it delicious as a cold drink with ice cubes, this mangrove syrup is also suitable if you want to combine or make other drinks, such as mixed fruit ice. Each bottle contains 350 ml of syrup which is enough to make 20 glasses of fresh drinks. Each order of Mangrove Syrup is packaged with exclusive packaging, which will not only keep the glass bottle intact, but is also suitable if you want to make a gift or present for those closest to you. The way to serve this mangrove syrup is quite simple, namely:",
                     "image"=>"paketEdukasi 2.jpg",
                     "price"=>"12000",
                     "penjelasan"=>"A syrup made from the seeds of the mangrove tree.",
                     "created_at"=>"2025-06-01 06:20:19",
                     "updated_at"=>"2025-06-01 06:20:19"]
                ]);
                DB::table('articles')->insert([
                    ["user_id" => "1",
                     "category_id"=>"3",
                     "title"=>"World Mangrove Day 2023 PT Chandra Asri Tanam Mangrove Bersama Jurnalis",
                     "description"=>"PT Chandra Asri Petrochemical Tbk bersama Jurnalis Banten melaksanakan kegiatan penanaman pohon mangrove (Rhizopora SP) di wilayah kawasan Lembur Mangrove, Desa Citeureup, Kecamatan Panimbang, Kabupaten Pandeglang. Penanaman tersebut dilakukan dalam rangka memperingati Hari Mangrove Sedunia yang jatuh pada tanggal 26 Juni 2023. Penanaman Mangrove dilaksanakan sebagai upaya mendukung dekarbonisasi dengan memaksimalkan blue carbon atau karbon yang diserap, disimpan, dan dilepaskan menjadi cadangan oleh ekosistem pesisir dan laut. Corporate Communication Manager PT Chandra Asri Santi mengatakan, kegiatan tersebut untuk menjaga dan mempertahankan ekosistem hutan mangrove di lembur mangrove wilayah Desa Citeureup Kecamatan Panimbang Kabupaten Pandeglang. “Kegiatan ini merupakan wujud kepedulian dan perhatian bersama antara Pt Candra Asih, Jurnalis Banten, serta Pemerintah Desa. Ini dalam rangka menjaga konservasi tanaman mangrove. Kedepannya semoga kegiatan ini tetap berjalan, sehingga keberadaan hutan mangrove tetap lestari,” Ucap Shanti. Sementara itu Ketua Pokdarwis Putri Gundul Deden Sudiana menyampaikan terimakasih kepada PT Chandra Asri Petrochemical Tbk bersama Jurnalis Banten atas kerjasamanya dalam rangka penamanan mangrove ini. “Bahwa dalam rangka Hari Menanam Mangrove Sedunia dengan tema World Mangrove Day 2023 diharapkan kedepannya kegiatan ini bisa dilakukan dan didukung oleh semua pihak, agar ekosistem hutan Mangrove tetap lestari dan bermanfaat bagi semua pihak,” jelasnya.",
                     "image"=>"news1.webp",
                     "tags"=>"#ecowisata #penanaman #worldmangroveday",
                     "created_at"=>"2025-06-01 06:20:19",
                     "updated_at"=>"2025-06-01 06:20:19"]
                ]);
                DB::table('articles')->insert([
                    ["user_id" => "1",
                     "category_id"=>"3",
                     "title"=>"4 Must-Visit Natural Attractions in Banten!",
                     "description"=>"Lembur Mangrove Patikang If you're into ecotourism and want to explore nature's wonders, Lembur Mangrove Patikang in Pandeglang is a must-visit. Located in Desa Citeureup, Panimbang District, this area was once a swamp near the Citeureup river estuary. Today, it has transformed into a 4-hectare mangrove forest thanks to the hard work of the local community dedicated to environmental conservation and sustainable practices. The name Lembur Mangrove Patikang comes from the local Patikang village, and since 2017, the community’s tourism awareness group (Pokdarwis) has been working to make this place an eco-friendly destination. Located in the buffer zone of the Tanjung Lesung Special Economic Zone (KEK), this area is famous for its natural resources, making it perfect for ecotourism development. One of the main attractions here is the educational experience. Visitors can learn about mangrove conservation by planting mangrove trees along the beach, a fun activity that not only helps protect the environment but also encourages local participation in ecotourism. The mangrove forest is home to various species like Avicennia, Rhizophora, and Sonneratia, thriving in this unique ecosystem. For those looking for more adventure, exploring the mangrove forest by canoe is a fantastic way to immerse yourself in nature. Paddling through waterways surrounded by lush greenery while observing birdlife and other wildlife offers a calming, nature-filled experience. This is the perfect getaway to escape city life, providing a perfect balance of adventure and tranquility. The best part? Lembur Mangrove Patikang is completely free to visit! Besides being a tourist attraction, it also provides a source of income for the local community. The village not only produces mangrove seedlings but also offers food and beverages made from mangrove products, adding an authentic and sustainable touch to the travel experience. ",
                     "image"=>"news2.JPG",
                     "tags"=>"#ecowisata #penanaman #worldmangroveday",
                     "created_at"=>"2025-06-01 06:20:19",
                     "updated_at"=>"2025-06-01 06:20:19"]
                ]);
        Schema::enableForeignKeyConstraints();

    }
}
