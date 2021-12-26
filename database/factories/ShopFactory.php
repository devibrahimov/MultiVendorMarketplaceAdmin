<?php

namespace Database\Factories;

use App\Models\Shop;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class ShopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Shop::class;

    public function definition()
    {
        $data =  [
            'email'=> factory()->faker->unique()->safeEmail(),
            'shopname'=> factory()->faker->company(),
            'shopcategory'=> rand(0,10),
            'password'=> Hash::make(123456),
            'name'=> factory()->faker->firstName(),
            'surname'=> factory()->faker->lastName(),
            'number'=> '+99477'.rand(100,999).rand(10,99).rand(10,99),
            'adress'=> factory()->faker->address(),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ];
        Http::post(route('shopregister'),$data);
    }
}
