<?php

namespace App\Models;

class Post
{
    private static $blog = [
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
    public static function all()
    {
        return collect(self::$blog);
    }
    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
