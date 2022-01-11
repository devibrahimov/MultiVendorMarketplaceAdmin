<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Shop;
use App\Models\User;
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
        $this->call(AdminSeed::class);
        User::factory(10)->create();
        $this->call(CategoriesSeed::class);
        //Shop::factory()->count(20)->create();
        //$this->call(ShopSeeder::class);

    }


}
