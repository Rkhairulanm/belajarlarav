<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view(
        'home',
        [
            "title" => "Home",
        ]
    );
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
    ]);
});

Route::get('/post', function () {
    $blog = [
        [
            "title" => "Judul Pertama",
            "author" => "Samsul",
            "slug" => "Judul-Pertama",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores neque iste cupiditate corporis perferendis ea delectus expedita vel corrupti beatae aut illo obcaecati consequatur soluta, libero amet reprehenderit, quod ullam."
        ],
        [
            "title" => "Judul Kedua",
            "author" => "Asep",
            "slug" => "Judul-Kedua",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores neque iste cupiditate corporis perferendis ea delectus expedita vel corrupti beatae aut illo obcaecati consequatur soluta, libero amet reprehenderit, quod ullam."
        ]
    ];

    return view('post', [
        "title" => "Blog",
        "post" => $blog
    ]);
});

Route::get('/posts/{slug}', function ($slug) {
    $blog = [
        [
            "title" => "Judul Pertama",
            "author" => "Samsul",
            "slug" => "Judul-Pertama",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores neque iste cupiditate corporis perferendis ea delectus expedita vel corrupti beatae aut illo obcaecati consequatur soluta, libero amet reprehenderit, quod ullam."
        ],
        [
            "title" => "Judul Kedua",
            "author" => "Asep",
            "slug" => "Judul-Kedua",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores neque iste cupiditate corporis perferendis ea delectus expedita vel corrupti beatae aut illo obcaecati consequatur soluta, libero amet reprehenderit, quod ullam."
        ]
    ];
    $new = [];
    foreach ($blog as $post) {
        if ($post["slug"] == $slug) {
            $new = $post;
        }
    }
    return view('posts', [
        "title" => "single post",
        "post" => $new,
    ]);
});
