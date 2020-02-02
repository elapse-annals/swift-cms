<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Article;
use App\Models\ArticleGroup;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        //
        'title'=>$faker->word,
        'content'=>$faker->text,
        'group_id'=>function(){
            return \factory(ArticleGroup::class)->create()->id;
        }
    ];
});
