<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        //
        'article_id'=>function () {
            return \factory(Article::class)->create()->id;
        },
        'tag_name' => $faker->word,
    ];
});
