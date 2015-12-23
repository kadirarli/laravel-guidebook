<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PhoneTypesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create('tr_TR');

		foreach(range(1, 10) as $index)
		{
			PhoneType::create([
				'name' => $faker->name
			]);
		}
	}

}