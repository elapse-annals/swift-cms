<?php

use App\Models\ArticleGroup;
use Illuminate\Database\Seeder;

class ArticleGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(ArticleGroup::class, 50)
            ->create();
    }
}
