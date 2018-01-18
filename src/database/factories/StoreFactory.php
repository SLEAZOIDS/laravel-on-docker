<?php

use Faker\Generator as Faker;

$factory->define(App\Store::class, function (Faker $faker) {
    $faker = \Faker\Factory::create('ja_JP');
    return [
        'name' => $faker->company,
        'tel' => $faker->phoneNumber,
        'postal_code' => $faker->postcode,
        'address' => $faker->prefecture . $faker->city . $faker->streetAddress,
        'access' => $faker->realText,
        'business_day_of_the_week' => $faker->numberBetween($min = 0, $max = 128),
        'business_time' => $faker->realText,
        'budget_of_day' => $faker->numberBetween($min = 1, $max = 1000) * 100,
        'budget_of_night' => $faker->numberBetween($min = 1, $max = 1000) * 100,
        'number_of_sheets' => $faker->numberBetween($min = 1, $max = 1000),
        'has_pricate_room' => $faker->numberBetween($min = 0, $max = 2),
        'can_smoking' => $faker->numberBetween($min = 0, $max = 2),
        'etc' => $faker->realText,
    ];
});
