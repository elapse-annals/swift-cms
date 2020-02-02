<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ArticleGroup;
use Faker\Factory as Factory;

$factory->define(ArticleGroup::class, function () {
    $faker = Factory::create('zh_CN');
    $operated_by = $faker->userName;
    return [
        //
        'group_name' => $faker->word,
        'created_by' => $operated_by,
        'updated_by' => $operated_by,
    ];
});
