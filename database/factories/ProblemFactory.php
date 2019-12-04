<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Problem;
use Faker\Generator as Faker;

$factory->define(Problem::class, function (Faker $faker) {
	return [
		'name_pro' => $faker->sentence,
		'description' => $faker->sentence,
	];
});
