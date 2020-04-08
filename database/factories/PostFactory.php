<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

$factory->define(Post::class, function (Faker $faker) {

    $userIDs = DB::table('users')->pluck('id');

    return [
        'title' => Str::random(10),
        'content' => Str::random(10),
        'user_id' => $faker->randomElement($userIDs),
    ];
});
