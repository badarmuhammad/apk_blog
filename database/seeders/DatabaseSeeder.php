<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Creat user manual
        User::create([
            'name' => 'Badar Muhammad Januar',
            'username' => 'Badar',
            'email' => 'Badarmuhammad@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Lukman Kirana',
            'username' => 'lukman',
            'email' => 'Lukmankirana@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Vikri Vahrudin',
            'username' => 'vikri',
            'email' => 'vikri@gmail.com',
            'password' => bcrypt('12345')
        ]);
        User::create([
            'name' => 'Ferdi Smbou',
            'username' => 'ferdi',
            'email' => 'ferdi@gmail.com',
            'password' => bcrypt('12345')
        ]);
        // User::create([
        //     'name' => 'Yordan ceresgow',
        //     'username' => 'yordan',
        //     'email' => 'yordan@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        // User::create([
        //     'name' => 'Mang Uloh',
        //     'username' => 'Uloh',
        //     'email' => 'uloh@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // menggunakan library faker

        // 1). bikin user dulu
        User::factory(10)->create();

        // 2.) bikin category 2
        Category::create([
            'name'=> 'Web Programming',
            'slug'=> 'web-programming'
        ]);

        Category::create([
            'name'=> 'Personal',
            'slug'=> 'personal'
        ]);

        Category::create([
            'name'=> 'Web Design',
            'slug'=> 'web-design'
        ]);

        // 3). bikin Postingan 20
        Post::factory(25)->create();

        // Creat Postingan Manual
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem, impedit hic. Labore ipsa, voluptatum quasi numquam quae at architecto porro aliquam fugit recusandae',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem, impedit hic. Labore ipsa, voluptatum quasi numquam quae at architecto porro aliquam fugit recusandae, nisi nihil sint voluptatem eos debitis quaerat facere reprehenderit laudantium iusto libero accusantium sed! Iure aliquid natus maiores facere quod praesentium dolorem, aut, ipsa veniam quisquam id a! Natus qui accusamus reprehenderit enim maxime placeat! Minus, nostrum! Maxime similique enim facilis quia totam, dicta, cupiditate veritatis blanditiis nam deserunt omnis. Rem quidem vitae unde sequi incidunt neque ullam sapiente saepe aut! Veritatis enim porro perspiciatis, ipsam sequi provident laborum, quod officiis quos voluptatibus, delectus non omnis aliquid.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem, impedit hic. Labore ipsa, voluptatum quasi numquam quae at architecto porro aliquam fugit recusandae',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem, impedit hic. Labore ipsa, voluptatum quasi numquam quae at architecto porro aliquam fugit recusandae, nisi nihil sint voluptatem eos debitis quaerat facere reprehenderit laudantium iusto libero accusantium sed! Iure aliquid natus maiores facere quod praesentium dolorem, aut, ipsa veniam quisquam id a! Natus qui accusamus reprehenderit enim maxime placeat! Minus, nostrum! Maxime similique enim facilis quia totam, dicta, cupiditate veritatis blanditiis nam deserunt omnis. Rem quidem vitae unde sequi incidunt neque ullam sapiente saepe aut! Veritatis enim porro perspiciatis, ipsam sequi provident laborum, quod officiis quos voluptatibus, delectus non omnis aliquid.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem, impedit hic. Labore ipsa, voluptatum quasi numquam quae at architecto porro aliquam fugit recusandae',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem, impedit hic. Labore ipsa, voluptatum quasi numquam quae at architecto porro aliquam fugit recusandae, nisi nihil sint voluptatem eos debitis quaerat facere reprehenderit laudantium iusto libero accusantium sed! Iure aliquid natus maiores facere quod praesentium dolorem, aut, ipsa veniam quisquam id a! Natus qui accusamus reprehenderit enim maxime placeat! Minus, nostrum! Maxime similique enim facilis quia totam, dicta, cupiditate veritatis blanditiis nam deserunt omnis. Rem quidem vitae unde sequi incidunt neque ullam sapiente saepe aut! Veritatis enim porro perspiciatis, ipsam sequi provident laborum, quod officiis quos voluptatibus, delectus non omnis aliquid.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem, impedit hic. Labore ipsa, voluptatum quasi numquam quae at architecto porro aliquam fugit recusandae',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem, impedit hic. Labore ipsa, voluptatum quasi numquam quae at architecto porro aliquam fugit recusandae, nisi nihil sint voluptatem eos debitis quaerat facere reprehenderit laudantium iusto libero accusantium sed! Iure aliquid natus maiores facere quod praesentium dolorem, aut, ipsa veniam quisquam id a! Natus qui accusamus reprehenderit enim maxime placeat! Minus, nostrum! Maxime similique enim facilis quia totam, dicta, cupiditate veritatis blanditiis nam deserunt omnis. Rem quidem vitae unde sequi incidunt neque ullam sapiente saepe aut! Veritatis enim porro perspiciatis, ipsam sequi provident laborum, quod officiis quos voluptatibus, delectus non omnis aliquid.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);


    }
}
