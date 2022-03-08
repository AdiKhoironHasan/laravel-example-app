<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();

        User::create([
            "name" => "Adi Khoiron Hasan",
            "username" => "adieron",
            "email" => "adieron97@gmail.com",
            // bcrypt untuk enkripsi password
            "password" => bcrypt('password')
        ]);

        // User::create([
        //     "name" => "Eron",
        //     "email" => "eron@gmail.com",
        //     "password" => bcrypt('eron')
        // ]);

        Category::create([
            "name" => "Web Programming",
            "slug" => "web-programming"
        ]);

        Category::create([
            "name" => "Artificial Intelligence",
            "slug" => "artificial-intelligence"
        ]);

        Category::create([
            "name" => "Network Support",
            "slug" => "network-support"
        ]);

        Post::factory(50)->create();

        // Post::create([
        //     "category_id" => 1,
        //     "user_id" => 1,
        //     "title" => "Judul Adi Web Programming Pertama",
        //     "slug" => "judul-adi-web-programming-pertama",
        //     "excerpt" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime odit laboriosam vel ab nesciunt inventore soluta ipsa natus itaque veritatis cum illo, amet facere, temporibus consectetur quibusdam, repellat perspiciatis voluptatibus.",
        //     "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa fugiat consequuntur culpa dicta voluptate officiis corrupti veritatis explicabo odio voluptatem.</p><p>Qui corrupti perspiciatis laboriosam soluta aliquid, ipsam obcaecati cupiditate ab accusantium porro debitis minus esse iusto inventore hic, dolor veritatis! Quia a ea dicta at minus quo reiciendis, corrupti dignissimos eligendi. Quod laboriosam quam maiores sequi sapiente explicabo eaque, in quisquam quia? Numquam, eum molestias necessitatibus neque corrupti sint natus vel, reprehenderit minus recusandae, doloremque ad distinctio? Vitae quas ratione aliquam cupiditate iure, beatae culpa corporis esse, nemo mollitia odio veniam labore asperiores aperiam reiciendis quod, maiores tempore eius sed!</p>"
        // ]);

        // Post::create([
        //     "category_id" => 1,
        //     "user_id" => 2,
        //     "title" => "Judul Eron Web Programming Pertama",
        //     "slug" => "judul-eron-web-programming-pertama",
        //     "excerpt" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime odit laboriosam vel ab nesciunt inventore soluta ipsa natus itaque veritatis cum illo, amet facere, temporibus consectetur quibusdam, repellat perspiciatis voluptatibus.",
        //     "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa fugiat consequuntur culpa dicta voluptate officiis corrupti veritatis explicabo odio voluptatem.</p><p>Qui corrupti perspiciatis laboriosam soluta aliquid, ipsam obcaecati cupiditate ab accusantium porro debitis minus esse iusto inventore hic, dolor veritatis! Quia a ea dicta at minus quo reiciendis, corrupti dignissimos eligendi. Quod laboriosam quam maiores sequi sapiente explicabo eaque, in quisquam quia? Numquam, eum molestias necessitatibus neque corrupti sint natus vel, reprehenderit minus recusandae, doloremque ad distinctio? Vitae quas ratione aliquam cupiditate iure, beatae culpa corporis esse, nemo mollitia odio veniam labore asperiores aperiam reiciendis quod, maiores tempore eius sed!</p>"
        // ]);

        // Post::create([
        //     "category_id" => 1,
        //     "user_id" => 2,
        //     "title" => "Judul Eron Web Programming Ke Dua",
        //     "slug" => "judul-eron-web-programming-ke-dua",
        //     "excerpt" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime odit laboriosam vel ab nesciunt inventore soluta ipsa natus itaque veritatis cum illo, amet facere, temporibus consectetur quibusdam, repellat perspiciatis voluptatibus.",
        //     "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa fugiat consequuntur culpa dicta voluptate officiis corrupti veritatis explicabo odio voluptatem.</p><p>Qui corrupti perspiciatis laboriosam soluta aliquid, ipsam obcaecati cupiditate ab accusantium porro debitis minus esse iusto inventore hic, dolor veritatis! Quia a ea dicta at minus quo reiciendis, corrupti dignissimos eligendi. Quod laboriosam quam maiores sequi sapiente explicabo eaque, in quisquam quia? Numquam, eum molestias necessitatibus neque corrupti sint natus vel, reprehenderit minus recusandae, doloremque ad distinctio? Vitae quas ratione aliquam cupiditate iure, beatae culpa corporis esse, nemo mollitia odio veniam labore asperiores aperiam reiciendis quod, maiores tempore eius sed!</p>"
        // ]);

        // Post::create([
        //     "category_id" => 2,
        //     "user_id" => 1,
        //     "title" => "Judul Adi Artificial Intelligence Pertama",
        //     "slug" => "judul-adi-artificial-intelligence-pertama",
        //     "excerpt" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime odit laboriosam vel ab nesciunt inventore soluta ipsa natus itaque veritatis cum illo, amet facere, temporibus consectetur quibusdam, repellat perspiciatis voluptatibus.",
        //     "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa fugiat consequuntur culpa dicta voluptate officiis corrupti veritatis explicabo odio voluptatem.</p><p>Qui corrupti perspiciatis laboriosam soluta aliquid, ipsam obcaecati cupiditate ab accusantium porro debitis minus esse iusto inventore hic, dolor veritatis! Quia a ea dicta at minus quo reiciendis, corrupti dignissimos eligendi. Quod laboriosam quam maiores sequi sapiente explicabo eaque, in quisquam quia? Numquam, eum molestias necessitatibus neque corrupti sint natus vel, reprehenderit minus recusandae, doloremque ad distinctio? Vitae quas ratione aliquam cupiditate iure, beatae culpa corporis esse, nemo mollitia odio veniam labore asperiores aperiam reiciendis quod, maiores tempore eius sed!</p>"
        // ]);


        // Post::create([
        //     "category_id" => 2,
        //     "user_id" => 1,
        //     "title" => "Judul Adi Artificial Intelligence Ke Dua",
        //     "slug" => "judul-adi-artificial-intelligence-ke-dua",
        //     "excerpt" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime odit laboriosam vel ab nesciunt inventore soluta ipsa natus itaque veritatis cum illo, amet facere, temporibus consectetur quibusdam, repellat perspiciatis voluptatibus.",
        //     "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa fugiat consequuntur culpa dicta voluptate officiis corrupti veritatis explicabo odio voluptatem.</p><p>Qui corrupti perspiciatis laboriosam soluta aliquid, ipsam obcaecati cupiditate ab accusantium porro debitis minus esse iusto inventore hic, dolor veritatis! Quia a ea dicta at minus quo reiciendis, corrupti dignissimos eligendi. Quod laboriosam quam maiores sequi sapiente explicabo eaque, in quisquam quia? Numquam, eum molestias necessitatibus neque corrupti sint natus vel, reprehenderit minus recusandae, doloremque ad distinctio? Vitae quas ratione aliquam cupiditate iure, beatae culpa corporis esse, nemo mollitia odio veniam labore asperiores aperiam reiciendis quod, maiores tempore eius sed!</p>"
        // ]);


        // Post::create([
        //     "category_id" => 2,
        //     "user_id" => 2,
        //     "title" => "Judul Eron Artificial Intelligence Pertama",
        //     "slug" => "judul-eron-artificial-intelligence-pertama",
        //     "excerpt" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime odit laboriosam vel ab nesciunt inventore soluta ipsa natus itaque veritatis cum illo, amet facere, temporibus consectetur quibusdam, repellat perspiciatis voluptatibus.",
        //     "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa fugiat consequuntur culpa dicta voluptate officiis corrupti veritatis explicabo odio voluptatem.</p><p>Qui corrupti perspiciatis laboriosam soluta aliquid, ipsam obcaecati cupiditate ab accusantium porro debitis minus esse iusto inventore hic, dolor veritatis! Quia a ea dicta at minus quo reiciendis, corrupti dignissimos eligendi. Quod laboriosam quam maiores sequi sapiente explicabo eaque, in quisquam quia? Numquam, eum molestias necessitatibus neque corrupti sint natus vel, reprehenderit minus recusandae, doloremque ad distinctio? Vitae quas ratione aliquam cupiditate iure, beatae culpa corporis esse, nemo mollitia odio veniam labore asperiores aperiam reiciendis quod, maiores tempore eius sed!</p>"
        // ]);
    }
}
