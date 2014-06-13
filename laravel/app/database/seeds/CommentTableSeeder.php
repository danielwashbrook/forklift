<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CommentTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
echo "1";
		foreach(range(1, 10) as $index)
		{
			Comment::create([
        'author' => $faker->name,
        'text' => $faker->sentence(),
			]);
		}
	}

}