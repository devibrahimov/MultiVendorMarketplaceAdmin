<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Category::class;

    public function definition()
    {
        $letter =  $this->faker->randomLetter();
        return [
           'parent_id' => $this->faker->randomElement([Null,rand(1,30)]),
           'name' => $letter,
           'slug' => Str::slug($letter),
           'description' => $letter.' '.Str::random(120),
           'icon' => 'https://cdn-icons-png.flaticon.com/128/2922/2922824.png',
           'image' => 'https://i.insider.com/5ed95c393f7370198527eea3?width=700',
        ];
    }

}
