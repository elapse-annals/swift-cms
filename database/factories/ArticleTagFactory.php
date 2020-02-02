<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Article;
use App\Models\ArticleTag;
use Faker\Factory as Factory;

$factory->define(ArticleTag::class, function () {
    $faker = Factory::create('zh_CN');
    $operated_by = $faker->userName;
    return [
        //
        'article_id'=>function () {
            return \factory(Article::class)->create()->id;
        },
        'tag_name' => $faker->word,
        'created_by' => $operated_by,
        'updated_by' => $operated_by,
    ];
});
