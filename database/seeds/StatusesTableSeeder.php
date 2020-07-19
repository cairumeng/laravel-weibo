<?php

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{
    public function run(Faker\Generator $faker)
    {
        $user_ids = [1, 2, 3];
        $statuses = factory(Status::class)->times(100)->make()->each(
            function ($status) use ($faker, $user_ids) {
                $status->user_id = $faker->randomElement($user_ids);
            }
        );
        Status::insert($statuses->toArray());
    }
}
