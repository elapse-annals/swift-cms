<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//         $this->call(UsersTableSeeder::class);
         $this->call(TmplsTableSeeder::class);
         $this->call(LanguagesTableSeeder::class);
         $this->call(ArticleGroupsTableSeeder::class);
         $this->call(ArticleTagsTableSeeder::class);
         $this->call(ArticlesTableSeeder::class);
    }
}
