<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoriesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'parent_id' => null,
                'name' => 'Elektronika',
                'slug' => Str::slug('Elektronika'),
                'description' => 'Elektronika'.'- '.Str::random(120),
                'icon' => 'https://cdn-icons-png.flaticon.com/128/2922/2922824.png',
                'image' => 'https://i.insider.com/5ed95c393f7370198527eea3?width=700',
            ],
            [
                'parent_id' => null,
                'name' => 'Geyimlər',
                'slug' => Str::slug('Geyimlər'),
                'description' => 'Geyimlər'.'- '.Str::random(120),
                'icon' => 'https://cdn-icons-png.flaticon.com/128/2922/2922824.png',
                'image' => 'https://i.insider.com/5ed95c393f7370198527eea3?width=700',
            ],
            [
                'parent_id' => null,
                'name' => 'Ev və Bağ',
                'slug' => Str::slug('Ev və Bağ'),
                'description' => 'Ev və Bağ'.'- '.Str::random(120),
                'icon' => 'https://cdn-icons-png.flaticon.com/128/2922/2922824.png',
                'image' => 'https://i.insider.com/5ed95c393f7370198527eea3?width=700',
            ],
            [
                'parent_id' => null,
                'name' => 'Heyvanlar',
                'slug' => Str::slug('Heyvanlar'),
                'description' => 'Heyvanlar'.'- '.Str::random(120),
                'icon' => 'https://cdn-icons-png.flaticon.com/128/2922/2922824.png',
                'image' => 'https://i.insider.com/5ed95c393f7370198527eea3?width=700',
            ] ,
            [
                'parent_id' => null,
                'name' => 'Hobbi və asudə',
                'slug' => Str::slug('Hobbi və asudə'),
                'description' => 'Hobbi və asudə'.'- '.Str::random(120),
                'icon' => 'https://cdn-icons-png.flaticon.com/128/2922/2922824.png',
                'image' => 'https://i.insider.com/5ed95c393f7370198527eea3?width=700',
            ] ,
            [
                'parent_id' => null,
                'name' => 'Uşaq aləmi',
                'slug' => Str::slug('Uşaq aləmi'),
                'description' => 'Uşaq aləmi'.'- '.Str::random(120),
                'icon' => 'https://cdn-icons-png.flaticon.com/128/2922/2922824.png',
                'image' => 'https://i.insider.com/5ed95c393f7370198527eea3?width=700',
            ],
            //subcategories
            [
                'parent_id' => 2,
                'name' => 'Kişi Geyimləri',
                'slug' => Str::slug('Kişi Geyimləri'),
                'description' => 'Kişi Geyimləri'.'- '.Str::random(120),
                'icon' => '',
                'image' => '',
            ],
            [
                'parent_id' => 2,
                'name' => 'Qadın Geyimləri',
                'slug' => Str::slug('Qadın Geyimləri'),
                'description' => 'Qadın Geyimləri'.'- '.Str::random(120),
                'icon' => '',
                'image' => '',
            ],
            [
                'parent_id' => 2,
                'name' => 'Uşaq Geyimləri',
                'slug' => Str::slug('Uşaq Geyimləri'),
                'description' => 'Uşaq Geyimləri'.'- '.Str::random(120),
                'icon' => '',
                'image' => '',
            ],
            [
                'parent_id' => 2,
                'name' => 'Ayaqqabılar',
                'slug' => Str::slug('Ayaqqabılar'),
                'description' => 'Ayaqqabılar'.'- '.Str::random(120),
                'icon' => '',
                'image' => '',
            ],

            [
                'parent_id' => 10,
                'name' => 'Kişi Ayaqqabıları',
                'slug' => Str::slug('Kişi Ayaqqabıları'),
                'description' => 'Kişi Ayaqqabıları'.'- '.Str::random(120),
                'icon' => '',
                'image' => '',
            ],
            [
                'parent_id' => 10,
                'name' => 'Qadın Ayaqqabıları',
                'slug' => Str::slug('Qadın Ayaqqabıları'),
                'description' => 'Qadın Ayaqqabıları'.'- '.Str::random(120),
                'icon' => '',
                'image' => '',
            ],
            [
                'parent_id' => 10,
                'name' => 'Uşaq Ayaqqabıları',
                'slug' => Str::slug('Uşaq Ayaqqabıları'),
                'description' => 'Uşaq Ayaqqabıları'.'- '.Str::random(120),
                'icon' => '',
                'image' => '',
            ],


        ];
        DB::table('categories')->insert($categories);
    }
}
