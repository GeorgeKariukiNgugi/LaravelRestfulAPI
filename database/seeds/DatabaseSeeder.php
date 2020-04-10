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
        // $this->call(UsersTableSeeder::class);
        factory('App\model\Product',50)->create();
        factory('App\model\Review',300)->create();
        factory('App\model\Cart',5)->create();
    }
}
