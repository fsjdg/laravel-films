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
        $this->call(UsersSeeder::class);
        $this->call(CountriesSeeder::class);
        $this->call(FilmsSeeder::class);
        $this->call(GenresSeeder::class);
        $this->call(CommentsSeeder::class);
    }
}
