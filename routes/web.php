<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Adi Khoiron Hasan",
        "email" => "adieron97@gmail.com",
        "image" => "profile.png"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Adi",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam tempora veritatis dolor, qui blanditiis vitae, temporibus, sit voluptate assumenda at aperiam molestiae. Facilis, doloribus? Quam cumque error, laboriosam minus pariatur exercitationem unde, nam obcaecati dolorem illo quis repellendus molestias. Eveniet quam natus provident quisquam vitae cupiditate voluptate. Nobis consequatur totam accusamus quos excepturi praesentium iusto consequuntur rerum in temporibus magnam aut quaerat error nihil rem reprehenderit corrupti, nemo enim quas laudantium deleniti iste? Exercitationem minima tempore corporis velit harum atque repellat doloremque. Vero, nihil fugiat quasi esse ipsum dolor consequatur, voluptate non corporis explicabo nam quam ducimus eum mollitia autem?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Eron",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis dolore asperiores quod, dignissimos beatae commodi officia ducimus officiis. Quasi facilis dignissimos unde sit hic corrupti molestiae explicabo, doloremque, ducimus officiis illum optio totam minima magnam atque reiciendis praesentium nisi fugiat dolor ex cum, nihil autem distinctio a. Praesentium, rem. Autem nisi, et est sunt magnam consequatur necessitatibus voluptate hic facilis libero distinctio nostrum ad nulla earum dicta voluptatem, tempore dolorem delectus ipsum odio explicabo. Earum quae, tenetur molestias beatae aliquid assumenda, odit adipisci alias tempore sunt sequi consectetur. Tenetur temporibus nobis suscipit dicta eaque? Quia totam tempore beatae quae consectetur est aut, expedita asperiores doloribus accusantium illo iure, enim quo eos nisi odio, incidunt nihil nostrum dolor quasi velit facilis. Placeat, unde. Quibusdam inventore itaque alias error dolore. Fuga, mollitia! Maiores sit ullam, nihil ratione reiciendis culpa, totam possimus dolor tenetur quo ducimus et optio similique impedit qui voluptates doloremque."
        ]
    ];

    return view('posts', [
        "title" => "Blog",
        "posts" => $blog_posts
    ]);
});

Route::get('/Blog/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Adi",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam tempora veritatis dolor, qui blanditiis vitae, temporibus, sit voluptate assumenda at aperiam molestiae. Facilis, doloribus? Quam cumque error, laboriosam minus pariatur exercitationem unde, nam obcaecati dolorem illo quis repellendus molestias. Eveniet quam natus provident quisquam vitae cupiditate voluptate. Nobis consequatur totam accusamus quos excepturi praesentium iusto consequuntur rerum in temporibus magnam aut quaerat error nihil rem reprehenderit corrupti, nemo enim quas laudantium deleniti iste? Exercitationem minima tempore corporis velit harum atque repellat doloremque. Vero, nihil fugiat quasi esse ipsum dolor consequatur, voluptate non corporis explicabo nam quam ducimus eum mollitia autem?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Eron",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis dolore asperiores quod, dignissimos beatae commodi officia ducimus officiis. Quasi facilis dignissimos unde sit hic corrupti molestiae explicabo, doloremque, ducimus officiis illum optio totam minima magnam atque reiciendis praesentium nisi fugiat dolor ex cum, nihil autem distinctio a. Praesentium, rem. Autem nisi, et est sunt magnam consequatur necessitatibus voluptate hic facilis libero distinctio nostrum ad nulla earum dicta voluptatem, tempore dolorem delectus ipsum odio explicabo. Earum quae, tenetur molestias beatae aliquid assumenda, odit adipisci alias tempore sunt sequi consectetur. Tenetur temporibus nobis suscipit dicta eaque? Quia totam tempore beatae quae consectetur est aut, expedita asperiores doloribus accusantium illo iure, enim quo eos nisi odio, incidunt nihil nostrum dolor quasi velit facilis. Placeat, unde. Quibusdam inventore itaque alias error dolore. Fuga, mollitia! Maiores sit ullam, nihil ratione reiciendis culpa, totam possimus dolor tenetur quo ducimus et optio similique impedit qui voluptates doloremque."
        ]
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] == $slug) {
            $new_post = $post;
        };
    }

    return view('post', [
        "title" => "Home",
        "post" => $new_post
    ]);
});
