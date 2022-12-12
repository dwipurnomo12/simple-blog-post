<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Menu;
use App\Models\Page;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use App\Models\Category;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Comment::create([
        //     'comment_name'      => 'Leo Messi',
        //     'comment_email'     => 'leomessi@gmail.com',
        //     'comment_body'      => 'Postingan Yang Bagus',
        //     'post_id'           => 1
        // ]);

        Menu::create([
            'name' => 'Komputer',
            'link' => '	http://127.0.0.1:8000/categories/komputer',
            'user_id' => 1,
            'location' => 'header'
        ]);
        
        Menu::create([
            'name' => 'Disclaimer',
            'link' => '	http://127.0.0.1:8000/page/disclaimer',
            'user_id' => 1,
            'location' => 'footer'
        ]);

        User::create([
            'name' => 'Dwi Purnomo',
            'biodata' => 'Saya adalah seorang mahasiswa Teknologi Informasi yang memiliki minat pada bidang pemrograman khususnya web. Selain itu, saat ini saya juga berprofesi sebagai freelance web developer dan publisher Google Adsense',
            'username' => 'dwi',
            'email' => 'purnomodwi174@gmail.com',
            'password' => bcrypt('password')
        ]);

        Category::create([
            'name' => 'Komputer',
            'slug' => 'komputer',
            'body' => 'Artikel tentang komputar',
            'user_id'   => 1
        ]);

        Category::create([
            'name' => 'Internet',
            'slug' => 'internet',
            'body' => 'Artikel tentang Internet',
            'user_id'   => 1
        ]);

        Category::create([
            'name' => 'Android',
            'slug' => 'android',
            'body' => 'Artikel tentang Android',
            'user_id'   => 1
        ]);

        Page::create([
            'title'     => 'Privacy & Policy',
            'slug'      => 'privacy-policy',
            'excerpt'   => 'Excerpt Privacy & Policy',
            'body'      => 'Ini adalah page untuk menampilkan Privacy Policy',
            'user_id'   => 1
        ]);

        Page::create([
            'title'     => 'Disclaimer',
            'slug'      => 'disclaimer',
            'excerpt'   => 'Excerpt Disclaimer',
            'body'      => 'Ini adalah Page untuk menampilkan DIsclaimer',
            'user_id'   => 1
        ]);

        Post::factory(20)->create();
    }
}
