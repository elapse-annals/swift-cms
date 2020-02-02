<?php

use App\Models\ArticleTag;
use Illuminate\Database\Seeder;

class ArticleTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(ArticleTag::class, 50)
            ->create();
    }
}
