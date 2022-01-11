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
            ],//1
            [
                'parent_id' => null,
                'name' => 'Geyimlər',
                'slug' => Str::slug('Geyimlər'),
                'description' => 'Geyimlər'.'- '.Str::random(120),
                'icon' => 'https://cdn-icons-png.flaticon.com/128/2922/2922824.png',
                'image' => 'https://i.insider.com/5ed95c393f7370198527eea3?width=700',
            ],//2
            [
                'parent_id' => null,
                'name' => 'Ev və Bağ',
                'slug' => Str::slug('Ev və Bağ'),
                'description' => 'Ev və Bağ'.'- '.Str::random(120),
                'icon' => 'https://cdn-icons-png.flaticon.com/128/2922/2922824.png',
                'image' => 'https://i.insider.com/5ed95c393f7370198527eea3?width=700',
            ],//3
            [
                'parent_id' => null,
                'name' => 'Heyvanlar',
                'slug' => Str::slug('Heyvanlar'),
                'description' => 'Heyvanlar'.'- '.Str::random(120),
                'icon' => 'https://cdn-icons-png.flaticon.com/128/2922/2922824.png',
                'image' => 'https://i.insider.com/5ed95c393f7370198527eea3?width=700',
            ] ,//4
            [
                'parent_id' => null,
                'name' => 'Hobbi və asudə',
                'slug' => Str::slug('Hobbi və asudə'),
                'description' => 'Hobbi və asudə'.'- '.Str::random(120),
                'icon' => 'https://cdn-icons-png.flaticon.com/128/2922/2922824.png',
                'image' => 'https://i.insider.com/5ed95c393f7370198527eea3?width=700',
            ] ,//5
            [
                'parent_id' => null,
                'name' => 'Uşaq aləmi',
                'slug' => Str::slug('Uşaq aləmi'),
                'description' => 'Uşaq aləmi'.'- '.Str::random(120),
                'icon' => 'https://cdn-icons-png.flaticon.com/128/2922/2922824.png',
                'image' => 'https://i.insider.com/5ed95c393f7370198527eea3?width=700',
            ],//6
            //subcategories
            //sub 2
            [
                'parent_id' => 2,
                'name' => 'Kişi Geyimləri',
                'slug' => Str::slug('Kişi Geyimləri'),
                'description' => 'Kişi Geyimləri'.'- '.Str::random(120),
                'icon' => '',
                'image' => '',
            ],//7
            [
                'parent_id' => 2,
                'name' => 'Qadın Geyimləri',
                'slug' => Str::slug('Qadın Geyimləri'),
                'description' => 'Qadın Geyimləri'.'- '.Str::random(120),
                'icon' => '',
                'image' => '',
            ],//8
            [
                'parent_id' => 2,
                'name' => 'Uşaq Geyimləri',
                'slug' => Str::slug('Uşaq Geyimləri'),
                'description' => 'Uşaq Geyimləri'.'- '.Str::random(120),
                'icon' => '',
                'image' => '',
            ],//9
            [
                'parent_id' => 2,
                'name' => 'Ayaqqabılar',
                'slug' => Str::slug('Ayaqqabılar'),
                'description' => 'Ayaqqabılar'.'- '.Str::random(120),
                'icon' => '',
                'image' => '',
            ],//10

            //sub 10
            [
                'parent_id' => 10,
                'name' => 'Kişi Ayaqqabıları',
                'slug' => Str::slug('Kişi Ayaqqabıları'),
                'description' => 'Kişi Ayaqqabıları'.'- '.Str::random(120),
                'icon' => '',
                'image' => '',
            ],//11
            [
                'parent_id' => 10,
                'name' => 'Qadın Ayaqqabıları',
                'slug' => Str::slug('Qadın Ayaqqabıları'),
                'description' => 'Qadın Ayaqqabıları'.'- '.Str::random(120),
                'icon' => '',
                'image' => '',
            ],//12
            [
                'parent_id' => 10,
                'name' => 'Uşaq Ayaqqabıları',
                'slug' => Str::slug('Uşaq Ayaqqabıları'),
                'description' => 'Uşaq Ayaqqabıları'.'- '.Str::random(120),
                'icon' => '',
                'image' => '',
            ],//13

            //sub 1
            [
                'parent_id' => 1,
                'name' => 'Mobil Telefon və Aksesuarları',
                'slug' => Str::slug('Mobil Telefon və Aksesuarları'),
                'description' => 'Mobil Telefon və Aksesuarları'.'- '.Str::random(120),
                'icon' => '',
                'image' => '',
            ], //14
            [
                'parent_id' => 1,
                'name' => 'Komputer və Aksesuarları',
                'slug' => Str::slug('Komputer və Aksesuarları'),
                'description' => 'Komputer və Aksesuarları'.'- '.Str::random(120),
                'icon' => '',
                'image' => '',
            ],//15
            [
                'parent_id' => 1,
                'name' => 'Məişət texnikası',
                'slug' => Str::slug('Məişət texnikası'),
                'description' => 'Məişət texnikası'.'- '.Str::random(120),
                'icon' => '',
                'image' => '',
            ],//16
            [
                'parent_id' => 1,
                'name' => 'Foto və Video Kameralar',
                'slug' => Str::slug('Foto və Video Kameralar'),
                'description' => 'Foto və Video Kameralar'.'- '.Str::random(120),
                'icon' => '',
                'image' => '',
            ],//17
            [
                'parent_id' => 1,
                'name' => 'Video və Audio',
                'slug' => Str::slug('Video və Audio'),
                'description' => 'Video və Audio'.'- '.Str::random(120),
                'icon' => '',
                'image' => '',
            ],//18

            //sub 16
            [
                'parent_id' => 16,
                'name' => 'İqlim Texnikası',
                'slug' => Str::slug('İqlim Texnikası'),
                'description' => 'İqlim Texnikası'.'- '.Str::random(120),
                'icon' => '',
                'image' => '',
            ],//19
            [
                'parent_id' => 16,
                'name' => 'Tozsoranlar',
                'slug' => Str::slug('Tozsoranlar'),
                'description' => 'Tozsoranlar'.'- '.Str::random(120),
                'icon' => '',
                'image' => '',
            ],//20
            [
                'parent_id' => 16,
                'name' => 'Paltaryuyan Maşınlar',
                'slug' => Str::slug('Paltaryuyan Maşınlar'),
                'description' => 'Paltaryuyan Maşınlar'.'- '.Str::random(120),
                'icon' => '',
                'image' => '',
            ],//21
            [
                'parent_id' => 16,
                'name' => 'Ütülər və Fenlər',
                'slug' => Str::slug('Ütülər və Fenlər'),
                'description' => 'Ütülər və Fenlər'.'- '.Str::random(120),
                'icon' => '',
                'image' => '',
            ],//22
            [
                'parent_id' => 16,
                'name' => 'Digər məişət texnikası',
                'slug' => Str::slug('Digər məişət texnikası'),
                'description' => 'Digər məişət texnikası'.'- '.Str::random(120),
                'icon' => '',
                'image' => '',
            ],//23

            //sub 19
            [
                'parent_id' => 19,
                'name' => 'Kondisionerlər',
                'slug' => Str::slug('Kondisionerlər'),
                'description' => 'Kondisionerlər'.'- '.Str::random(120),
                'icon' => '',
                'image' => '',
            ],//23
            [
                'parent_id' => 19,
                'name' => 'Ventilyatorlar',
                'slug' => Str::slug('Ventilyatorlar'),
                'description' => 'Ventilyatorlar'.'- '.Str::random(120),
                'icon' => '',
                'image' => '',
            ],//23
            [
                'parent_id' => 19,
                'name' => 'Hava Təmizləyicilər',
                'slug' => Str::slug('Hava Təmizləyicilər'),
                'description' => 'Hava Təmizləyicilər'.'- '.Str::random(120),
                'icon' => '',
                'image' => '',
            ],//23
            [
                'parent_id' => 19,
                'name' => 'İsidicilər',
                'slug' => Str::slug('İsidicilər'),
                'description' => 'İsidicilər'.'- '.Str::random(120),
                'icon' => '',
                'image' => '',
            ],//23
            [
                'parent_id' => 19,
                'name' => 'Qazanlar ,Su Qızdırıcıları',
                'slug' => Str::slug('Qazanlar ,Su Qızdırıcıları'),
                'description' => 'Qazanlar ,Su Qızdırıcıları'.'- '.Str::random(120),
                'icon' => '',
                'image' => '',
            ],//23

        ];
        DB::table('categories')->insert($categories);
    }
}
