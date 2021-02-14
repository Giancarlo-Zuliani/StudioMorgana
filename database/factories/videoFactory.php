<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Video;
use Faker\Generator as Faker;

$factory->define(Video::class, function (Faker $faker) {
    return [
        'title' => $faker -> word(),
        'description' => $faker -> sentence(),
        'link' => $faker -> word(),
        'img' => $faker -> name()
    ];
});
