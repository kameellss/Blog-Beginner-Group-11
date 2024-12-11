<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\User;
use App\Models\Category;
use App\Models\Tag;

class ArticleSeeder extends Seeder
{
    public function run()
    {
        // Get the Makeup category ID
        $categoryId = Category::where('name', 'Makeup')->first()->id;

        // Get user IDs
        $userIds = User::pluck('id')->toArray();

        // Define hardcoded articles related to makeup
        $articles = [
            [
                'title' => 'Price List Makeup',
                'full_text' => 'Daftar harga makeup terbaru dari berbagai merek populer, mulai dari foundation, lipstik, eyeshadow, dan masih banyak lagi. Temukan produk terbaik yang sesuai dengan budget Anda di Glowify!',
                'image' => null,  // Placeholder image for price list
                'user_id' => $userIds[array_rand($userIds)], // Random user
                'category_id' => $categoryId, // Makeup category
            ],
            [
                'title' => 'Price List Skincare',
                'full_text' => 'Dapatkan daftar harga skincare terbaru untuk merawat kulit Anda dengan produk terbaik dari Glowify. Temukan produk perawatan kulit yang sesuai dengan jenis kulit Anda, seperti toner, serum, dan moisturizer.',
                'image' => null,  // Placeholder image for price list
                'user_id' => $userIds[array_rand($userIds)], // Random user
                'category_id' => $categoryId, // Makeup category
            ],
            [
                'title' => 'Rekomendasi Makeup untuk Setiap Jenis Kulit',
                'full_text' => 'Temukan rekomendasi produk makeup terbaik untuk kulit kering, berminyak, normal, atau kombinasi. Artikel ini membahas tips memilih foundation, lipstik, dan produk makeup lainnya yang cocok untuk setiap jenis kulit.',
                'image' => null,  // Placeholder image for recommendations
                'user_id' => $userIds[array_rand($userIds)], // Random user
                'category_id' => $categoryId, // Makeup category
            ],
            [
                'title' => 'Review Produk Makeup dan Skincare',
                'full_text' => 'Review mendalam tentang produk makeup dan skincare terbaru di Glowify. Temukan ulasan jujur tentang kualitas, kelebihan, dan kekurangan dari berbagai produk yang sedang tren di pasaran.',
                'image' => null,  // Placeholder image for review
                'user_id' => $userIds[array_rand($userIds)], // Random user
                'category_id' => $categoryId, // Makeup category
            ],
        ];

        // Create articles and assign tags
        foreach ($articles as $articleData) {
            $article = Article::create($articleData);

            // Assign random tags to each article (2 tags per article)
            $tagIds = Tag::pluck('id')->toArray(); // Get all tag IDs
            $randomTags = array_rand(array_flip($tagIds), 2); // Pick 2 random tags for each article
            foreach ((array) $randomTags as $tagId) {
                $article->tags()->attach($tagId);
            }
        }
    }
}
