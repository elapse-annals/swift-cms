<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Article;
use App\Models\ArticleGroup;
use Faker\Factory as Factory;


$factory->define(Article::class, function () {
    $faker = Factory::create('zh_CN');
    $operated_by = $faker->userName;
    return [
        //
        'title'=>$faker->word,
        'content'=>$faker->text,
        'group_id'=>function(){
            return \factory(ArticleGroup::class)->create()->id;
        },
        'created_by' => $operated_by,
        'updated_by' => $operated_by,
    ];
});
